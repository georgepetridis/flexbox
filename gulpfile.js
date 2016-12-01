var gulp = require( 'gulp' );
var browserSync = require( 'browser-sync' ).create();
var sass = require( 'gulp-sass' );
var autoprefixer = require( 'gulp-autoprefixer' );

// Static Server + watching scss/html files
gulp.task( 'serve', [ 'sass' ], function () {

  browserSync.init( {
    proxy: 'flexbox.dev',
    browser: 'firefox'
  } );

  gulp.watch( "scss/*.scss", [ 'sass' ] );
  gulp.watch( "*.php" ).on( 'change', browserSync.reload );
} );

// Compile sass into CSS & auto-inject into browsers
gulp.task( 'sass', function () {
  return gulp.src( "scss/*.scss" )
    .pipe( sass() ).on( 'error', sass.logError )
    .pipe( autoprefixer() )
    .pipe( gulp.dest( "css" ) )
    .pipe( browserSync.stream() );
} );

gulp.task( 'default', [ 'serve' ] );

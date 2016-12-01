<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flexbox</title>
    <link rel="stylesheet" href="/css/main.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="scroll-menu">
      <div class="container">
        <div class="group">
          <div class="item">
            <a href="#">FR</a>
          </div>
        </div>
        <div class="group">
          <div class="item">
            <a href="#">Menu</a>
          </div>
        </div>
      </div>
    </div>
    <header class="header full-width">
      <div class="layout-width">
        <div class="header-top">
            <div class="container">
              <div class="group">
                <div class="item">
                  <a href="#">FR</a>
                </div>
              </div>
              <div class="group">
                <div class="item">item1</div>
                <div class="item">item2</div>
                <div class="item">item3</div>
              </div>
            </div>
          </div>
        <div class="header-bottom">
            <div class="container">
              <div class="group">
                <div class="logo item">
                  <?php include 'images/logo-viviaweb.svg'; ?>
                </div>
                <div class="item">
                  <h1>Flexbox Layout</h1>
                </div>
              </div>
              <div class="group">
                <div class="item">
                  <a class="button" href="#">Instant Quote</a>
                </div>
              </div>
            </div>
          </div>
      </div><!-- /.layout-width -->
    </header><!-- /.full-width -->
    <div class="noise"></div>
    <main class="main full-width">
      <div class="layout-width">
        <div class="container">
          <div class="group">
            <div class="item">
              <?php include 'images/logo.svg'; ?>
            </div>
            <div class="item">
              <h2>Header 2 We Create</h2>
            </div>
            <div class="item">
              <p>
                We are professionals that build website applications in the most efficient, reliable, and cost-effective way. We take care of the technology so you can focus on business.
              </p>
            </div>
            <div class="item">
              <a class="button" href="#">Our Projects</a>
            </div>
          </div>
          <div class="group">
            <div class="item">
              <?php include 'images/logo.svg'; ?>
            </div>
            <div class="item">
              <h2>Header 2 We Create</h2>
            </div>
            <div class="item">
              <p>
                We are professionals that build website applications in the most efficient, reliable, and cost-effective way. We take care of the technology so you can focus on business.
              </p>
            </div>
            <div class="item">
              <a class="button" href="#">Our Projects</a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer full-width">
      <div class="layout-width">
        <div class="container">
          <div class="group">
            <div class="item">
              copyright 2016 Flexbox
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
    (function($) {
      $(document).ready(function(){
        $(window).scroll(function(){
          if ($(this).scrollTop() > 300) {
            $('.scroll-menu').fadeIn(500);
          } else {
            $('.scroll-menu').fadeOut(500);
          }
        });
      });
    })(jQuery);
</script>
</html>

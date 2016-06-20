<?php
require 'header.php';
?>
    <section id="feature-home" class="full-screen relative text-center text-white bg-black no-select">
      <div class="absolute-full z-index-0">
        <div class="absolute-full z-index-1"></div>
        <canvas class="node-pointer absolute-full z-index-0"></canvas>
      </div>
      <!-- .absolute-full.z-index-0 -->
      <div class="bottom-25 absolute-width">
        <div class="container-fluid text-center z-index-2 relative">
          <h1 class="typed text-lite">Hi...! we will launch our new home,</h1>
          <h1 class="typed text-lite">Home for our code &amp; provide you for online services.</h1>
          <h1>&nbsp;</h1>
          <p class="no-visible" id="button-explores">
            <a href="#our-services" class="btn btn-white letter-spacing-1 btn-lg text-lite border-3">EXPLORE WHAT WE DO</a>
          </p>
        </div>
        <!-- .container-fluid.text-centerz-index-2.relative -->
      </div>
      <!-- .bottom-25.absolute-full.z-index-0 -->
    </section>
    <!-- #feature-home -->
    <section id="our-services" class="full-screen relative text-center bg-white">
      <div class="bg-white-gray text-lite">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="info-text margin-top-5 padding-10 margin-bottom-5 text-lite">
                Bring <span class="label label-info">PHP</span> Code To The Next Level
              </h1>
            </div>
            <!-- .col-md-12 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .bg-white-gray.text-lite -->
      <div class="container">
        <div class="row margin-bottom-10vh margin-top-10vh">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3 col-sm-6 margin-bottom-15">
                <div class="container-fluid">
                  <div class="size-140-rounded bg-pantone-blue text-white">
                    <span class="fa fa-wordpress"></span>
                  </div>
                </div>
              </div>
              <!-- .col-md-3.col-sm-6.margin-bottom-15 -->
              <div class="col-md-3 col-sm-6 margin-bottom-15">
                <div class="container-fluid">
                  <div class="size-140-rounded bg-darkcyan text-white">
                    <span class="fa fa-code"></span>
                  </div>
                </div>
                <!-- .container-fluid -->
              </div>
              <!-- .col-md-3.col-sm-6.margin-bottom-15 -->
              <div class="col-md-3 col-sm-6 margin-bottom-15">
                <div class="container-fluid">
                  <div class="size-140-rounded bg-orange text-white">
                    <span class="fa fa-html5"></span>
                  </div>
                </div>
                <!-- .container-fluid -->
              </div>
              <!-- .col-md-3.col-sm-6.margin-bottom-15 -->
              <div class="col-md-3 col-sm-6 margin-bottom-15">
                <div class="container-fluid">
                  <div class="size-140-rounded bg-crimson text-white">
                    <span class="fa fa-briefcase"></span>
                  </div>
                </div>
                <!-- .container-fluid -->
              </div>
            </div>
            <!-- .row -->
          </div>
          <!-- .col-md-12 -->
        </div>
        <!-- .row.margin-bottom-10vh.margin-top-10vh -->
      </div>
      <!-- .container -->
    </section>
    <!-- #our-services -->
    <section id="subscribe-section" class="full-screen relative bg-white text-white bg-darkcyan">
    </section>
    <footer id="footer-handle" class="text-standard relative">
      <div class="bg-white-gray padding-20">
        <div class="row">
          <div class="col-md-12" id="partner">
            <div class="container">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="copyright margin-top-20 margin-bottom-20">&copy; <?php echo date('Y');?> Pentagonal Development.</div>
          </div>
          <div class="col-md-5">
            <div id="icon-social">
              <a class="social-icons img-circle text-white social-facebook" href="https://www.facebook.com/pentagonaldevelopment" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a class="social-icons img-circle text-white social-twitter" href="https://twitter.com/pentagonal" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="social-icons img-circle text-white social-github" href="https://github.com/pentagonal" target="_blank">
                <i class="fa fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- #subscribe -->
<?php
require 'footer.php';
<!DOCTYPE html>

<html class="js">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>TrackMyMeds - Overview</title>
  <meta name="description" content="TrackMyMeds">
  <link rel="icon" type="image/png" href="assets/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="shortcut icon" href="assets/favicons/favicon.ico">
  <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" id="styles-css" href="css/styles.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/hover-min.css">
  <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="js/modernizr.min.js"></script>
  <script type="text/javascript" src="js/bundle.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script>
  if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
    backToTop = function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $('#back-to-top').addClass('show');
      } else {
        $('#back-to-top').removeClass('show');
      }
    };
    backToTop();
    $(window).on('scroll', function () {
      backToTop();
    });
    $('#back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
    });
  }
  </script>

  <script src="js/jssor.slider-26.2.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
      jssor_1_slider_init = function() {

          var jssor_1_SlideoTransitions = [
            [{b:-1,d:1,o:-0.7}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
          ];

          var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
              $Class: $JssorCaptionSlideo$,
              $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
      };
  </script>

</head>

<body class="home page-template-default page page-id-2 loaded">

  <div id="scroll-to-top"></div>

  <header id="site-header">

    <a href="" class="tmm-glyph">
      <span class="tmm-glyph-glyph">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 394.36 394.37"><defs><style>.cls-1,.cls-3{fill:#006837;}.cls-2,.cls-5{fill:#fff;}.cls-3,.cls-5{isolation:isolate;font-family:HelveticaNeue-CondensedBlack, Helvetica Neue;}.cls-3{font-size:172px;}.cls-4{fill:none;stroke:#006837;stroke-miterlimit:10;stroke-width:20px;}.cls-5{font-size:172.13px;}</style></defs><title>logo-retouched</title><path class="cls-1" d="M197.18,9.35v375c-102.68,0-186-82.68-187.16-185.09,0-.7,0-1.39,0-2.09v-.33c0-.81,0-1.61,0-2.42C11.13,92,94.5,9.35,197.18,9.35Z"/><path class="cls-2" d="M197.18,9.68v375c102.68,0,186-82.68,187.16-185.09,0-.7,0-1.39,0-2.09v-.33c0-.81,0-1.61,0-2.42C383.23,92.35,299.86,9.68,197.18,9.68Z"/><text class="cls-3" transform="translate(216.12 257.47)">M</text><path class="cls-4" d="M384.36,196.86v.33c0,.7,0,1.39,0,2.09-1.11,102.41-84.48,185.09-187.16,185.09S11.13,301.69,10,199.28c0-.7,0-1.39,0-2.09v-.33c0-.81,0-1.61,0-2.42C11.49,92.33,94.72,10,197.18,10S382.87,92.33,384.34,194.44C384.35,195.25,384.36,196.05,384.36,196.86Z"/><text class="cls-5" transform="translate(69.64 258.22)">T</text></svg>
      </span>
      <span class=tmm-glyph-name>
        <h1 class="tmm-glyph-name">TrackMyMeds</h1>
      </span>
    </a>

    <nav id="primary-navigation">


      <div id="primary-navigation-menu">
        <div class="inline-v-align">
          <h3 class="menu-title">Navigation</h3>
          <div class="menu-primary-container">
            <ul id="menu-primary" class="menu">
              <li id="menu-item-676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-676"><a class="hvr-underline-from-center" href="">Overview</a></li>
              <li role="separator" class="divider"></li>
              <li id="menu-item-679" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-679"><a class="hvr-underline-from-center" href="www.trackmymeds.com.au/login">Login</a></li>
              <li id="menu-item-1152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1152"><a class="hvr-underline-from-center" href="www.trackmymeds.com.au/signup">Sign Up</a></li>
            </ul></div>
          </div>
        </div>

        <a href="javascript:void(0)" class="hamburger toggle-mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>

      </nav>

    </header>

    <div class="panel panel--landing scene" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">

      <div class="hero-video-container">
        <video id="heroVideo" autoplay="" loop="" controls="" data-video="0">
          <source src="assets/video/video_v2.mp4" type="video/mp4">
          </video>
        </div>

        <div id="main-content">
          <h1 class="site-title">
            <img src="images/tmm-logo.svg">
            <span class="primary-heading-text">TrackMyMeds</span>
            <span class="sub-heading">Medication Tracker and Reminder</span>
            <span class="sub-heading">Mobile &amp; Web Application</span>
          </h1>
          <a href="#section1" class="animate-when-seen button button--small seen">Learn More</a>
          <a href="#section4" class="animate-when-seen button button--small get-tmm-now seen">Get TMM Now</a>
        </div>



        <div class="scroll-prompt"></div>
      </div>

      <div id="section1" class="section">
      </div>

      <div class="panel panel--what-is-tmm">
        <img class="header-icons" src="images/tmm-icon.png" alt="tmm-icon.png">
        <h2>What is TrackMyMeds?</h2>
        <div class="panel-bridge"></div>
        <ul class="what-is-tmm">
          <h3>An Australian medication tracking and reminder application advising when it is time to take medication</h3>
          <!-- <li></li>
          <li>Search and select from a comprehensive listing of all medicines registered in the Australian Medicines Terminology (AMT)</li>
          <li>Access to originator and generic brands of medicines commonly used in Australia</li>
          <li>A monthly application release containing up-to-date medicine terminology to the AMT database</li>
          <li></li> -->
        </ul>


        <div class="section-row-users">

          <section class="features">
            <img class="feature-icons" src="images/feature-search.svg" title="Desktop Web Application" alt="feature-icons">
            <h3>Search</h3>
            <p class="users-p">TMM connects you with patient users helping you manage your patients:</p>
            <ul class="users-ul">
              <li><i class="fa fa-check-square-o "></i> Search for Medication Info</li>
            </ul>
          </section>

          <section class="features">
            <img class="feature-icons" src="images/feature-track.svg" title="Mobile Android Application" alt="feature-icons">
            <h3>Track</h3>
            <p class="users-p">TMM connects you with patient users helping you manage your patients:</p>
            <ul class="users-ul">
              <li><i class="fa fa-check-square-o "></i> Search for Medication Info</li>
            </ul>
          </section>

          <section class="features">
            <img class="feature-icons" src="images/feature-reminder.svg" title="Mobile iOS Application" alt="feature-icons">
            <h3>Remind</h3>
            <p class="users-p">TMM connects you with patient users helping you manage your patients:</p>
            <ul class="users-ul">
              <li><i class="fa fa-check-square-o "></i> Search for Medication Info</li>
            </ul>
          </section>

        </div>

      </div>



      <div class="image-section-1">
        <div class="container-fluid">
          <div class="row">
            <div class="image-section-1-container">
              <h2 class="c-bw-d13 mb-6">Easy to use</h2>
              <p class="small fwm c-bw-d13">A simple but effective solution helping you manage your medications</p></div>
            </div>
          </div>
        </div>


      <div class="panel panel--what-is-tmm">
        <img class="header-icons" src="images/tmm-icon.png" alt="tmm-icon.png">
        <h2>Who is TrackMyMeds for?</h2>
        <div class="panel-bridge"></div>
        <ul class="what-is-tmm">
          <h3>Made for Patients using pharmaceutical drugs, and Carers attending to the wellbeing of multiple Patients</h3>
        </ul>

        <div class="section-row-users">
          <section class="patient">
            <img class="user-icons" src="images/patient.svg" alt="tmm-icon.svg">
            <h3>Patients</h3>
            <p class="users-p">TMM helps you keep track of your medication:</p>
            <ul class="users-ul">
              <li><i class="fa fa-check-square-o "></i> Search for Medication</li>
              <li><i class="fa fa-check-square-o "></i> Add Medication</li>
              <li><i class="fa fa-check-square-o "></i> Set &amp Receive Reminders</li>
              <li><i class="fa fa-check-square-o "></i> View Medication History</li>
            </ul>
          </section>

          <section class="nurse">
            <img class="user-icons" src="images/nurse.svg" alt="tmm-icon.svg">
            <h3>Nurses</h3>
            <p class="users-p">TMM connects you with patient users helping you manage your patients:</p>
            <ul class="users-ul">
              <li><i class="fa fa-check-square-o "></i> Search for Medication Info</li>
              <li><i class="fa fa-check-square-o "></i> Track Multiple Patients</li>
              <li><i class="fa fa-check-square-o "></i> Remind Patients</li>
              <li><i class="fa fa-check-square-o "></i> View Patient Medication History</li>
              <li><i class="fa fa-check-square-o "></i> Write Personal Notes</li>
            </ul>
          </section>
        </div>

      </div>

      <div id="section2" class="section">
      </div>







      <div class="panel panel--tmm-users">

      </div>




      <div id="">





            <div class="image-section-2">
              <div class="container-fluid">
                <div class="row">
                  <div class="image-section-2-container">
                    <h2 class="c-bw-d13 mb-6">Suitable for short and long term use</h2>
                    </div>
                  </div>
                </div>
              </div>



              <div id="section3" class="section">
              </div>

              <div class="panel panel--what-is-tmm">
                <img class="header-icons" src="images/tmm-icon.png" alt="tmm-icon.png">
                <h2>At Home or on the Go</h2>
                <div class="panel-bridge"></div>
                <ul class="what-is-tmm">
                  <h3>Made accessible on home computers via Web App and smartphone devices using Mobile App</h3>
                </ul>

                <img class="desktop-img" src="images/desktop-and-mobile-shadow.png" alt="tmm-icon.png">

                <img class="platform-icons" src="images/platform-web.svg" title="Desktop Web Application" alt="platform-icons">
                <img class="platform-icons" src="images/platform-ios.svg" title="Mobile iOS Application" alt="platform-icons">
                <img class="platform-icons" src="images/platform-android.svg" title="Mobile Android Application" alt="platform-icons">


                <div class="image-section-4">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="image-section-4-container"></div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-div">

                    <ul>
                      <li>
                        <input type="checkbox" checked>
                        <i></i>
                        <h4>About TMM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                      <li>
                        <input type="checkbox" checked>
                        <i></i>
                        <h4>How it Works</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                      <li>
                        <input type="checkbox" checked>
                        <i></i>
                        <h4>Features</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                    </ul>

                  </div>

                  <!-- <div id="jssor_1"> -->
                      <!-- Loading Screen -->
                      <!-- <div class="jssorl-009-spin">
                          <img src="images/slider-img/spin.svg">
                      </div>
                      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                          <div>
                              <img data-u="image" src="images/slider-img/001.jpg">
                          </div>
                          <div>
                              <img data-u="image" src="images/slider-img/002.jpg">
                          </div>
                          <div>
                              <img data-u="image" src="images/slider-img/003.jpg">
                          </div>
                      </div> -->
                      <!-- Bullet Navigator -->
                      <!-- <div data-u="navigator" class="jssorb032" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                          <div data-u="prototype" class="i">
                              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                  <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                              </svg>
                          </div>
                      </div> -->
                      <!-- Arrow Navigator -->
                      <!-- <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                              <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                          </svg>
                      </div>
                      <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                              <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                          </svg>
                      </div>
                  </div> -->



                </div>


                <div id="jssor_1" style="position:relative;top:0px;left:0px;height:300px;overflow:hidden;visibility:hidden; box-shadow: 0 0 100px 1px rgba(0, 0, 0, .5);">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/slider-img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="images/slider-img/001.jpg" />

                            </div>
                        <div>
                            <img data-u="image" src="images/slider-img/002.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="images/slider-img/003.jpg" />

                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>

                <div class="panel panel--discover-tmm">
                  <h2>Discover</h2>
                  <div class="panel-bridge"></div>

                  <div class='embed-container'>
                    <iframe src='http://www.youtube.com/embed/c0FccjWRc74?rel=0?ecver=1' frameborder='0' allowfullscreen></iframe>
                  </div>

                  <div class="sponsors">
                    <a href="http://www.qut.edu.au/" target="_blank" class="sponsor sponsor-qut">QUT<img src="images/qut_logo_full.png"></a>
                    <a href="http://www.digitalhealth.gov.au/" target="_blank" class="sponsor sponsor-qut">Australian Digital Health Agency<img src="images/digital-health.png"></a>
                  </div>

                </div>

                <div id="section4" class="section">
                </div>

                <div class="panel-get-tmm panel--get-tmm">
                  <h2>Get TrackMyMeds Now</h2>
                  <div class="panel-bridge"></div>
                  <h3>Download the app for iOS and Android platforms</h3>

                  <!-- <img class="tmm-screenshot" src="images/tmm-screenshot1.png"> -->


                  <!--<

                  div class="flexslider">
                  <ul class="slides">
                  <li data-thumb="slide1-thumb.jpg">
                  <img src="images/tmm-screen1.png" />
                </li>
                <li data-thumb="slide2-thumb.jpg">
                <img src="images/image5.jpg" />
              </li>
              <li data-thumb="slide3-thumb.jpg">
              <img src="images/image5.jpg" />
            </li>
            <li data-thumb="slide4-thumb.jpg">
            <img src="images/image5.jpg" />
          </li>
        </ul>
      </div>

      <script>$(window).load(function() {
      $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });</script>

-->

<div class="get-tmm-buttons">
  <div class="get-tmm-button-container">
    <a href="https://itunes.apple.com/au/app/medisafe-pill-reminder-rx-medicine-tracker/id573916946?mt=8" target="_blank" class="download-button">App Store<img src="images/app-store.svg"></a>
  </div>
  <div class="get-tmm-button-container">
    <a href="https://play.google.com/store/apps/details?id=com.medisafe.android.client&hl=en" target="_blank" class="download-button">Google Play<img src="images/google-play.svg"></a>
  </div>
</div>




<div class="get-tmm-screen">

  <img class="tmm-screenshot float" src="images/time-for-meds.png">
</div>

</div>

<footer id="site-footer">

  <a href="mailto:info@trackmymeds.com.au" class="fancy-link">info@trackmymeds.com.au</a>

  <div class="socialmedia">
    <div class="social-media-container">
      <a href="https://www.facebook.com/trackmymeds/" target="_blank"><span>Facebook</span><i class="icon-facebook2"></i></a>
    </div>
    <div class="social-media-container">
      <a href="https://www.instagram.com/trackmymeds/" target="_blank"><span>Instagram</span><i class="icon-instagram"></i></a>
    </div>
    <div class="social-media-container">
      <a href="https://www.twitter.com/trackmymeds/" target="_blank"><span>Twitter</span><i class="icon-twitter"></i></a>
    </div>
    <div class="social-media-container">
      <a href="https://www.youtube.com/channel/UCUtZ5nKW3GcktcE8xP0dKhw" target="_blank"><span>YouTube</span><i class="icon-youtube"></i></a>
    </div>
  </div>

  <div class="copyright">
    <span>&copy; 2017 TrackMyMeds</span>
  </div>






</footer>

<a href="#scroll-to-top" id="back-to-top" title="Back to top"><i class="fa fa-chevron-up"></i></a>

<script>
if ($('#back-to-top').length) {
  var scrollTrigger = 100, // px
  backToTop = function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > scrollTrigger) {
      $('#back-to-top').addClass('show');
    } else {
      $('#back-to-top').removeClass('show');
    }
  };
  backToTop();
  $(window).on('scroll', function () {
    backToTop();
  });
  $('#back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
      scrollTop: 0
    }, 700);
  });
}
</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>

<script>


// Smooth Scrolling

// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
</script>

<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->


</body>
</html>

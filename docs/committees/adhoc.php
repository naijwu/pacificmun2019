<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128358180-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-128358180-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&mdash;&mdash;&mdash;</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../parallax.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Poppins:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <body>
      <div id="navOverlay" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="close" onclick="closeNav()">
          <svg height="30" width="30">
            <line x1="0" y1="0" x2="25" y2="25" style="stroke:#FFF; stroke-width:3" />
            <line x1="25" y1="0" x2="0" y2="25" style="stroke:#FFF; stroke-width:3" />
          </svg>
        </a>

        <div class="overlay-top">
          Dare To Speak
        </div>
        <div class="overlay-left">
          PacificMUN 2019
        </div>
        <div class="overlay-right">
          February 22 &mdash; 24
        </div>
        <div class="overlay-bottom">
          <a href="https://www.facebook.com/PacificModelUN/" target="_blank" class="hover-underline">Facebook</a> | <a href="http://instagram.com/pacificmun2019" target="_blank" class="hover-underline">Instagram</a>
        </div>

        <div class="overlay-middlealign" id="overlaycontent">

          <!-- Overlay content -->
          <div class="overlay-content">
            <a class="hover-underline onlyonmobie" href="/">Home</a>
            <a class="hover-underline" href="../about.php">About Us</a>
            <a class="hover-underline" href="../team.php">Our Team</a>
            <a class="hover-underline" href="../committees.php">Committees</a>
            <a class="hover-underline" href="../conference.php">Conference</a>
            <a class="hover-underline" href="../registration.php">Registration</a>
            <a class="hover-underline" href="../outreach/">Resources</a> <!-- temporary until resources page -->
            <!-- <a class="hover-underline" href="../resources.php">Resources</a> -->
          </div>
          <div class="right" id="overlaycontent">
            <a href="../index.php">
              <img src="../logo.svg" id="ovlimg" alt="">
            </a>
          </div>
          <script type="text/javascript">
            (function() {
              // Init
              var container = document.getElementById("overlaycontent"),
                inner = document.getElementById("ovlimg");

              // Mouse
              var mouse = {
                _x: 0,
                _y: 0,
                x: 0,
                y: 0,
                updatePosition: function(event) {
                  var e = event || window.event;
                  this.x = e.clientX - this._x;
                  this.y = (e.clientY - this._y) * -1;
                },
                setOrigin: function(e) {
                  this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
                  this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
                },
                show: function() {
                  return "(" + this.x + ", " + this.y + ")";
                }
              };

              // Track the mouse position relative to the center of the container.
              mouse.setOrigin(container);

              //-----------------------------------------

              var counter = 0;
              var updateRate = 10;
              var isTimeToUpdate = function() {
                return counter++ % updateRate === 0;
              };

              //-----------------------------------------

              var onMouseEnterHandler = function(event) {
                update(event);
              };

              var onMouseLeaveHandler = function() {
                inner.style = "";
              };

              var onMouseMoveHandler = function(event) {
                if (isTimeToUpdate()) {
                  update(event);
                }
              };

              //-----------------------------------------

              var update = function(event) {
                mouse.updatePosition(event);
                updateTransformStyle(
                  (mouse.y / inner.offsetHeight / 2).toFixed(2),
                  (mouse.x / inner.offsetWidth / 2).toFixed(2)
                );
              };

              var updateTransformStyle = function(x, y) {
                var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
                inner.style.transform = style;
                inner.style.webkitTransform = style;
                inner.style.mozTransform = style;
                inner.style.msTransform = style;
                inner.style.oTransform = style;
              };

              //-----------------------------------------

              container.onmouseenter = onMouseEnterHandler;
              container.onmouseleave = onMouseLeaveHandler;
              container.onmousemove = onMouseMoveHandler;
            })();
          </script>
          <style media="screen">
            /* ADHOC STYLES */

            #adhoc {
            background-color:black;
            height:100vh;
            width:100%;
            }

            .adhoc-inner {
            height:100%;
            width:100%;
            display:flex;
            align-items:center;
            }

            .glitch {
            color: white;
            font-size: 100px;
            position: relative;
            height:120px;
            width:auto;
            margin: 0 auto;
            font-family:"Thin", sans-serif;
            user-select:none;
            }

            @keyframes noise-anim {
            0% {
              clip: rect(55px, 9999px, 22px, 0);
            }
            5% {
              clip: rect(23px, 9999px, 62px, 0);
            }
            10% {
              clip: rect(29px, 9999px, 61px, 0);
            }
            15% {
              clip: rect(14px, 9999px, 69px, 0);
            }
            20% {
              clip: rect(13px, 9999px, 6px, 0);
            }
            25% {
              clip: rect(54px, 9999px, 9px, 0);
            }
            30% {
              clip: rect(22px, 9999px, 50px, 0);
            }
            35% {
              clip: rect(25px, 9999px, 21px, 0);
            }
            40% {
              clip: rect(52px, 9999px, 68px, 0);
            }
            45% {
              clip: rect(97px, 9999px, 45px, 0);
            }
            50% {
              clip: rect(91px, 9999px, 36px, 0);
            }
            55% {
              clip: rect(61px, 9999px, 80px, 0);
            }
            60% {
              clip: rect(50px, 9999px, 24px, 0);
            }
            65% {
              clip: rect(92px, 9999px, 2px, 0);
            }
            70% {
              clip: rect(54px, 9999px, 88px, 0);
            }
            75% {
              clip: rect(38px, 9999px, 6px, 0);
            }
            80% {
              clip: rect(8px, 9999px, 6px, 0);
            }
            85% {
              clip: rect(87px, 9999px, 73px, 0);
            }
            90% {
              clip: rect(61px, 9999px, 5px, 0);
            }
            95% {
              clip: rect(2px, 9999px, 6px, 0);
            }
            100% {
              clip: rect(58px, 9999px, 45px, 0);
            }
            }
            .glitch:after {
            content: attr(data-text);
            position: absolute;
            left: 2px;
            text-shadow: -1px 0 red;
            top: 0;
            color: white;
            background: rgba(0,0,0,1);
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim 2s infinite linear alternate-reverse;
            }

            @keyframes noise-anim-2 {
            0% {
              clip: rect(10px, 9999px, 58px, 0);
            }
            5% {
              clip: rect(29px, 9999px, 71px, 0);
            }
            10% {
              clip: rect(6px, 9999px, 13px, 0);
            }
            15% {
              clip: rect(9px, 9999px, 90px, 0);
            }
            20% {
              clip: rect(10px, 9999px, 28px, 0);
            }
            25% {
              clip: rect(82px, 9999px, 94px, 0);
            }
            30% {
              clip: rect(14px, 9999px, 37px, 0);
            }
            35% {
              clip: rect(83px, 9999px, 89px, 0);
            }
            40% {
              clip: rect(97px, 9999px, 32px, 0);
            }
            45% {
              clip: rect(18px, 9999px, 84px, 0);
            }
            50% {
              clip: rect(79px, 9999px, 84px, 0);
            }
            55% {
              clip: rect(55px, 9999px, 41px, 0);
            }
            60% {
              clip: rect(63px, 9999px, 10px, 0);
            }
            65% {
              clip: rect(26px, 9999px, 92px, 0);
            }
            70% {
              clip: rect(8px, 9999px, 59px, 0);
            }
            75% {
              clip: rect(88px, 9999px, 84px, 0);
            }
            80% {
              clip: rect(19px, 9999px, 51px, 0);
            }
            85% {
              clip: rect(95px, 9999px, 99px, 0);
            }
            90% {
              clip: rect(45px, 9999px, 62px, 0);
            }
            95% {
              clip: rect(42px, 9999px, 58px, 0);
            }
            100% {
              clip: rect(17px, 9999px, 67px, 0);
            }
            }
            .glitch:before {
            content: attr(data-text);
            position: absolute;
            left: -2px;
            text-shadow: 1px 0 blue;
            top: 0;
            color: white;
            background: rgba(0,0,0,1);
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim-2 3s infinite linear alternate-reverse;
            }
          </style>
        </div>

        <div id="overlay-background">
          <div id="overlay-bg-default"></div>
        </div>
      </div>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

        <header>
          <div class="bars" onclick="openNav();">
            <div class="bar1"></div>
            <div class="bar2"></div>
          </div>
          <img class="logo" src="../logo.svg" alt="logo" />
        </header>

        <main id="barloader">
          <!--
          <div class="logocontainer">
            <img src="../logo.svg" alt="">
          </div>
        -->
          <div class="barcontainer">
            <h2>Loading</h2>
            <div id="bar">
              <div id="progress">

              </div>
            </div>
          </div>
          <div class="landing committeepage" style="background:black;">
            <div id="adhoc">
              <div class="adhoc-inner">
                <img src="adhoc.gif" alt="">
                <div class="glitch" data-text="AD HOC">
                  AD HOC
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            var x = document.getElementById("progress");
            // Code for Chrome, Safari and Opera
            x.addEventListener("webkitAnimationEnd", myEndFunction);
            // Standard syntax
            x.addEventListener("animationend", myEndFunction);

            function myEndFunction() {
              $("main *").css("display", "none");
              $("#navOverlay .close").css("display", "none");
              window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
            }
          </script>
        </main>

      <script>

        /* Open when someone clicks on the span element */
        function openNav() {
          $("body").addClass("navOpen");
          $("#navOverlay").fadeIn("slow");

          $(".close svg").addClass("fadeIn");

          $(".overlay-content").removeClass("fadeOut");
          $(".overlay-content a").addClass("fadeIn");

          $(".overlay-top").removeClass("fadeOut");
          $(".overlay-bottom").removeClass("fadeOut");

          $(".overlay-left").removeClass("fadeOutLeft");
          $(".overlay-right").removeClass("fadeOutRight");

          $(".overlay-top").addClass("fadeIn");
          $(".overlay-bottom").addClass("fadeIn");

          $(".overlay-left").addClass("fadeInLeft");
          $(".overlay-right").addClass("fadeInRight");
        }

        /* Close when someone clicks on the "x" symbol inside the overlay */
        function closeNav() {
          $("body").removeClass("navOpen");
          $("#navOverlay").fadeOut("slow");

          $(".close svg").removeClass("fadeIn");

          $(".overlay-content a").removeClass("fadeIn");
          $(".overlay-content").addClass("fadeOut");

          $(".overlay-top").removeClass("fadeIn");
          $(".overlay-bottom").removeClass("fadeIn");

          $(".overlay-left").removeClass("fadeInLeft");
          $(".overlay-right").removeClass("fadeInRight");

          $(".overlay-top").addClass("fadeOut");
          $(".overlay-bottom").addClass("fadeOut");

          $(".overlay-left").addClass("fadeOutLeft");
          $(".overlay-right").addClass("fadeOutRight");

          $(".overlay-bottom").css("opacity", "0%");
          $(".overlay-top").css("opacity", "0%");

        }

        $('a').click(function(){

          $.pjax.reload('#pjax-container');

          $("#navOverlay").fadeOut("slow");
          $(".overlay-content a").removeClass("fadeIn");
          $(".overlay-content").addClass("fadeOut");

          $(".overlay-top").removeClass("fadeIn");
          $(".overlay-bottom").removeClass("fadeIn");

          $(".overlay-left").removeClass("fadeInLeft");
          $(".overlay-right").removeClass("fadeInRight");

          $(".overlay-top").addClass("fadeOut");
          $(".overlay-bottom").addClass("fadeOut");

          $(".overlay-left").addClass("fadeOutLeft");
          $(".overlay-right").addClass("fadeOutRight");

          $(".overlay-bottom").css("opacity", "0%");
          $(".overlay-top").css("opacity", "0%");

        });
        </script>
      </body>
    </html>

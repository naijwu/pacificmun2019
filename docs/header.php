    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128358180-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-128358180-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./parallax.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Poppins:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="logo-coloured.png">
    <link rel="image_src" href="ogthumb.jpg">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

  </head>
  <body onload="loaded()" id="wrapper">
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
          February 22nd &mdash; 24th 2019
        </div>
        <div class="overlay-bottom">
          <a href="https://www.facebook.com/PacificModelUN/" class="hover-underline">Facebook</a> | <a href="http://instagram.com/pacificmun2019" class="hover-underline">Instagram</a>
        </div>

        <div class="overlay-middlealign" id="overlaycontent">

          <!-- Overlay content -->
          <div class="overlay-content">
            <a class="hover-underline onlyonmobie" href="/">Home</a>
            <a class="hover-underline" href="about.php">About Us</a>
            <a class="hover-underline" href="team.php">Our Team</a>
            <a class="hover-underline" href="committees.php">Committees</a>
            <a class="hover-underline" href="conference.php">Conference</a>
            <a class="hover-underline" href="registration.php">Registration</a>
            <a class="hover-underline" href="outreach/">Resources</a>
            <!-- <a class="hover-underline" href="resources.php">Resources</a> -->
          </div>
          <div class="right" id="overlaycontent">
            <a href="index.php">
              <img src="logo.svg" id="ovlimg" alt="">
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

<!--
          <div class="overlay-dynamicimg">
            TODO: Can add stuff here maybe preview, or another image, or a video, or logo
          </div>
-->

        </div>

        <div id="overlay-background">
          <div id="overlay-bg-default"></div>
        </div>
      </div>
      <div id="announcements">
        <a href="https://www.pacificmun.org#sapps">
          PacificMUN 2020 Secretariat Applications Out Now!
        </a>
        <div class="closeAnn" onclick="closeAnn();">
          <svg height="20" width="20">
            <line x1="0" y1="0" x2="20" y2="20" style="stroke:#FFF; stroke-width:2" />
            <line x1="20" y1="0" x2="0" y2="20" style="stroke:#FFF; stroke-width:2" />
          </svg>
        </div>
      </div>
      <script type="text/javascript">
        function closeAnn() {
          $("#announcements").fadeOut();
        }
      </script>

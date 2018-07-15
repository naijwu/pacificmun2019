<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="fullpage.js"></script>
    <script src="jquery.pjax.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="fullpage.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
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
          February X
        </div>
        <div class="overlay-bottom">
          <a href="#" class="hover-underline">Facebook</a> | <a href="#" class="hover-underline">Instagram</a>
        </div>

        <div class="overlay-middlealign">

          <!-- Overlay content -->
          <div class="overlay-content">
            <a href="drawing.php">PacificMUN</a>
            <a href="about.php">About Us</a>
            <a href="committees.php">Committees</a>
            <a href="conference.php">Conference</a>
            <a href="registration.php">Registration</a>
          </div>

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

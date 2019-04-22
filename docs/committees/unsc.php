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
    <title>UNSC &mdash; Pacific Model United Nations</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../parallax.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Poppins:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="icon" type="img/png" href="../logo-coloured.png">
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
            <a class="hover-underline" href="../faq.php">FAQ</a> <!-- temporary until resources page -->
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

      <div class="landing committeepage">
        <div class="imgbgoverlay"></div>
        <img id="imgbg" src="../committees/img/unsc.jpg" alt="">
        <div class="frontpage">
          <div class="left">

            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">United Nations Security Council</h1>
            <h3 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">Advanced</h3>
          </div>
          <div class="right">
            <img data-aos="fade-up"
            data-aos-duration="1000" data-aos-once="true" class="landinglogo" src="./img/UNSC.png" alt="logo" />
          </div>
        </div>
      </div>

      <main id="committeepage">
        <div class="topsection topicbg unsctopica">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic A</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">The Armenian-Azerbaijan Conflict </h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
              Despite occurring nearly 30 years ago, the political ramifications from the collapse of the Soviet Union
              can still be felt today. Perhaps one of the most long-lasting and of these ramifications remains the
              Nagorno-Karabakh conflict. Ever since the collapse of the Soviet Union in 1991, the states of Azerbaijan
              and Armenia have fought over the mountainous region of Nagorno-Karabakh residing inside the internationally
              recognized borders of Azerbaijan. <br><br> Before the conflict, during the rule of the Soviet Union, the
              region of Nagorno-Karabakh was home to a mix of Azeris and Armenians with the Armenians representing
              3/4ths majority of the populations. When Soviet Premier Mikhail Gorbachev implemented his policy
              of Glasnost “openness” upon coming to power in 1985 allowing for criticism of the Soviet system,
              the leaders of the Regional Soviet of Karabakh decided to vote in favor of unifying the autonomous
              region with Armenia. This would ignite ethnic tensions resulting in the Nagorno-Karabakh war between
              the majority ethnic Armenians of Nagorno-Karabakh backed by the Republic of Armenia, and the Republic of Azerbaijan.
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/UNSC Topic A.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection topicbg unsctopicb">
          <div class="container inverse">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic B</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">The Kashmir Conflict</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
                “Lasting peace between [Pakistan and India] can only be attained through solving the Kashmir issue.” - Khawaja Asif, Foreign Minister of Pakistan
                 <br><br>
                Since their inception with the partition of the former British Raj in 1947, the state of Pakistan and India
                have pitted against each other. Perhaps no dispute between these two states has been a greater source of
                conflict than the issue of Jammu and Kashmir. <br><br> The Kashmir Valley and the area of Jammu are home to a diverse
                group of people with different religious backgrounds. As such, the areas have long been contested by three
                countries: India, Pakistan, and China. The contention over the region began with the partition of the British
                Raj into the states of Pakistan and India
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/UNSC Topic B.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection lowpad">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="1000" data-aos-once="true" >unsc@pacificmun.org</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true" >Dais team</h1>
          </div>
        </div>
        <div class="daisteam">
          <div class="container">
            <div class="profiles"
                data-aos="fade-up"
               data-aos-delay="300"
               data-aos-duration="1000" data-aos-once="true" >
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(1)">
                  <img src="img/staff/tamerlannuhiyev.png" alt="">
                </div>
                <h5>Tamerlan Nuhiyev</h5>
                <h4>Director</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(2)">
                  <img src="img/staff/fionareuter.jpg" alt="">
                </div>
                <h5>Fiona Reuter</h5>
                <h4>Chair</h4>
              </div>
            </div>
            <img class="largebglogo" src="../logo.svg" alt="">
          </div>
        </div>

        <div class="classicsection withfooter lowpad">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="1000" data-aos-once="true" >About</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true" >UNSC</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true" class="com-disc">
              The United Nations Security Council (UNSC) is the primary organ of the United Nations responsible for the maintenance of international peace and security.
              <br><br>
              The UNSC is made up of 15 member states, with five permanent members and ten non-permanent members. The permanent members, known as the P5, are the United States, China, France, Russia and the United Kingdom. Each of the P5 possesses the power to veto any substantive UNSC resolutions. Non-permanent members are elected for two-year terms by the General Assembly.
              <br><br>
              The UNSC holds a special place in the UN, as it is the only body with the power to make decisions that other members are obligated to follow. Under the UN Charter, all member states agree to accept and carry out decisions made by the UNSC. Should a peaceful comprise not be possible the UNSC has the power, should it judge appropriate, to dispatch peacekeepers, enforce economic sanctions, severe diplomatic relations, or even pursuing collective military action. The high pressure situations which the UNSC deals with along with the aspect of veto power makes the UNSC a true challenge for and delegate. The UNSC is an advanced committee, featuring fast-paced developments and a high level of debate.
            </p>
          </div>
        </div>
        <footer class="nomargin">
          <a href="../index.php">
            <img src="../logo.svg" alt="">
          </a>
          <div class="index-footer">
            <div class="if-col">
              <a href="../committees.php#ga"><h2>General</h2></a>
              <a href="specpol.php"><h4>SPECPOL</h4></a>
              <a href="legal.php"><h4>LEGAL</h4></a>
              <a href="disec.php"><h4>DISEC</h4></a>
            </div>
            <div class="if-col">
              <a href="../committees.php#specialized"><h2>Specialized</h2></a>
              <a href="unwomen.php"><h4>UN Women</h4></a>
              <a href="unicef.php"><h4>UNICEF</h4></a>
              <a href="unodc.php"><h4>UNODC</h4></a>
              <a href="ibc.php"><h4>IBC</h4></a>
            </div>
            <div class="if-col">
              <a href="../committees.php#regional"><h2>Regional</h2></a>
              <a href="ussenate.php"><h4>US Senate</h4></a>
              <a href="nato.php"><h4>NATO</h4></a>
              <a href="vcc.php"><h4>VCC</h4></a>
            </div>
            <div class="if-col">
              <a href="../committees.php#advanced"><h2>Advanced</h2></a>
              <a href="unsc.php"><h4>UNSC</h4></a>
              <a href="jcc.php"><h4>JCC</h4></a>
            </div>
            <div class="if-col">
              <a href="../committees.php#misc"><h2>Misc.</h2></a>
              <a href="adhoc.php"><h4>AD HOC</h4></a>
              <a href="ipc.php"><h4>IPC</h4></a>
            </div>
          </div>
        </footer>
      </main>

      <div id="modalOverlay">
        <div class="slide">
          <div class="modal">
            <img src="img/staff/tamerlannuhiyev.png" alt="">
            <div class="content">
              <h3>Director</h3>
              <h4>Tamerlan Nuhiyev</h4>
              <p>
                A senior attending Port Moody Secondary School, Tamerlan Nuhiyev is honoured and excited to serve as
the Director of the United Nations Security Council at PacificMUN 2019. Due to his unrelenting love of
history, international law and global affairs, Tamerlan fit right into Model United Nations in his Grade 9
year. Through Model United Nations, Tamerlan has grown in both leadership ability and knowledge of
the world around him. Tamerlan hopes to share this love of global affairs with the delegates who will be
delegating in the United Nations Security Council Committee. Tamerlan can also be found serving in
various non-profit organizations, attending university global affairs seminars, and attending municipal
government debates. Tamerlan also has a passion for cooking, making sure to cook a new challenging
dish every week. Tamerlan has high hopes for PacificMUN 2019 and firmly believes that it will be an
amazing experience for both himself and delegates of all backgrounds.
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/fionareuter.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Fiona Reuter</h4>
              <p>
                Fiona is a Grade 12 student at Crofton House School and is currently in her fifth year of Model UN. After attending her first conference in Grade 8, she was instantly captivated by the world of MUN and has since been able to gain many valuable experiences to do with international relations and public speaking. In her free time, Fiona enjoys golfing, spending time with her friends, and watching Netflix. She is excited to be serving as the Chair of UNSC, and hopes to help make the experience enjoyable for all of the delegates!
              </p>
            </div>
          </div>
        </div>

        <div class="closeButt" onclick="closeModal();">
          <svg height="25" width="25">
            <line x1="0" y1="0" x2="22" y2="22" style="stroke:#FFF; stroke-width:3" />
            <line x1="22" y1="0" x2="0" y2="22" style="stroke:#FFF; stroke-width:3" />
          </svg>
        </div>
        <div class="leftArrow" onclick="plusSlides(-1)">
          <svg height="25" width="25">
            <polyline points="20,0 5,12 20,24" style="stroke:#FFF; stroke-width:3; fill:none;" />
          </svg>
        </div>
        <div class="rightArrow" onclick="plusSlides(1)">
          <svg height="25" width="25">
            <polyline points="5,0 20,12 5,24" style="stroke:#FFF; stroke-width:3; fill:none;" />
          </svg>
        </div>
      </div>

      <script type="text/javascript">
        $(window).scroll(function(){
          $("#imgbg").css({
            "transform": "translateY(" + $(window).scrollTop() / 1.5 + "px)"
          });
          $(".frontpage").css({
            "transform": "translateY(" + $(window).scrollTop() / 3 + "px)"
          });
        });
      </script>
      <script>

        $(document).keyup(function(e) {
          var keycode = (e.keyCode ? e.keyCode : e.which);
          if (keycode == '27') {
            closeModal();
          }
          if (keycode == '39') {
            // RIGHT ARROW key
            plusSlides(1);
          }
          if (keycode == '37') {
            // LEFT ARROW key
            plusSlides(-1);
          }
        });

        function openModal() {
          $("body").addClass("getridofoverflow");
          $("#modalOverlay").css("display", "flex").hide().fadeIn();

          $(".closeButt").removeClass("fadeOut");
          $(".closeButt").addClass("fadeIn");

          $(".leftArrow").removeClass("fadeOutLeftNoTilt");
          $(".rightArrow").removeClass("fadeOutRightNoTilt");

          $(".leftArrow").addClass("fadeInLeftNoTilt");
          $(".rightArrow").addClass("fadeInRightNoTilt");
        }

        function closeModal() {
          $("#modalOverlay").fadeOut();
          $("body").removeClass("getridofoverflow");

          $(".closeButt").removeClass("fadeIn");
          $(".closeButt").addClass("fadeOut");

          $(".leftArrow").removeClass("fadeInLeftNoTilt");
          $(".rightArrow").removeClass("fadeInRightNoTilt");

          $(".leftArrow").addClass("fadeOutLeftNoTilt");
          $(".rightArrow").addClass("fadeOutRightNoTilt");
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = $(".slide");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides.eq(i).hide();
          }
          slides.eq(slideIndex-1).css({"display": "flex"});
        }

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

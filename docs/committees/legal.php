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
    <title>LEGAL &mdash; Pacific Model United Nations</title>
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
        <img id="imgbg" src="../committees/img/legal.jpg" alt="">
        <div class="frontpage">
          <div class="left">

            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Office of Legal Affairs</h1>
            <h3 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">General Assembly</h3>
          </div>
          <div class="right">
            <img data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="landinglogo" src="./img/LEGAL.png" alt="logo" />
          </div>
        </div>
      </div>

      <main id="committeepage">
        <div class="topsection topicbg legaltopica">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic A</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Reformation of the United<br>Nations Peacekeeping Force</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
              Managed by the department of peacekeeping operations, UN Peacekeeping is responsible for
monitoring and observing peace processes in post-conflict areas and assisting ex-combatants in
implementing peace agreements. This can be done in several ways, including confidence-building
measures, power-sharing arrangements, electoral support, strengthening the rule of law, and economic
and social development. Soldiers, police officers, and civilian personnel all can be a part of the UN
Peacekeeping unit.
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/LEGAL Topic A.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection topicbg legaltopicb">
          <div class="container inverse">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic B</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">International Labour Standards </h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
              With over 3 billion individuals employed across the globe, issues concerning
              labour ethicality and international labour standards are more prevalent than
              ever. Since 1919, the International Labour Organization (ILO) has maintained
              and developed a system of international labour standards aimed at promoting
              opportunities for women and men to obtain decent and productive work, in
              conditions of freedom, equity, security, and dignity. <br><br> Created and initially
              set to devise international standards of labour to contribute to lasting
              peace, the ILO has created global standards benefit international development,
              as well as mitigates adverse effects of international market competition.
              In the current ever-growing economy, international labour standards are an
              essential component in the international framework for ensuring that the
              growth of the global economy provides benefits to all.
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/LEGAL Topic B.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection lowpad">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="1000" data-aos-once="true" >legal@pacificmun.org</h2>
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
                  <img src="img/staff/monicasong.jpg" alt="">
                </div>
                <h5>Monica Song</h5>
                <h4>Director</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(2)">
                  <img src="img/staff/goat.jpg" alt="">
                </div>
                <h5>Alex Oh</h5>
                <h4>Chair</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(3)">
                  <img src="img/staff/nayasedivy.jpg" alt="">
                </div>
                <h5>Naya Sedivy</h5>
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
                data-aos-duration="1000" data-aos-once="true" >LEGAL</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true" class="com-disc">
                The Sixth Committee, also known as LEGAL, is the primary forum for the consideration of legal questions in the General Assembly. Its mandate consists of promoting the development of public international law and its codification. All of the United Nations Member States are entitled to representation on LEGAL as one of the main committees of the General Assembly.
                <br><br>
                Established on February 13th 1946, LEGAL provides a unified central legal service for the many other organs of the United Nations. The Sixth Committee has universal membership; all member states of the United Nations are de jure members of LEGAL. The committee not only contributes to the progressive development and codification of international public and trade law, but also, following Article 102 of the UN Charter, registers, publishes, and serves as a depository of international treaties. Practice following the mentioned article has interpreted this provision as a broad authorization to elaborate new treaties on the widest range of issues, to adopt them, and to recommend them to states for their subsequent signature, ratification, and accession.
                <br><br>
                Besides its LEGAL also functions to promote the strengthening and development as well as the effective implementation of the international legal order for the seas and oceans.
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
            <img src="img/staff/monicasong.jpg" alt="">
            <div class="content">
              <h3>Director</h3>
              <h4>Monica Song</h4>
              <p>
                Monica Song is currently a senior at Lord Byng Secondary School in the Byng Arts Minischool Program. Since attending her first MUN conference in the tenth grade, she has met countless people, made lasting friendships, and gained valuable experiences. Hence, she is ecstatic to be serving as the Director of LEGAL at PacificMUN 2019. When not stressing out about school and tests, Monica can be found aimlessly scrolling through Instagram, taking photos of her dog, and eating dessert at various establishments around the Metro Vancouver area. She is excited for a weekend full of intense debate and cannot wait to make PacificMUN 2019 a truly unforgettable experience!
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/goat.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Alex Oh</h4>
              <p>
                Alex is an unusually short senior at RE Mountain Secondary School who has a passion for MUN, debate, and fashion. After attending his first conference, he has enjoyed every moment and opportunity that MUN has presented to him. Not only has MUN helped further his passion for public speaking, but it has also given him the opportunity to expand his knowledge and understanding of current international events. When Alex is not attending MUN conferences, case competitions, and debate invitationals, he is found binging shows, wasting money on food, and full sending it with the boys. As the Chair of the LEGAL committee, Alex is looking forward to meeting everyone in February.
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/nayasedivy.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Naya Sedivy</h4>
              <p>
                Naya Sedivy is a Grade 12 student at Crofton House School. She first became involved with the Crofton MUN club at the start of high school and has continued to be part of it annually attending various conferences. Outside of school, Naya is very involved in a competitive dance program in all the various disciplines such as ballet, jazz, lyrical, and musical theatre. She has won numerous scholarships and attended dance awards in Las Vegas. Naya was recently chosen to be part of Team Canada participating at IDO World Championships in Germany.  She is thrilled to be apart of the PacificMUN staff team and looks forward to facilitating lots of passionate and exciting conversations. She wishes everyone a memorable weekend.
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

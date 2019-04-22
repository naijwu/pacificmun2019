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
    <title>UNODC &mdash; Pacific Model United Nations</title>
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
        <img id="imgbg" src="../committees/img/unodc.jpg" alt="">
        <div class="frontpage">
          <div class="left">

            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">United Nations Office of Drugs and Crime Committee</h1>
            <h3 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">Specialized</h3>
          </div>
          <div class="right">
            <img data-aos="fade-up"
            data-aos-duration="1000" data-aos-once="true" class="landinglogo" src="./img/UNODC.png" alt="logo" />
          </div>
        </div>
      </div>

      <main id="committeepage">
        <div class="topsection topicbg unodctopica">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic A</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Mitigation of Urban<br>Youth Gang Violence</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
                Millions of youth are involved in urban gangs worldwide, where they are exposed
                to and perpetuate extremely high rates of violence. In the year 2000 alone,
                nearly 200,000 youth between the ages of 10 and 29 were killed in homicides.
                Due to the effects of rapid urbanization, disparate economic development, and
                political instability in the past century, youth gang membership has become
                increasingly prevalent and dangerous. <br><br> Urban youth gangs are often associated
                with a plethora of other drug-related crimes and adult criminal organizations.
                Though occurrences of gang violence have historically fluctuated, there is
                undoubtedly an downward spiral in most urban areas
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/UNODC Topic A.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection topicbg unodctopicb">
          <div class="container inverse">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic B</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Regulation of Migrant<br>Smuggling</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
              Migrant smuggling involves the “procurement of illegal entry of a person into a
              State Party of which the person is not a national or a permanent resident”
              for obtaining “financial or other material benefit,” as defined by the
              United Nations Protocol against the Smuggling of Migrants by Land, Sea and
              Air.<br><br> Migrant smuggling is distinct from human trafficking in that while both
              involve the illegal transport of humans, migrant smuggling involves the
              consent of the smuggled party and is by definition international in scope
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/UNODC Topic B.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection lowpad">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="1000" data-aos-once="true" >unodc@pacificmun.org</h2>
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
                  <img src="img/staff/andrewwang.jpg" alt="">
                </div>
                <h5>Andrew Wang</h5>
                <h4>Director</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(2)">
                  <img src="img/staff/nickyoung.jpg" alt="">
                </div>
                <h5>Nick Young</h5>
                <h4>Chair</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(3)">
                  <img src="img/staff/bridgetyoung.jpg" alt="">
                </div>
                <h5>Bridget Young</h5>
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
                data-aos-duration="1000" data-aos-once="true" >UNODC</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true" class="com-disc">
                The United Nations Office on Drugs and Crime (UNODC) was formed in 1997. It is governed by two primary policymaking bodies, the Commission on Narcotic Drugs (CND), comprised of 53 member states, and the Commission on Crime Prevention and Criminal Justice (CCPCJ), comprised of 40 member states. Both commissions are functional bodies of the UN Economic and Social Council (ECOSOC). As its name suggests, the UNODC deals with a wide array of issues pertaining to international crime, including drug abuse, human trafficking, criminal justice reform, terrorism, privacy, corruption, and various forms of organized crime.
                <br><br>
                Its mandate is built upon three international agreements: the declarations of the International Legal Framework on Drug Control, the United Nations Convention Against Corruption (UNCAC), and the United Nations Convention Against Transnational Organized Crime (UNTOC). Though it lacks enforcement authority, its biannual budget of around 700 million, in tandem with the individual efforts of its constituents and the research capacity and authority of the organization itself, allows the UNODC to pursue a safer and more humane world by providing guidance through “field-based technical cooperation projects” and normative work, improving understanding and awareness of relevant topics through “research and analytical work,” and logistical or financial support to countries in need.
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
            <img src="img/staff/andrewwang.jpg" alt="">
            <div class="content">
              <h3>Director</h3>
              <h4>Andrew Wang</h4>
              <p>
                Andrew is a junior at Interlake High School and he is super stoked to direct the UNODC at PacificMUN 2019. He has been to 13 conferences so far and this will be his sixth time staffing. He joined MUN on a whim in freshman year and never regretted that choice because of a growing admiration for the realistic problem-solving processes delegates applied in committee and because he is incapable of making mistakes. When not attending MUN conferences or attending meetings, Andrew plays piano and is an avid fencer, dancer, and rice connoisseur. Andrew looks forward to working with all attendees to make PacificMUN 2019 an unforgettable experience!
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/nickyoung.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Nick Young</h4>
              <p>
                Even as Nick Young trudges his boots through the biting cold of his final year of high school at St.
                George’s School, he is still exuberant about staffing PacificMUN 2019. After a 3 year long escapade into
                Model United Nations, having served as secretariat at two conferences and staffed at many more, Nick has
                had more than his fair share of debate, deliberation, and discussion. He simply cannot wait to build a
                phenomenally unique experience for the last group of delegates in his Model UN career. Outside of Model
                UN, Nick partakes in a variety of activities and hobbies, including playing piano, programming, using
                Photoshop or Lightroom, playing badminton, reading books, and constantly being on Facebook. “Good
                luck at PacificMUN 2019!” Nick says while donning his burgundy suit. “Godspeed!” Being lead by
                a fantastic Chief of Staff, Nick is excited at the prospect of helping create the best iteration
                of PacificMUN yet!
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/bridgetyoung.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Bridget Young</h4>
              <p>
                As a rising junior in her third year of Model United Nations, Bridget is more than excited to be the Chair of UNODC. Ever since her first time delegating at a conference, she has grown to tolerate sleepless nights in exchange for a great Model UN experience. Model United Nations has helped Bridget enjoy public speaking and in turn make countless friends. When not immersed in a Model UN setting, Bridget loses sleep with her friends over a certain battle game or finds any excuse to eat at different dessert cafes. Bridget cannot wait to meet all of the delegates and would hope no less than for all to have an amazing PacificMUN 2019!
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

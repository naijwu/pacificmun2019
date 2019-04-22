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
    <title>JCC &mdash; Pacific Model United Nations</title>
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
        <img id="imgbg" src="../committees/img/jcc.jpg" alt="">
        <div class="frontpage">
          <div class="left">

            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Joint Crisis Committee</h1>
            <h3 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">Advanced</h3>
          </div>
          <div class="right">
            <img data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="landinglogo" src="../logo.svg" alt="logo" />
          </div>
        </div>
      </div>

      <main id="committeepage">
        <div class="topsection topicbg jcctopic">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Crisis</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">The War of the Roses</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
                The War of the Roses refers to a civil war fought in England between 2 branches of the royal house.
  England in the 1450s was in a decrepit state. The still recent Hundred Years’ War had drained massive
  amounts of economic and human resources, causing poverty and hunger to be commonplace. The king
  in charge at the time – Henry VI of the Royal House Lancaster – was incompetent and suffered periods
  of mental illness. Henry VI liked to surround himself with his favourite men, who were often as clueless
  in the running a nation as the common peasant. This weak government was ill-equipped to piece a
  devastated England back into prosperity. As a result, the nation was in a state of partial anarchy. Great
barons and lords ruled the land, and many private armies stood at arms, ready to battle.
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/JCC.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection lowpad">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="1000" data-aos-once="true" >jcc@pacificmun.org</h2>
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
                  <img src="img/staff/alanzhuang.jpg" alt="">
                </div>
                <h5>Alan Zhuang</h5>
                <h4>Crisis Overlord</h4>
              </div>
            </div>
            <div class="profiles"
                data-aos="fade-up"
               data-aos-delay="300"
               data-aos-duration="1000" data-aos-once="true" >
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(2)">
                  <img src="img/staff/andyjiang.png" alt="">
                </div>
                <h5>Andy Jiang</h5>
                <h4>Chair</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(3)">
                  <img src="img/staff/jaspermai.jpg" alt="">
                </div>
                <h5>Jasper Mai</h5>
                <h4>Chair</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(4)">
                  <img src="img/staff/jameschae.jpg" alt="">
                </div>
                <h5>James Chae</h5>
                <h4>Chair</h4>
              </div>
            </div>
            <div class="profiles"
                data-aos="fade-up"
               data-aos-delay="300"
               data-aos-duration="1000" data-aos-once="true" >
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(5)">
                  <img src="img/staff/derickyuan.jpg" alt="">
                </div>
                <h5>Derick Yuan</h5>
                <h4>Chair</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(6)">
                  <img src="img/staff/ericchen.jpg" alt="">
                </div>
                <h5>Eric Chen</h5>
                <h4>Chair</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(7)">
                  <img src="img/staff/inayaali.jpeg" alt="">
                </div>
                <h5>Inaya Ali</h5>
                <h4>Chair</h4>
              </div>
            </div>
            <div class="profiles">
            
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(8)">
                  <img src="img/staff/catherinecho.png" alt="">
                </div>
                <h5>Catherine Cho</h5>
                <h4>Additional Staff</h4>
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
                data-aos-duration="1000" data-aos-once="true" >JCC</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true" class="com-disc">

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
            <img src="img/staff/alanzhuang.jpg" alt="">
            <div class="content">
              <h3>Crisis Overlord</h3>
              <h4>Alan Zhuang</h4>
              <p>
Alan is a Grade 12 student attending Fraser Heights Secondary and is excited to serve as the Overlord of JCC at PacificMUN 2019. Ever since the first time he raised his placard in Grade 9, Alan has found MUN to be a fun medium for debate. The social aspects of MUN are also very alluring; from tackling global issues with new found friends to outmanoeuvring enemy blocs, MUN has managed to intrigue Alan every step of the way. Outside of MUN, you can expect to see Alan listening to music, spending "a little" of his time playing video games, eating bread with friends, raising his IQ through watching “Rick and Morty,” and searching across Vancouver for the best steak available. Alan looks forward to an action-filled weekend at PacificMUN 2019!
              </p>
            </div>
          </div>
        </div>


        <div class="slide">
          <div class="modal">
            <img src="img/staff/andyjiang.png" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Andy Jiang</h4>
              <p>
                Andy Jiang is a senior student at Fraser Heights Secondary and is ecstatic to serve as one of the Bloc Directors for JCC. Since his very first conference, the aroma of placards, note papers, and complimentary hotel pens have completely seduced his time and interest. Aside from his commitment to MUN, Andy can be found hyping up for the Season 8 of Game of Thrones, attempting to top his own high score in the Google Chrome dinosaur game, or intensely watching the newest episode of Masterchef Australia. Whether you are a beginner or a veteran delegate, Andy cannot wait to greet everyone at PacificMUN and promises to provide an experience to be savoured.
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/jaspermai.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Jasper Mai</h4>
              <p>
                Jasper is a rising senior attending Fraser Heights Secondary School and is absolutely ecstatic to serve as one of the Chairs for JCC. After raising his placard thrice in his first Model United Nations conference three years ago, Jasper has since been captivated continuously by the MUN community. When he is not indulging in MUN, Jasper will usually be found participating in athletics like badminton and volleyball, or sometimes even in the confusing world of debate. You can often encounter Jasper making cringe-worthy puns or binge-watching B99 and HIMYM. In the last staffing position of his long MUN journey, Jasper is thrilled to be working alongside some of his closest friends in one of the most exciting committees that PacificMUN has to offer. During this particular weekend of February, Jasper looks forward to what hopefully develops into an unforgettable experience for all delegates and himself.
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/jameschae.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>James Chae</h4>
              <p>
                Real name Hyun Ku, but just call him James! This grade 12 IB Student that attends Sir Winston Churchill Secondary started his MUN journey at Vancouver College and has been involved with this activity for 3 years. Outside of MUN and school, James plays soccer, piano, and the violin. In addition, he works as a soccer referee and a lifesaving instructor/lifeguard (so if you faint on during committee session you’re covered). This is James’ third time staffing and he is absolutely thrilled to be staffing a crisis committee for the first time. He looks forward to having a fantastic experience with future delegates at PacificMUN 2019.
              </p>
            </div>
          </div>
        </div>
        
        <div class="slide">
          <div class="modal">
            <img src="img/staff/derickyuan.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Derick Yuan</h4>
              <p>
Derick is a sleep-deprived senior hailing from Fraser Heights Secondary in the suburbs of Surrey, and he is delighted to be serving as a Bloc Director of the Joint Crisis Committee. Derick fell in love with Model UN in his sophomore year, and PacificMUN 2019 will be the final destination of this elevator ride that has only gone up; from global awareness and expanded perspectives to social skills and political capacities, MUN has forever changed Derick for the better. When not dressed in western business attire, the JCC Bloc Director can be found on the badminton court, watching movies, trying out new food, or simply hanging out with friends. There are no words to describe Derick's excitement for PacificMUN 2019 - he looks forward to seeing you on the battlegrounds of JCC!
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/ericchen.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Eric Chen</h4>
              <p>
                Eric Chen is a senior at Fraser Heights Secondary and is delighted to be serving as your Chair in the Joint Crisis Committee. Eric is in his third year of Model UN and has been to numerous MUN conferences. In his spare time, Eric can be found enjoying his adventurous bike rides, volunteering at various events and playing Maplestory. Eric loves to spend time with his friends and also loves to play jazz music with his band friends. Eric hopes to see all the delegates at JCC and wishes all everyone a pleasant and exciting Model UN conference.
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/inayaali.jpeg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Inaya Ali</h4>
              <p>
                Inaya is a grade 12 IB student at Port Moody Secondary School and is enthused to serve as your
JCC Chair. As she is currently fully immersed in the Model UN world after her shocking
introduction to it in grade 9, she has become drawn to the exhilarating world of debate and
diplomacy. Despite her keen interest in foreign affairs and global conflict her main passion and
favorite aspect of MUN is the debate. In her spare time, which she doesn’t have a lot of, Inaya
enjoys a variety of sports but most importantly basketball, going on adventures and doing
volunteer work. Inaya is so excited to staff this Committee and looks forward to meeting all of
you.
              </p>
            </div>
          </div>
        </div>

          <div class="slide">
            <div class="modal">
              <img src="img/staff/catherinecho.png" alt="">
              <div class="content">
                <h3>Additional Staff</h3>
                <h4>Catherine Cho</h4>
                <p>
                  Catherine is a senior at York House School and is delighted to be serving as a Crisis Overlord for JCC. She attended her first MUN conference in Grade 9 and has since found herself immersed in the world of international politics. Outside of MUN, Catherine can be found struggling to learn coding basics, listening to political podcasts, and indulging in Rain or Shine ice cream. Catherine looks forward to hearing the innovative solutions that will emerge in committee sessions and hopes that PacificMUN will be a memorable experience for all delegates!
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

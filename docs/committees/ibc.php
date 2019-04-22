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
    <title>IBC &mdash; Pacific Model United Nations</title>
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
        <img id="imgbg" src="../committees/img/ibc.jpg" alt="">
        <div class="frontpage">
          <div class="left">

            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">International Bioethics Committee</h1>
            <h3 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">Specialized</h3>
          </div>
          <div class="right">
            <img data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="landinglogo" src="./img/IBC.png" alt="logo" />
          </div>
        </div>
      </div>

      <main id="committeepage">
        <div class="topsection topicbg ibctopica">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic A</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Privacy Issues of Collecting Information for Big Data Projects</h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
              The development of modern computing technologies has revolutionized data
              collection, storage and movement. Within the realms of healthcare, this
              has translated into digitizing patient healthcare records, as well as
              storage on the “cloud,” enabling the sharing of such information between
              the patient, healthcare providers and insurance companies.
              <br><br>
              Furthermore, development of the Internet of Things (IoT) has led to the
              creation of devices such as connected health trackers, apps and wearables,
              for example, the Fitbit which generate a multitude of metrics related to
              healthcare, such as fitness activity, sleep patterns, heart rate patterns.
              These metrics are then stored in servers around the world and processed
              through algorithms to generate usable information.
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/IBC Topic A.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection topicbg ibctopicb">
          <div class="container inverse">
            <h2 data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true">Topic B</h2>
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Right of Choice for<br>Unresponsive Patients </h1>
            <p data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">
              The advancement of medical technology has allowed patients to
              attain an unprecedented level of control over their medical care.
              Patients of the 21st century not only have access to an ever-growing
              range of options for medical treatment, but also the right to
              refuse life-sustaining treatment. This control, however, becomes
              disputed when patients enter an unresponsive state.
              <br><br>
              An unresponsive state – which encompasses vegetative states,
              brain death, and comas – renders patients incapable of dictating
              the course of their medical treatment. Patients in such a state
              typically have severe neurological damage, which results in their
              organs functioning, but only through the assistance of automated
              devices. As such, the right of choice falls into the hands of the
              patient's immediate family; the family, or a legal trustee, gets
              to decide whether treatment should continue, in hopes of the
              patient’s eventual return to a conscious state, or if treatment
              should be withdrawn and the patient’s organs could then be donated.
            </p>
            <div data-aos="fade-up"
                data-aos-delay="450"
                data-aos-duration="1000" data-aos-once="true" class="buttonfadeincontainer">
              <a class="button" href="backgrounders/IBC Topic B.pdf" target="_blank">Backgrounder <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>
        <div class="classicsection lowpad">
          <div class="container">
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="1000" data-aos-once="true" >ibc@pacificmun.org</h2>
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
               <!--
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(1)">
                  <img src="img/staff/harrisonchan.jpeg" alt="">
                </div>
                <h5>Harrison Chan</h5>
                <h4>Director</h4>
              </div>
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(2)">
                  <img src="" alt="">
                </div>
                <h5>??</h5>
                <h4>Chair</h4>
              </div>
            -->
              <div class="profile">
                <div class="profile-picture" onclick="openModal();currentSlide(1)">
                  <img src="img/staff/jessicalin.jpg" alt="">
                </div>
                <h5>Jessica Lin</h5>
                <h4>Director</h4>
              </div>
               <div class="profile">
                 <div class="profile-picture" onclick="openModal();currentSlide(2)">
                   <img src="img/staff/jesse.jpg" alt="">
                 </div>
                 <h5>Jesse Hsieh</h5>
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
                data-aos-duration="1000" data-aos-once="true" >IBC</h1>
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
<!--
        <div class="slide">
          <div class="modal">
            <img src="img/staff/harrisonchan.jpeg" alt="">
            <div class="content">
              <h3>Director</h3>
              <h4>Harrison Chan</h4>
              <p>
                Harrison is currently a first-year engineering student at the University of Toronto. Having seriously been involved in Model United Nations since the beginning of 9th grade after dabbling with it in grade 7 and 8, he rapidly fell into the trap known as the Vancouver MUN scene, where his constant raising of his placard has led him to meet some of his best friends. Returning for his friends (and MUN) one last time, PacificMUN is Harrison’s 20th Model UN conference and he is remarkably ecstatic to be serving as the Director for PacificMUN 2019's International Bioethics Committee. When not involved in Model UN, he can be found telling everyone about his engineering workload, looking at memes, taking photos, programming, designing with startup ideas, eating at upscale restaurants, and basically doing literally everything short of studying. Harrison wishes delegates the best of luck and is looking forward to meeting everyone at PacificMUN 2019!
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>??</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ex fermentum, egestas ante sit amet, placerat dolor. Pellentesque in nisi metus. Donec feugiat urna velit, vel pellentesque turpis mollis a. Quisque mattis est sit amet nibh imperdiet blandit. Pellentesque rhoncus sem posuere libero gravida congue. Integer nulla augue, tincidunt eget elementum sed, gravida a orci. Proin hendrerit mauris in lorem elementum dapibus. In ante arcu, volutpat eget tristique ut, malesuada vel libero.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu ex fermentum, egestas ante sit amet, placerat dolor. Pellentesque in nisi metus. Donec feugiat urna velit, vel pellentesque turpis mollis a. Quisque mattis est sit amet nibh imperdiet blandit. Pellentesque rhoncus sem posuere libero gravida congue. Integer nulla augue, tincidunt eget elementum sed, gravida a orci. Proin hendrerit mauris in lorem elementum dapibus. In ante arcu, volutpat eget tristique ut, malesuada vel libero.
              </p>
            </div>
          </div>
        </div>
-->
        <div class="slide">
          <div class="modal">
            <img src="img/staff/jessicalin.jpg" alt="">
            <div class="content">
              <h3>Director</h3>
              <h4>Jessica Lin</h4>
              <p>
                Jessica is currently a Grade 11 student at Crofton House School and is ecstatic to chair IBC at PacificMUN 2019.  Since walking into her first committee session in Grade 8, in which she did not raise her placard a single time, Jessica has grown to love the diplomacy, debate, and collaboration that Model UN entails. A few years later, Jessica has finally found the courage to raise her placard (she has occasionally even been told to raise her placard a little less.) Outside of MUN, Jessica can regularly be found binge watching Suits, fretting over standardized tests, playing basketball, or volunteering throughout Vancouver. Jessica looks forward to witnessing a weekend of lively debate and fruitful discussion; she wishes all delegates the best of luck at PacificMUN 2019.
              </p>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="modal">
            <img src="img/staff/jesse.jpg" alt="">
            <div class="content">
              <h3>Chair</h3>
              <h4>Jesse Hsieh</h4>
              <p>
                Jesse is currently a Grade 12 at Steveston-London Secondary School, and is looking forward to serving as your chair for the International Bioethics Committee at PacificMUN 2019! Joining MUN in his Grade 10 year, his passions for history and politics have only continued to develop. Remembering the moments where nations voted to nuke the world to oblivion and where corrupt government officials secretly plotted to assassinate presidents, he will never forget the wonderful experiences MUN has provided for him. Outside of school, you can find him organizing events for his school and his community, procrastinating when he should be studying, and sleeping away all his stress. Jesse looks forward to the fascinating discussions delegates will undoubtedly debate over the course of the conference, and wishes all delegates a most wonderful experience.
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

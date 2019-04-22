<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pacific Model United Nations 2019</title><?php
  include "header.php";
?>
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
          <h2></h2><h3></h3>
          <a href="/">
            <img class="logo" src="logo.svg" alt="logo" />
          </a>
        </header>
        <div class="overlay-left-fixed">
          PacificMUN 2019
        </div>


        <div class="overlay-bottom-absolute">
          <svg height="40" width="30">
            <polyline points="5,10 15,20 25,10" stroke="#FFF" stroke-width="3" fill="none"/>
          </svg>
        </div>

        <div class="landing">
          <div class="vid-overlay"></div>
          <div class="fullscreen-bg">
            <video loop muted autoplay class="fullscreen-bg__video">
              <source src="actualtimelapserescaled.mp4" type="video/mp4">
            </video>
          </div>
          <div class="frontpage">
            <img data-aos="fade-up"
                data-aos-duration="1000" class="bg-logo" src="logo.svg" alt="logo" />
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000">PACIFICMUN 2019</h1>
            <h3 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000">February 22nd&mdash;24th</h3>
          </div>
        </div>

        <main id="home">
          <div class="classicsection">
            <div class="container">
              <div class="handbook" style="text-align:center; padding-bottom:150px;" id="sapps">
                  <h2>Conference Photos</h2> <br>
                  <a href="https://www.facebook.com/pg/PacificModelUN/photos/?ref=page_internal" class="button" style="margin:0 auto;">Facebook Photos <div class="rightarrow">—&gt;</div></a>
              </div>
              <div class="handbook" style="text-align:center; padding-bottom:150px;" id="sapps">
                  <h2>Secretariat Applications</h2> <br>
                  <a href="https://form.jotform.com/90575303703251" class="button" style="margin:0 auto;">Secretariat Applications <div class="rightarrow">—&gt;</div></a>
              </div>
              <div class="handbook" style="text-align:center; padding-bottom:150px;">
                  <h2>International Press Corps</h2> <br>
                  <a href="/ipc/" class="button" style="margin:0 auto;">IPC Website <div class="rightarrow">—&gt;</div></a>
              </div>
              <div class="sgletter">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">A Letter from the Secretary-General</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150" data-aos-once="true">
                  Dear faculty and delegates,
                  <br><br>
                  Welcome to Pacific Model United Nations 2019.
                  <br><br>
                  PacificMUN 2018 welcomed over 600 attendees from across Western Canada and Washington state to join us for an educational simulation unlike any other. Over the course of the weekend, delegates embodied global leaders, ambassadors, and representatives as they sought to resolve pressing international conflicts. Together, delegates were able to conquer complex topic matters by employing critical thinking, public speaking, and diplomatic skills.
                  <br><br>
                  Although rapidly growing, PacificMUN has strived to continue to uphold its three core pillars: accessibility, innovation, and global involvement. We believe that all students, regardless of financial background, educational fortuity, skill level, or field of interest, deserve to experience the value of Model United Nations. My team and I are hard at work to ensure that PacificMUN 2019 will be a platform where all delegates are able to engage in international affairs, employ diplomatic skills, and ultimately, embody true global citizenship.
                  <br><br>
                  Overall, PacificMUN aims to provide all students with the opportunity to cultivate the foundational skills of research, collaboration, and leadership. In today’s era of globalization, these skills have become increasingly critical for students to grow into active global citizens. Having said this, I implore you to engage in the world of Model UN and the numerous benefits that it has to offer.
                  <br><br>
                  My Secretariat team and I are confident that the next iteration of PacificMUN will be the best one yet. Please do not hesitate to contact me at sg@pacificmun.org with any questions or concerns. We look forward to welcoming you in February.
                  <br><br>
                  Warm Regards,
                  <br>
                  <img src="signature.png" alt="">
                  <br><br>
                  Judith Chen
                  <br>Secretary-General
                  <br>Pacific Model United Nations 2019
                </p>
              </div>
            </div>
          </div>
          <div class="immerse">
            <div class="containerfull">
              <div class="immerse-inner" id="immerse">
                <div class="row-im">
                  <div class="im-col">
                    <h1>Date</h1>
                    <h2>February 22nd &mdash; 24th</h2>
                    <div class="divider"></div>
                  </div>
                  <div class="im-col">
                    <h1>Location</h1>
                    <h2>Pinnacle Harbourfront Hotel Vancouver</h2>
                    <div class="divider"></div>
                  </div>
                  <div class="im-col">
                    <h1>Social</h1>
                    <h2>Beneath the Pacific Ocean</h2>
                    <div class="divider"></div>
                  </div>
                </div>
                <div class="row-im-timer">
                  <div class="countdown">
                    <script>
                      var countDownDate = new Date("Feb 22, 2019 15:00:00").getTime();
                      var x = setInterval(function() {
                        var now = new Date().getTime();
                        var distance = countDownDate - now;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        document.getElementById("d").innerHTML = "<div class='vert-align'>" + days + "<h4>Days</h4></div>";
                        document.getElementById("h").innerHTML = "<div class='vert-align'>" + hours + "<h4>Hours</h4></div>";
                        document.getElementById("m").innerHTML = "<div class='vert-align'>" + minutes + "<h4>Minutes</h4></div>";
                        document.getElementById("s").innerHTML = "<div class='vert-align'>" + seconds + "<h4>Seconds</h4></div>";
                        if (distance < 0) {
                          clearInterval(x);
                          document.getElementById("d").innerHTML = "<div class='vert-align'>&mdash;</div>";
                          document.getElementById("h").innerHTML = "<div class='vert-align'>&mdash;</div>";
                          document.getElementById("m").innerHTML = "<div class='vert-align'>&mdash;</div>";
                          document.getElementById("s").innerHTML = "<div class='vert-align'>&mdash;</div>";
                        }
                      }, 1000);
                    </script>
                    <div class="countdowntimer">
                      <div class="days" id="d">
                        <div class="vert-align">
                          &mdash;
                        </div>
                      </div>
                      <div class="hours" id="h">
                        <div class="vert-align">
                          &mdash;
                        </div>
                      </div>
                      <div class="minutes" id="m">
                        <div class="vert-align">
                          &mdash;
                        </div>
                      </div>
                      <div class="seconds" id="s">
                        <div class="vert-align">
                          &mdash;
                        </div>
                      </div>
                    </div>
                    <p id="demo"></p>
                  </div>
                </div>
                <div class="row-im">
                  <div class="im-col">
                    <h1>Committees</h1>
                    <h2>15 Diverse Committees</h2>
                    <div class="divider"></div>
                  </div>
                  <div class="im-col">
                    <h1>Early Price</h1>
                    <h2>$170<sup>CAD</sup></h2>
                    <div class="divider"></div>
                  </div>
                  <div class="im-col">
                    <h1>Delegates</h1>
                    <h2>Est 600+</h2>
                    <div class="divider"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="classicsection lastt">
            <div class="container">
              <div class="readmore">
                <h2>Further Links</h2>
                <div class="readmore-inner">
                  <div class="item">
                    <div class="readmore-img-overlay"></div>
                    <img src="outreach/background.jpg" alt="" style="object-position:center 70%;">
                    <h3>Articles</h3>
                    <p>
                      Read articles written by PacificMUN's secretariat members to help you improve.
                    </p>
                    <a href="outreach/" class="hover-underline">Learn More</a>
                  </div>
                  <div class="item">
                    <div class="readmore-img-overlay"></div>
                    <img src="abouttempbg.jpg" alt="Coming Soon">
                    <h3>Secretariats</h3>
                    <p>
                      The hard-working team that brought you PacificMUN 2019.
                    </p>
                    <a href="team.php" class="hover-underline">Learn More</a>
                  </div>
                  <div class="item">
                    <div class="readmore-img-overlay"></div>
                    <img src="committeesbg.jpg" alt="">
                    <h3>Committees</h3>
                    <p>
                      Check out the fifteen unique committees offered by PacificMUN 2019.
                    </p>
                    <a href="committees.php" class="hover-underline">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer>
            <div class="textmiddle">
              <h2>More Info</h2>
              <a href="about.php" class="button">About Page <div class="rightarrow">&mdash;></div></a>
            </div>
          </footer>
            <footer style="background:black;">
              <a href="/"><img src="logo.svg" alt=""></a>
              <div class="index-footer">
                <div class="if-col">
                  <h2>About Us</h2>
                  <a href="about.php#about"><h4>About</h4></a>
                  <a href="about.php#pillars"><h4>Accessibility<br>Innovation<br>Global Involvement</h4></a>
                  <a href="team.php"><h4>Secretariat</h4></a>
                </div>
                <div class="if-col">
                  <h2>Committees</h2>
                  <a href="committees.php#ga"><h4>General Assemblies</h4></a>
                  <a href="committees.php#specialized"><h4>Specialized</h4></a>
                  <a href="committees.php#regional"><h4>Regional Bodies</h4></a>
                  <a href="committees.php#advanced"><h4>Advanced</h4></a>
                  <a href="committees.php#misc"><h4>Miscellaneous</h4></a>
                </div>
                <div class="if-col">
                  <h2>Conference</h2>
                  <a href="conference.php#venue"><h4>Venue</h4></a>
                  <a href="conference.php#schedule"><h4>Schedule</h4></a>
                  <a href="conference.php#conduct"><h4>Code of Conduct</h4></a>
                  <a href="outreach/"><h4>Resources</h4></a>
                </div>
                <div class="if-col">
                  <h2>Registration</h2>
                  <a href="registration.php#overview"><h4>Overview</h4></a>
                  <a href="registration.php#aid"><h4>Financial Aid</h4></a>
                  <a href="registration.php#cheques"><h4>Cheques Policy</h4></a>
                  <a href="registration.php#refund"><h4>Refund Policy</h4></a>
                </div>
                <!--
                <div class="if-col">
                  <h2>Resources</h2>
                  <a href="resources.php#articles"><h4>Articles</h4></a>
                  <a href="resources.php#ppguide"><h4>Position Paper Guide</h4></a>
                  <a href="resources.php#rop"><h4>Rules of Procedure</h4></a>
                  <a href="resources.php#faq"><h4>FAQ</h4></a>
                  <a href="resources.php#contact"><h4>Contact Us</h4></a>
                </div>
              -->
              </div>
            </footer>
        </main>

        <script type="text/javascript">
          $(document).ready(function() {
            $(".logo").css("opacity","0");
            var aichone = $("#home"); //get offset of second div
            var offset = aichone.offset().top; //check for top property
            $(function () {
              $(window).scroll(function () {
                if ($(window).scrollTop() >= offset) {
                  $(".logo").css("opacity","1");
                  $("body").addClass("pastlanding");
                } else {
                  $(".logo").css("opacity","0");
                  $("body").removeClass("pastlanding");
                }
              });
            });
          });

          $(window).scroll(function(){
      			$(".fullscreen-bg").css({
              "transform": "translate(0, -" + $(window).scrollTop() / 2 + "px)"
            });
            $(".frontpage").css({
              "transform": "translateY(" + $(window).scrollTop() / 3.5 + "px)"
            });
            if ($(window).scrollTop() >= 10) {
              $(".overlay-bottom-absolute").css("opacity","0");
            } else {
              $(".overlay-bottom-absolute").css("opacity","1");
            }
      		});

          var elem = document.documentElement;
          function openFullscreen() {
            elem.href = "#immerse";
            if (elem.requestFullscreen) {
              elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) { /* Firefox */
              elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
              elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE/Edge */
              elem.msRequestFullscreen();
            }
          }
          function closeFullscreen() {
            if (document.exitFullscreen) {
              document.exitFullscreen();
            } else if (document.mozCancelFullScreen) { /* Firefox */
              document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
              document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { /* IE/Edge */
              document.msExitFullscreen();
            }
          }
        </script>

<?php
  include "footer.php";
?>

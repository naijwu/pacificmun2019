<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Committees &mdash; Pacific Model United Nations</title>
<?php
  include "header.php";
?>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();

        $(window).scroll(function(){
          $(".landingsmall-header").css({
            "transform": "translateY(" + $(window).scrollTop() / 3 + "px)"
          });
          $(".landingsmall-bgimg").css({
            "transform": "translateY(" + $(window).scrollTop() / 2 + "px)"
          });
        });

        $(document).ready(function() {
          $(".logo").css("opacity","0");
          var aichone = $("#committees"); //get offset of second div
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
      </script>
      <header>
        <div class="bars" onclick="openNav();">
          <div class="bar1"></div>
          <div class="bar2"></div>
        </div>
        <a href="/">
          <img class="logo" src="logo.svg" alt="logo" />
        </a>
      </header>

      <div class="landingsmall">
        <div class="landingsmall-bgimg-overlay"></div>
        <img class="landingsmall-bgimg" src="committeesbg.jpg" alt="">
        <div class="landingsmall-header">
          <div class="container">
            <img data-aos="fade-up"
                data-aos-duration="1000" src="logo.svg" alt="logo" data-aos-once="true" />
            <h1 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true">Committees</h1>
            <h2 data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000" data-aos-once="true">General Assemblies, Specialized, Regional Bodies, and Advanced</h2>
            </div>
        </div>
      </div>

      <main id="committees">

      <div class="hoverbackgroundimg">
        <div class="hoverbgimg-overlay"></div>
        <img id="hoverbgimg" src="" alt="" />
      </div>

        <div class="topsection">
          <div data-aos="fade-up"
              data-aos-duration="1000" data-aos-once="true" class="container">
            <h1>Committees</h1>
            <h2>Dare To Speak</h2>
            <p>
              As always, the PacificMUN Committees Programme is created to provide a memorable and educational experience for all delegates. Whether you hope to find your voice or aim to expand your knowledge in global affairs, our Committees Programme will allow you to do so in a professional yet welcoming environment.
              <br><br>
              This year, we hope to reflect the innovative and creative nature of the conference by tackling some of the most controversial current global events; from the reformation of gun laws in US Senate, to the Rights of LGBTQ in UN Women, delegates are sure to find a subject that peaks their interest.
              <br><br>
              Combined with a competent and enthusiastic staff team, the diverse range of committees and thought-provoking topics are sure to inspire thoughtful discussion from novice delegates to experienced diplomats.
              <br><br>
              Position papers are due on February 15.
            </p><!--
            <div class="buttonfadeincontainer">
              <a class="button" href="https://docs.google.com/spreadsheets/d/17LsNDD4xu4Hw1IhEg5zkA1XY6mziNZL4UFwKWJWj1HE/edit?usp=sharing" target="_new">Country Matrix <div class="rightarrow">&mdash;></div></a>
            </div>-->
            <div class="divider"></div>
            <h2 data-aos="fade-up"
                data-aos-delay="150"
                data-aos-duration="1000" data-aos-once="true" id="ga">General Assemblies</h2>
              <!--
                onmouseover="hoverEnter('disec');" onmouseout="hoverExit('disec');"
              -->
            <div class="minigrid" onmouseenter="resetAnim();">
              <div data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="800"
                  data-aos-once="true"
                  class="miniitem col-3">
                  <a target="_blank" href="committees/disec.php" onmouseover="hoverEnter('disec');" onmouseleave="hoverExit('disec');">
                    <div class="img-container">
                      <div class="img-overlay-small"></div>
                      <img src="committees/img/disec.jpg" alt="">
                    </div>
                    <div class="miniitem-inner">
                      <h4>DISEC</h4>
                      <div class="topicscontainer">
                        <h5>Centralized Security and Military Forces</h5>
                        <h5>Cyberwarfare in the 21st Century</h5>
                      </div>
                    </div>
                  </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="450"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-3">
                <a target="_blank" href="committees/legal.php" onmouseover="hoverEnter('legal');" onmouseleave="hoverExit('legal');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/legal.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>LEGAL</h4>
                    <div class="topicscontainer">
                      <h5>Reformation of the United Nations Peacekeeping Force</h5>
                      <h5>International Labour Standards</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="600"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-3">
                <a target="_blank" href="committees/specpol.php" onmouseover="hoverEnter('specpol');" onmouseleave="hoverExit('specpol');" class="extraheight">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/specpol.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>SPECPOL</h4>
                    <div class="topicscontainer">
                      <h5>Development of Autonomous Measures and Proposals for Non Self-Governing Territories</h5>
                      <h5>Maintanence of Civil Order Against Mass Protests</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="800" data-aos-once="true" id="specialized">Specialized</h2>
            <div class="minigrid col-4-cont">
              <div data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-4">
                <a target="_blank" href="committees/unodc.php" onmouseover="hoverEnter('unodc');" onmouseleave="hoverExit('unodc');" class="lessheight">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/unodc.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>UNODC</h4>
                    <div class="topicscontainer">
                      <h5>Mitigation of Urban Youth Gang Violence</h5>
                      <h5>Regulation of Migrant Smuggling</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-4">
                <a target="_blank" href="committees/ibc.php" onmouseover="hoverEnter('ibc');" onmouseleave="hoverExit('ibc');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/ibc.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>IBC</h4>
                    <div class="topicscontainer">
                      <h5>Privacy Issues of Collecting Information for Big Data Projects</h5>
                      <h5>Right of Choice for Unresponsive Patients</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="450"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-4">
                <a target="_blank" href="committees/unwomen.php" onmouseover="hoverEnter('unwomen');" onmouseleave="hoverExit('unwomen');" class="lessheight">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/unwomen.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>UN Women</h4>
                    <div class="topicscontainer">
                      <h5>Political Influence of Women</h5>
                      <h5>Rights of LGBTQ Women</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="600"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-4">
                <a target="_blank" href="committees/unicef.php" onmouseover="hoverEnter('unicef');" onmouseleave="hoverExit('unicef');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/unicef.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>UNICEF</h4>
                    <div class="topicscontainer">
                      <h5>Proliferation of Child Smugglers in Southeastern Asia</h5>
                      <h5>Reformation of Educational Curriculums to Reduce Student Absenteeism</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="800" data-aos-once="true" id="regional">Regional Bodies</h2>
            <div class="minigrid">
              <div data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-3">
                <a target="_blank" href="committees/nato.php" onmouseover="hoverEnter('nato');" onmouseleave="hoverExit('nato');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/nato.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>NATO</h4>
                    <div class="topicscontainer">
                      <h5>Re-evaulation of NATO’s Role in The Modern Day</h5>
                      <h5>Rise of Russian Aggression (crisis)</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-3">
                <a target="_blank" href="committees/ussenate.php" onmouseover="hoverEnter('ussenate');" onmouseleave="hoverExit('ussenate');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/ussenate.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>US Senate</h4>
                    <div class="topicscontainer">
                      <h5>Affirmative Action Policies in Post-Secondary Education</h5>
                      <h5>Reformation of Gun Laws</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="450"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-3">
                <a target="_blank" href="committees/vcc.php" onmouseover="hoverEnter('vcc');" onmouseleave="hoverExit('vcc');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/vcc.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>Third VCC</h4>
                    <div class="topicscontainer">
                      <h5>Promotion of Scientific Discussion</h5>
                      <h5>International Secularism</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="800" data-aos-once="true" id="advanced">Advanced</h2>
            <div class="minigrid">
              <div data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-2">
                <a target="_blank" href="committees/jcc.php" onmouseover="hoverEnter('jcc');" onmouseleave="hoverExit('jcc');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/jcc.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>JCC</h4>
                    <div class="topicscontainer">
                      <h5>The War of the Roses</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-2">
                <a target="_blank" href="committees/unsc.php" onmouseover="hoverEnter('unsc');" onmouseleave="hoverExit('unsc');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/unsc.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>UNSC</h4>
                    <div class="topicscontainer">
                      <h5>The Armenian-Azerbaijan Conflict</h5>
                      <h5>The Kashmir Conflict</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <h2 data-aos="fade-up"
                data-aos-delay="0"
                data-aos-duration="800" data-aos-once="true" id="misc">Miscellaneous</h2>
            <div class="minigrid col-2-cont">
              <div data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-2">
                <a target="_blank" href="committees/ipc.php" onmouseover="hoverEnter('ipc');" onmouseleave="hoverExit('ipc');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="committees/img/ipc.jpeg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>IPC</h4>
                  </div>
                </a>
              </div>
              <div data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="800" data-aos-once="true" class="miniitem col-2">
                <a target="_blank" href="committees/adhoc.php" onmouseover="hoverEnter('adhoc');" onmouseleave="hoverExit('adhoc');">
                  <div class="img-container">
                    <div class="img-overlay-small"></div>
                    <img src="black.jpg" alt="">
                  </div>
                  <div class="miniitem-inner">
                    <h4>AD HOC</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--
        <footer>
          <div class="textmiddle">
            <h2>Learn more</h2>
            <a href="resources.php" class="button">Resources Page <div class="rightarrow">&mdash;></div></a>
          </div>
        </footer>
      -->
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

      <script>
        // TODO: FIX FADE-IN FALSE QUEUE SYSTEM
        var isFadingOut = false;

        function hoverEnter(type) {
          if(isFadingOut == false) {
            if (type == 'disec') {
              $("#hoverbgimg").attr("src", "committees/img/disec.jpg");
            } else if (type == 'legal') {
              $("#hoverbgimg").attr("src", "committees/img/legal.jpg");
            } else if (type == 'specpol') {
              $("#hoverbgimg").attr("src", "committees/img/specpol.jpg");
            } else if (type == 'unodc') {
              $("#hoverbgimg").attr("src", "committees/img/unodc.jpg");
            } else if (type == 'ibc') {
              $("#hoverbgimg").attr("src", "committees/img/ibc.jpg");
            } else if (type == 'unwomen') {
              $("#hoverbgimg").attr("src", "committees/img/unwomen.jpg");
            } else if (type == 'unicef') {
              $("#hoverbgimg").attr("src", "committees/img/unicef.jpg");
            } else if (type == 'nato') {
              $("#hoverbgimg").attr("src", "committees/img/nato.jpg");
            } else if (type == 'ussenate') {
              $("#hoverbgimg").attr("src", "committees/img/ussenate.jpg");
            } else if (type == 'vcc') {
              $("#hoverbgimg").attr("src", "committees/img/vcc.jpg");
            } else if (type == 'jcc') {
              $("#hoverbgimg").attr("src", "committees/img/jcc.jpg");
            } else if (type == 'unsc') {
              $("#hoverbgimg").attr("src", "committees/img/unsc.jpg");
            } else if (type == 'ioc') {
              $("#hoverbgimg").attr("src", "committees/img/ioc.jpg");
            } else if (type == 'adhoc') {
              $("#hoverbgimg").attr("src", "black.jpg");
            } else if (type == 'ipc') {
              $("#hoverbgimg").attr("src", "committees/img/ipc.jpeg");
            }
            $(".hoverbackgroundimg").fadeIn("fast", "linear");
          }
        }

        function hoverExit(type) {
          isFadingOut = true;
          $(".hoverbackgroundimg").fadeOut("fast", "linear", function() {
            isFadingOut = false;
          });
        }

        function resetAnim() {
          isFadingOut = false;
        }

        $(window).scroll(function(){
    			$("#hoverbgimg").css({
            "transform": "translateY(-" + $(window).scrollTop() / 20 + "px) scale(1.5)"
          });
    		});
      </script>

<?php
  include "footer.php";
?>

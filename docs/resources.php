<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resources &mdash; Pacific Model United Nations</title>

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
      </script>

        <div class="resourcespage">
          <header>
            <div class="bars" onclick="openNav();">
              <div class="bar1"></div>
              <div class="bar2"></div>
            </div>
            <img class="logo" src="logo.svg" alt="logo" />
          </header>

          <!--
            Content for Resources page:
             - Articles
             - ROP Guide
             - PP Guide
             - PP Submissions
             - FAQ
          -->


            <div class="landingsmall">
              <div class="landingsmall-bgimg-overlay"></div>
              <img class="landingsmall-bgimg" src="z.jpg" alt="">
              <div class="landingsmall-header">
                <div class="container">
                  <img data-aos="fade-up"
                      data-aos-duration="1000" src="logo.svg" alt="logo" />
                  <h1 data-aos="fade-up"
                      data-aos-delay="150"
                      data-aos-duration="1000">Resources</h1>
                  <h2 data-aos="fade-up"
                      data-aos-delay="300"
                      data-aos-duration="1000">Articles & FAQ</h2>
                  </div>
              </div>
            </div>

          <main>
            <div class="topsection">
              <div id="overview" data-aos="fade-up"
                  data-aos-duration="1000" data-aos-once="true" class="container lowmarginbot">
                <h1>Resources</h1>
                <h2>Outreach Programme</h2>
                <p>
                  PacificMUN stands by its three pillars, accessibility, global involvement, and innovation. Essentially, we hope to make MUN accessible to everyone, regardless of financial status or skill, through innovation and passion. To do so, we are launching our new program, the Pacific Outreach Programme, which combines our three pillars and sets us apart from other Model United Nations conferences. This outreach programme allows students, parents, and teachers alike to learn about Model United Nations. We want to provide the necessary tools to everyone interested in MUN and give them the foundational support so that they can delve into the world of diplomacy and public speaking.
                  <br><br>
                  Firstly, we offer an online hub in which sponsor teachers, head delegates, beginner delegates, and new MUN club school leaders can learn about ROP (Rules of Procedure), conference necessities, and resources to prepare for their first conference. These articles will be much more personal and user dependent; we hope to expand this platform with the coming months.
                  <br><br>
                  PacificMUN wants to build the MUN community in schools and local academies. To do so, we also offer one-on-one online consultation to schools that need assistance in building their MUN clubs and presence. As our secretariat team is familiar with the high school MUN scene, we can aid in whatever areas that people inquire in, whether it be the establishment of a MUN club, or simply finding content to introduce in their meetings. Furthermore, we offer in-personal help as well by visiting local schools and introducing new materials. Through this, we hope to support our local MUN community and make it as accessible as possible.
                  <br><br>
                  In addition, everyone that is subscribed to our program will have insider information on PacificMUN with new updates and have accessibility to all of our Secretariat members. Our goal is to make MUN accessible to beginner and advanced delegates, sponsor teachers, and parents to grow the MUN community.
                </p>
                <div class="divider"></div>
                <p>
                  <br><br>
                  Category: Mun Club <br>
                  <a href="articles/mocktopics.php">Mock MUN session topics</a> <br>
                  <a href="articles/mocksessions.php">Mock MUN sessions</a>
                  <br><br>
                  Category: Conferences <br>
                  <a href="articles/choosing.php">Choosing the Right Committee for You</a> <br>
                  <a href="articles/firsttime.php">First Time Conference</a> <br>
                  <a href="articles/staffing.php">Staffing a MUN Conference</a>
                  <br><br>
                  Category: Guides <br>
                  <a href="articles/ppguide.php">Position Paper Guide</a> <br>
                  <a href="articles/ropguide.php">Rules of Procedure Guide</a> <br>
                  <a href="articles/rpguide.php">Resolution Paper Guide</a> <br>
                  <a href="articles/specializedrop.php">Specialized ROP Guide</a>
                  <br><br>
                  Category: Other <br>
                  <a href="articles/faq.php">Frequently Asked Questions</a>
                </p>
              </div>
            </div>
            <!--
            <div class="classicsection">
              <div id="overview" data-aos="fade-up"
                  data-aos-duration="1000" data-aos-once="true" class="container lowmarginbot">
                <h1>Guides</h1>
                <p>

                </p>
                <div class="divider"></div>
              </div>
            </div>
            -->
            <footer style="background:transparent;">
              <div class="textmiddle">
                <h2>More Info</h2>
                <a href="registration.php" class="button">Registration Page <div class="rightarrow">&mdash;></div></a>
              </div>
            </footer>

            <footer>
              <img src="logo.svg" alt="">
              <div class="index-footer">
                <div class="if-col">
                  <h2>Conference</h2>
                  <a href="#"><h4>First Time Conference</h4></a>
                  <a href="#"><h4>Choosing the right committee</h4></a>
                  <a href="#"><h4>Staffing a MUN conference</h4></a>
                </div>
                <div class="if-col">
                  <h2>MUN Clubs</h2>
                  <a href="#"><h4>Mock session topics</h4></a>
                  <a href="#"><h4>Mock sessions</h4></a>
                </div>
                <div class="if-col">
                  <h2>Guides</h2>
                  <a href="#"><h4>Position Paper</h4></a>
                  <a href="#"><h4>Resolution Paper</h4></a>
                  <a href="#"><h4>Rules of Procedure</h4></a>
                  <a href="#"><h4>Specialized ROP</h4></a>
                </div>
                <div class="if-col">
                  <h2>Others</h2>
                  <a href="#"><h4>Submit Position Paper</h4></a>
                  <a href="#"><h4>Frequently Asked Questions</h4></a>
                  <a href="#"><h4>Contact Us</h4></a>
                </div>
              </div>
            </footer>
          </main>
        </div>

<?php
  include "footer.php";
?>

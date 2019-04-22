<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FAQ &mdash; Pacific Model United Nations</title>

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
          var aichone = $("#conference"); //get offset of second div
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
          <img class="landingsmall-bgimg" src="conferencebg.jpg" alt="">
          <div class="landingsmall-header">
            <div class="container">
              <img data-aos="fade-up"
                  data-aos-duration="1000" data-aos-once="true" src="logo.svg" alt="logo" />
              <h1 data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="1000">FAQ</h1>
              </div>
          </div>
        </div>

        <main id="faq">
          <div class="topsection">
            <div data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="container section">
              <h1>FAQ</h1>
              <h2>Frequently Asked Questions</h2>
              <p>
                <strong>What is PacificMUN’s policy regarding Awards?</strong>
                <br>
                PacificMUN maintains a merit-based awards system which is ultimately decided by each committee's respective dais teams. We believe that awards are necessary because they allow us to reward delegates who show exceptional research, delegate, and interactive qualities.
              </p>
              <p>
                <strong>When and Where will PacificMUN 2019 be hosted?</strong>
                <br>
                Located in the heart of downtown Vancouver, PacificMUN 2019 will be hosted at the Pinnacle Hotel Harbourfront, an essential piece in PacificMUN’s goal of creating an unforgettable experience for all delegates. The conference itself will last from Friday, February 22nd to Sunday, February 24th.
              </p>
              <p>
                <strong>What is PacificMUN’s policy regarding the Internet? </strong>
                <br>
                PacificMUN is a complete internet friendly conference. From conducting research to writing resolution papers, the internet can be used as a valuable tool to all delegates. Internet will be available in all delegate hotel rooms, as well as anywhere on the hotel premise. With this in mind, Secretariat members hold the right revoke internet access from delegates if found to be used in an inappropriate manner.
              </p>
              <p>
                <strong>Can I still be a delegate without any prior experience?</strong>
                <br>
                PacificMUN caters itself towards beginners and offers the premier experience for those who are new to Model UN. With over 15 committees whose breadth covers absolute beginners to seasoned MUN veterans, there is certainly a place at PacificMUN for anyone. From the highly experienced staff and various beginner committees, we invite all delegates without any experience to dare to speak and learn about MUN from qualified staff members in a welcoming setting.
              </p>
              <p>
                <strong>Can I delegate without my school attending?</strong>
                <br>
                While delegating as part of a school delegation does have numerous benefits, being an independent delegate is always a viable option at PacificMUN 2019. Independent delegates are treated just the same as regular delegations and can register for committees and rooming in the same fashion as delegates going with there school. Also, if you have any rooming preferences as an independent, (ex. your friend is also delegating independently and you would like to room with them) then you can request this via emailing <a href="mailto:delegateafairs@pacificmun.org">delegateaffairs@pacificmun.org</a>.
              </p>
              <p>
                <strong>How do I prepare for the Conference? </strong>
                <br>
                Research is the single most important content in preparing for a conference. On top of reading the comprehensive backgrounder guide, a delegate must engage in both topic and country-specific research. It is integral that delegates have an idea of their respective UN body, the role of their country in the committee, and most importantly a comprehensive idea of the topic. In terms of the actual conference, be sure to bring your respective materials (laptops, paper, pens, etc.) and wear western business attire as well.
                <!--
                For an overview of research suggestions, as well as useful links, visit our Research Overview from the Model UN Preparation Guide. (LINK the respective guides for this)
              -->
              </p>
            </div>
          </div>
          <footer>
            <div class="textmiddle">
              <h2>More Info</h2>
              <a href="registration.php" class="button">Registration Page <div class="rightarrow">&mdash;></div></a>
            </div>
          </footer>
            <footer style="background:black;">
              <a href="/"><img src="logo.svg" alt=""></a>
              <div class="index-footer">
                <div class="if-col">
                  <h2>About Us</h2>
                  <a href="about.php#about"><h4>About</h4></a>
                  <a href="about.php#pillars"><h4>Accessibility<br>Innovation<br>Global Involvement</h4></a>
                  <a href="about.php#ourteam"><h4>Secretariat</h4></a>
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
                  <a href="faq.php"><h4>FAQ</h4></a>
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
<?php
  include "footer.php";
?>

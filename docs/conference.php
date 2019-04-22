<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conference &mdash; Pacific Model United Nations</title>

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
                  data-aos-duration="1000">Conference</h1>
              <h2 data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000">Venue, Schedule, & Code of Conduct</h2>
              </div>
          </div>
        </div>

        <main id="conference">
          <div class="topsection" id="handbook">
            <div data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="container section">
              <h1>Handbook</h1>
              <h2 >Delegate Handbook</h2><br>
              <div class="buttonfadeincontainer">
                <a class="button no-margin" href="PacificMUN 2019 Delegate Handbook.pdf" target="_blank">Delegate Handbook <div class="rightarrow">&mdash;></div></a>
              </div>
              <div class="divider"></div>
            </div>
          </div>
          <div class="classicsection section" id="venue">
            <div data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="container section">
              <h1>Venue</h1>
              <h2 >Pinnacle Harbourfront Hotel</h2>
              <p>

                Located in the heart of downtown Vancouver, PacificMUN 2019 will be hosted at the Pinnacle Hotel Harbourfront, an essential piece in PacificMUN’s goal of creating an unforgettable experience for all delegates. Inside the hotel, delegates will be able to enjoy a variety of luxury service amenities, stylish guest rooms, and comfortable yet professional meeting spaces.
                <br><br>

                In addition to the beautiful rooms and gracious services that the Pinnacle offers, the hotel also boasts an exceptionally convenient location. The Pinnacle is just a walking distance away from many popular attractions, including Robson St, Stanley Park; and historic neighbourhoods such as Gastown and Chinatown. Furthermore, the Pinnacle is near a plethora of transit options, including the bus, SeaBus, and SkyTrain, thus making it a very accessible venue. We highly encourage all delegates to take advantage of the Pinnacle’s location, and truly explore Vancouver’s stunning and vibrant downtown scene.              </p>
              <div class="buttonfadeincontainer">
                <a class="button" onclick="openMap();">View Map <div class="rightarrow">&mdash;></div></a>
              </div>
            </div>
          </div>
          <div class="classicsection section" id="schedule">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
              <h1>Schedule</h1>
              <h2>February 22 &mdash; 24</h2>
              <div class="schedule-container">
                <div class="slide">
                  <div class="mast">
                    <h3>Friday</h3>
                    <h2>February 22</h2>
                  </div>
                  <div class="table">
                    <div class="row">
                      <h4>3:00 - 5:00 PM</h4>
                      <h5>Registration</h5>
                    </div>
                    <div class="row">
                      <h4>5:00 - 6:30 PM</h4>
                      <h5>Opening Ceremonies</h5>
                    </div>
                    <div class="row">
                      <h4>6:30 - 8:00 PM</h4>
                      <h5>Dinner</h5>
                    </div>
                    <div class="row">
                      <h4>8:00 - 11:30 PM</h4>
                      <h5>Committee Session I</h5>
                    </div>
                    <div class="row">
                      <h4>11:59 PM</h4>
                      <h5>Curfew</h5>
                    </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="mast">
                    <h3>Saturday</h3>
                    <h2>February 23</h2>
                  </div>
                  <div class="table">
                    <div class="row">
                      <h4>8:30 AM - 12:00 PM</h4>
                      <h5>Committee Session II</h5>
                    </div>
                    <div class="row">
                      <h4>12:00 - 1:30 PM</h4>
                      <h5>Lunch</h5>
                    </div>
                    <div class="row">
                      <h4>1:30 - 4:15 PM</h4>
                      <h5>Committee Session III</h5>
                    </div>
                    <div class="row">
                      <h4>4:15 - 4:30 PM</h4>
                      <h5>Break</h5>
                    </div>
                    <div class="row">
                      <h4>4:30 - 7:30 PM</h4>
                      <h5>Committee Session IV</h5>
                    </div>
                    <div class="row">
                      <h4>7:30 - 9:00 PM</h4>
                      <h5>Dinner</h5>
                    </div>
                    <div class="row">
                      <h4>9:00 - 11:30 PM</h4>
                      <h5>Delegate Social</h5>
                    </div>
                    <div class="row">
                      <h4>12:00 AM - 2:00 AM</h4>
                      <h5>Midnight Crisis</h5>
                    </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="mast">
                    <h3>Sunday</h3>
                    <h2>February 24</h2>
                  </div>
                  <div class="table">
                    <div class="row">
                      <h4>9:00 AM - 12:00 PM</h4>
                      <h5>Committee Session V</h5>
                    </div>
                    <div class="row">
                      <h4>12:00 - 2:00 PM</h4>
                      <h5>Lunch</h5>
                    </div>
                    <div class="row">
                      <h4>2:00 - 3:30 PM</h4>
                      <h5>Closing Ceremonies</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="classicsection section" id="conduct">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
              <h1>Code of Conduct</h1>
              <h2>Code of Conduct and Waiver</h2>
              <p>
                At Pacific Model United Nations, the Secretariat team is dedicated to providing all delegates
                and teachers with a secure, respectful, and rewarding experience. To ensure a safe and professional
                environment, delegates are required to comply with the following:
              </p>
              <ol type="i">
                <li>
                  Delegates must attend all committee sessions unless excused by their respective head delegate
                  or sponsor teacher. An excuse of absence must also be communicated to the delegate’s
                  respective dias via email.
                </li>
                <li>
                  Delegates must wear conference-issued name tags for identification and security reasons.
                </li>
                <li>
                  Delegates with medical conditions that may impact their participation during the conference
                  must notify their delegation’s primary contact (head delegate or sponsor teacher).
                </li>
                <li>
                  Delegates are prohibited from using substances or objects that are deemed illegal by
                  the Government of Canada, Province of British Columbia, or City of Vancouver.
                </li>
                <li>
                  Delegates must remain in their rooms between the hours of 11:59PM and 7AM unless involved
                  in a committee session that is organized by PacificMUN.
                </li>
              </ol>
              <a class="button no-margin" href="2019 Delegate Waiver.pdf" target="_blank">Waiver & Media Release Form <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>

          <div class="classicsection section" id="sponsors">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
              <h1>Sponsors</h1>
              <h2></h2>
              <p>
                Our sponsors are instrumental to the success of PacificMUN each year. We continue to thank our generous sponsors who help further support Pacific Model United Nations’  core pillars. For more information, Please contact our USG of Conference via the form below or at <a href="mailto:conference@pacificmun.org">conference@pacificmun.org</a> to learn more about our sponsorship program and what we offer.
              </p>
            </div>
          </div>
          <div class="classicsection section" id="letters">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
              <h1>Letters</h1>
              <h2>From the Prime Minister and Premier</h2>
              <div class="l-container">
                <div class="l-left">
                  <img src="pmletter.jpg" alt="">
                </div>
                <div class="l-right">
                  <img src="premierletter.jpg" alt="">
                </div>
              </div>
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

        <div id="openmap">
          <a href="javascript:void(0)" class="regi-close" onclick="closeMap();">
            <svg height="100" width="30">
              <polyline points="10,0 25,50 10,100" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
            <a href="javascript:void(0)" class="regi-close-mobie" onclick="closeMap();">
              <svg height="30" width="30">
                <polyline points="10,0 25,15 10,30" style="stroke:#FFF; stroke-width:3; fill:none;" />
              </svg>
            </a>
          <div class="leftmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.3510912672455!2d-123.12028819999999!3d49.288692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867183ede22563%3A0x6760951648061853!2sPinnacle+Hotel+Harbourfront!5e0!3m2!1sen!2sus!4v1536016628463" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="rightmap">
            <img src="logo.svg" alt="">
            <h1>Pinnacle Harbourfront Hotel</h1>
            <h2>Venue</h2>
            <p>
              1133 W Hastings St, Vancouver, BC V6E 3T3, Canada
            </p>
            <a href="https://goo.gl/maps/BV5cH3k7tjk" target="_blank" class="button nomargin">Google Maps <div class="rightarrow">&mdash;></div></a>
          </div>
        </div>

        <div id="openmap-overlay"></div>

        <script type="text/javascript">

          function openMap() {
            $("body").addClass("openMap");
            $("#openmap-overlay").fadeIn();
          }

          function closeMap() {
            $("body").removeClass("openMap");
            $("#openmap-overlay").fadeOut();
          }
        </script>



        <!--
        <div class="schedule">
          <div class="day">
            <h2>Friday, 25th</h2>
            <table style="width:100%;">
              <tr>
                <th>3:30pm - 5:00pm</th>
                <th>Registration</th>
              </tr>
              <tr>
                <th>5:00pm - 6:00pm</th>
                <th>Opening Ceremony</th>
              </tr>
              <tr>
                <th>6:00pm - 8:00pm</th>
                <th>Dinner</th>
              </tr>
              <tr>
                <th>8:00pm - 11:30pm</th>
                <th>Committee Session 1</th>
              </tr>
              <tr>
                <th>11:59pm</th>
                <th>Curfew</th>
              </tr>
            </table>
          </div>
          <div class="day">
            <h2>Saturday, 26th</h2>
            <table style="width:100%;">
              <tr>
                <th>8:30am - 12:00pm</th>
                <th>Committee Session 2</th>
              </tr>
              <tr>
                <th>12:00pm - 1:30pm</th>
                <th>Lunch</th>
              </tr>
              <tr>
                <th>1:30pm - 3:45pm</th>
                <th>Committee Session 3</th>
              </tr>
              <tr>
                <th>3:45 - 4:00</th>
                <th>Break</th>
              </tr>
              <tr>
                <th>4:00pm - 6:30pm</th>
                <th>Committee Session 3</th>
              </tr>
              <tr>
                <th>6:30pm - 8:30pm</th>
                <th>Dinner</th>
              </tr>
              <tr>
                <th>8:30pm - 11:30pm</th>
                <th>Delegate Social</th>
              </tr>
              <tr>
                <th>11:59pm</th>
                <th>Curfew</th>
              </tr>
              <tr>
                <th>12:00am - 2:30am</th>
                <th>Midnight Crisis</th>
              </tr>
            </table>
          </div>
          <div class="day">
            <h2>Sunday, 27th</h2>
            <table style="width:100%;">
              <tr>
                <th>8:30am - 12:30pm</th>
                <th>Committee Session 4</th>
              </tr>
              <tr>
                <th>12:30pm - 2:00pm</th>
                <th>Lunch</th>
              </tr>
              <tr>
                <th>2:00pm - 3:30pm</th>
                <th>Closing Ceremony</th>
              </tr>
            </table>
          </div>
        </div>
        -->

<?php
  include "footer.php";
?>

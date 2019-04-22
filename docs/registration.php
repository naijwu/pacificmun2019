<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration &mdash; Pacific Model United Nations</title>

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
          var aichone = $("#register"); //get offset of second div
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
          <img class="landingsmall-bgimg" src="registrationbg.jpg" alt="">
          <div class="landingsmall-header">
            <div class="container">
              <img data-aos="fade-up"
                  data-aos-duration="1000" src="logo.svg" alt="logo" />
              <h1 data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="1000">Registration</h1>
              <h2 data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000">Registration, Prices, Payments, & Refunds</h2>
              </div>
          </div>
        </div>

      <main id="register">
        <div class="topsection">
          <div id="overview" data-aos="fade-up"
              data-aos-duration="1000" data-aos-once="true" class="container lowmarginbot">
            <h1>Overview</h1>
            <p>
              This year, PacificMUN registration will be a one or two step process, dependent on whether delegates register with a school/delegation or if they attend as an independent delegate.
              <br><br>
              School/Delegation Registration will open on September 6th, 2018. Having a head delegate or sponsor teacher register a school/delegation with PacificMUN simply allows us to oversee all present parties at the conference. Once the head delegate or sponsor teacher has successfully registered, the delegation’s name will appear on the drop down menu of the Hotel/Day Delegate Registration Forms. When official registration opens on September 17th, delegates will be able to indicate the delegation that they will be arriving with in the appropriate fields of the registration form.
              <br><br>
              Independent delegates (delegates who are not a part of a school delegation) will simply select “Independent” under the School/Delegation section of the Hotel/Day Delegate Registration Forms.
              <br><br>
              Should you have any questions regarding the registration process at PacificMUN 2019, please do not hesitate to contact our USG of Delegate Affairs, Cindy Gao, at <a href="mailto:delegateaffairs@pacificmun.org">delegateaffairs@pacificmun.org</a>.
            </p>
            <div class="buttonfadeincontainer"><!--
              <a class="button no-margin" onclick="openDelegation();">School/Delegation <div class="rightarrow">&mdash;></div></a>
              <a class="button no-margin" onclick="openHotel();">Hotel Delegate <div class="rightarrow">&mdash;></div></a>
              <a class="button no-margin" onclick="openDay();" >Day Delegate <div class="rightarrow">&mdash;></div></a>
              <a class="button no-margin" onclick="openInternational();" >International Delegate <div class="rightarrow">&mdash;></div></a> -->
              <a class="button no-margin" href="2019 Delegate Waiver.pdf" target="_blank">Delegate Waiver Form <div class="rightarrow">&mdash;></div></a>
            </div>
            <div class="divider"></div>
          </div>
          <div data-aos="fade-up"
              data-aos-duration="1000" data-aos-once="true" class="containerlarge highmarginbot">
            <h2>Prices & Dates</h2>
            <div class="prices-grid" >
              <div class="price">
                <div class="price-inner">
                  <h4>$85<sup>CAD</sup></h4>
                  <h5>Day Delegate Registration</h5>
                  <h6>September 17 - February 15</h6>
                </div>
              </div>
              <div class="price">
                <div class="price-inner">
                  <h4>$170<sup>CAD</sup></h4>
                  <h5>Early Registration</h5>
                  <h6>September 17 - October 21</h6>
                </div>
              </div>
              <div class="price">
                <div class="price-inner">
                  <h4>$190<sup>CAD</sup></h4>
                  <h5>Regular Registration</h5>
                  <h6>October 22 - January 3</h6>
                </div>
              </div>
              <div class="price">
                <div class="price-inner">
                  <h4>$195<sup>CAD</sup></h4>
                  <h5>Late Registration</h5>
                  <h6>January 4 - February 3</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="aid" class="classicsection">
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
            <h1>Financial Aid Programme</h1>
            <h2>Creating Accessibility</h2>
            <p>
              Pacific Model United Nations strives to be one of the most accessible hotel conferences in
              North America. We believe that regardless of financial status, everyone deserves to have
              an equal opportunity to participate in Model United Nations. Because of this, PacificMUN
              offers financial aid to those in need.
              Over the span of just two years, we are proud to
              say that our team has provided over $10,000 worth of aid to delegates from across world.
              <br><br>
              <strong>Please note that if you are applying for our Financial Aid Programme, you should not complete
              a Hotel/Day Delegate Registration Form.</strong>
            </p>
            <a class="button" href="https://form.jotform.com/83511206717250" target="_blank">Financial Aid Application <div class="rightarrow">&mdash;></div></a>
          </div>
        </div>
        <div id="refund" class="classicsection highmargintop">
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
            <h1>Room Upgrades</h1>
            <h2>Pricing</h2>
            <p>
              PacificMUN gives you the opportunity to upgrade your rooming to what is most convenient to you:
              <table>
                <tr>
                  <th>Room</th>
                  <th>Total Cost</th>
                </tr>
                <tr>
                  <th>Three person room</th>
                  <th>$105</th>
                </tr>
                <tr>
                  <th>Two person room, two double beds</th>
                  <th>$210</th>
                </tr>
                <tr>
                  <th>Two person room, one king sized bed</th>
                  <th>$260</th>
                </tr>
                <tr>
                  <th>Single person room, one king sized bed</th>
                  <th>$265</th>
                </tr>
              </table>
            </p>
          </div>
        </div>
        <div id="cheques" class="classicsection highmargintop">
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
            <h1>Cheques Policy</h1>
            <h2>Paying through cheque</h2>
            <p>
              Because Pacific Model United Nations recognizes that not all delegates are able to use the online payment form, we have included the alternative method of payment through cheque. Delegates should keep in mind that prices are based on the date of registration, not the date the cheque is received. Please note that country assignments will not be granted to delegates until a member of the PacificMUN Secretariat team has received the cheque. Cheques should be made out to Pacific Model United Nations Foundation and are to be mailed to 2076 148th St, Surrey BC V4A 8L5.
              <br><br>
              If you have any questions or concerns regarding cheques, please contact Judith Chen at <a href="mailto:sg@pacificmun.org">sg@pacificmun.org</a>.
            </p>
          </div>
        </div>
        <div id="refund" class="classicsection highmargintop">
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="container">
            <h1>Refund Policy</h1>
            <h2>Refund dates</h2>
            <p>
              At PacificMUN, we understand that conflicts may arise and will offer refunds according to the following schedule:
              <table>
                <tr>
                  <th>Until December 1st, 2018</th>
                  <th>Full Refund</th>
                </tr>
                <tr>
                  <th>Until December 31st, 2018</th>
                  <th>50% Refund</th>
                </tr>
                <tr>
                  <th>After January 1st, 2019</th>
                  <th>No Refund</th>
                </tr>
              </table>
            </p>
          </div>
        </div>
        <footer>
          <div class="textmiddle">
            <h2>Learn more</h2><!-- Questions? -->
            <a href="committees.php" class="button">Committees <div class="rightarrow">&mdash;></div></a>
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

        <div id="delegation">
          <a href="javascript:void(0)" class="regi-close" onclick="closeDelegation();">
            <svg height="100" width="30">
              <polyline points="10,0 25,50 10,100" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <a href="javascript:void(0)" class="regi-close-mobie" onclick="closeDelegation();">
            <svg height="30" width="30">
              <polyline points="10,0 25,15 10,30" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <div class="hoteldel-inner">
            <div class="left">
              <img src="logo.svg" alt="">
            </div>
            <div class="centre">
              <h1>School/Delegation</h1>
              <h2>Registration</h2>
              <p>
                To be completed by a sponsor teacher or a head delegate, the form below
                is used for registering a party with PacificMUN 2019. Please note that
                a sponsor teacher is not required to register a delegation, a head
                delegate will suffice.
                <br><br>
                Once a School/Delegation registration form has
                been submitted, please allow our Delegate Affairs team up to 72 hours
                to reflect this information onto our Hotel/Day Delegate Registration Forms. After
                the school/delegation registration has been processed, delegates should
                be able to select their school/delegation on the drop down menu when
                they are registering for the conference.
              </p>
              <a class="button" href="https://form.jotform.com/81955400234250" target="_blank">Registration Form <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>

        <div id="hoteldel">
          <a href="javascript:void(0)" class="regi-close" onclick="closeHotel()">
            <svg height="100" width="30">
              <polyline points="10,0 25,50 10,100" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <a href="javascript:void(0)" class="regi-close-mobie" onclick="closeHotel();">
            <svg height="30" width="30">
              <polyline points="10,0 25,15 10,30" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <div class="hoteldel-inner">
            <div class="left">
              <img src="logo.svg" alt="">
            </div>
            <div class="centre">
              <h1>Hotel Delegates</h1>
              <h2>Registration</h2>
              <p>
                To register for PacificMUN 2019, delegates are to complete the registration form provided below.
                <br><br>
                For delegates who will be attending PacificMUN with a group, the name of your school/delegation
                should appear in the drop down menu on the registration form. If you cannot find your
                school/delegation, please confirm that your head delegate or sponsor teacher has registered
                your group with us.
                <br><br>

                If you are not attending with a delegation, please select “Independent” on the School/Delegation
                field on the registration form.
                <br><br>

                Once we have received your completed registration, please allow us up to 72 hours to
                process your country assignment requests. Please note that your registration will not be
                considered complete until we have received your payment. If you have not chosen to use Paypal,
                please refer to our <a href="#cheques" onclick="closeHotel();">Cheques Policy</a> should any inquiries arise.
              </p>
            </div>
            <div class="right">
              <h1>&nbsp; </h1>
              <h2>Hotel Rooming</h2>
              <p>
                All PacificMUN 2019, delegate rooms will be single-gendered quad occupancy rooms.
                <br><br>
                For schools/delegations, sponsor teachers will be offered single rooms. Please note
                that in cases where the size of the male or female portion of a delegation is not
                evenly divisible by four, the Secretariat reserves the right to place delegates from
                other delegations in the room unless explicitly requested otherwise.
                <br><br>
                Independent Delegates will be assigned into rooms with other independent delegates,
                and any requests for roommates will be taken at the same time as delegation rooming
                lists. The Secretariat will ask for rooming lists in the months leading up to the
                conference.
              </p>
              <a class="button" href="https://form.jotform.com/81956033034251" target="_blank">Registration Form <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>

        <div id="daydel">
          <a href="javascript:void(0)" class="regi-close" onclick="closeDay()">
            <svg height="100" width="30">
              <polyline points="10,0 25,50 10,100" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <a href="javascript:void(0)" class="regi-close-mobie" onclick="closeDay();">
            <svg height="30" width="30">
              <polyline points="10,0 25,15 10,30" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <div class="hoteldel-inner">
            <div class="left">
              <img src="logo.svg" alt="">
            </div>
            <div class="centre">
              <h1>Day Delegates</h1>
              <h2>Registration</h2>
              <p>
                For delegates who do not wish to stay overnight in the Pinnacle Hotel,
                we offer the choice of registering as a day delegate; day delegates
                will attend committee sessions as per usual, but must return home at
                night. Please register on the form below if you do not wish to stay
                at the hotel for the duration of the weekend.
                <br><br>
                Once we have received your completed registration, please allow us
                up to 72 hours to process your country assignment requests. Please
                note that your registration will not be considered complete until
                we have received your payment.
                If you have not chosen to use Paypal, please refer to our
                <a href="#cheques" onclick="closeDay();">Cheques Policy</a> should any inquiries arise.
              </p>
              <a class="button" href="https://form.jotform.com/81956830034256" target="_blank">Registration Form <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>

        <div id="interdel">
          <a href="javascript:void(0)" class="regi-close" onclick="closeInternational()">
            <svg height="100" width="30">
              <polyline points="10,0 25,50 10,100" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <a href="javascript:void(0)" class="regi-close-mobie" onclick="closeInternational();">
            <svg height="30" width="30">
              <polyline points="10,0 25,15 10,30" style="stroke:#FFF; stroke-width:3; fill:none;" />
            </svg>
          </a>
          <div class="hoteldel-inner">
            <div class="left">
              <img src="logo.svg" alt="">
            </div>
            <div class="centre">
              <h1>International Delegates</h1>
              <h2>Registration</h2>
              <p>
                PacificMUN welcomes delegates from across the world. Delegates
                requesting a letter of invitation as a supporting document for
                their Visa application should fill out the form below. This form
                is only to be filled out once the delegate has received
                registration confirmation and a country assignment. A letter
                of invitation will be sent via email once the form has been
                processed. If you have any questions or concerns about attending
                as an international delegate, please contact Judith Chen at <a href="mailto:sg@pacificmun.org">sg@pacificmun.org</a>.
              </p>
              <a class="button" href="https://form.jotform.com/82936157738268" target="_blank">Registration Form <div class="rightarrow">&mdash;></div></a>
            </div>
          </div>
        </div>


      </main>

      <div id="moreinfo-overlay"></div>

      <script type="text/javascript">
        function openHotel() {
          $("body").addClass("hotelMoreInfo");
          $("#moreinfo-overlay").fadeIn();
        }

        function closeHotel() {
          $("body").removeClass("hotelMoreInfo");
          $("#moreinfo-overlay").fadeOut();
        }

        function openDay() {
          $("body").addClass("dayMoreInfo");
          $("#moreinfo-overlay").fadeIn();
        }

        function closeDay() {
          $("body").removeClass("dayMoreInfo");
          $("#moreinfo-overlay").fadeOut();
        }

        function openInternational() {
          $("body").addClass("interMoreInfo");
          $("#moreinfo-overlay").fadeIn();
        }

        function closeInternational() {
          $("body").removeClass("interMoreInfo");
          $("#moreinfo-overlay").fadeOut();
        }

        function openDelegation() {
          $("body").addClass("delegationMoreInfo");
          $("#moreinfo-overlay").fadeIn();
        }

        function closeDelegation() {
          $("body").removeClass("delegationMoreInfo");
          $("#moreinfo-overlay").fadeOut();
        }
      </script>

<?php
  include "footer.php";
?>

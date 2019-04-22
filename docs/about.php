<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About &mdash; Pacific Model United Nations</title><?php
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
            var aichone = $("#about"); //get offset of second div
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
          <img class="landingsmall-bgimg" src="abouttempbg.jpg" alt="">
          <div class="landingsmall-header">
            <div class="container">
              <img data-aos="fade-up"
                  data-aos-duration="1000" data-aos-once="true" src="logo.svg" alt="logo" />
              <h1 data-aos="fade-up"
                  data-aos-delay="150"
                  data-aos-duration="1000" data-aos-once="true">About Us</h1>
              <h2 data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000" data-aos-once="true">Accessible, Innovative, & Globally Involved</h2>
              </div>
          </div>
        </div>

        <main id="about">
          <div class="topsection">
            <div data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="true" class="container">
              <h1>About</h1>
              <h2>Pacific Model United Nations</h2>
              <p>
                Pacific Model United Nations (PacificMUN) is a three-day high school Model United Nations conference held in Vancouver, British Columbia, Canada. Since its inception in 2014, PacificMUN has provided students with a platform to engage in international affairs, employ diplomatic skills, and ultimately, embody true global citizenship. Over the course of three days, delegates are presented with an unparalleled educational opportunity to participate in fruitful debate and discussion, and collaborate with others to achieve a comprehensive yet practical solution for some of the world’s most pressing issues.
                <br><br>
                As a conference dedicated towards creating a memorable experience for all delegates, regardless of skill level, field of interest, or financial background, Pacific Model United Nations stands on three foundational pillars:
              </p>
              <h2>Accessibility. Innovation. Global Involvement.</h2>
            </div>
          </div>
          <div data-aos="fade-up"
              data-aos-duration="1000" data-aos-once="true" class="threevalues" id="pillars">

            <div class="slideshow-container">
              <div class="fade">
                <div class="container" style="padding-bottom:50px;">
                  <h1>Accessibility</h1>
                  <h2>Giving everyone an opportunity</h2>
                  <div class="p-cont">
                    <p>
                        PacificMUN is a steadfast believer that all students deserve the opportunity to participate in an educational simulation such as Model United Nations. Because of this, PacificMUN aims to remain accessible to delegates regardless of financial background or educational fortuity.
                        <br><br>
                        Not only does PacificMUN offer incomparably affordable prices by remaining below the $200 mark, but we also strive to help students afford our conference through our Financial Aid Programme. Over the span of just two years, we are proud to say that our team has provided over $10,000 worth of aid to delegates from across world.
                        <br><br>
                        Additionally, PacificMUN provides assistance to schools interested in establishing Model UN clubs as well as starting-up clubs. Through the Pacific Outreach Programme, PacificMUN aids schools or clubs by providing them with delegate resources, club meeting facilitation, and conference supplies.
                    </p>
                  </div>
                </div>
              </div>

              <div class="fade">
                <div class="container" style="padding-bottom:50px;">
                  <h1>Innovation</h1>
                  <h2>Evolution and Reinvention</h2>
                  <div class="p-cont">
                    <p>
                      Since its inception, PacificMUN has strived to diverge from the norm. We believe that Model UN should not just be an academic activity, but should also serve as an opportunity to create lasting memories.
                      <br><br>
                      To cultivate this belief, PacificMUN remains committed towards yearly reinvention of the delegate social, committees programme, and our renowned Ad Hoc committee. At PacificMUN, one can expect to partake in a memorable experience that simply cannot be matched at any other Model UN conference.
                    </p>
                  </div>
                </div>
              </div>

              <div class="fade">
                <div class="container">
                  <h1>Global Involvement</h1>
                  <h2>Growing global citizens</h2>
                  <div class="p-cont">
                    <p>
                      Diversity and divisiveness play key roles in enhancing one’s academic experience. To ensure that all delegates are empowered to exercise their critical thinking and public speaking skills regardless of skill level or field of interest, our committees programme encompasses a diverse set of relevant and controversial topics.
                      <br><br>
                      Whether it be discussing the proliferation of child smugglers in Southeastern Asia or resolving the Armenian-Azerbaijan conflict, our committees team has worked hard to ensure that a variety of committees and topics are made available to our delegates.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!--
            <a class="prev" onclick="plusSlides2(-1)">

              <div class="leftArrow" onclick="plusSlides(-1)">
                <svg height="25" width="25">
                  <polyline points="20,0 5,12 20,24" style="stroke:#FFF; stroke-width:3; fill:none;" />
                </svg>
              </div>
            </a>
            <a class="next" onclick="plusSlides2(1)">

              <div class="rightArrow" onclick="plusSlides(1)">
                <svg height="25" width="25">
                  <polyline points="5,0 20,12 5,24" style="stroke:#FFF; stroke-width:3; fill:none;" />
                </svg>
              </div>
            </a>
          -->
          </div>
          <footer>
            <div class="textmiddle">
              <h2>More Info</h2>
              <a href="team.php" class="button">Our Team <div class="rightarrow">&mdash;></div></a>
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
          <script type="text/javascript">
/*

            var slideIndex2 = 1;
            showSlides2(slideIndex2);

            function plusSlides2(n) {
              showSlides2(slideIndex2 += n);
            }

            function currentSlide2(n) {
              showSlides2(slideIndex2 = n);
            }

            function showSlides2(n) {
              var i;
              var slides2 = document.getElementsByClassName("mySlides");
              if (n > slides2.length) {slideIndex2 = 1}
              if (n < 1) {slideIndex2 = slides2.length}
              for (i = 0; i < slides2.length; i++) {
                  slides2[i].style.display = "none";
              }
              slides2[slideIndex2-1].style.display = "block";
            }
            */
          </script>
        </main>
              <div id="modalOverlay">
                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/judith.jpg" alt="">
                    <div class="content">
                      <h3>Secretary-General</h3>
                      <h4>Judith Chen</h4>
                      <p>
                        Judith is currently a senior at Semiahmoo Secondary and is absolutely honoured to serve as the
                        Secretary-General for PacificMUN 2019. Since her first Model UN conference in Gr 9, Judith
                        has grown a genuine passion for Model UN. She believes that Model UN is an educational
                        experience unlike any other, and serves as an excellent way to develop public speaking skills,
                        expand global awareness, and connect with like-minded individuals. Because of her affinity
                        towards Model UN and its community, she is thrilled to extend her passion to new and
                        seasoned delegates alike and make the next iteration of PacificMUN the best one yet. Outside
                        of Model UN, one can find Judith playing volleyball, blogging, and cultivating new Spotify
                        playlists. She looks forward to welcoming everyone this upcoming February.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/jaskirt.jpg" alt="">
                    <div class="content">
                      <h3>Director-General</h3>
                      <h4>Jaskirt Brar</h4>
                      <p>
                        Jaskirt is currently a senior at Southpointe Academy and is ecstatic
                        to serve as the Director-General at PacificMUN 2019. Ever since his first
                        conference in grade 9, Jaskirt has been attracted to the pragmatic and professional
                        nature of Model United Nations. He truly believes that MUN allows individuals to
                        further themselves as global citizens, step out of their comfort zone, and meet
                        interesting people. By participating in a plethora of different Model United Nation
                        conferences throughout the past four years, he has developed a strong passion for
                        public speaking and international affairs. It also allowed him to cultivate
                        some of his most treasured friendships, and therefore encourages all delegates
                        to be open minded. Outside of MUN, he can be found on the soccer field, running,
                        attempting to become a polyglot, and even navigating Vancouver in search of amazing
                        food. From first time delegates to seasoned staff members, Jaskirt is confident that
                        PacificMUN 2019 will not disappoint. He looks forward to meeting everyone in February!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/adam.jpg" alt="">
                    <div class="content">
                      <h3>Chief of Staff</h3>
                      <h4>Adam Mawji</h4>
                      <p>
                        Adam Mawji, a senior at Southpointe Academy, is ecstatic to be returning
                        for his third PacificMUN and his second year on the Secretariat Team. After
                        serving his time editing backgrounders as the USG of Committees 2 last year,
                        he takes pride in the staff team that has been assembled to make PacificMUN
                        2019 the greatest iteration yet. Throughout all 4 years of his Model UN career,
                        Adam has been transformed by exposure to various perspectives on global issues
                        while writing backgrounders, fascinated by the intricate research he conducted
                        as a delegate, and amazed by all the individuals who he has met through MUN and
                        now calls his best friends.
                        <br><br>
                        While spending most of his time in the Model United Nations Community, Adam still
                        puts significant effort towards attaining his AP Capstone Diploma so this year
                        he can be found drinking bubble tea at the library. Artistically, he has
                        a passion for acting in theater as well as writing and performing his own slam
                        poetry at various competitions. In what little free time he has, Adam can be found
                        exploring Vancouver’s culinary scene with his magnificent friends and cultivating
                        his Instagram. Good luck to all delegates and Godspeed!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/cindy.jpg" alt="">
                    <div class="content">
                      <h3>USG of Delegate Affairs</h3>
                      <h4>Cindy Gao</h4>
                      <p>
                        Embarking on her senior year at Little Flower Academy, Cindy is delighted to be serving as the
                        USG of Delegate Affairs for PacificMUN 2019. After attending her first conference just two years
                        ago, she instantly became captivated by the world of Model United Nations. Constantly chasing
                        the thrill of debating world issues, she has travelled to Santa Barbara, Honolulu, Madrid, and
                        even Tokyo to delegate. Model United Nations truly holds a special place in Cindy’s heart; not
                        only did it spark her passion for global affairs, but it also introduced her to some of her closest
                        friends—people that she would now consider as her second family. Cindy is eagerly awaiting
                        this year’s iteration of the conference, and would like to invite delegates and sponsor teachers
                        to what she is certain will be yet another extraordinary PacificMUN this coming February. She is
                        looking forward to meeting everyone!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/eli.jpg" alt="">
                    <div class="content">
                      <h3>USG of Committees 1</h3>
                      <h4>Eli Lee</h4>
                      <p>
                        Currently a Senior attending Fraser Heights Secondary, Eli is excited to be serving as the Under
                        Secretary General of Committees 1 for Pacific Model United Nations 2019. His Model United
                        Nations career began a little over 3 years ago and he has been immersed in it ever since. From delegating
                        as a country to moderating a debate, Eli has loved the thrill, enjoyment, and passion of the Model
                        United Nations environment. Eli has found so many valuable aspects within Model United
                        Nations and hopes to welcome delegates into this wonderful community at PacificMUN 2019!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/ethan.jpg" alt="">
                    <div class="content">
                      <h3>USG of Committees 2</h3>
                      <h4>Ethan Han</h4>
                      <p>
                        Yi (Ethan) is a grade 12 student taking IB at Semiahmoo Secondary. Having done MUN
                        since grade 8, he is honoured to serve as USG of Committees II for PacificMUN 2019.
                        Captivated by the discussions of international affairs during his first committee
                        session, Yi has not ceased to explore the relations between nations and people.
                        <br><br>
                        MUN has helped Yi grow from a quiet and naive dreamer to someone with voice that
                        could support itself. Through his experiences in MUN, he grew to respect the scope
                        of the international community and develop opinions on the plethora of world issues.
                        However, even as he came to PacificMUN last year as an experienced delegate, seeing
                        people with so many diverse beliefs coming together and the
                        resulting clash in committee sessions still intrigued him. MUN has given Yi
                        countless memories to cherish and always teaches him something new.
                        <br><br>
                        As Yi lives the IB life, he spends much of his time performing generic school activities
                        and free time is readily sacrificed for a nap. Outside of his criminally introverted
                        lifestyle of reading history and philosophy, gaming, watching movies, and
                        procrastinating physics, he’ll occasionally grab people to suffer with him so the
                        net force of loneliness exerted on them is distributed between bodies resulting in
                        reduction of internal stress. Yi knows that every delegate will learn something
                        from the conference and encourages
                        delegates to meet someone new.  He finds that everyone has a worthwhile story to tell
                        and PacificMUN will be an opportunity for everyone to express themselves. Yi looks
                        forward to seeing everyone there!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/skyler.jpg" alt="">
                    <div class="content">
                      <h3>USG of Conference</h3>
                      <h4>Skyler Chan</h4>
                      <p>
                        Skyler is a sophomore at Sir Winston Churchill Secondary’s Prelude French Immersion
                        program and is truly elated to serve as the USG of Conference at PacificMUN 2019. The
                        true culmination of debate, public speaking and global affairs, all of which are his
                        passions: embodies within Model United Nations. Ever since researching a country he
                        didn’t know existed (Albania) in grade 8, until now after over 10 MUN conferences, he’s
                        fallen not only in love with Wikipedia, Thesaurus.com, and Google Docs, but the
                        magnanimous MUN community that he is truly grateful to be a part of. Outside of MUN
                        and debate, Skyler can be found trying not to lose 15-0 while fencing, trying not to go
                        sharp on the flute, and studying for his glider exam. During his real free time, he can be
                        found storming the streets of downtown with his camera and writing run-on sentences.
                        He’s looking forward to welcoming all delegates in February!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/janette.jpg" alt="">
                    <div class="content">
                      <h3>USG of Marketing</h3>
                      <h4>Janette Kim</h4>
                      <p>
                        Janette is a senior at Pacific Academy and is ecstatic to serve as the USG
                        of Marketing for PacificMUN 2019. Enthralled by world events and diplomacy,
                        Janette has attended Model United Nations conferences since grade 9, with her
                        first being PacificMUN 2015 as a day delegate. From being a shy, unconfident
                        14 year old, Janette has grown through MUN and now truly recognizes the impacts of
                        public speaking and networking. Furthermore, Janette believes that MUN not only
                        allows participants to broaden their perspective of the world, but also helps
                        develop rhetoric and critical thinking skills. During her free time, one can see
                        Janette exploring Greater Vancouver's food industry, impulsively shopping, and
                        going out to meet her friends. As Janette has progressed from a day delegate, to
                        a hotel delegate, to a staff member, and finally a secretariat member, Janette
                        is passionate about PacificMUN and its pillars of accessibility, innovation, and
                        global involvement. Janette hopes to see everyone on February 22-24th, 2019 and
                        hopes that the conference is filled with intense debate, collaboration, and communication.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/roozbeh.jpg" alt="">
                    <div class="content">
                      <h3>USG of Media and Design</h3>
                      <h4>Roozbeh Peykari</h4>
                      <p>
                        Roozbeh Peykari, a passionate photographer/Cinematographer currently in grade 12,
                        is proudly serving PacificMUN 2019 as the USG of Media. Roozbeh is returning for his 3rd
                        PacificMUN after serving his first two years as director of cinematography.
                        <br><br>
                        Roozbeh spends most of his time Working as an Apple Master at BestBuy and on Film
                        sets striving to achieve his dream of becoming a Director of Photography in
                        the future. He could not survive with out coffee and a camera, plus a computer
                        to edit on. The love for technology streams through his veins and makes him
                        grateful for the time we are living in.
                        <br><br>
                        Roozbeh would like to disclose to all delegates; good luck, and don’t ever give up on your dreams.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./secretariats/jaewu.jpg" alt="">
                    <div class="content">
                      <h3>USG of IT</h3>
                      <h4>Jae Wu Chun</h4>
                      <p>
                        Jae Wu is a sophomore attending Pacific Academy, and is privileged to be serving as the USG
                        of IT. Being drawn to the idea of a discourse in global affairs, Jae Wu attended his first MUN
                        conference in grade 8. After that experience, he wanted no part of it. Jae Wu entered the
                        world of MUN again, but this time with friends, and he thought, “this is pretty fun.”
                        <br><br>
                        On his seemingly
                        neverending quest to find his passion, creating websites for organizations is what he does on the side.
                        In the meanwhile, he makes
                        sure to please his parents by not allowing both his rice purity score and grade average to fall
                        below a ninety.
                        <br><br>Through the nature of
                        MUN requiring delegates to eloquently play with ideas in every respect, Jae Wu knows that PacificMUN
                        will be an enriching experience for delegates to
                        become more aware of the state of the world, and is looking forward to seeing everyone this
                        February!
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./marketingteam/brooke.jpg" alt="">
                    <div class="content">
                      <h3>Director of Marketing</h3>
                      <h4>Brooke Glazier</h4>
                      <p>
                        Brooke Glazier is a junior attending Carson Graham Secondary School
                        in North Vancouver, BC. After having a ball at last year’s conference,
                        she is happy to serve as a Director of Marketing for PacificMUN 2019.
                        Brooke is the Co-President of her school’s MUN club and has been involved
                        in MUN since the 9th grade. She has attended conferences in Vancouver
                        as well as Europe and enjoys the teamwork and critical-thinking involved
                        in MUN. Her most cherished MUN memories are the delegate socials and
                        midnight crisis’ because that’s when friendships are formed and the
                        debates get heated as more people start to gain the confidence to speak
                        and stir up the debate! Outside of Model UN, Brooke can be found getting
                        involved in her school community, volunteering to spread awareness about
                        opportunities in STEM and spending time with her friends. One
                        recommendation Brooke has for first-timers to the community is to speak
                        as soon as possible in committee because once you’ve done it once, you
                        won’t be nervous to do it again.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="modal">
                    <img src="./marketingteam/annalisa.png" alt="">
                    <div class="content">
                      <h3>Director of Marketing</h3>
                      <h4>Annalisa Mueller-Eberstein</h4>
                      <p>
                        Annalisa Mueller-Eberstein attends the International Community School
                        in Kirkland, WA as a junior in her fourth year of MUN after staffing
                        numerous conferences, participating in multiple types of committees,
                        complaining about gavel hunters, and then becoming a successful
                         gavel hunter. However, one of the best parts of MUN remains the
                         bonding between delegates (and other conference attendees) as well
                         as the debates in and out of committee. Annalisa can't wait to see
                         you all at PacificMUN right after she finishes binge watching
                         a show on Netflix, a project for FBLA, making horrible puns, fangirling,
                         her duties as Vice President of ASB, or most importantly, making MUN memes.
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

        <script>

          $(document).keyup(function(e) {
            var keycode = (e.keyCode ? e.keyCode : e.which);
            if (keycode == '27') {
              // ESC key
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
        </script>

<?php
  include "footer.php";
?>

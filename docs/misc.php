<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - misc page</title>

<?php
  include "header.php";
?>

      <header>
        <div class="bars" onclick="openNav();">
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <h2>PACIFICMUN</h2><h3>Committees</h3>
        <img class="logo" src="logo.svg" alt="logo" />
      </header>

      <main>
        <div id="fullpage">
          <div class="section">
            <div id="ga">
              <img src="#" alt="">
              <div class="ga-inner">
                <div class="ga-header">
                  <div class="bigtext">
                    Miscellaneous
                  </div>
                  <div class="backandforthicons">
                    <a href="advanced.php">
                      <svg height="40" width="30">
                    		<polyline points="15,10 3,20 15,30" stroke="#FFF" stroke-width="4" fill="none"/>
                      	<polyline points="3,20 25,20" stroke="#FFF" stroke-width="4" fill="none"/>
                      </svg>
                    </a>
                    <svg height="40" width="20">
                    	<polyline points="3,40 20,0" stroke="#FFF" stroke-width="2" fill="none"/>
                    </svg>
                    <a href="ga.php">
                      <svg height="40" width="30">
                      	<polyline points="15,10 28,20 15,30" stroke="#FFF" stroke-width="4" fill="none"/>
                      	<polyline points="3,20 25,20" stroke="#FFF" stroke-width="4" fill="none"/>
                      </svg>
                    </a>
                  </div>
                  <div class="liltext">
                    ADHOC | IPC
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section fp-auto-height">
            <div class="grid">
              <a href="adhoc.php">
                <div class="item">
                  <a href="disec.php">
                    <div class="item-inner">
                      <img src="https://www.thefamouspeople.com/profiles/images/jesus-christ-4.jpg" alt="">
                      <div class="item-inner-overlay"></div>
                      <div class="item-content">
                        <div class="item-content-text">
                          ADHOC
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </a>
              <div class="item">
                <div class="item-inner">
                  <img src="" alt="">
                  <div class="item-inner-overlay"></div>
                  <div class="item-content">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <script>
        $('#fullpage').fullpage({
          sectionsColor: ['#303030', '#303030']
        });
      </script>

<?php
  include "footer.php";
?>

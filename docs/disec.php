<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - disec page</title>
    <link href="committee.css" rel="stylesheet">

<?php
  include "header.php";
?>

      <header id="topheader">
        <div class="bars" onclick="openNav();">
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <h2>PACIFICMUN</h2><h3>committees</h3>
        <img class="logo" src="logo.svg" alt="logo" />
      </header>

      <main class="backgrounderpage">
        <div id="container" class="container intro-effect-push">
        			<!-- Top Navigation -->
        			<header class="header">
        				<div class="bg-img"><img src="https://www.mediafire.com/convkey/0719/mri2cdjhhkgm3phfg.jpg" alt="Background Image"/></div>
        				<div class="title">
                <p class="subline">General Assembly</p>
        				<h1>Disarment and International Security</h1>
        				<p>Topic A &#8212; <strong>Hitler's Children </strong> &#8212; Topic B &#8212; <strong>Postmodernist Radicals</strong></p>
        				</div>
        			</header>
        			<button class="trigger">
                <svg height="40" width="30">
                  <polyline points="5,10 15,20 25,10" stroke="#FFF" stroke-width="2" fill="none"/>
                </svg>
              </button>
        			<div class="title">
                <p class="subline">General Assembly</p>
        				<h1>Disarment and International Security</h1>
                <p>Topic A &#8212; <strong>Hitler's Children </strong> &#8212; Topic B &#8212; <strong>Postmodernist Radicals</strong></p>
        			</div>
        			<article class="content">
        				<div>

                  1. Topic A | Backgrounder<br>
                  2. Topic B | Backgrounder<br>
                  2. The Dias/Team<br>
                  <br><br><br><br><br><br>

                  <h3>Flesh-formers, heat-givers, and bone-formers</h3>
        					<p>Mineral matter is quite as necessary for plant as for animal life, and is therefore present in all food, except in the case of some highly-prepared ones, such as sugar, starch and oil. Children require a good proportion of calcium phosphate for the growth of their bones, whilst adults require less. The outer part of the grain of cereals is the richest in mineral constituents, white flour and rice are deficient. Wheatmeal and oatmeal are especially recommended for the quantity of phosphates and other salts contained in them. Mineral matter is necessary not only for the bones but for every tissue of the body.</p>
        					<p>When haricots are cooked, the liquid is often thrown away, and the beans served nearly dry, or with parsley or other sauce. Not only is the food less tasty but important saline constituents are lost. The author has made the following experiments:—German whole lentils, Egyptian split red lentils and medium haricot beans were soaked all night (16 hours) in just sufficient cold water to keep them covered. The water was poured off and evaporated, the residue heated in the steam-oven to perfect dryness and weighed. After pouring off the water, the haricots were boiled in more water until thoroughly cooked, the liquid being kept as low as possible. The liquid was poured off as clear as possible, from the haricots, evaporated and dried. The ash was taken in each case, and the alkalinity of the water-soluble ash was calculated as potash (K2O). The quantity of water which could be poured off was with the German lentils, half as much more than the original weight of the pulse; not quite as much could be poured off the others.</p>

                </div>
        			</article>
        		</div><!-- /container -->
      </main>
      <script type="text/javascript">


        var lastScrollTop = 0;
        // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
        element.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
           var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
           if (st > lastScrollTop){
              $("#topheader").css("opacity", "0");
           } else {
              $("#topheader").css("opacity", "1");
           }
           lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false);
      </script>
      <script type="text/javascript">
      /*!
* classie v1.0.1
* class helper functions
* from bonzo https://github.com/ded/bonzo
* MIT license
*
* classie.has( elem, 'my-class' ) -> true/false
* classie.add( elem, 'my-new-class' )
* classie.remove( elem, 'my-unwanted-class' )
* classie.toggle( elem, 'my-class' )
*/

/*jshint browser: true, strict: true, undef: true, unused: true */
/*global define: false, module: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
hasClass = function( elem, c ) {
  return elem.classList.contains( c );
};
addClass = function( elem, c ) {
  elem.classList.add( c );
};
removeClass = function( elem, c ) {
  elem.classList.remove( c );
};
}
else {
hasClass = function( elem, c ) {
  return classReg( c ).test( elem.className );
};
addClass = function( elem, c ) {
  if ( !hasClass( elem, c ) ) {
    elem.className = elem.className + ' ' + c;
  }
};
removeClass = function( elem, c ) {
  elem.className = elem.className.replace( classReg( c ), ' ' );
};
}

function toggleClass( elem, c ) {
var fn = hasClass( elem, c ) ? removeClass : addClass;
fn( elem, c );
}

var classie = {
// full names
hasClass: hasClass,
addClass: addClass,
removeClass: removeClass,
toggleClass: toggleClass,
// short names
has: hasClass,
add: addClass,
remove: removeClass,
toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
// AMD
define( classie );
} else if ( typeof exports === 'object' ) {
// CommonJS
module.exports = classie;
} else {
// browser global
window.classie = classie;
}

})( window );


//---------------- custom --------------

(function() {

      // detect if IE : from http://stackoverflow.com/a/16657946
      var ie = (function(){
        var undef,rv = -1; // Return value assumes failure.
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE ');
        var trident = ua.indexOf('Trident/');

        if (msie > 0) {
          // IE 10 or older => return version number
          rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        } else if (trident > 0) {
          // IE 11 (or newer) => return version number
          var rvNum = ua.indexOf('rv:');
          rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
        }

        return ((rv > -1) ? rv : undef);
      }());


      // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179
      // left: 37, up: 38, right: 39, down: 40,
      // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
      var keys = [32, 37, 38, 39, 40], wheelIter = 0;

      function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault)
        e.preventDefault();
        e.returnValue = false;
      }

      function keydown(e) {
        for (var i = keys.length; i--;) {
          if (e.keyCode === keys[i]) {
            preventDefault(e);
            return;
          }
        }
      }

      function touchmove(e) {
        preventDefault(e);
      }

      function wheel(e) {
        // for IE
        //if( ie ) {
          //preventDefault(e);
        //}
      }

      function disable_scroll() {
        window.onmousewheel = document.onmousewheel = wheel;
        document.onkeydown = keydown;
        document.body.ontouchmove = touchmove;
      }

      function enable_scroll() {
        window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
      }

      var docElem = window.document.documentElement,
        scrollVal,
        isRevealed,
        noscroll,
        isAnimating,
        container = document.getElementById( 'container' ),
        trigger = container.querySelector( 'button.trigger' );

      function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
      }

      function scrollPage() {
        scrollVal = scrollY();

        if( noscroll && !ie ) {
          if( scrollVal < 0 ) return false;
          // keep it that way
          window.scrollTo( 0, 0 );
        }

        if( classie.has( container, 'notrans' ) ) {
          classie.remove( container, 'notrans' );
          return false;
        }

        if( isAnimating ) {
          return false;
        }

        if( scrollVal <= 0 && isRevealed ) {
          toggle(0);
        }
        else if( scrollVal > 0 && !isRevealed ){
          toggle(1);
        }
      }

      function toggle( reveal ) {
        isAnimating = true;

        if( reveal ) {
          classie.add( container, 'modify' );
        }
        else {
          noscroll = true;
          disable_scroll();
          classie.remove( container, 'modify' );
        }

        // simulating the end of the transition:
        setTimeout( function() {
          isRevealed = !isRevealed;
          isAnimating = false;
          if( reveal ) {
            noscroll = false;
            enable_scroll();
          }
        }, 1200 );
      }

      // refreshing the page...
      var pageScroll = scrollY();
      noscroll = pageScroll === 0;

      disable_scroll();

      if( pageScroll ) {
        isRevealed = true;
        classie.add( container, 'notrans' );
        classie.add( container, 'modify' );
      }

      window.addEventListener( 'scroll', scrollPage );
      trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
    })();


      </script>

<?php
  include 'footer.php';
?>

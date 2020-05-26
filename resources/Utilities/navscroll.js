$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 280) {
      $('#nav').addClass('navbar-top');
    }
    if ($(window).scrollTop() < 281) {
      $('#nav').removeClass('navbar-top');
    }
  });
});

// export function resizeNavBar(TextArea){
//     if (window.pageYOffset > 0) {
    
//         //Change css property to stick to the top
//       { elseif (window.pageYOffset = 0); {
//           TextArea.Change
//         //Change css property to stick to the bottom
//       }
// }

$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

var myNav = document.getElementById('mynav');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
};

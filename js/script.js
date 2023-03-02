$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
  if ($(window).width() >= 980){  

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
    // do something here
  } 
});  
  
  

// document ready  
});

$(document).ready(function () {
  
  'use strict';
  
   var c, currentScrollTop = 0,
    navbar = $('.navScrollSH');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = 130;
     
      currentScrollTop = a;
      if (a > b) {
        $('.megaMenu').addClass("scrolled");
      } else {
        $('.megaMenu').removeClass("scrolled");        
      }
      // if (c < currentScrollTop && a > b) {
      // } else if (c > currentScrollTop && !(a <= b)) {
      // }
      // c = currentScrollTop;
  });

   $('#down').click(function(){
    var angka = $('#jumlahValue').val();
    angka--;
    if ( angka < 0){
      angka = 0;
    };
    $('#jumlahValue').val(angka);
   });

   $('#up').click(function(){
    var angka = $('#jumlahValue').val();
    angka++;
    if ( angka > 100) {
      angka = 100;
    }
    $('#jumlahValue').val(angka);
   });

   $('#down2').click(function(){
    var angka = $('#jumlahValue2').val();
    angka--;
    if ( angka < 0){
      angka = 0;
    };
    $('#jumlahValue2').val(angka);
   });

   $('#up2').click(function(){
    var angka = $('#jumlahValue2').val();
    angka++;
    if ( angka > 100) {
      angka = 100;
    }
    $('#jumlahValue2').val(angka);
   });

   $('#down3').click(function(){
    var angka = $('#jumlahValue3').val();
    angka--;
    if ( angka < 0){
      angka = 0;
    };
    $('#jumlahValue3').val(angka);
   });

   $('#up3').click(function(){
    var angka = $('#jumlahValue3').val();
    angka++;
    if ( angka > 100) {
      angka = 100;
    }
    $('#jumlahValue3').val(angka);
   });
});

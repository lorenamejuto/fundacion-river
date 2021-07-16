//Smooth scroll
function smoothScroll() {
    $('.scrollTo').click(function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
        return false;
    });
}

function toggleMenuElements() {
  $('header .menu').toggle();
  $('.navbar-toggler').toggleClass('menu-animation');
  $('body').toggleClass('fixed-body');
}

//Despliega el menú mobile
function mobileMenu() {
  $('.navbar-toggler').click(function(){
    toggleMenuElements();
  });
}

//Cierra el menu en el click del boton en mobile
function closeMenuOnAnchor() {
  if ($(window).width() < 992){
    $('header nav li a').each(function() {
      $(this).click(function(){
        toggleMenuElements();
      });
    });
  }
}

//Funciones que se llaman en el document ready
$(document).ready(function() {
    smoothScroll();
    mobileMenu();
    closeMenuOnAnchor();
});

//Funciones que se llaman en el windows resize
$(window).on('resize', function(){
  closeMenuOnAnchor();
});

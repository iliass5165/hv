$( document ).ready(function() {
    $('.carousel.carousel-slider').carousel({full_width: true});
	$('.button-collapse').sideNav();
	$(".dropdown-button").dropdown();
	$('select').material_select();
	$('.datepicker').pickadate({selectMonths: true, selectYears: true, selectYears: 100});
});
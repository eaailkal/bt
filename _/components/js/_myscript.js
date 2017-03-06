$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#registration a:contains('Registration')").parent().addClass('active');
	$("#program a:contains('Program')").parent().addClass('active');
	$("#venue a:contains('Venue')").parent().addClass('active');
	$("#contact a:contains('Contact')").parent().addClass('active');


	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

}); //jQuery is loaded
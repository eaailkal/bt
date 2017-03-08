$(function() {

	//activate program tabs
	var hash = window.location.hash;
	hash && $('ul.nav a[href="' + hash + '"]').tab('show');

	//controlling opening of accordions
	$('#saturday.accordion-body').addClass('in');
	$('#program #sunday.accordion-body').addClass('in');
	$('#registration #saturday.accordion-body').removeClass('in');
	$('#contact #saturday.accordion-body').removeClass('in');
	
	//add bootstrap classes to photos
	$('.abouttheartists img').addClass('img-circle');
	$('aside.photosfromlastyear img').addClass('img-thumbnail');
	$('aside.aboutattractions img').addClass('img-thumbnail');
	$('.artistinfo .photogrid img').addClass('img-circle');

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
	});//hoverhover


	//show tooltips
	$("[data-toggle='tooltip']").tooltip({ animation: true});

	//show modals with last year photos
	$('.modalphotos img').on('click', function() {
		$('#modal').modal({
			show: true,
		})

		var mysrc = this.src.substr(0, this.src.length-7) + '.jpg'; // delete last 7 characters
		$('#modalimage').attr('src', mysrc);
		$('#modalimage').on('click', function(){
				$('#modal').modal('hide');
		})//hide modal on click
	});//show modal

}); //jQuery is loaded
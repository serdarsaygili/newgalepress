$(document).ready(function () {

	$('.extra_settings').hide();
		
	$('#show_extra_settings').click(function() {
	  $('.extra_settings').slideDown();
	  $(this).parent('p').remove();
	});

});
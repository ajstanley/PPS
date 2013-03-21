$(function () {
	var austDay = new Date();
	austDay = new Date(2013 , 5 - 1, 31, 16);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
});
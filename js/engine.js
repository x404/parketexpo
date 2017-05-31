$(document).ready(function(){
	$('.navbar-toggle').click(function(e){
		e.preventDefault();
		$('.mobile-header').slideToggle();
	});
});
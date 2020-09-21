$(document).ready(function(){

	//login
	$("#loginopen").click(function(){
		$("#loginpage").fadeIn();
	});

	$(".logsinclose").click(function(){
		$("#loginpage").fadeOut();
	});

	$("#loginOpen").click(function(){
		$("#signupage").fadeOut(function() {
			$("#loginpage").fadeIn();
		});
	});

	//signup
	$("#signupopen").click(function(){
		$("#signupage").fadeIn();
	});

	$(".logsinclose").click(function(){
		$("#signupage").fadeOut();
	});

	$("#signupOpen").click(function(){
		$("#loginpage").fadeOut(function() {
			$("#signupage").fadeIn();
		});
	});

});

//content show















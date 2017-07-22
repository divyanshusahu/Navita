// Universal script for login
$(document).ready(function(){
	$('#login').click(function(){
		document.getElementById('logindiv').style.display="block";
	});
	$('.close').click(function(){
		document.getElementById('logindiv').style.display="none";
	});
	$('.cancelbtn').click(function(){
		document.getElementById('logindiv').style.display="none";
	});
});

var modal = document.getElementById('logindiv'); // close login form on outside click
window.onclick = function(event) {
	if (event.target == modal) {
        modal.style.display = "none";
	}
}
// login script ends

// Index page top review change script 
$(document).ready(function(){
	$('#review1').click(function(){
		document.getElementById('user1').style.display="block";
		document.getElementById('user2').style.display="none";
		document.getElementById('user3').style.display="none";
		$('#review1').addClass("active");
		$('#review2').removeClass("active");
		$('#review3').removeClass("active");
	});
	$('#review2').click(function(){
		document.getElementById('user1').style.display="none";
		document.getElementById('user2').style.display="block";
		document.getElementById('user3').style.display="none";
		$('#review1').removeClass("active");
		$('#review2').addClass("active");
		$('#review3').removeClass("active");
	});
	$('#review3').click(function(){
		document.getElementById('user1').style.display="none";
		document.getElementById('user2').style.display="none";
		document.getElementById('user3').style.display="block";
		$('#review1').removeClass("active");
		$('#review2').removeClass("active");
		$('#review3').addClass("active");
	});
});
// script ends

// Index page review location change
$(document).ready(function(){
	$('#location-1').click(function(){
		$('#location-1').addClass("active");
		$('#location-2').removeClass("active");
		$('#location-3').removeClass("active");
		$('#location-4').removeClass("active");
	});
	$('#location-2').click(function(){
		$('#location-1').removeClass("active");
		$('#location-2').addClass("active");
		$('#location-3').removeClass("active");
		$('#location-4').removeClass("active");
	});
	$('#location-3').click(function(){
		$('#location-1').removeClass("active");
		$('#location-2').removeClass("active");
		$('#location-3').addClass("active");
		$('#location-4').removeClass("active");
	});
	$('#location-4').click(function(){
		$('#location-1').removeClass("active");
		$('#location-2').removeClass("active");
		$('#location-3').removeClass("active");
		$('#location-4').addClass("active");
	});
});
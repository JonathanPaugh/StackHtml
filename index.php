<?php



?>

<!--INDEX.HTML-->

<!DOCTYPE html>
<html lang="en">

<head>

	<!--Meta-->
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
	
	<!--External-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="/assets/css/open-iconic.min.css" rel="stylesheet">
	
	<!--Internal-->
	<link href="/assets/css/main.css" rel="stylesheet">
	
	<title>JAPE_SLANG</title>

</head>

<body>

	<div class="main">

		<div class="section-text">

			<div class="container-fluid h-100">

				<div class="row h-100 align-items-center justify-content-center">

					<div class="col-4 text-center" id="text_content">
						
						<h1 class="display-1 p-2">Hey You!</h1>
						
						<p class="lead">Enter something in the input and get ready for the greatest experience of your entire life</p>
						
						<input class="input-text">
						<br><!--THIS HAS GOT TO BE REMOVE I AINT ABOUT THAT LIFE-->
						
						<button class="btn btn-outline-primary btn-lg m-3" id="text_button1" type="button">Send</button>
						<br><!--THIS HAS GOT TO BE REMOVE I AINT ABOUT THAT LIFE-->
						
						<button class="btn btn-outline-primary btn-lg m-3" id="text_button2" type="button"><span class="oi oi-audio"></span> Suh</button>
						
					</div>

				</div>

			</div>

		</div>

	</div>

</body>

<!--SCRIPT CORE-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--SCRIPT LIBRARY-->
<script>

// IM AN INLINE SCRIPT LETS DO SOME JQUERY!

$(document).ready(function(){ // Activate jquery
	
	$("#text_button2").click(function(){ //Jquery function to animate
		animate();
	});
});
	
//FUNCTIONS (AND VARIABLES)	OUTSIDE THE JQUERY CALL ARE SCOPED TO THE ENITRE DOCUMENT (VARIABLES CAN ONLY BE ACCESSED AFTER DECLARED THOUGH)
var animate = function() {
	$("#text_content").animate({"left": "-50%"}, 1000);
	$("#text_content").animate({"left": "50%"}, 1000, animate);
}

</script>

</html>
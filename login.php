<?php

// SESSION INFORMATION
require_once($_SERVER["DOCUMENT_ROOT"]."/assets/php/session.php");

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
	<link href="./assets/css/open-iconic.min.css" rel="stylesheet" />

	<!--Internal-->
	<link href="/assets/css/main.css" type="text/css" rel="stylesheet" />

	<title>JAPE_SLANG</title>

</head>

<body>
	<div class="main">

		<div class="section-text">

			<div class="container-fluid h-100">

				<div class="row h-25 justify-content-center" id="game_sky">
					<div class="col-12 p-3 text-right">
						<p>Level <span id="game_level">0</span>/100</p>
					</div>
				</div>

				<div class="row h-100 align-items-center justify-content-center">

					<div class="col-4 text-center border no-gutter" id="text_content">

						<h1 class="display-1 p-2">Login</h1>

						<p class="lead">Enter your username</p>

						<input class="input-login" name="input-login">
						<br><!--THIS HAS GOT TO BE REMOVE I AINT ABOUT THAT LIFE-->

						<button class="btn btn-outline-primary btn-lg m-3" id="login_button" type="button" action="/assets/php/login.php">Login</button>
						<br><!--THIS HAS GOT TO BE REMOVE I AINT ABOUT THAT LIFE-->

					</div>
					<br>

					<div class="col-12 h-75 bg-dark" id="game_floor">
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
	
</html>

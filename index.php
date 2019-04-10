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

				<div class="row h-25 justify-content-center" id="game_sky">
					<div class="col-12 p-3 text-right">
						<p>Level <span id="game_level">0</span>/100</p>
					</div>
				</div>
				
				<div class="row h-100 align-items-center justify-content-center">
					
					<div class="col-4 text-center border no-gutter" id="text_content">
						
						<h1 class="display-1 p-2">Hey You!</h1>
						
						<p class="lead">Enter something in the input and get ready for the greatest experience of your entire life</p>
						
						<input class="input-text">
						<br><!--THIS HAS GOT TO BE REMOVE I AINT ABOUT THAT LIFE-->
						
						<button class="btn btn-outline-primary btn-lg m-3" id="text_button1" type="button">Send</button>
						<br><!--THIS HAS GOT TO BE REMOVE I AINT ABOUT THAT LIFE-->
						
						<button class="btn btn-outline-primary btn-lg m-3" id="text_button2" type="button"><span class="oi oi-audio"></span> Suh</button>
						
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
<script>

// IM AN INLINE SCRIPT LETS DO SOME JQUERY!

$(document).ready(function(){ // Activate jquery
	
	// INIT //
	
	var _GAME_RUN;
	var _GAME_OBJECT_COUNT;
	var _GAME_CURRENT_OBJECT;
	var _GAME_PREVIOUS_OBJECT;
	
	$("#game_floor").hide();
	$("#game_sky").hide();
	
	// FUNCTIONS //
	
	function initGame(){
		_GAME_RUN = false;
		_GAME_OBJECT_COUNT = 0;
		_GAME_CURRENT_OBJECT = "#text_content";
		_GAME_PREVIOUS_OBJECT = "";
		$("#game_floor").show();
		$("#game_sky").show();
	}
	
	function endGame(){
		$(_GAME_CURRENT_OBJECT).addClass("border");
		$(_GAME_CURRENT_OBJECT).addClass("border-danger");
		
		setTimeout(function(){ // Wait 5 seconds before reset
			$('[id*="game_object_"]').parent().remove();
			$("#text_content").css("left", "");
			initGame();
			$("#game_floor").hide();
			$("#game_sky").hide();
		}, 2500);
	}
	
	$(document).mousedown(function(e){ 
		if (e.button == 0){
			if (_GAME_RUN == true){
				
				let c = _GAME_OBJECT_COUNT;
				let w = (100 - _GAME_OBJECT_COUNT) / 4;
				
				let s = (_GAME_OBJECT_COUNT / 200) + 1;
				let p = (Math.random() * 50);
				
				if (Math.random() >= 0.5){
					p = -Math.abs(p);
				}
				
				// End level
				animateStop(_GAME_CURRENT_OBJECT);
				
				// Test if in bounds
				if (_GAME_OBJECT_COUNT > 0){
					if(!evaluateBounds(_GAME_CURRENT_OBJECT, _GAME_PREVIOUS_OBJECT)){
						endGame();
						return;
					}
				}
				
				// Start new level
				$("#game_sky").after('<div class="row h-25 align-items-center justify-content-center"><div class="col h-100 bg-dark game-object" id="game_object_' + c + '" style="max-width:' + w + '%;left:' + p + '%"></div></div>');
				_GAME_PREVIOUS_OBJECT = _GAME_CURRENT_OBJECT;
				_GAME_CURRENT_OBJECT = "#game_object_" + c;

				animateStart(_GAME_CURRENT_OBJECT, p, s);
				
				_GAME_OBJECT_COUNT++;
				
				$("#game_level").text(_GAME_OBJECT_COUNT);
			}
		}
	});
	
	$("#text_button1").click(function(){
		var ret = "";
		var s =	$(".input-text").val();
		
		for (var i = s.length; i >= 0; i--){ // Reverse string by decrementing from full length string
			ret += s.charAt(i);
		}
		
		$(".input-text").val(ret); // Set field to return
	});
	
	$("#text_button2").click(function(){ // Jquery function to animate
		initGame();
		animateStart(_GAME_CURRENT_OBJECT, 0, 1);
		setTimeout(function(){_GAME_RUN = true;}, 100);
	});
	
});
	
// FUNCTIONS (AND VARIABLES) OUTSIDE THE JQUERY CALL ARE SCOPED TO THE ENITRE DOCUMENT (VARIABLES CAN ONLY BE ACCESSED AFTER DECLARED THOUGH)
function evaluateBounds(objectCurrent, objectPrevious){
	var curr = $(objectCurrent);
	var prev = $(objectPrevious);
	
	var currOffset = curr.offset();
	var prevOffset = prev.offset();
	
	currOffset.right = currOffset.left + curr.outerWidth(true);
	prevOffset.right = prevOffset.left + prev.outerWidth(true);
	
	if(currOffset.left > prevOffset.right){
		return false;
	}
	
	if(currOffset.right < prevOffset.left){
		return false;
	}
	
	return true;
}
	
function animateStart(object, position, speed){
	if (Math.random() >= 0.5){
		animateLeft(object, position, speed);
	} else {
		animateRight(object, position, speed);
	}
}
	
function animateLeft(object, position, speed){
	var s = speed;
	var p = position;
	
	p += 50; // Now on a scale (0 to 100)
	p *= 10; // Now on a scale (0 to 1000)
	
	$(object).animate({"left": "-50%"}, p/s);
	$(object).animate({"left": "50%"}, 1000/s, function(){animateLeft(object, 50, s)});
}
	
function animateRight(object, position, speed){
	var s = speed;
	var p = position;
	
	p += 50; // Now on a scale (0 to 100)
	p *= 10; // Now on a scale (0 to 1000)
	p -= 1000;        // Reverse
	p = Math.abs(p);  // Scale
	
	$(object).animate({"left": "50%"}, p/s);
	$(object).animate({"left": "-50%"}, 1000/s, function(){animateRight(object, -50, s)});
}

function animateStop(object){
		$(object).stop(true,false);
}
	
</script>

</html>
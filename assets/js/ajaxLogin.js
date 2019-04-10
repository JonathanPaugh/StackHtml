$(document).ready(function(){
	$("#login_button").click(function(){
		$.ajax({
			type: "post",
			url: "/assets/php/validateLogin.php",
			data: {ACCOUNT_USER: $(".input-login").val()},
			success: function(result){
				if (result == "true"){
					window.location.href = "/index.php";
				}
			}
		});
	});
});
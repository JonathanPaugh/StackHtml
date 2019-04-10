<?php

// SESSION INFORMATION
require_once($_SERVER["DOCUMENT_ROOT"]."/assets/php/session.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/assets/php/validatePassword.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if (!in_array($_POST["ACCOUNT_USER"], $_GET_LOGIN) === false) {
		$_SESSION["account_user"] = $_POST["ACCOUNT_USER"];
		echo "true";
	} else {
		echo "false";
	}
}

?>
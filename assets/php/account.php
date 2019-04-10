<?php

if (!isset($_SESSION["account_user"])) {
    header("Location: login.php");
	die();
}

?>
<?php

if (!isset($_SESSION["account_user"])) {
    header("Location: ".$_SERVER['DOCUMENT_ROOT']."login.php");
	die();
}

?>
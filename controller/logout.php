<!--Logout controller-->
<?php
	//cookies expires, redirect to index
	setcookie("connected", "val", time() -(120), "/", null, false, true);
	setcookie("admin", "val", time() -(120), "/", null, false, true);
	include_once("../controller/index.php");
?>
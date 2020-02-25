<?php
require_once("inc/init.php");
require_once("inc/header.php");
?>
<?php if (!AdminIsConnected()) {
	header('location:index.php');
	exit();

}?>
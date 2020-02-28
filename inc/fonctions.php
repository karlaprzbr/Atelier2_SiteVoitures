<?php 

function isAdminConnected() {
	if(!isset($_SESSION["admin"])){
		return false;
	}else{
		return true;
	}
}

?>
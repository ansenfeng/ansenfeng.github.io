<?php
	require_once 'include/user.php';

	if( hasUser($_GET['user']) ){
		echo "string";
	}else {
		echo "没有此用户！";
	}
?>

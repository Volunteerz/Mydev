<?php 

require_once 'config.php';


session_start();



function current_manager(){
	if (empty($_SESSION['current_login_manager'])) {
		header('Location:/Mydev/admin/login.php');
		exit();
	}

	return $_SESSION['current_login_manager'];
};

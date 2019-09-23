<?php require APP_ROOT . '/views/inc/header.php'; 

if(empty($_SESSION['user'])){
	require 'login.php';
}else{
	require 'dashboard.php';
}

require APP_ROOT . '/views/inc/footer.php'; ?>
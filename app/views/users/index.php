<?php

if(empty($_SESSION['user'])){
	redirect('users/login');
}else{
	redirect('tasks/index');
}


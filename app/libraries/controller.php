<?php

/*
 *Base Controller
 *Loads the models and views
 */

class Controller {
	//Load model
	public function model($model){
		if(file_exists('../app/models/' . $model . '.php')){
			require_once '../app/models/' . $model . '.php';
			//Instantiate model
			return new $model();
		}else{
			die("Model file not found");
		}
	}

	//Load view

	public function view($view, $data = []){
		if(file_exists('../app/views/' . $view.'.php')){
			require_once '../app/views/' . $view . '.php';			
		}else{
			die('View not found');
		}
	}
}
<?php

class Tasks extends Controller{

	public function index(){
		$this->view('tasks/index');
	}

	public function create(){
		$this->view('tasks/add-task');
	}

}
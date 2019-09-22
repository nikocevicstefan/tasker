<?php

class Categories extends Controller{
	public function index(){
		$this->view('categories/index');
	}

	public function create(){
		$this->view('categories/add-category');
	}
}
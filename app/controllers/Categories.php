<?php

class Categories extends Controller{
	private $categories;

	public function __construct(){
		$this->categories = $this->model('Category');
	}

	public function index(){
		$categories = $this->categories->getCategories();
		$this->view('categories/index', $categories);
	}

	public function create(){
		$this->view('categories/add-category');
	}

	public function store(){
		$this->categories->store($_POST);

		redirect('categories/index');
	}

	public function delete($id){
		$this->categories->delete($id);
		redirect('categories/index');
	}
}
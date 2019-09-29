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

	public function edit($category){
		$category = $this->categories->getCategory($category);
		$this->view('categories/edit-category', $category);
	}

	public function update(){
		$this->categories->update($_POST);
		redirect('categories/index');
	}

	public function delete($id){
		$this->categories->delete($id);
		redirect('categories/index');
	}
}
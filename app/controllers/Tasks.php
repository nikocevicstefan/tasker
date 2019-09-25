<?php

class Tasks extends Controller{

	private $tasks;

	public function __construct(){
		$this->tasks = $this->model('Task');
	}

	public function index(){
		$tasks = $this->tasks->getTasks();
		$this->view('tasks/index', $tasks);
	}

	public function create(){
		$categories = $this->model('Category');
		$categories = $categories->getCategories();
		$this->view('tasks/add-task', $categories);
	}

	public function store(){
		$this->tasks->store($_POST);
		redirect('tasks/index');
	}

	public function filter($params){
		$category = $params[0];
		$tasks = $this->tasks->getTasksByCategory($category);
		$this->view('tasks/filtered', $tasks);
	}

}
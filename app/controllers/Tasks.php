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

	public function edit($task){
		$categories = $this->model('Category');
		$categories = $categories->getCategories();
		$task = $this->tasks->getTask($task);
		$this->view('tasks/edit-task', ['categories' => $categories, 'task' => $task]);
	}

	public function update(){
		$this->tasks->update($_POST);
		redirect('tasks/index');
	}

	public function delete($id){
		$this->tasks->delete($id);
		redirect('tasks/index');
	}

}
<?php

class Users extends Controller{

	private $users;

	public function __construct(){
		$this->users = $this->model('User');
	}

	public function index(){
		$data = $this->users->getUsers();

		$this->view('users/index', $data);
	}
}
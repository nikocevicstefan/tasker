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

	public function register(){
		$this->view('users/register');
	}

	public function storeUser(){
		 $this->users->register($_POST);
	}

	public function login(){
		$this->users->login($_POST);
	}
}
<?php

class User
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}


	public function getUsers()
	{
		$this->db->query("SELECT * FROM users");

		$result = $this->db->resultSet();

		return $result;
	}

	public function register($userData)
	{

		$sql = "INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)";

		$this->db->query($sql);

		$this->db->bind(':name', $userData['name']);
		$this->db->bind(':username', $userData['username']);
		$this->db->bind(':email', $userData['email']);
		$this->db->bind(':password', $userData['password']);

		$this->db->execute();
	}

	public function login($userData)
	{
		$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
		$this->db->query($sql);

		$this->db->bind(':username', $userData['username']);
		$this->db->bind(':password', $userData['password']);

		$loggedUser = $this->db->single();
		if ($this->db->rowCount()) {
			$_SESSION['user'] = $loggedUser->id;
		} else {
			echo "No user found";
		}
	}
}

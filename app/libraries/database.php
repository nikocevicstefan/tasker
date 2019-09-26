<?php

/*
  PDO Database Class
  Connect to Database
  Create prepared statements
  Bind Values
  Return rows and results
 */

class Database
{

	private $host = DB_HOST;
	private $user = DB_USER;
	private $password = DB_PASS;
	private $dbname = DB_NAME;

	private $dbHandler;
	private $stmt;
	private $error;

	public function __construct()
	{

		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		try {
			$this->dbHandler = new PDO($dsn, $this->user, $this->password);
			return $this->dbHandler;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			echo $this->error;
		}
	}

	//prepare statement with query
	public function query($sql)
	{
		$this->stmt = $this->dbHandler->prepare($sql);
	}

	//Bind values
	public function bind($param, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindParam($param, $value, $type);
	}

	//execute the statement
	public function execute()
	{
		return $this->stmt->execute();
	}

	//Get result set as array of objects
	public function resultSet()
	{
		$this->execute();
		$resultSet = $this->stmt->fetchAll();
		return $resultSet;
	}

	//Get single record sa object
	public function single()
	{
		$this->execute();
		$singleRecord = $this->stmt->fetch();
		return $singleRecord;
	}


	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
}

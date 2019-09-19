<?php

  /*
   *App Core Class
   *Analyzes URL and loads core controller
   *URL FORMAT - /controller/method/params
   */

  class Core{
  	protected $currentController = 'Users';
  	protected $currentMethod = 'index';
  	protected $params = [];

  	public function __construct(){
  		$url = $this->getUrl();

  		//look in controllers for first value
  		if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php'))
  		{
  			//set as current controller
  			$this->currentController = ucwords($url[0]);
  			//Unset 0 index
  			unset($url[0]);
  		}


  		require_once '../app/controllers/' . $this->currentController . '.php';
  		$this->currentController = new $this->currentController;

  		//Check for second url parameter
  		if(isset($url[1])){
  			if(method_exists($this->currentController, $url[1])){
  				$this->currentMethod = strtolower($url[1]);
  				//Unset 1 index
  				unset($url[1]);
  			}
  		}

  		//Get remaining url params
  		$this->params = $url ? array_values($url) : [];

  		//Call a callback with array of params
  		call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  	}

  	public function getUrl(){
  		if(isset($_GET['url'])){
  			//remove trailing slash from url
  			$url = rtrim($_GET['url'], '/');
  			//url sanitization
  			$url = filter_var($url, FILTER_SANITIZE_URL);
  			//make an array of params divided by a slash
  			$url = explode('/', $url);

  			return $url;
  		}
  	}
  }  
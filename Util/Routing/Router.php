<?php
class Router{
	private $url;
	private $routes = [];
	
	public function __construct($url){
		$this->url = $url;
	}
	
	public function get($path, $callable){
		$route = new Route ($path, $callable);
		$this->routes["GET"][] = $route;
		return $route;
	}
	
	public function run(){
		if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
			die('tu fais de la merde 1!!!');
		}
		foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
			if ($route-> match($this->url)){
				return $route->call();
			}
		}
		die('tu fais de la merde !!! 2
				');
	}
}

?>
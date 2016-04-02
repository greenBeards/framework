<?php
//include 'Html5Element.php';


class HeadElement extends Html5Element{
	public function __construct(){
		Parent::__construct("head", []);
	}
	public function addAttributes(array $attributes){}
}
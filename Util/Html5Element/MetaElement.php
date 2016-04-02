<?php
include 'StandaloneElement.php';

class MetaElement extends StandaloneElement{
	public function __construct(array $attributes=[]){
		parent::__construct("meta", $attributes);		
	}
}
?>
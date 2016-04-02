<?php
class BodyElement extends Html5Element{
	public function __construct(array $attributes=[]){
		parent::__construct("body", $attributes);
	}
}
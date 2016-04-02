<?php
class HtmlElement extends Html5Element{
	public function __construct(array $attributes=[]){
		Parent::__construct("html", $attributes);
	}
}
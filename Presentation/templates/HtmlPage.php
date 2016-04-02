<?php
class HtmlPage{
	private $page;
	public function __construct(string $title ="", string $description){
		$head=new Head($title, $description);
		$this->page=new HtmlElement(["class"=>"no-js", "lang"=>"french"]);
		$this->page->addContent($head->getHead());
		$body=new BodyElement();
		$body->addContent("Hey Salut mon gars ca va?");
		$this->page->addContent($body);
	}
	
	public function __toString(){
		return $this->page->__toString();
	}
	
	
}
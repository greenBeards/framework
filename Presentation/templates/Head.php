<?php
import ('Util.Html5Element.*');

class Head{
	
	private $head;
	
    public function __construct(){
    	$this->head=new HeadElement();
    	$this->head->addContent(new MetaElement(["charset"=>"utf-8"]));
    	$this->head->addContent(new MetaElement(["http-equiv"=>"x-ua-compatible", "content"=>"ie=edge"]));
    	$this->head->addContent(new MetaElement(["name"=>"description", "content"=>"Un CMS un peu bizarre et pas encore du tout fini..."]));
    	$this->head->addContent(new MetaElement(["name"=>"viewport", "content"=>"width=device-width, initial-scale=1"]));
    }
    
    public function getHead() : HeadElement{
    	return $this->head;
    }
}
?>
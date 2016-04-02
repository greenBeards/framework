<?php
abstract class Html5Element{

	public static $MASTER_ELEMENT = "html";

	protected $tag;
	protected $attributes;
	protected $parent;
	protected $content= [];

	public function __construct(string $tag,array $attributes){
		$this->tag=$tag;
		$this->attributes=$attributes;
	}

	public function ancestors() : array{
		$currentElement = $this;
		$ancestors=[];
		$level=0;

		while($currentTag->getTag() != $MASTER_ELEMENT){
			$currentElement=$currentElement->getParent();
			$level++;
			$ancestors[$level]=$currentTag;
		}
		return $ancestors;
	}

	public function getTag() : string{
		return $this->tag;
	}

	public function getAttributes() : array{
		return $this->attributes;
	}

	public function getParent() : Html5Element{
		return $this->parent;
	}

	public function addAttribute(string $attributeName, string $value){
		$this->attributes[$attributeName]=$value;
	}
	//abstract public function addAttributes(array $attributes);
	
	public function removeAttibute(string $attributeName){
		if(($key = array_search($attributeName, $attributes)) !== false) {
    		unset($attributes[$key]);
    	}
	}
	
	public function addContent($content){
		array_push($this->content, $content);
	}
	

	public function removeAttributes(){
		$this->attributes=[];
	}
	
	public function __toString(){
		$toHtml = "<$this->tag";
		foreach ($this->attributes as $key=>$value){
			$toHtml.=" $key=\"$value\"";
		}
		$toHtml.=">";
		foreach($this->content as $content){
			if(is_string($content)){
				$toHtml.=$content;
			}else if ($content instanceof Html5Element){
				$toHtml.=$content->__toString();
			}
		}
		$toHtml.="</$this->tag>";
		return $toHtml;
	}
}
?>
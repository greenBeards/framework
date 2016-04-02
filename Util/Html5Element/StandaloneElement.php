<?php
abstract class StandaloneElement extends Html5Element{
	public function __toString(){
		$toHtml = "<$this->tag";
		foreach ($this->attributes as $key=>$value){
			$toHtml.=" $key=\"$value\"";
		}
		$toHtml.="/>";
		return $toHtml;
	}	
}
?>
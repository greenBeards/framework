<?php

import('Presentation.aHtmlBuilder');
import('Util.Html5Element.*');

class HtmlIndexBuilder extends aHtmlBuilder{

	
	public function buildHtmlPage(array $content):Html5Element{
		$page = new HtmlElement();
	
		$head = new HeadElement();
		$head->addContent(new MetaElement(["charset"=>"utf-8"]));
		$head->addContent(new MetaElement(["http-equiv"=>"x-ua-compatible", "content"=>"ie=edge"]));
		$head->addContent(new MetaElement(["name"=>"description", "content"=>"Un CMS un peu bizarre et pas encore du tout fini..."]));
		$head->addContent(new MetaElement(["name"=>"viewport", "content"=>"width=device-width, initial-scale=1"]));
	
		$page->addContent($head);
	
		$body = new BodyElement();
		$body->addContent("bonjour bonjour");
	
		$page->addContent($body);
	
		return $page;
	}
}
?>
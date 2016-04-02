<?php
	require_once 'Util/import.php';
	import('Presentation.IndexController');
	import('Presentation.HtmlIndexBuilder');
	
	$url=$_GET["url"];
	
	$url=trim($url, '/');
	$parameters=explode('/', $url);

	

	$classNameControleur=$parameters[0]."Controller";
	$classNameHtmlBuilder="Html".$parameters[0]."Builder";
	
	if(class_exists($classNameControleur) && class_exists($classNameHtmlBuilder)){
		$commandController = new $classNameControleur();
		$HtmlBuilder = new $classNameHtmlBuilder();
		
		$contentArray = $commandController->execute([]);
		
		echo ($HtmlBuilder->buildHtmlPage([])->__toString());
		
	}else{

		phpinfo();
	}
	
	
?>

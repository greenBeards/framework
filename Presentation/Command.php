<?php
import('Presentation.iProvider');
abstract class Command implements iProvider{
	
	
	static protected $listeners = [];
	
	public function addListener(int $listenerKey, iListener $listener){
		if ($listeners[$listenerKey]===null){
			$listeners[$listenerKey]=[];
		}
		array_push($listeners[$listenerKey],$listener);
	}
	
	public function removeListener(int $listenerKey, iListener $listener){
		//TODO
	}
	
	
	abstract public function execute(array $content):array;
	
}

?>
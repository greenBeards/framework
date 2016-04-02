<?php

interface iProvider{
	
	public function addListener(int $listenerKey, iListener $listener);
	public function removeListener(int $listenerKey, iListener $listener);
}
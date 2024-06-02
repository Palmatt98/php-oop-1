<?php
class Genere {
	private string $type;
	private string $environment;

	public function getType():string {
		return $this->type;
	}
	public function getEnvironment():string {
		return $this->environment;
	}
	
	public function setType(string $_type):void {
		$this->type = $_type;
	}
	public function setEnvironment(string $_environment):void{
		$this->environment = $_environment;
	}
}



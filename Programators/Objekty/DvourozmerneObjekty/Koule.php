<?php
class Koule implements TrojrozmernyObrazec
{
	private $polomerR;

	public function __construct($polomerR)
	{
		$this->polomerR = $polomerR;

	}
	public function ziskejObjem()
	{
		return $this->polomerR*$this->polomerR*$this->polomerR*(4/3)*PI();
	}
	
	public function ziskejPovrch()
	{
		return 4*pi()*$this->polomerR*$this->polomerR;
	}
}
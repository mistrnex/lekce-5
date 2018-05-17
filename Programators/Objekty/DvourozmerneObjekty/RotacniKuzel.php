<?php
class RotacniKuzel implements TrojrozmernyObrazec
{
	private $polomerPodstavy;
	private $vyska;
  
	public function __construct($polomerPodstavy, $vyska)
	{
		$this->polomerPodstavy = $polomerPodstavy;
		$this->vyska = $vyska;
  
	}
	public function ziskejObjem()
	{
		return $this->polomerPodstavy*$this->polomerPodstavy*$this->vyska*(pi()/3);
	}
	
	public function ziskejPovrch()
	{
		return pi()*$this->polomerPodstavy*($this->polomerPodstavy+sqrt($this->polomerPodstavy*$this->polomerPodstavy+$this->vyska*$this->vyska));
	}
}
<?php
/**
* 
*/
class Mexican{
	public $Pablo;
	public $cholo;
	public $gang;

	
	function  __construct($Pablo, $cholo, $gang)
	{
		$this->Pablo = $Pablo;
		$this->cholo = $cholo;
		$this->gang = $gang;
	}

	function gang() {
		return "I am " . $this->Pablo . " " . "and I am " . $this->cholo . " " . "and I am in a " . $this->gang;
	}
}
$Pablo = new Mexican("Pablo", "cholo", "gang");
echo $Pablo->gang();
echo "<br>";
echo $Pablo

?>
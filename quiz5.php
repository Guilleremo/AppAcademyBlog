<?php
/**
* 
*/
class Alaskan{
	public $igloos;
	public $weapon;
	
	function __construct($igloos, $weapon, $dog)
	{
		$this->igloos = $igloos;
		$this->weapon = $weapon;
	}

	function hunt(){
		return "I'm Donaji and I have many" . $this->igloos . " " . "I am myself a UFC " . $this->weapon;
	}
}

$donaji = new Alaskan(7, "spear", "Husky");
echo $donaji->hunt();
echo "<br>";
?>
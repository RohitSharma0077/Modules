<?php
class temperature
{
	public $temp=32;
	


	public function farhenToCelsius()
	{
		return(($this->temp-32)*(5/9));
	}
public function celciusTofarhen()
	{
		return($this->temp*(9/5)+32);
	}
}

	$obj=new temperature;
	echo "F to C :";
	echo $obj->farhenToCelsius();
	echo "<br>";
	echo "C to F :";
	echo $obj->celciusTofarhen();
?>

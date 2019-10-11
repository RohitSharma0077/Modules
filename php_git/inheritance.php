<?php

class Cars
{
	protected $model;

	public function setModel($model)
	{
		$this->model=$model;
	}
}


class Sportscar extends Cars
{
	
	public function hello()
	{
		return "beep! I am a <i>".$this-> model."</i><br/>";
	}
}

$sportscar1=new Sportscar();
$sportscar1->setModel('Mercedes Benz');
echo $sportscar1->hello();
?>


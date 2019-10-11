<?php
class rectangle
{
	public $length=10;
	public $width=10;


	public function getPerimeter()
	{
		return(2* ($this->length+$this->width));
	}
public function getArea()
	{
		return($this->length * $this->width);
	}


}
$obj=new rectangle;
	echo "Perimeter :";
	echo $obj->getPerimeter();
	echo "<br>";
	echo "Area :";
	echo $obj->getArea();

	
?>

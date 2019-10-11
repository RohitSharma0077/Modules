<!-- syntax : double underscore construct keyword    i.e: _ _construct -->

<?php
class Mycontructor{
public $a;
public $b;

public function __construct($a1,$b1){
	echo "the class  ".__class__."  initiated";
	echo "<br>";
	echo "Parameters are: <br>";
	$this->a=$a1;
	echo $this->a;
	echo "<br>";
	$this->b=$b1;
	echo $this->b;

}
}
$obj=new Mycontructor(1,2);


?>
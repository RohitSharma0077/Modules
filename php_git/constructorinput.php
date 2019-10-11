<!-- syntax : double underscore construct keyword    i.e: _ _construct -->

<?php
extract($_POST);
if(isset($_POST['submit'])) 
{
	class Mycontructor{
	public $a;
	public $b;


		public function __construct($a1,$b1)
		{
			$this->a=$a1;
			$this->b=$b1;
			echo $this->a+$this->b;
			
		}
	}

	$obj=new Mycontructor($first,$second);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>contructor</title>
</head>
<body >
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	Enter  first no. :<input type="number" name="first">
	Enter  second no. :<input type="number" name="second">
	<input type="submit" name="submit" value="Result">











</form>

</body>
</html>
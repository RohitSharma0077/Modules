<?php
class a
{
	public function function_a()
	{
		echo"class A";
	}
}
 class b extends a
{
     public function function_b()
     {
     	echo"class B";
     }
}
class c extends b
{
   public function function_c()
   {
   	echo"class C";
   }
}

$C=new c();
echo $C->function_c();
//echo c:: function_c();
echo c::function_b();
echo c::function_a();
?>

<?php
 abstract class a
 {
 abstract function b();
 public function c()
 {
 	echo"Can be use as it is";
 }
 }

 class m extends a
 {
 	public function b()
 	{
 		echo"Defined function b<br/>";
 	}

 }
 $tClass =new m();
 $tClass->b();
 $tClass->c();
 ?>
<?php
 class Foo
 {
 	public function hello()
 	{
 		printf("class Foo method hello..");
 	}
 }
 class Po extends Foo{

 	public function hello()
 	{
 		printf("class child method hello..");

 		//calling parent method
 		parent::hello();
 	}
 }

 $po_obj=new Po();
 $po_obj->hello();
 ?>
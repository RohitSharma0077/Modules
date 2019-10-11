<html>
<body>
    <?php
    $a=1234;
    $b=12.4;
    $c=0.123;
    $d=0x123;
   var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
    echo"<br>";
    
                                              //array
    $s=array("ab","abc",1000);
    var_dump($s);
    echo"<br>";
    
    
                                            //string legth
    $len=strlen("hello space count");
    echo $len."<br>";
    
    $str="12345";
   $len1= strlen($str);
    echo $len1."<br>";    
    
                                                 // word count
    $count=str_word_count("count the words");
    echo $count;
    echo"<br>";
                                                //string reverse
    $reverse=strrev("hello");
    echo $reverse."<br>";
    
     //string pos  
    echo strpos("this  is demo","this"); 
    echo "<br>";          // index from 0
    
    // str replace

    echo str_replace("demo","test","this is demo");

    // ltrim
echo"<br>";
    $text="Helloworld";
    echo ltrim($text,"He");
    echo"<br>";
    echo trim($text,"rld");
    

  echo strchr($text,"world");

  //php constant
echo"<br>";
  define ("test",10);
  echo test;
echo"<br>";
$a1=10;
$a2="10";
echo $a1===$a2;

// for each
$arr=array("a","b","c");
foreach($arr as $d)
{
  echo $d;
}




    ?>
    </body>
</html>
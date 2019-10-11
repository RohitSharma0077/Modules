<!DOCTYPE html>
<html>
<head>
	<title>arrays</title>
</head>
<body>
<?php
// indexed arr

$s=array("a","b","b1");
//print_r($s);
$len=count($s);
for($i=0;$i<$len;$i++)
{
	echo $s[$i];
}
echo "<br>";

// associative array

$s=array("kashif"=>30,"ajay"=>10,"rishu"=>20);
echo $s["kashif"];
echo $s["ajay"];
echo $s["rishu"];
echo "<br>";
echo "before sort : <br>";
foreach ($s as $key => $value) {
	echo $key." is ".$value."year old<br>";
}
echo "after sort in ascending on values based: <br>";
asort($s);
print_r($s);
echo "<br>";
echo "after sort in ascending on keys based: <br>";
ksort($s);
print_r($s);
echo "<br>";
//var_dump($s);



//multidim. array

$ar=array(
     array(1,2,3),
     array(4,5,6),
     array(7,8,9));
for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++){
		echo $ar[$i][$j];
        }
echo"<br>";
}

// foreach multi
foreach ($ar as $row) {
		foreach ($row as $val) {

			echo "$val";
		}
		echo "<br>";
}
// sorting

	$arr1 = array(5,1,4,2);
	sort($arr1);
	foreach ($arr1 as $val1) {
		echo $val1;
	}


// class
echo "<br>";
$car=array(
     array("volvo",22,18),
     array("bmw",5,6),
     array("lykan",8,9));
foreach ($car as $row1) {
		foreach ($row1 as $val1) {

			echo "$val1";
		}
		echo "<br>";
}

// convert string into array

$str="a b c d e";
print_r(explode(" ", $str));
echo "<br>";

// array splice
$arr1 = array(5,1,4,2);
	
$add="empty";
array_splice($arr1,3,0,$add);     //array_splice(arr_name,insert_position,start index,new arr)
print_r($arr1);



 // array slice          array_slice(arrname,index, no.of elements);
 echo "<br>";
 $arrr = array(5,1,4,2,7);
array_slice($arrr,0,3);
print_r($arrr);

// array_unique(arr name)
?>





</body>
</html>
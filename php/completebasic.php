<?php
//echo "suman";

//variable
//$a=" great php developer";
//echo  "i am suman and i am $a";

$a="Suman";
$b="Tiwari";
//echo $a.' '.$b;

//$b="hi i am top 5 php developer";
//echo strtoupper($b);
//echo strtolower ($b);
//echo ucfirst($b);
//echo lcfirst($b);
//echo ucwords($b);


//Operators
//earthmtic operator(+,-,*,/,%)
$c=10;
$d=40;
//echo $c+$d;

//Assignment operator
$e=40;
$f=50;

$e+=$f;
//echo $e; 

//Comparison operator
$g='10';
if($g==10){
//echo "Yes";
}

//Array (Indexed, Associative, Multidimentional)
//Indexed
//$arr=array("Suman","Pankaj","Rishu");
//echo '<pre>';
//print_r($arr);

//assosiated array
/*foreach($arr as $key=>$val){
//echo $val;
//echo "<br>";
}*/

//Multidimensional
//$arr=array("student"=>array("name"=>"suman","city"=>"Delhi",
//"subject"=>array("English","Hindi"),"age"=>10
//));
//echo '<pre>';
//print_r($arr);

//Some function in array
//$arr=array("Suman","Pankaj","Rishu","Manish","Bunty");
//echo count($arr);
//sort($arr);
//ksort($arr);
//print_r($arr);

$arrCity=array("Faridabad","Delhi","Noida","Goa","Haryana");
sort($arrCity);
?>

<select>
  <option>Select City</option>
<?php
foreach($arrCity as $city){
   echo "<option>$city</option>";
}
?>

</select>











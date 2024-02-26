<?php

//function add(){
 //echo "Hi Suman";
//}
//add();


//Two type of function Parametria's fn and non-parmetria fn



//function add(){
 //return 10;
//}
//$x=add();
 //echo $x+20;

//function add($x,$y){
  // echo $x+$y;
//}
//add(10,20);

//another one
$x=20;
function add(){
   global $x;
   echo $x;
}
add();



?>

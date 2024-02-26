<?php
$con=mysqli_connect("localhost","root","","student");
//$sql="insert into myfirst_table (name,id,city,state) values('Pankaj','3','Gurgaon','Haryana')";
//mysqli_query($con,$sql);

//sql="update myfirst_table set name='suman' where id=1";
//sql="delete from student where id=1";


//select ki query data retrieve karti hai or jb bhi select query ka data retrieve krna hota hai
//to hum loop ka use karte hai see in bellow.

$sql="select * from myfirst_table";
$res=mysqli_query($con,$sql);
while($row=mysql_fetch_assoc($res)){
    echo'<pre>';
    print_r($row);


}


?>
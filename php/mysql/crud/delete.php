<?php
include('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:login.php');
    die();
}
$id=mysqli_real_escape_string($con,$_GET['id']);
mysqli_query($con,"delete from student where id='$id'");
header('location:indexc.php');
die();
?>
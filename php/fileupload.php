<?php
  if(isset($_POST['submit'])){
   $file=rand(11111111,999999999);
 
//ek file(suman HTML resume)ko media folder me 
//upload kr diya or $file=rand code se ek rendum no. bhi de
//diya.

   echo "<pre>";
   print_r($_FILES);
   $file=rand(1111,9999);
   move_uploaded_file($_FILES['doc']['tmp_name'],'media/'.
   $file.$_FILES['doc']['name']);
}

?>
<form method="post" enctype="multipart/form-data">
   <input type="file" name="doc">
   <input type="submit" name="submit">
   

</form>
<?php
  if(isset($_POST['submit'])){
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      echo $num1+$num2;
}     

?>

<form method="post">
  <input type="textbox" name="num1" placeholder="Num1"/>
  <input type="textbox" name="num2" placeholder="Num2"/>

  <input type="submit" name="submit"/>

</form>


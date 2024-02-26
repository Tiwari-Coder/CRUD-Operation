<?php
 session_start();
 unset($_SESSION['x']);  //kisi particular session ke delete krne ke liye
 session_destroy();      //pure session ko delete krne ke liye
?>
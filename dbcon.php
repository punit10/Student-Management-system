<?php

$con = mysqli_connect('localhost','username','password','databasename');

//$con = mysqli_connect('localhost','root','','sms');
if(!$con)
{
  die("connection error:".mysqli_connect_error());
}



?>

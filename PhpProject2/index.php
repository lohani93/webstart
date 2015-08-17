<?php
if(!(isset($_SESSION['login'])&&$_SESSION['login']))
    header("location:/signup.html");
require 'mysql.php';    
$user=$_POST['name'];
$password=$_POST['password'];
$query="Select *from login where username='$user' AND password='$password'";
if(($row=$connection->query($connection,$query))&&$row>0){
  session_start();
  $_SESSION['user']=$row[0]['username'];
  $_SESSION['login']=1;
  echo "User succesfully login give him/her a session id and redirect it to home page";
}
else{
    echo"password and email did not match plz provide again"; 
}
?>

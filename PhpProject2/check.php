<?php
require 'mysql.php';    
$user=$_POST['username'];
$password=$_POST['password'];
//echo $user;
//echo $password;
$query="Select * from login where username='$user' AND password='$password'";
if(($result=$connection->query($query))){
  $row=  mysqli_fetch_array($result);
  var_dump($row);
  session_start();
  $_SESSION['user']=$row['username'];
  $_SESSION['login']=1;
  ob_end_clean();
  header("location:/home.php");
}
else{
    echo"password and email did not match plz provide again"; 
}

?>

<?php
require 'mysql.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="Insert into login values ('$user','$pass')";
if($connection->query($sql)){
    ob_end_clean();
    header("location:login.html");   
    //http_redirect("\login.html", , $session, $status)
    
}
?>
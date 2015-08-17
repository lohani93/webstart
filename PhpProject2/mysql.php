<?php
$servername="localhost";
$username="root";
$password="jabong@123";
$dbname='phpcrud';
$connection=new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error){
    die("Could not connect to the  database".$connection->connect_error);
    
}
?>

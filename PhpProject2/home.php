<?php
session_start();
if(isset($_SESSION['login'])&&$_SESSION['login']){
  echo '<html>
         <head>
           <title></title>
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         </head>
         <body>
          <div>'.$_SESSION['user'].' are welcome here do you want to change things</div>
          <form method="POST" action="logout.php"> 
          <input type="submit"></input>
          </form>
         </body>
        </html>';
}
else{
    header("location:/login.html");
}
?>

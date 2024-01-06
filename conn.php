<?php
session_start();
echo "<h2>123</h2>";
if(!$_SESSION["name"]){
      header("Location: http://localhost/vpn/login.php");
}
else{
  $x=$_SESSION["name"];
  echo  "<h1>$x logedin</h1>";  
}
?>
<html>
    <body>
    <a href="http://localhost/vpn/logout.php">logout</a>
    </body>
</html>
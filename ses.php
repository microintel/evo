<?php
session_start();
echo "<h2>123</h2>";
if(!$_SESSION["name"]){
      header("Location: http://localhost/vpn/new.php");
}
else{

    header("Location: http://localhost/vpn/conn.php");
}
?>
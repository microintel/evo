<?php
session_start();
if(!$_SESSION["name"]){
      header("Location: http://localhost/vpn/login.php");
}
?>
<html>
    <body>
        <marquee>hiiiiiii</marquee>
        <a href="http://localhost/vpn/logout.php">logout</a>
    </body>
</html>
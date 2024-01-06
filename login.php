<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            background-color: transparent;
         margin-top: 2%;
            border-radius: 25px;
        }
        #drama{
            font-family: cursive;
             border-radius: 25px;
              width: 20%; 
              height: 50%; 
              padding: 40px;
               box-shadow: 3px 3px 20px;
                margin-top: 12%;
            animation-name: d1;
            animation-duration: 1.5s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in;
            backdrop-filter: blur(0px);

        }
        @keyframes d1{
            0%{
                backdrop-filter: blur(0px)}
        20%{
                backdrop-filter: blur(2px)}
        40%{
                backdrop-filter: blur(4px)}
        60%{
                backdrop-filter: blur(6px)}
        80%{
                backdrop-filter: blur(8px)}
     
        100%{
                backdrop-filter: blur(10px)}
        }
    </style>
 
    <body style="background-image: url(p1.jpg);background-attachment: fixed;  background-size: cover;"  >  
        <h1 style="font-family: cursive; text-align: center;"> WELCOME TO MICROINTEL </h1>
        <center> <div id="drama">
       <h2>Login</h2>


       
       <form action="login.php" method="get">
        <label for="user">username:</label>
        <input type="text" name="user" id="user"><br>
        <label for="pass">password:</label>
        <input type="text" name="pass" id="pass"><br>
        <button type="submit" style="background-color: transparent; border-radius: 10px; font-family: cursive; margin-top: 2%;">LOGIN</button><br>
        <a href="new.php" style="margin-top: 2%; color: black;">sign_up</a></form>
        </div>
    </center>

    <?php
    if($_GET){
        $sinc=mysqli_connect("localhost","root","","users");

    $qry="SELECT nam,pas FROM data";

    $out=mysqli_query($sinc,$qry);
    $un="";
    while($da=mysqli_fetch_assoc($out)){
        if($_GET["user"]==$da["nam"] && $_GET["pass"]==$da["pas"] ){
                      $un=$da["nam"];
        }
    } 
    
    if($un==$_GET["user"]){
        $_SESSION["name"]=$_GET["user"];
         header("Location: http://localhost/vpn/conn.php");
    }
    else{

        echo "<h1>invalid user id and password</h1>";
    }
}

    ?>
</body>
</head>

</html>
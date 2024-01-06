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
       <h2>sign_up</h2>


       <form action="new.php" method="get">
        <label for="user">username:</label>
        <input type="text" name="user" id="user"><br>

        <label for="pass">mail:</label>
        <input type="text" name="mail" id="pass"><br>

        <label for="pass">password:</label>
        <input type="text" name="pass" id="pass"><br>
        
        <button type="submit"  style="background-color: transparent; border-radius: 10px; font-family: cursive; margin-top: 2%;" >submit</button>
        </form> 
        <a href='login.php'><button style='background-color:transparent; border-radius:25px;'>Go_back _to_login</button></a>   
        

    </div>

    </center>
    <?php
   if($_GET){
   $sinc=mysqli_connect("localhost","root","","users");
   $uNAME=$_GET['user'];
   $uPASS=$_GET["pass"];
   $uMAIL=$_GET["mail"];
   $qry="INSERT INTO data(nam, pas, mail) VALUES ('$uNAME','$uPASS','$uMAIL')";
   $out=mysqli_query($sinc,$qry);
    echo "<h1>data inserted</h1>";
   }
    ?>

</head>

</html>
<?php


if($_GET){
$con=mysqli_connect("localhost","root","","chat");
$sql="SELECT msg FROM conv WHERE send=7411 AND rec=505";
$out=mysqli_query($con,$sql);
while($da=mysqli_fetch_assoc($out)){
         
    echo $da["msg"];
    echo "<br>";


}

if($_GET["msg"]){
    $x=$_GET["msg"];
    $ins="INSERT INTO conv(send,rec,msg) VALUES (7411,505,'$x')";
    $out=mysqli_query($con,$ins);
    echo $x;
}

}

?>


<html>
    <body>
        <form method="get" action="indec.php">
            <input type="text" name="msg">
            <button type="submit">send msg</button>
        </form>
    </body>
</html>


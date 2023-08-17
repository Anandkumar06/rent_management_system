<?php
session_start();
$conn= mysqli_connect("localhost","root","","rent");
if(isset($_POST["sub1"]))
{
$usrid= $_POST["u"];
$pasw= $_POST["p"];
$sql="select * from user where email='$usrid' and pass='$pasw'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row>0)
{

header("location:userinterface.php");
$_SESSION["email"]=$row[6];
$_SESSION["userid"]=$row[1];
$_SESSION["name"]=$row[2];
}
else
{
    echo "wrong password";
}
}



?>
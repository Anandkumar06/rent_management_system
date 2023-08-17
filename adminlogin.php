<?php
session_start();
$conn= mysqli_connect("localhost","root","","rent");
if(isset($_POST["sub"]))
{
$aid= $_POST["aname"];
$apasw= $_POST["apsw"];
$sql="select * from admin where email='$aid' and pass='$apasw'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row>0)
{
$_SESSION["email"]= $row[1];
header("location:admininterface.php");
}
else
{
    echo "wrong password";
}
}
?>
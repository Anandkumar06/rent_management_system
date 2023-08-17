<?php

$conn= mysqli_connect("localhost","root","","rent");
if(isset($_POST["sub"]))
{
$N= $_POST['Name'];
$C = $_POST['Contact'];
$E = $_POST['Email'];
$A = $_POST['Address'];
$P= $_POST['Psw'];
$R = $_POST['Repsw'];
$G = $_POST['Gender'];

$sql2="select max(sno) from user";
$result=mysqli_query($conn,$sql2);
$row=mysqli_fetch_row($result);
$str='RMS00';
$id=rand(1,100);
$str1=$str.$id;

$conn= mysqli_connect("localhost","root","","rent");
$sql="insert into user(userid,name,mobile,email,address,pass,repass,gen) values('$str1','$N',$C,'$E','$A','$P','$R','$G')";

if(mysqli_query($conn,$sql))
{
    header("location:user_login.html");
}
else
{
    echo "not ok";
    echo mysql_error($conn);
}
}



?>

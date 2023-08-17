<?php
session_start();
$conn= mysqli_connect("localhost","root","","rent");

$e=$_SESSION["email"];
$sql="select * from user where email='$e'";
$result=mysqli_query($conn,$sql);
$row=@mysqli_fetch_array($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.min.js"> </script>
    <title>Document</title>
    <style>
    .d1{
            background-color: black;
            width: 20%;
            height: 885px;
            float: left;
            border: solid;
        }
        button:hover{
            background-color: cornsilk;
        }
        .d2{
            width: 80%;
            height: 885px;
            float: left;
            border: solid;
            text-align: center;
            background-color: honeydew;
        }
        .img1 {
            width: 20%;
            border-radius: 10%;

        }
    </style>
	<script>
	 function a()
    {
      alert("profile updated");
    }
	
	</script>
</head>

<body>
    <div class="d1">
        <h2 style="color: cornsilk; text-align: center; margin-top: 50px;"><b>USER</b></h2>
        <hr color="white" style="width: 100%; height: 2px;">
        <a href="userinterface.php">
        <button style="width: 100%; height: 60px;">MY PROFILE</button>
        </a>
       <a href="payment.php">
        <button style="width: 100%; height: 60px;">MAKE PAYMENT</button>
       </a>
       <a href="receipt.php">
        <button style="width: 100%; height: 60px;">RECEIPT</button>
        </a>
        <a href="us_changepswd.php">
        <button style="width: 100%; height: 60px;">CHANGE PASSWORD</button>
        </a>
        <a href="user_login.html">
        <button style="width: 100%; height: 60px;">LOGOUT</button>
        </a>
        </div>

        <div class="d2">
          <img src="img/user.jpg" class="img1">
          <p  id="p1" ><b><?php echo @$row[2]; ?></b></p>
          <br>
          <center>
         <form action="#" method="POST">
            <table border="2px solid black" style="width: 60%;">
            <tr><td>USER ID</td> <td><input type="text" name="t1" value="<?php echo @$row[1]; ?>" style="width: 550px;"></td></tr>
            <tr><td>FULL NAME</td> <td><input type="text" name="t2" value="<?php echo @$row[2]; ?>" style="width: 550px;"></td></tr>
            <tr><td>FATHER'S NAME</td> <td><input type="text" name="t3" value="<?php echo @$row[3]; ?>" style="width: 550px;"></td></tr>
            <tr><td>MOBILE</td> <td><input type="text" name="t4" value="<?php echo @$row[4]; ?>" style="width: 550px;"></td></tr>
            <tr><td>ALTERNATE MOBILE</td> <td><input type="text" name="t5" value="<?php echo @$row[5]; ?>" style="width: 550px;"></td></tr>
            <tr><td>EMAIL ID</td><td><input type="text" name="t6" value="<?php echo @$row[6]; ?>" style="width: 550px; height:50px;" ></td></tr>
            <tr><td>GENDER</td><td><input type="text" name="t7" value="<?php echo @$row[9];?>" style="width: 550px;"></tr>
            <tr><td>COUNTRY</td><td><input type="text" name="t8" value="<?php echo @$row[10]; ?>" style="width: 550px;"></td></tr>
            <tr><td>STATE</td><td><input type="text" name="t9" value="<?php echo @$row[11];?>" style="width: 550px;"></td></tr>
            <tr><td>CITY</td><td><input type="text" name="t10" value="<?php echo @$row[12];?>"  style="width: 550px;"></td></tr>
            <tr><td>RENT</td><td><input type="text" name="t11" value="<?php echo @$row[13]; ?>" style="width: 550px;"></td></tr>
            <tr><td>DEPOSIT</td><td><input type="text" name="t12" value="<?php echo @$row[14];?>"  style="width: 550px;"></td></tr>
            <tr><td>ADDRESS</td><td><input type="text" name="t13" value="<?php echo @$row[15];?>"  style="width: 550px;"></td></tr>
            <tr><td>ACCOMODATION TYPE</td><td><input type="text" name="t14" value="<?php echo @$row[16];?>"  style="width: 550px;"></td></tr>
          </table>
		  <br>
		  <br>
		  <p> please enter the details correctly and click for update your profile </p>
		   <input type="submit" name="sub1" value="UPDATE" style="background-color:darkblue; color:white;" onclick="a()">
		   <br><br>
         </form>
         </center>
         </div>
</body>
</html>

<?php

$conn= mysqli_connect("localhost","root","","rent");
if(isset($_POST["sub1"]))
{
$r=$_POST['t1'];
$fn= $_POST['t3'];
$m = $_POST['t5'];
$cont = $_POST['t8'];
$st = $_POST['t9'];
$ct= $_POST['t10'];
$rn=$_POST['t11'];
$dp=$_POST['t12'];
$acc=$_POST['t14'];


$sql="UPDATE user SET fathername='$fn', altmobile='$m', country='$cont',state='$st',city='$ct', rent='$rn',deposit='$dp', acctype='$acc' WHERE userid='$r' ";


if(mysqli_query($conn,$sql))
{
header("location:userinterface.php");	

}
}
?>
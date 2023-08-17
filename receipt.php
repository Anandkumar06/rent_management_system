<?php
session_start();
$conn= mysqli_connect("localhost","root","","rent");

$e=$_SESSION["name"];
$sql="select * from payment where name='$e'";
$result=mysqli_query($conn,$sql);
$row=@mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
</head>
<style>
    .d1{
            background-color: black;
            width: 19.5%;
            height: 950px;
            float: left;
            border: solid;
        }
        button:hover{
            background-color: cornsilk;
        }
        .d2{
            align-items: center;
            width: 80%;
            height: 950px;
            float: left;
            text-align: center;
            background-color: honeydew;
        }
	
	
</style>
<body>
    <div class="d1">
    
        <h2 style="color:cornsilk; text-align: center; margin-top: 50px;"><b>USER</b></h2>
        <hr color="white" style="width: 100%; height: 2px;">
		 <a href="userinterface.php">
        <button style="width: 100%; height: 60px;">MY PROFILE</button></a>
		 <a href="payment.php">
        <button style="width: 100%; height: 60px;">MAKE PAYMENT</button></a>
        <a href="receipt.php">
        <button style="width: 100%; height: 60px;">RECEIPT</button>
    </a>
		 <a href="index.html">
        <button style="width: 100%; height: 60px;">LOGOUT</button></a>
        </div>

     <div class="d2">
        <h2 style="color: black; text-align: center; margin-top: 50px;"><b>PAYMENT RECEIPT</b></h2>
        <hr color="black" style="width: 100%; height: 2px;">
        
            <br>
            <br>
            <br><br><center><h1><b><u>Online Payment Receipt</u><b></b></h1></center>
              <p>save this receipt for further need.</p>
              <hr>
              <br>
              <br>
            <center>
                <form action="#" method="POST">
                <table style="width: 50%;">
                  <tr><td>Name</td> <td><input type="text" id="t2" value="<?php echo @$row[1]; ?>" style="width: 300px ;"></td></tr>
                  <tr><td>USER ID</td> <td><input type="text" id="t3" value="<?php echo @$row[0]; ?>" style="width: 300px;"></td></tr>
                  <tr><td>Payment Date</td><td><input type="text" id="t4" value="<?php echo @$row[2]; ?>" style="width: 300px;"></td></tr>
                  <tr><td>Payment status</td><td><input type="text" id="t5" value="<?php echo @$row[3]; ?>" style="width: 300px;"></td></tr>
                </table>
                <br>
                <br>
            <button onclick="window.print()" style="width: 20%; height: 40px; background-color:lightblue;"><b>PRINT</b></button>
            </form>
            </center> 
       </div>
    </div>
</html>
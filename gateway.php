<?php
session_start();
    if($_SESSION["email"]){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script>
        function a()
        {
            confirm("Do you want to confirm your payment")
            document.getElementById("i1").value = "Paid";
        }
				
	 </script>
	 </head>
	 <body bgcolor=" honeydew">
	 <center>
            <br><br><br>

      <h1 style="background-color:brown;"><b>SELECT YOUR PAYMENT MODE AND CLICK FOR PROCEED</b></h1>
         <br><br>
         <form action="payment_success.php" method="POST">
        <div style="float: left; width:350px;height: 250px;">
        <button onclick="a()" width="200px" height="200px" alt="credit" name="pay" id="i1"><img src="img/credit.jpg"></button>
           <!-- <input type="image" src="../img/credit.jpg" name="submit" id="i1" width="200px" height="200px" alt="submit" onclick="a()" > -->
            <p> CREDIT CARD</p>
        </div>
        <div style="float: left; width:350px;height: 250px;">
        <button onclick="a()" width="200px" height="200px" alt="credit" name="pay" id="i1"><img src="img/debit.jpg"></button>
              <!-- <input type="image" src="../img/debit.jpg" name="submit" id="i1" width="200px" height="200px" alt="submit" onclick="a()" > -->
            <p>DEBIT CARD</p>
            </div>
        <!-- <div style="float: left; width:350px;height: 250px;">
        <button onclick="a()" width="200px" height="200px" alt="credit" name="pay" id="i1"><img src="img/netbanking.jpg"></button> -->
            <!-- <input type="image" src="../img/netbanking.jpg" name="submit" id="i1" width="200px" height="200px" alt="submit" onclick="a()"> -->
        <!-- <p>NET BANKING</p> 
        </div> -->
        <div style="float: left; width: 350px;height: 250px;">
        <button onclick="a()" width="200px" height="200px" alt="credit" name="pay" id="i1"><img src="img/upi.jpg"></button>
            <!-- <input type="image" src="../img/upi.jpg" name="submit" id="i1" width="200px" height="200px" alt="submit" onclick="a()" >  -->
        <p>UPI</p>
        </div>
        </form>
		<center>
		 <a href="payment.php">
		<button style="width: 25%; height: 50px; background-color:lightblue;float:"left">CANCEL</button></a>
		 <a href="index.php">
		<button style="width: 25%; height: 50px; background-color:pink; float:"left">HOME</button></a>
		</center>
        </body>
        <?php
}
else{
    header("location:userlogin.php");
}
?>
		</html>
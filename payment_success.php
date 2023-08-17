<?php
session_start();
    $reg =$_SESSION['userid'];
	$name=$_SESSION['name'];
	//$email=$_SESSION['email'];
	$date= date("y/m/d");

	$connection = mysqli_connect("localhost","root","","rent");
	//$db = mysqli_select_db($connection,"registration");
	$query = "insert into payment values('$reg','$name','$date','$_POST[pay]')";
	$query_run = mysqli_query($connection,$query);


	
?>
<script type="text/javascript">
	alert("Payment Successful!!!")
	window.location.href = "payment.php"; 
</script> 
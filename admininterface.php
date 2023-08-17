
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "rent");
    $e=$_SESSION['email'];
    $sql="select * from admin where email='$e'";
    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        /* div for admin dashbord heading */
        .d1{
            background-color: black;
            width: 20%;
            height: 721px;
            float: left;
            border: solid;
        }
        /*for hoving the text in dashboard heading */
        button:hover{
            background-color: cornsilk;
        }
        /*div for dashboard page */
        .d2{
            background-color:lightblue;
            width: 80%;
            height: 721px;
            float: left;
            border: solid;
        }
        /*div for students */
        /*.d3{
            width: 20%;
            height: 110px;
            float: left;
            border: solid;
            background-color: lightsalmon;
            margin-top: 80px;
            margin-left: 25px;
        }*/
        
    </style>
</head>
<body>
<div class="d1">
<h2 style="color: cornsilk; text-align: center; margin-top: 50px;"><b>ADMIN</b></h2>
<hr color="white" style="width: 100%; height: 2px;">
<button style="width: 100%; height: 60px;">DASHBOARD</button>
<a href="ad_changepswd.php">
<button style="width: 100%; height: 60px;">CHANGE PASSWORD</button>
</a>
<a href="index.html">
<button style="width: 100%; height: 60px;">LOGOUT</button>
</a>
</div>
<div class="d2">

<h2 style="font-family: Monotype Corsiva; margin-top: 60px; margin-left: 25px;"><b>ADMIN DASHBOARD</b></h2>
<hr color="black" style="height: 2px; margin-left: 25px; margin-right: 25px;">
<form action="#" method="POST">
<h2 style="text-align: center;"><b>WELCOME <?php echo @$row[0]; ?></b></h2>
</form>
<a href="renters.php">
<button style="width: 20%; height: 110px; color: lightsalmon; margin-top: 80px; margin-left: 25px;">RENTERS</button>
</a>
<a href="paymentdetails.php">
<button style="width: 20%; height: 110px; color: lightsalmon; margin-top: 80px; margin-left: 250px;"> NEW PAYMENTS</button>
</a>
<!-- <button style="width: 20%; height: 110px; color: lightsalmon; margin-top: 80px; margin-left: 75px;">RECIEPT</button> -->
<!--<div class="d3">
 <h4 style="text-align: center; margin-top: 30px;">STUDENTS</h4>

</div>-->
</div>
    
</body>
</html>
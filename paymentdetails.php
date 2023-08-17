<?php
session_start();
    if($_SESSION["email"]){

$conn = mysqli_connect("localhost","root","","rent");
	//$db = mysqli_select_db($connection,"registration");
    $query = "select * from payment";
	$query_run = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="skyblue">
            <form action="">
        <div>
            <center><h3 style="font-family: Freestyle Script; font-size: xx-large;"><u><b>Renter's Payment Details</b></u></h3>
            <table style="color:black; background-color: #f2f2f2;" border="2">
                <tr>
                    <th style="width: 150px;"><b>USER ID</b></th><th style="width: 250px;"><b>Name</b></th><th style="width: 150px;"><b>Payment Date</b></th><th style="width: 150px;"><b>Payment Status</b></th>
                </tr>
                <tr>
                <?php      
        while($row = mysqli_fetch_array($query_run)){
        echo "<tr><td>".$row["userid"]."</td><td>".$row["name"]."</td> <td>".$row['date']."</td><td>".$row["payment"]."</td> </tr>";
        }
        ?>
                </tr>
            </table></center>
        </div>
    </form>
</body>
<?php
}
else{
    header("location:adminlogin.php");
}
?>
</html>
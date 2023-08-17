
<?php
session_start();
$conn= mysqli_connect("localhost","root","","rent");
if(isset($_POST["sub"]))
{
    $reg =$_POST["tr"];
    $sql="select * from user where userid='$reg' ";
    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 79%;
            height: 721px;
            float: left;
            border: solid;
			text-align: center;
        }
    </style>
</head>
<body>
    <div class="d1">
        <h2 style="color: cornsilk; text-align: center; margin-top: 50px;"><b>ADMIN</b></h2>
        <hr color="white" style="width: 100%; height: 2px;">
		<a href="admininterface.php">
        <button style="width: 100%; height: 60px;">DASHBOARD</button></a>
        <a href="ad_changepswd.php">
        <button style="width: 100%; height: 60px;">CHANGE PASSWORD</button>
        </a>
        <a href="index.html">
        <button style="width: 100%; height: 60px;">LOGOUT</button>
        </a>
        </div>
        <div class="d2">
		 <h2 style="color: black; text-align: center; margin-top: 50px;"><b>RENTERS RECORD</b></h2>
        <hr color="black" style="width: 100%; height: 2px;">
		
            <form action="#"  method="POST" style="background-color:honeydew;">
            <br><br><br>
            <b>USER ID :</b><input type="text" name="tr" placeholder="Enter the user id">
            <br><br>
            <input type="submit" name="sub" value="Proceed" style="color: orange; background-color: green; ">
            <br><br>
            </form>
        
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
		  <br>
         </form>
         </center>
</body>
</html>
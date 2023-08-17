<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "rent");
if (isset($_POST["sub"]))
{
    $reg =$_POST["tr"];
    $sql="select * from user where userid='$reg' ";
    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);
	echo mysqli_error($conn);
	echo $row[0];
}
?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
	function cal()
	{
    b=document.getElementByname("tc").value;
    //  if(b=="B.C.A")
    // {
    //     document.getElementByname("ts").value="20,000";
    // }
    // else if(b=="B.B.A")
    // {
    //     document.getElementByname("ts").value="22,000";
    // }
	// else if(b=="BSC.IT")
    // {
    //     document.getElementByname("ts").value="18,000";
    // }
	// else if(b=="B.S.C")
    // {
    //     document.getElementById("ts").value="12,000";
    // }
	// else (b=="B.COM")
    // {
    //     document.getElementById("ts").value="15,000";
    // }
}
</script>
		

<style>
    .d1{
            background-color: black;
            width: 19.65%;
            height: 710px;
            float: left;
            border: solid;
        }
        button:hover{
            background-color: cornsilk;
        }
        .d2{
            width: 79%;
            height: 710px;
            float: left;
            text-align: center;
            background-color: honeydew;
        }
</style>
</head>
<body>
    <div class="d1">
    
        <h2 style="color:cornsilk; text-align: center; margin-top: 50px;"><b>USER</b></h2>
        <hr color="white" style="width: 100%; height: 2px;">
		 <a href="userinterface.php">
        <button style="width: 100%; height: 60px;">MY PROFILE</button></a>
		<a href="payment.php">
		 <button style="width: 100%; height: 60px;">MAKE PAYMENT</button>
         </a>
		  <a href="receipt.php">
        <button style="width: 100%; height: 60px;">RECEIPT</button></a>
        <a href="us_changepswd.php">
        <button style="width: 100%; height: 60px;">CHANGE PASSWORD</button>
        </a>
		 <a href="user_login.html">
        <button style="width: 100%; height: 60px;">LOGOUT</button></a>
        </div>

     <div class="d2">
        <h2 style="color: black; text-align: center; margin-top: 50px;"><b>PAYMENT RECORDS</b></h2>
        <hr color="black" style="width: 100%; height: 2px;">
        
        <form action="#"  method="POST" style="background-color: burlywood;">
            <br><br><br>
            USER ID :<input type="text" name="tr" placeholder="Enter your user id">
            <br><br>
            <!-- D.O.B:<input type="date" name="td" placeholder="Enter date of birth">
            <br><br> -->
            <input type="submit" name="sub" value="Proceed" style="color: orange; background-color: green;" onclick:"cal()">
            <br><br>
        
        </form>

        <br><br><br><br>
        <center>
		<form action="#" method="POST">
        <table border="2">
            <tr>
                <th><b>PAYABLE AMOUNT</b></th>  
                <!-- <th><b>PAYMENT</b></th>  -->
                 <!-- <th><b>TOTAL FEES</b></th>  <th><b>STATUS</b></th> -->
            </tr>
            <tr><th rowspan="7"><input type=" text" name="tc" value="<?php echo @$row[13];?>"> </th> 
           <!-- <td> <a href="gateway.php">
		<button style="width: 100%; height: 25px; background-color:green"> <b>pay</b></button>
		</a></td> -->
             <!-- <td> 1</td> <td><input type=" text" id="tc" name="ts"></td>
			     <td><input type="text" id="t1" ></td> -->
                </tr>
            <!-- <tr><td> 2</td> <td><input type=" text" name="ts"></td> <td><input type="text" id="t2"></td></tr>
            <tr><td> 3</td> <td><input type=" text" name="ts"></td> <td><input type="text" id="t3"></td></tr>
            <tr><td> 4</td> <td><input type=" text" name="ts"></td> <td><input type="text" id="t4"></td></tr>
            <tr><td> 5</td> <td><input type=" text" name="ts"></td> <td><input type="text" id="t5"></td></tr>
            <tr><td> 6</td> <td><input type=" text" name="ts"></td> <td><input type="text" id="t6"></td></tr> -->
            
        </table>
        
		</form>
       <center> <a href="gateway.php">
		<button style="width: 180px; height: 25px; background-color:green"> <b>pay</b></button>
		</a></center>
		
		<!-- <h1><b> SELECT PAYMENT TYPE</b></h2>
		<br>
	 <a href="gateway.php">
		<button style="width: 50%; height: 50px; background-color:green"> <b>SEMESTER ADDMITION FEE</b></button>
		</a>
		<div id="dd">
		<select name="sem">
		<option>SELECT</option>
		<option >SEM 1</option>
        <option>SEM 2</option>
        <option>SEM 3</option>
        <option>SEM 4</option>
		<option>SEM 5</option>
		<option>SEM 6</option>
		</select>
		</div>
		</a>
		 <a href="gateway.html">
        <button style="width: 50%; height: 50px; background-color:orange"><b>MID SEM FEE</b></button>
		</a>
		<div id="dd">
		<select name="midsem">
		<option>SELECT</option>
		<option >SEM 1</option>
        <option>SEM 2</option>
        <option>SEM 3</option>
        <option>SEM 4</option>
		<option>SEM 5</option>
		<option>SEM 6</option>
		</select>
		</div>
		</a>
		
		<a href="gateway.html">
        <button style="width: 50%; height: 50px; background-color:green"> <b>EXAMINATION FEE (REGULAR)</b></button>
		</a>
		<div id="dd">
		<select name="examfee">
		<option>SELECT</option>
		<option >SEM 1</option>
        <option>SEM 2</option>
        <option>SEM 3</option>
        <option>SEM 4</option>
		<option>SEM 5</option>
		<option>SEM 6</option>
		</select>
		</div>
		
        <a href="gateway.html">
		 <button style="width: 50%; height: 50px; background-color: orange"><b>EXAMINATION FEE (REPEATER)</b></button>
		 </a>
		<div id="dd">
		<select name="repeatfee">
		<option>SELECT</option>
		<option >SEM 1</option>
        <option>SEM 2</option>
        <option>SEM 3</option>
        <option>SEM 4</option>
		<option>SEM 5</option>
		<option>SEM 6</option>
		</select>
		</div>
		 -->
		
	    </center>
        
        </div>
       </center>
     </body>
    </html>
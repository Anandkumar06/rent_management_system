<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "rent") or die("Connection Error: " . mysqli_error($conn));
if (isset($_POST["submit"]))
{
    $password =$_POST["currentPassword"];
    $sql="select * from user where pass='$password'";
    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);
    $email =$_SESSION['email'];
    if ($password == $row["pass"])
    {
        $p =$_POST["newPassword"];
        $sql2 ="update user set pass='$p' where email ='$email'";
        mysqli_query($conn,$sql2);
        $sql3 ="update user set repass='$p' where email ='$email'";
        mysqli_query($conn,$sql3);
            
    } 
}

?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />


<style>
.d1{
            width: 25%;
            height: 230px;
            position: center;
            margin-left: 450px;
            margin-right: 350px;
            border-style: solid;
            border-radius: 20px;
}
        body
{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg,#71b7e6,#9b59b6);
    padding: 10px;
}
</style>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}


</script>
</head>
<body>
    <form name="frmChange" method="post" action="#"
        onSubmit="return validatePassword()">
        <div style="width: 500px;" class="d1">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
              <tr class="tableheader">
                    <td colspan="2"><b>Change Password</b></td>
                </tr> 
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" 
                    value="Submit" class="btnSubmit" style="width: 100px; height: 30px; margin-top: 15px; margin-left: 30px;"></td>
                </tr>
                
            </table>
        </div>
    </form>
</body>
</html>

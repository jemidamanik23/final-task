<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
		{
			if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		echo "<script>alert('Incorrect verification code');</script>" ;
	}elseif (strlen($_POST["password"]) < 6 ){
		echo "<script>alert('Password Min 6 karakter');</script>";
	} 
     	else {
     		$username   = $_POST["username"];
			$password       = ($_POST["password"]);
		$user = mysqli_query($connect,"select * from user where username='$username' and password='$password'");
		$chek = mysqli_num_rows($user);
		if($chek>0)
		{
   		 header("location:index.html");
		}else
		{
			echo "Kesalahan Login";
   		 header("location:index2.php");
		}

		    }	
		}
		    ?>
<html>
<title>Form Login dengan Captcha
</title>
<head>
	<style>
		div{
			margin: 20px 35%;
			background-color: LightGray;
			padding: 20px;
		}
	</style>
</head>
<body>
<div class="login">
<h2>Form Login dengan Captcha</h2>
<a href="index.html">Back To Home Page</a>
<form name="stmt" method="post">
<table>
<tr>
<td>Username :</td>
<td><input type="text" name="username" required="required" /> </td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password" name="password" required="required" /></td>
</tr>
<tr>
<td>Verification code :</td>
<td><input type="text" name="vercode" size="10" required="required" />&nbsp;<img src="captcha.php" style="margin-top: 1%"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>
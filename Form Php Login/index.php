 
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";

   } else {
    $username = test_input($_POST["username"]);
  }    
}

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } elseif (strlen($_POST["password"]) < 6){
    $passwordErr ="Password harus lebih 6 karakter";
  }else {
    $password = test_input($_POST["password"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form PHP</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php 
if ($username=="udacoding" and $password=="udacodingJaya2021") {
	echo "Selamat, Anda berhasil Login";
}
else{
	echo "Maaf, data yang anda masukkan salah";
}
 ?>

</body>
</html>

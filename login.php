<?php
session_start();
include 'database.php';
$Ure = new ADM();
    
    if (isset($_POST['Login'])) {
    	if (!empty( $_POST['username'] && $_POST['password'] )) {

//submitted data
	$username=$_POST['username'];
    $password=$_POST['password'];

    $rows=$Ure->verifylogin($username,$password);
    $num = mysqli_fetch_array($rows);

   
    if($num>0){
    	$_SESSION['user_id']=$num['id'];
    	$_SESSION['usertype']=$num['usertype'];
    
    echo header("Location:adminuser.php");
}else
echo "invalid details.";

	}
}
?>
<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	 button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
	 .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      
      }
      .container {
      padding: 50px 40px 40px 20px;
      text-align:left;
      
      }
	.logo{
		text-align:center;
      width:250px;
      margin: 0 auto;

	}
	form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }

	</style>
<form method="post" action="">
	 <div class="formcontainer">
      <div class="container">
         <h3>ASTERISK INTERNATIONAL GROUP</h3>
<div class=logo>

			<div style="font-size: 20px;margin: 10px;color: white;">
				
			</div>
<div class=logo>
    <img src="includes/logo2.jpg" alt="asterisk logo" align="center" width="80" height="90"/>
   </div>
   <br><br>
 <label for="username"><strong>Username</strong></label>
<input  type="text" name="username"><br><br>

 <label for="password"><strong>Password</strong></label>
<input type="password" name="password"><br><br>

			<button type="submit" name="Login"><strong>LOGIN</strong> </button><br><br>

			<a href="start.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
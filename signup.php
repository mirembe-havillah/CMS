<?php
session_start();
include 'database.php';
$Ure = new ADM();
if (isset($_POST['SIGNUP'])) {

	$username=$_POST['username'];
    $password=$_POST['password'];
    $sex     =$_POST['sex'];
    $usertype=$_POST['usertype'];

    $ht=$Ure->register($username,$password,$sex,$usertype);
    if($ht){
    echo
     "Registration successfull.";
     header('Location:adminuser.php');
}else
echo "invalid details.";
//echo "header(Location:start.php)";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
    <style>
         body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
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
      .logo {
      text-align:center;
      width:250px;
      margin: 0 auto;
      
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
      .h1 {
      text-align:center;
      font-size:18;
      font-color:#4286f4;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      
      }
      .container {
      padding: 50px 40px 40px 20px;
      text-align:left;
      
      }
      span.psw {
      float: right;
      padding-top: 50;
      padding-right: 49px;
      }
    </style>
</head>
<body>
      <form action='' method="POST">
      <div class="formcontainer">
      <div class="container">
         <h3>ASTERISK INTERNATIONAL GROUP</h3>
<div class=logo>
    <img src="includes/logo2.jpg" alt="asterisk logo" align="center" width="50" height="60"/>
   </div>
   <br><br>
        <label for="username"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <br><br>
        <label for="password"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>
 <br><br>
 <label for="sex"><strong>Sex</strong></label>
        <select name="sex" id="sex">
           <option value="female">female</option>
           <option value="male">male</option>
           </select>
 <br><br>
        <label for="usertype"><strong>Choose usertype</strong></label>
        <select name="usertype" id="usertype">
           <option value="admin">Admin</option>
           <option value="user">User</option>
           </select>
      </div>
      <button type="submit" name="SIGNUP"><strong>SIGNUP</strong></button>

      </div>
    </form>
</body>
</html>
<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['ADDUSER'])) {
	     $ADDUSER=new ADM();
	$ADDUSER = $ADDUSER->addnewuser($_POST['username'],$_POST['password'],$_POST['sex'],$_POST['usertype']);
     echo $ADDUSER;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	    .topnav{
      	overflow: hidden;
         background-color: #0484f8;
         text-decoration-color: white;
      }
      .topnav a {
      	float: right;
      	color:white;
      	text-align: right;
      	padding:14px 16px;
        font-size: 17px;
         }
      .h3 {
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
  #box{

		background-color: #0484f8 ;
		margin: auto;
		width: 300px;
		margin-top:90px;
		height: 500px;
	}

	</style>
		<div class="topnav">
         <p style="color:white;"> ASTERISK INTERNATIONAL GROUP</p>
    <img src="includes/logo2.jpg" alt="asterisk logo" align="left" width="100" height="80"/>
</div>
</header>
</head>
<body>
	<div id="box">
 <form action='' method="POST">
      <div class="formcontainer">
      	<div class="container">
         <h3>ADD USER</h3>
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
      <button type="submit" name="ADDUSER"><strong>ADD USER</strong></button>

      </div>
    </form>
</div>
</body>
</html>


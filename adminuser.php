<?php
session_start();
include 'database.php';
include 'posts.php';
$adh = new Post();

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<style>
		 .h3 {
      text-align:center;
      font-size:18;
      font-color:white;
      }
      .h1 {
      text-align:center;
      font-size:18;
      font-color:white;
      }
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
        text-decoration: none;
         }
      .admin {
     float: right;
     max-width: 2;
      }
       .user {
      width:250px;
      margin: 0 auto;
      padding-top: 20px;
      float: left;
      
      }
      .lorem{
       text-align:center;
       padding-left:30px 
       padding-right:30px;
       margin-left: 120px;
       padding-top: 10px;
       float:left;

      }
      .button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 20%;
      }
       .buttonu {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 30%;
      }
      .sidenav{
      	height: 100%;
      	width: 120px;
      	position: fixed;
      	z-index: 1;
      	top: 22%;
      	left: 0;
      	background-color: #0484f8;
      	overflow-x: hidden;
      	padding-top: 3px;
      }
      .sidenav a{
      	padding: 6px 6px 6px 6px;
      	text-decoration: none;
      	font-size: 20px;
      	display: block;
      }
      .sidenav a:hover{
      	color: #f1f1f1;
      } 
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      margin-left: 120px;
      
      }
      .container {
      padding: 50px 40px 40px 20px;
      text-align:left;
      
      }
      form {
      border: 5px solid #f1f1f1;
      
     
      }

      input[type=text]  {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      input[type=content] {
      width: 100%;
      padding: 40px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
 
       button {
      background-color: #4286f4;
      color: white;
      padding: 7px ;
      margin: 10px ;
      border: none;
      cursor: grab;
      width: 12%;
      float: right;
      }
      .postser{
      	margin-left: 120px;
      }
      .card{

      }

	</style>
	<?php if($_SESSION['usertype']=="admin"){ ?>
		<div class="topnav">
         <p style="color:white;"><font size="+1" color="white" face="sans serif"> ASTERISK INTERNATIONAL GROUP</font></p>
    <img src="includes/logo2.jpg" alt="asterisk logo" align="left" width="180" height="100" padding-top="-6px"/>
    	<div class="admin">	 
   <font size="+1" color="white" face="verdana"><?php echo   "You are ,Admin" ;?> </font><img src="includes/admim.jpg" alt="admin image">
</div>
 
   
    <div class="sidenav">
    	<font  color="white" face=>
    	<ul text-align:left>
    		<a href="">Dashboard</a>
    		<a href="">Home</a>
    		<br>
            <br>
    		<br>
    		<br>
    	<a href="">Plugins</a>
    	<a href="">Posts</a>
    	<a href="">Media</a>
    	<a href="">Library</a>
    	<a href="">Pages</a>
    	    <br>
    	    <br>
    	    <br>
    	    <br>
    	<a href="">Settings</a>
    	<a href="users.php">Users</a>
    	<a href="">Appearance</a>
    	<a href="">Comments</a>
    	<a href="">Tools</a>
    	</ul>	
    </font>
    </div>

    <?php } ?>
</div>
</header>
</head>
<body>
<?php if($_SESSION['usertype']=="admin"){ ?>
	<div class="postser"> 
   <?php if(!empty(isset($_POST['post']))) {
    	
    $posttitle=$_POST['posttitle'];
    $content=$_POST['content'];
    

    $hmk=$adh->registerposts($posttitle,$content);
    if ($hmk) {
    	echo "successfull";
    }else{
       echo "invalid details";
    }
    	
    }
    ?>
    </div>
	
<div class="formcontainer">
<div class="container">
   <section id="postform">
   	<font face="sans">
   	<form method="POST" action="" enctype="multipart/form-data">
   		<h1>Add new Post</h1>
   		<br><br>
   		<label for="post title"><strong>Post Title</strong></label>
<input  type="text" name="posttitle" required><br><br>

 <label for="content"><strong>Content</strong></label>
<input type="content" name="content" required><br><br> 
  
  <input type="file" name="uploadfile" value=""/>


<button type="submit" name="post"><strong>Post</strong> </button>
<button type="submit" name="draft"><strong>Save Draft</strong> </button>
<br>
<br>
   	</form>
   	
   </section>
      </font> 
     </div>
 </div>

	 <?php } elseif($_SESSION['usertype']=="user") { ?>

	 	 <div class="topnav">
         <p style="color:white;"><font size="+1" color="white" face="sans serif">ASTERISK INTERNATIONAL GROUP</font></p>
    <img src="includes/logo2.jpg" alt="asterisk logo" align="left" width="180" height="100" padding-top="-6px"/>
    	<div class="admin">	 
   <font size="+1" color="white" face="verdana"><?php echo   "Welcome to ur page!" ;?> </font><img src="includes/admim.jpg" alt="admin image">
</div>
</div>
	  
      <?php  $hlt = $adh->selectposts(); 

        if ($hlt->num_rows > 0) {
  
  while ($a= mysqli_fetch_assoc($hlt)) {
    
    $posttitle = stripslashes($a['posttitle']);
    $content = stripslashes($a['content']);

            ?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <br>
   <br>
   <div class="col d-flex justify-content-center">
 <div class="card" style="width: 20rem;">
 	<br> <div class="card-body mt-4">
        <br><h5 class="card-title"> <?php echo $posttitle; ?></h5>
        <br><p class="card-text"> <?php echo $content; ?> </p>
 </div>
</div>
</div>
       <?php } ?>
       <div></div>
      <?php } ?>

<?php } else { ?>
 
 <p class="card-text"> <?php echo "<p> No Entry has been made </p>"; ?> </p>

<?php } ?>

</div>
</body>
</html>

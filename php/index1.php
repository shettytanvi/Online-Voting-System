<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>  
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
     <style>
    body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253360-unsplash.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
    </style>
<body>
   
<div class="header">
	<h2>WELCOME</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="canadd.php" style="color:red;">proceed</a></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

</div>
		
</body>
</html>
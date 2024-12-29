<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
     <style>
        
body {
 background-image: url("arnaud-jaegers-253360-unsplash.jpg");
     background-repeat: no-repeat;
    background-position:bottom;
          background-size: 100% 100%;
}
    </style>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
      <div class="input-group">
  	  <label>name</label>
  	  <input type="text" name="name" >
  	</div>
      <div class="input-group">
  	  <label>sem</label>
  	  <input type="text" name="sem" >
  	</div>
      <div class="input-group">
  	  <label>usn</label>
  	  <input type="text" name="usn" >
  	</div>
      <div class="input-group">
  	  <label>branch</label>
  	  <input type="text" name="branch" >
  	</div>
      
            
      
  	<div class="input-group">
        
        
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="voterlogin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
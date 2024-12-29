<?php include('server.php') ?>
<?php include('server1.php') ?>
<html>
<header><h1><center>ONLINE VOTING SYSTEM</center></h1>
    </header>
    <style>
        

body {
 background-image: url("arnaud-jaegers-253360-unsplash.jpg");
     background-repeat: no-repeat;
    background-position:bottom;
          background-size: 100% 100%;
}
                
 h1 {
  color: white;
  text-align: center;
}
 </style>  
 <body>
      
  <center>
  	 <div class="header">
  	<h1>Voter Login</h1>
  </div>
         <form method="post" action="canadd.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
             
  </form>
    </center><center>
      <form method="post" action="login.php">
          <button type="submit" class="btn" name="reg_user">back</button>
     <p>
  		Not yet a member? <a href="register1.php">Sign up</a>
  	</p></form></center>
     
    </body>   


</html>
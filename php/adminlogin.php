<?php include('server.php') ?>
<?php include('server1.php') ?>
<html>
<header><center>
  <h1>  ONLINE VOTING SYSTEM</h1></center></header>
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
  <center>
  	<h1>Admin Login</h1>
  
	 
  <form method="post" action="adminlogin.php">
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
  		<button type="submit" class="btn" name="login_user">Login</button></div> </form>
        <form method="post" action="login.php">
         <div class="input-group">   
             <button type="submit" class="btn" >Back</button></div></form>   
  	
  
  
       
    
</center>

</html>
<?php include('server1.php') ?>
<!DOCTYPE html>
<?php  if (isset($_SESSION['apply_can'])) : ?>

<html>
<head>
  
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
  	<h2>APPLY FOR CANDIDATE</h2>
  </div>
	
  <form method="post" action="applysave.php">
  	
  	
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
  	</div></form>
   
<form method="post" action="canadd.php">
    <button type="submit" class="btn" name="back">BACK</button>
 </form>
</body>
</html>
<?php endif ?>
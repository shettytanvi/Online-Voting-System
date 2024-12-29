<!doctype html>
<html>

<body>
<style>
	input{
		display: red;
		width: 200px;
		padding: 10px;
		margin-bottom: 10px;
		margin-left: 610px;
	}

	section{
		float: center;
		padding: 30px;	
	}
          
body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253360-unsplash.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
       h1 {
  color: white;
  text-align: center;
}

	</style>
    <header>
	<div class="top" align="center">
		<h1><marquee><i>WELCOME ADMIN</i></marquee></h1>
	</div>
   </header>
	
		

  <form method="post" action="login3.php" name="patientreg">
  <input name="viewvoter" value="VIEW VOTERS" type="submit"></form>

 <form method="post" action="uptvtr.php" name="patientchkout">
  <input name="updatevoter" value="UPDATE VOTER" type="submit"></form>
  
   <form method="post" action="dltvtr.php" name="outpatient">
  <input name="delete voter" value="DELETE VOTER" type="submit"></form> 
  
  <form method="post" action="canview1.php" name="doctorinfo">
  <input name="viewcandidate" value="VIEW CANDIDATE" type="submit"></form>

  <form method="post" action="canupt.php" name="staffinfo">
  <input name="update_can" value="UPDATE CANDIDATE" type="submit"></form>
  
  <form method="post" action="candlt.php" name="room">
  <input name="delete_can" value="DELETE CANDIDATE" type="submit"></form>
  
  <form method="post" action="register.php" >
  <input name="admin" value="ADD ADMIN" type="submit"></form>
    
<form method="post" action="result1.php" name="result">
   <input name="result" value="RESULT" type="submit"></form>
    
    <form method="post" action="logout.php" name="logout">
  <input name="logout" value="LOGOUT" type="submit"></form>
</body>
</html>

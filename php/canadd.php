<!doctype html>

<html>

<body>
<style>
	input{
		display: block;
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
	background-image: url("arnaud-jaegers-253360-unsplash.jpg");
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
		<h1><marquee><i>WELCOME VOTER</i></marquee></h1>
	</div>
   </header>
	
		
  <form method="post" action="apply.php" >
  <input name="apply_can" value="APPLY FOR ELECTION" type="submit"></form>

 <form method="post" action="canview.php">
  <input name="view_status" value="VIEW STATUS " type="submit"></form>
  
   <form method="post" action="vote.php" >
  <input name="vote" value="VOTE" type="submit"></form> 
  
  <form method="post" action="result.php" >
  <input name="result" value="RESULT" type="submit"></form>

  <form method="post" action="logout.php" >
  <input name="LOGOUT" value="LOGOUT" type="submit"></form>
   
  
</body>
</html>

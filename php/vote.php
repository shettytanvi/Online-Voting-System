<?php include('server.php') ?>
<?php include('server1.php') ?>
<html>
<body>
<style>
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
<br>


         

	<center>
  <form method="post" action="">

  	<div class="input-group">
  		<label><h1>Enter your usn </h1></label>
  		<input type="text" name="vusn" >
  	</div>
  	
  	<div class="input-group">
  		<button type="submit" class="btn" name="usn_voter">Login</button>
  	</div>
        </form>
    <a href="canadd.php"><b>BACK</b></a></center> 
    </body></html>
<?php
    error_reporting(0);
    
    if(isset($_POST['vusn'])){
        
        
        $sql="SELECT * FROM voter where usn='".$_POST['vusn']."'";
        //echo $sql;
        $con=mysqli_connect("localhost","root","","votertable");
   $a=0;
    $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
            $vid=$row['usn'];
            $a=1;
        }
        
        if($a==1){
            
            session_start();
            $_SESSION['usn']=$vid;
            
            header("Location:vote1.php");
        }else
        {
            echo "Voter ID doesnt exist...!!";
            session_start();
            session_destroy();
        }
        
    }
    
    
    
    ?>
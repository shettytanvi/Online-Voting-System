
<!DOCTYPE html>
<html>
    <header><h1><center>CANDIDATE LIST</center></h1></header>
    <body>
      <style>
body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253360-unsplash.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
           .btn-group
    {
       	background-color:white ; 
    }
          
        h1 {
  color: white;
  text-align: center;
}

    </style>
        <center>
         <table class="btn-group" style="width50px;" border="5;" >
    
    <tr>
     <td><h2>candidate id</h2></td>   
     <td><h2>name</h2></td>
        <td><h2>sem</h2></td>
      <td><h2>usn</h2></td>
      <td><h2>branch</h2></td>  
   </tr>  
     <?php
        error_reporting(0);
        session_start();
        if(isset($_SESSION['usn'])){
    
$con=mysqli_connect("localhost","root","","votertable");
    $query="SELECT * FROM candi";
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
{
          
             echo "<td><h3>".$row['id']."</h3></td>";
            echo "<td><h3>".$row['name']."</h3></td>";
       
             echo "<td><h3> ".$row['sem']."</h3></td>";
             echo "<td><h3> ".$row['usn']."</h3></td>";
             echo "<td><h3>".$row['branch']."</h3></td>";
           echo "<td><a href='status.php?vid=".$row['id']."'><button type='button'>VOTE</button></a></td>";
           
           
               echo "</tr>";
        }
        }else {header("Location:canadd.php"); session_destroy();}
      ?>
               
    </table>
</center>

</body>
</html>
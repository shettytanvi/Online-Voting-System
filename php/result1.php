
<!DOCTYPE html>
<html>
<head>
<style>
body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253359-unsplash.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
     .table-group
    {
       	background-color:white ; 
    }
     h1 {
  color: white;
  text-align: center;
}
   

</style>
</head>
<body>
    <center>
    <table  class="table-group" style="width50px;" border="5">
        		<h1><marquee><i>WINNER</i></marquee></h1>
   
    <tr><td><h2>candidateid</h2>
        </td>
        <td><h2>name</h2></td>
      <td><h2>No. of votes</h2></td>
     </tr>
    
<?php
     $con=mysqli_connect("localhost","root","","votertable");
    $sql="CALL result()";
    $winner=mysqli_query($con,$sql);
    while($rowz= mysqli_fetch_array($winner)){
        echo"<tr>";
   
    echo"<td>".$rowz['id']."</td>";
    echo"<td>" .$rowz['name']."</td>";
    echo"<td>" .$rowz['Vote']."</td>";
   
    echo"</tr>";
        
        
      
    }
    ?>
          
    </table>
 
    
    <form method="post" action="hi.php">
    <button type="submit"  name="back">BACK</button></form>   </center>
    </body>
</html>
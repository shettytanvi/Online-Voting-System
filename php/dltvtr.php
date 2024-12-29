
<!DOCTYPE html>
<html>
<head>
<style>
body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253360-unsplash.jpg);
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
  
          <h1><centre>Voter detail</centre></h1>
            
<table class="table-group" style="width50px;" border="5">
 
    <tr><td><h2>voterid</h2>
        </td>
    <td><h2>username</h2></td>
   <td><h2>email</h2></td>
 <td><h2>password</h2></td>
      <td><h2>name</h2></td>
      <td><h2>sem</h2></td>
      <td><h2>usn</h2></td>
      <td><h2>branch</h2></td>
        <td><h2>delete</h2></td>
    </tr>





<?php
    $con=mysqli_connect("localhost","root","","votertable");
$query="select * from voter";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
   
    echo"<td>".$row['voterid']."</td>";
    echo"<td>".$row['username']."</td>";
     echo"<td>".$row['email']."</td>";
    echo"<td>".$row['password']."</td>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['sem']."</td>";
    echo"<td>".$row['usn']."</td>";
    echo"<td>".$row['branch']."</td>";
    echo"<td><a href=delete.php?voterid=".$row['voterid'].">Delete</a></td>";
    echo"</tr>";
    
}
?>
  
    </table> 
    </center><center>
    <form method="post" action="hi.php">
    <button type="submit"  name="back">BACK</button></form></center>
    </body>
</html>
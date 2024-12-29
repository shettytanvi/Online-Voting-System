<html>
   
    	<h1><marquee><i>CANDIDATE DETAIL.....</i></marquee></h1>
<body>
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

<body>
<center>
<table  class="table-group" style="width50px;" border="5">
   
    <tr><td><h2>candidateid</h2>
        </td>
        <td><h2>name</h2></td>
      <td><h2>sem</h2></td>
      <td><h2>usn</h2></td>
      <td><h2>branch</h2></td></tr>





<?php
    $con=mysqli_connect("localhost","root","","votertable");
$query="select * from candi";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
   
    echo"<td>".$row['id']."</td>";
    echo"<td>" .$row['name']."</td>";
    echo"<td>" .$row['sem']."</td>";
    echo"<td>" .$row['usn']."</td>";
    echo"<td>".$row['branch']."</td>";
    echo"</tr>";
    
}
    
?>
    </table> </center> 
    <center>
    <form method="post" action="canadd.php">
    <button type="submit"  name="back">BACK</button></form></center>
  
    </body></body>
</html>
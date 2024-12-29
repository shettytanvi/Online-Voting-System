
<!DOCTYPE html>
<html>
    	<h1><marquee><i>Candidate Update page</i></marquee></h1>
    <style>
        body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253359-unsplash.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
        h1 {
  color: white;
  text-align: center;
}

    </style>
<body>

<center>
    <table>
    
    <tr>
     <td><h2>Candidate id</h2></td>   
     <td><h2>Name</h2></td>
        <td><h2>Sem</h2></td>
      <td><h2>USN</h2></td>
      <td><h2>Branch</h2></td></tr>  
    
     <?php
$con=mysqli_connect("localhost","root","","votertable");
    $query="SELECT * FROM candi";
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
{
            echo "<tr><form action=cupdate.php  method=post>";
             echo "<td><input type=text name=id value='".$row['id']."'></td>";
            echo "<td><input type=text name=name value='".$row['name']."'></td>";
            
             echo "<td><input type=text name=sem value='".$row['sem']."'></td>";
             echo "<td><input type=text name=usn value='".$row['usn']."'></td>";
             echo "<td><input type=text name=branch value='".$row['branch']."'></td>";
           
            echo "<td><input type=submit ></td>";
            echo "</form></tr>";
        }
            ?>
               
    </table>
    </center><center>
    <form method="post" action="hi.php">
    <button type="submit"  name="back">BACK</button></form></center>
</body>
</html>
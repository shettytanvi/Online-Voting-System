
<!DOCTYPE html>
<html>
    
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
<body>
    <center>

   <h1><centre>UPDATE CANDIDATE</centre></h1>
            </center>

    <table class="table-group" style="width50px;" border="5">
    
    <tr>
        <td><h2>voterid</h2></td>
     <td><h2>username</h2></td>
   <td><h2>email</h2></td>
        <td><h2>password</h2></td>
      <td><h2>name</h2></td>
      <td><h2>sem</h2></td>
      <td><h2>usn</h2></td>
      <td><h2>branch</h2></td></tr>  
    
     <?php
$con=mysqli_connect("localhost","root","","votertable");
    $query="SELECT * FROM voter";
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
{
            echo "<tr><form action=update.php  method=post>";
             echo "<td><input type=text name=voterid value='".$row['voterid']."'></td>";
            echo "<td><input type=text name=username value='".$row['username']."'></td>";
            echo "<td><input type=text name=email value='".$row['email']."'></td>";
            echo "<td><input type=text name=password value='".$row['password']."'></td>";
             echo "<td><input type=text name=name value='".$row['name']."'></td>";
             echo "<td><input type=text name=sem value='".$row['sem']."'></td>";
             echo "<td><input type=text name=usn value='".$row['usn']."'></td>";
             echo "<td><input type=text name=branch value='".$row['branch']."'></td>";
           
            echo "<td><input type=submit></td>";
            echo "</form></tr>";
        }
            ?>
               
    </table>
    <br>
    <br>
    <center>
    <form method="post" action="hi.php">
    <button type="submit"  name="back">BACK</button></form></center>
</body>
</html>
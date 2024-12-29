<?php
$con=mysqli_connect("localhost","root","","votertable");
$query="DELETE FROM candi WHERE id='$_GET[id]'";
if(mysqli_query($con,$query))
{
    header("refresh:1; url=hi.php");
    
}
else
    echo "erro";
?>
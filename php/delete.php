<?php
$con=mysqli_connect("localhost","root","","votertable");
$query="DELETE FROM voter WHERE voterid='$_GET[voterid]'";
if(mysqli_query($con,$query))
{
    header("refresh:1; url=hi.php");
    
}
else
    echo "erro";
?>
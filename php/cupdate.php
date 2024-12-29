<?php
$con=mysqli_connect("localhost","root","","votertable");
$query="UPDATE candi set name='$_POST[name]',sem='$_POST[sem]',usn='$_POST[usn]',branch='$_POST[branch]' WHERE id='$_POST[id]'";

if(mysqli_query($con,$query))
{
    header("refresh:1; url=hi.php");
    
}
else
    echo "error";
?>
<?php
$con=mysqli_connect("localhost","root","","votertable");
$query="UPDATE  voter set username='$_POST[username]',email='$_POST[email]',password='$_POST[password]',name='$_POST[name]',sem='$_POST[sem]',usn='$_POST[usn]',branch='$_POST[branch]' WHERE voterid='$_POST[voterid]'";
if(mysqli_query($con,$query))
{
    header("refresh:1; url=hi.php");
    
}
else
    echo "error";
?>
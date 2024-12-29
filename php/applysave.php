<?php
session_start();

$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'votertable');




if (isset($_POST['reg_user'])) {

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $usn = mysqli_real_escape_string($db, $_POST['usn']);
  $sem = mysqli_real_escape_string($db, $_POST['sem']);
  $branch= mysqli_real_escape_string($db, $_POST['branch']);

  
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($usn)) { array_push($errors, "usn is required"); }
  if (empty($sem)) { array_push($errors, "sem is required"); }
  if (empty($branch)) {
	array_push($errors, "branch is required");
      
      
  }
    
    
  	$query = "INSERT INTO candi(name,usn,sem,branch) VALUES('$name','$usn', '$sem', '$branch')";
  
if(mysqli_query($db,$query))
{
    header("refresh:1; url=canadd.php");
    
}

}
?>
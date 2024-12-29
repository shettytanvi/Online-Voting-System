<?php
session_start();
if(isset($_SESSION['user_voter'])) {
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'votertable');



    $name=$_POST['name'];
    $usn= $_POST['usn'];
    $sem=$_POST['sem'];
    $branch=$_POST['branch'];
       // $vusn= $_REQUEST['vusn'];   
//$vusn= (isset($_GET['voting']) ? $_GET['vusn'] : '');


if($db)
{
    echo "connection established";

}




  
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($vusn)) { array_push($errors, "usn is required"); }
  if (empty($sem)) { array_push($errors, "sem is required"); }
  if (empty($branch)) {
	array_push($errors, "branch is required");}
      
      
      
    
  	$query = "INSERT INTO result(candidate_name,usn,sem,branch) VALUES('$name','$vusn', '$sem', '$branch')";
  
if(mysqli_query($db,$query))
{
    header("refresh:1; url=canadd.php");
    

}
}

?>
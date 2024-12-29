<?php


// initializing variables
$username = "";
$email    = "";
$name="";
$sem="";
$usn="";
$branch="";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "", "votertable");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 $name = mysqli_real_escape_string($db,$_POST['name']);
    $sem = mysqli_real_escape_string($db,$_POST['sem']);
    $usn = mysqli_real_escape_string($db,$_POST['usn']);
    $branch = mysqli_real_escape_string($db,$_POST['branch']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
    if(empty($name)){ array_push($errors,"Name is required");}
    if(empty($sem)){array_push($errors,"sem is required");}
    if(empty($usn)){array_push($errors,"usn is required");}
    if(empty($branch)){array_push($errors,"branch is required");}
    

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM voter WHERE username='$username' OR email='$email' OR usm='$usn' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
if (count($errors) == 0) {
  	$password =($password_1);
  // Finally, register user if there are no errors in the form
  //encrypt the password before saving in the database
 $query = "INSERT INTO voter (username, email, password,name,sem,usn,branch) 
  			  VALUES('$username', '$email', '$password','$name','$sem','$usn','$branch')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');}  
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
if (count($errors) == 0) {
  	$password =($password);
 
  	$query = "SELECT * FROM voter_backup WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index1.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }}

?>
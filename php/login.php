<!Doctype html>
<html>
<style>
    body {
	height: 100%;
	width: 100%;
	background-image: url(arnaud-jaegers-253360-unsplash.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
.btn-group button {
    background-image: url(ad.jpg);
    border: 1px solid green;
    color: black;
    padding: 100px 90px;
    cursor: pointer;
    float: left;
    margin-left: 100px;
}
   
    h1 {
  color: white;
  text-align: center;
}


.btn-group:after {
    content: "";
    clear: both;
    display: table;
}


.btn-group button:hover {
    background-color: #3e8e41;
}
</style>
    <header><h1><h1><br><br><b><center>ONLINE VOTING SYSTEM</center></b></h1></h1></header>
<body>



<div class="btn-group">
     <form action="adminlogin.php">
         <button style="margin:180px;" >ADMIN</button> </form>
   
     <form action="voterlogin.php">
         <button style="margin:180px;">VOTER</button> </form>
</div>

</body>
</html>

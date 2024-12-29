<?php

session_start();

if(isset($_SESSION['usn'])){
    $vid=$_SESSION['usn'];
    
    $id=$_GET['vid'];
    echo $id;
    
    $con=mysqli_connect("localhost","root","","votertable");
    $query="SELECT * FROM candi where id=".$id;
   // echo $query;
    $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
{
         $prevvote=$row['Vote'];
    
}
    $prevvote=$prevvote+1;
    //echo $prevvote;
    $query="UPDATE candi SET Vote=".$prevvote." where id=".$id;
    
    
     $result=mysqli_query($con,$query);
    if($result){
       

        echo "Voting Confirmed";
         $sql1="DELETE FROM voter WHERE usn='$vid'";
        mysqli_query($con,$sql1);
        echo $sql1;
      
            session_destroy();
        
        header("Location:canadd.php");
        
    }


}
else{
    header("Location:canadd.php");
}


?>
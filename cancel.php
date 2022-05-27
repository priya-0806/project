<?php
include 'connection.php';
$id=$_GET['id'];
$sql="UPDATE customer SET status='Inactive' where customerid='$id'";
   if($result=mysqli_query($con,$sql)){
      header("Location:inactivers.php");    
}else{
    
}

?>

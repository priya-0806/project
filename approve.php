<?php
include 'connection.php';
$id=$_GET['id'];
$sql="UPDATE customer SET status='active' where customerid='$id'";
  if($result=mysqli_query($con,$sql)){
     header("Location:activers.php");    
}else{
    echo "";
}

?>

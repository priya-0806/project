<?php
include 'connection.php';
    
    $duration=$_POST['n1'];
    $amount=$_POST['n2'];
    
    
    
    
    $sql1="INSERT INTO package(duration,amount) values('$duration','$amount')";
   echo $sql1;
    if(mysqli_query($con,$sql1)){
       
            echo "Adding data is successfully";
            header("location:package.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }

    
    ?>
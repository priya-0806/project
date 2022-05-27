<?php
include 'connection.php';
    
    $des=$_POST['n1'];
    $date=$_POST['n2'];
    
    
    
    
    $sql1="INSERT INTO holiday(description,date) values('$des','$date')";
   echo $sql1;
    if(mysqli_query($con,$sql1)){
       
            echo "Adding data is successfully";
            header("location:holidays.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }

    
    ?>
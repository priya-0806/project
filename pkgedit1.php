<?php
include 'connection.php';
    
        $id=$_POST['id'];   
    
        $duration=$_POST['n1'];
        $amount=$_POST['n2'];
        
        
    
        
        $sqlins2="UPDATE package SET duration='$duration',amount='$amount' where packageid='$id'";
        if(mysqli_query($con,$sqlins2)){
          
          header('Location:package.php');
        }
        else{
          echo "error was occuring";
          echo mysqli_error($con);
        }
      //} 
    

?>
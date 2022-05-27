<?php
include 'connection.php';
    
        $id=$_POST['id'];   
    
        $des=$_POST['n1'];
        $date=$_POST['n2'];
        
        
    
        
        $sqlins2="UPDATE holiday SET description='$des',date='$date' where holidayid='$id'";
        if(mysqli_query($con,$sqlins2)){
          
          header('Location:holidays.php');
        }
        else{
          echo "error was occuring";
          echo mysqli_error($con);
        }
      //} 
    

?>
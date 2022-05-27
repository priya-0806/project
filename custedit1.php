<?php
include 'connection.php';
    
        $id=$_POST['id'];   
    
        $name=$_POST['n1'];
        $gender=$_POST['n2'];
        $dob=$_POST['n3'];
        $mobile=$_POST['n4'];
        $address=$_POST['n5'];
        $city=$_POST['n6'];
        $state=$_POST['n7'];
        $pincode=$_POST['n8'];
        
    
        
        $sqlins2="UPDATE customer SET customername='$name',gender='$gender',dob='$dob',mobilenumber='$mobile',address='$address',city='$city',state='$state',pincode='$pincode' where customerid='$id'";
        if(mysqli_query($con,$sqlins2)){
          //echo "Updated successfully";
          //echo "<br>";
          //echo "<a href='datainsert.php' > Back to employee details </a>";
          header('Location:customer.php');
        }
        else{
          echo "error was occuring";
          echo mysqli_error($con);
        }
      //} 
    

?>
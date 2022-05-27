<?php
include 'connection.php';
    
    $name=$_POST['n1'];
    $gender=$_POST['n2'];
    $dob=$_POST['n3'];
    $mobile=$_POST['n4'];
    $address=$_POST['n5'];
    $city=$_POST['n6'];
    $state=$_POST['n7'];
    $pincode=$_POST['n8'];
    
    
    
    $sql1="INSERT INTO customer(customername,gender,dob,mobilenumber,address,city,State,pincode) values('$name','$gender','$dob','$mobile','$address','$city','$state','$pincode')";
   echo $sql1;
    if(mysqli_query($con,$sql1)){
       
            echo "Adding data is successfully";
            header("location:customer.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }

    
    ?>
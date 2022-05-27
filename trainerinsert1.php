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
    $yoe=$_POST['n9'];
    
    
    $sql1="INSERT INTO trainer(trainername,gender,dob,mobilenumber,address,city,State,pincode,yoe) values('$name','$gender','$dob','$mobile','$address','$city','$state','$pincode','$yoe')";
   echo $sql1;
    if(mysqli_query($con,$sql1)){
       
            echo "Adding data is successfully";
            header("location:trainer.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }

    
    ?>
<?php
include 'connection.php';
    
    $cname=$_POST['n1'];
    $cmobile=$_POST['n2'];
    $tname=$_POST['n3'];
    $tmobile=$_POST['n4'];
    $sdate=$_POST['n5'];
    $edate=$_POST['n6'];
    $amount=$_POST['n7'];
    $status=$_POST['n8'];
    
    
    
    $sql1="INSERT INTO training(startdate,enddate,status) values('$sdate','$edate','$status')";
   echo $sql1;
    if(mysqli_query($con,$sql1)){
       
            //echo "Adding data is successfully";
            //header("location:trainer.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }
        $sql2="INSERT INTO trainer(trainername,mobilenumber) values('$tname','$tmobile')";
        if(mysqli_query($con,$sql2)){
       
            //echo "Adding data is successfully";
            //header("location:trainer.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }
        $sql3="INSERT INTO customer(customername,mobilenumber) values('$cname','$cmobile')";
        if(mysqli_query($con,$sql3)){
       
            //echo "Adding data is successfully";
            //header("location:trainer.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }
        $sql4="INSERT INTO package(amount) values('$amount')";
        if(mysqli_query($con,$sql4)){
       
            echo "Adding data is successfully";
            header("location:trainer.php");
            
        }
        else{
            echo "Error occuring";
            echo mysqli_error($con);
        }


    
    ?>
<?php
include 'connection.php';
    $name=$_POST["n1"];
    $gender=$_POST["n2"];
    $dob=$_POST["n3"];
    $mobile=$_POST["n4"];
    $address=$_POST["n5"];
    $city=$_POST["n6"];
    $state=$_POST["n7"];
    $pincode=$_POST["n8"];
    echo "Thank you for your registration.";
    echo "<br>";
    $sqlins="INSERT INTO customer( customername,gender,dob, mobilenumber, address,city,state,pincode,status)values('$name','$gender','$dob','$mobile','$address','$city','$state','$pincode','pending')";
    if(mysqli_query($con,$sqlins)){
       
    }
    else{
            echo"<h2>error while insert<h2><br>";
            echo $sqlins."<br>".mysqli_error($con);
    }
    $stri='45013';
    $pass=str_shuffle($stri);
    echo "<br>";
    echo "use this name login: ".$name."<br>";
    echo "use this password login: ".$pass."<br>";
    $sqlins="insert into login values('$name','$pass','U')";
    if(mysqli_query($con,$sqlins)){
        echo" login password disply successfully";
    }
    else{
            echo"<h2>error while insert password <h2><br>";
            echo $sqlins."<br>".mysqli_error($con);
    
    }
        ?>
        <a class="btn btn-danger" href="login.php">GO BACK</a>
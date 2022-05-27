





<?php
include 'connection.php';
    $duration=$_POST["n1"];
    $amount=$_POST["n2"];
    $tname=$_POST["n3"];
    
    echo "Thank you for your registration.";
    echo "<br>";
    $sqlins="INSERT INTO booking(trainername,amount,duration)values('$tname','$amount','$duration')";
    if(mysqli_query($con,$sqlins)){
        echo"record inserted successfully";
    }
    else{
            echo"<h2>error while insert<h2><br>";
            echo $sqlins."<br>".mysqli_error($con);
    }
  
        ?>
        <div>
        <a class="btn btn-danger" href="login.php">GO BACK</a></div>
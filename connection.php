<?php
$con=mysqli_connect(
    'localhost',
    'root',
    'Priya@0806',
    'projectdb');
    if($con===false){
        die("U have connection error");
        mysqli_connect_error();
    }
    ?>
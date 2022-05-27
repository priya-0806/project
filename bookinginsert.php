<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="JS/bootstrap.min.js"> </script>
    <style>
        body{
            margin:30px 10%;
            
           
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="home.html">
        <img
          class="logo_img"
          src="https://upload.wikimedia.org/wikipedia/commons/1/1e/RPC-JP_Logo.png"
          alt=""
        />
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navi_linked">
        
          <li class="nav-item active">
            <a class="nav-link" href="trainer.php"></a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="customeruser.php">CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="holidays.php">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="training.php">TRAINING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="package.php">PACKAGES</a>
          </li>
        </ul>
      </div>
     
    </nav> </br>











<?php
include 'connection.php';
$id=$_GET['id'];

$sql="SELECT*FROM activate INNER JOIN package ON activate.packageid=package.packageid INNER JOIN customer ON activate.customerid=customer.customerid";
//echo $sql;
if($res=mysqli_query($con,$sql)){
    //if(mysqli_num_rows($res)>0){
        
         while ($row=mysqli_fetch_array($res)){
             
             

              $id=$row['customerid'];


         }




$sql="UPDATE customer SET status='pending' where customerid='$id'";
echo $sql;
if(mysqli_query($con,$sql)){
       
    echo "Adding data is successfully";
    header("location:booking2.php");
    
}
else{
    echo "Error occuring";
    echo mysqli_error($con);
}
         // }
        //}
    }


?>
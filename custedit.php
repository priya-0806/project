<?php
include 'connection.php';
    
    $id=$_GET['id'];
    $var=$id;
        //echo $id;
    $sql="SELECT customername,gender,dob,mobilenumber,address,city,state,pincode FROM customer where customerid='$id'";
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_array($res)){
                $name=$row['customername'];
                $gender=$row['gender'];
                $dob=$row['dob'];
                $mobile=$row['mobilenumber'];
                $address=$row['address'];
                $city=$row['city'];
                $state=$row['state'];
                $pincode=$row['pincode'];
                
                
                }
            mysqli_free_result($res);
        }else{
            echo "No Records Found";
        }
    }else{
        echo $sql."<br/> Error: ".mysqli_error($con);
    }
   
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>Updation </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=0.1"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <scritpt src="js/bootstrap.min.js"></script>
        <style>
            body{
                background-color:white;
            }
            div.container{
                width:500px;
                margin:30px 35%;
                padding:10px 25px 20px 25px;
                border:1px solid none;
                border-radius: 10px;
                background-color: lightgray;
            }
            h1.h2{
                margin: 20px 10px;
            }
            #B1{
                width:450px;
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
            <a class="nav-link" href="trainer.php">TRAINER</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="">CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGOUT</a>
          </li>
        </ul>
      </div>
     
    </nav> </br>



        <div class="container">
            <form class="row g-3" action="custedit1.php" method="post">
                <div class="col-md-12">
                    <h1 class="h2" align="center">Updation </h1>
                </div>
                <div class="col-md-12">
                    
                    <input type="hidden"id=""  name="id" value="<?php echo $var?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter your name" name="n1" value="<?php echo $name?>" required/>
                </div>
                <div class="col-md-12">
                    <label for="dropdown" class="form-label">Gender:</label>
                    <select name="n2" class="form-control" value="<?php echo  $gender?>">
                        <option> Male </option>
                        <option> Female </option>
                        <option> Others </option>
                    </select>
                    
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" id=" " placeholder="Enter your date of birth" name="n3"value="<?php echo  $dob?>" required/>
                </div>
                <div class="col-md-6">
                    <label for="mobile" class="form-label">Mobile Number:</label>
                    <input type="number" class="form-control" id=" " placeholder="Enter your mobile number" name="n4"value="<?php echo  $mobile?>" required/>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter your address" name="n5"value="<?php echo  $address ?>" required/>
                </div>
                
                <div class="col-md-6">
                    <label for="City" class="form-label">City:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter city" name="n6"value="<?php echo $city?>" required/>
                </div>
                <div class="col-md-6">
                    <label for="State" class="form-label">State:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter state" name="n7" value="<?php echo $state?>" required/>
                </div>
                <div class="col-md-6">
                    <label for="pincode" class="form-label">Pincode:</label>
                    <input type="number" class="form-control" id=" " placeholder="Enter your pincode" name="n8"value="<?php echo  $pincode?>" required/>
                </div>
                
                <div class="col-12">
                    <button id="B1" type="submit" class="btn btn-primary" onclick="return validateform()">Update Record</button>
                </div>
            </form>
        </div>
        
    </body>
</html>
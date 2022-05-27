<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <scritpt src="js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
      .h11{
        margin:-50px 0px 10px 90px;
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
            <a class="nav-link" href="customer1.php">CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="training.php">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">PACKAGES</a>
          </li>
        </ul>
      </div>
     
    </nav> </br>


  <a href="trainerinsert.php" ><input type="submit" value="ADD THE TRAINER" class="btn btn-dark" name="" id=""> </a> 
  <div align="right">
 <a href="login.php" ><input type="submit" value="Logout" class="btn btn-danger h11" name="" id=""></a></br></div>

     <form action=" " method="get">  
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Trainername</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Experience</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
        
            <?php
include 'connection.php';
    ?>
    <?php
    $sql="SELECT * FROM trainer";
    if($res=mysqli_query($con, $sql)){
        if(mysqli_num_rows($res)>0){
          $i=1;
            while($row=mysqli_fetch_array($res)){
                echo "<tr> <td> $i </td>";
                $id=$row['trainerid'];
                echo "<td>" .$row['trainername']."</td>";
                echo "<td>" .$row['gender']."</td>";
                echo "<td>" .$row['dob']."</td>";
                echo "<td>" .$row['mobilenumber']."</td>";
                echo "<td>" .$row['address']."</td>";
                echo "<td>" .$row['city']."</td>";
                echo "<td>" .$row['state']."</td>";
                echo "<td>" .$row['pincode']."</td>";
                echo "<td>" .$row['yoe']."</td>";
                echo "<td> <a href='trainerdlt.php?id=".$row['trainerid']."' onclick='return confirm(\"Do you want to delete?\")'><i class=\"fa fa-trash-o\"></i></a> 
                     <a href='traineredit.php?id=".$row['trainerid']."'><i class=\"fa fa-wrench\"></i></a>
                     <a href='trainerview.php?id=".$row['trainerid']."'><i class=\"fa fa-eye\"></i></i></a></td>"; 
                 
                    echo "</tr>";
                    $i=$i+1;
             }
            echo "</table>";
            mysqli_free_result($res);
        }
        else{
            echo "Record not found";
        }

        }else{
            echo "error:could not able to excute $sql".mysqli_error($con);
        }
        
    
    
    ?>
</table>
</div>
</form>
</body>
</html>
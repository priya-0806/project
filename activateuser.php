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
    
</head>
<?php
    session_start();
     echo "Welcome ".$_SESSION['sname'];?>

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
            <a class="nav-link" href="customer.php">CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="holidays.php">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="package.php">PACKAGES</a>
          </li>
        </ul>
      </div>
     
    </nav> </br>

<div align="right">
    <a href="login.php" ><input type="submit" value="Logout" class="btn btn-danger" name="" id=""></a></br></div>
    
</br>
     <form action=" " method="post">  
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Customername</th>
                    <th>Duration</th>
                    <th>Amount</th>
                    <th>Startdate</th>
                    <th>Enddate</th>
                    <th>Status</th>
                    
                    
                  
                    
                </tr>
            </thead>
        
            <?php
include 'connection.php';
    ?>
    <?php
    $sql="SELECT*FROM activate INNER JOIN customer ON activate.customerid=customer.customerid INNER JOIN package ON activate.packageid=package.packageid;";
    if($res=mysqli_query($con, $sql)){
        if(mysqli_num_rows($res)>0){
          $i=1;
            while($row=mysqli_fetch_array($res)){
              

                echo "<tr> <td> $i </td>";

                $id=$row['activeid'];
               echo "<td>" .$row['customername']."</td>";
               echo "<td>" .$row['duration']."</td>";
               echo "<td>" .$row['amount']."</td>";
                echo "<td>" .$row['startdate']."</td>";
                echo "<td>" .$row['enddate']."</td>";
                echo "<td>" .$row['status']."</td>";
                
                
               
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
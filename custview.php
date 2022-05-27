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
    <div>   
    <?php
include 'connection.php';
    

    $id=$_GET['id'];

    $sql="SELECT * FROM customer where customerid='$id'"; ?>
    <table class="table table-striped" align="center">
            <tr>
            <th>S.NO</th>
                    <th>Customername</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    
                    
            
           
            </tr>
    <?php
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            $i=1;
        while($row=mysqli_fetch_array($res)){
            echo "<tr> <td> $i </td>";
                $id=$row['customerid'];
                //echo "<td>" .$row['trainerid']."</td>";
                echo "<td>" .$row['customername']."</td>";
                echo "<td>" .$row['gender']."</td>";
                echo "<td>" .$row['dob']."</td>";
                echo "<td>" .$row['mobilenumber']."</td>";
                echo "<td>" .$row['address']."</td>";
                echo "<td>" .$row['city']."</td>";
                echo "<td>" .$row['state']."</td>";
                echo "<td>" .$row['pincode']."</td>";
                
                echo "</tr>";
                $i=$i+1;
            
        }
        echo "</table> <br/>";
        mysqli_free_result($res);
        }
    }else{                
        echo "Error while running the query"."<br/>".mysqli_error($con);
        $err=$sql."<br/>".mysqli_error($con);
        $fp=fopen('../logs/view.txt','a');
            fwrite($fp,$err);
            fclose($fp);
    }
    ?> </div>
        <div align="right">
        <a href="customer1.php">
            <button class="btn btn-secondary" > << Go Back </button>
        </a>
        </div>
</body>
</html>
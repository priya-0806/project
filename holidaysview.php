<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/bootstrap.min.js"> </script>
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

    $sql="SELECT * FROM holiday where holidayid='$id'"; ?>
    <table class="table table-striped" align="center">
            <tr>
            
                    <th>S.NO</th>
                    <th>Description</th>
                    <th>Date</th>
                    
                    
                    
            
           
            </tr>
    <?php
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            $i=1;
        while($row=mysqli_fetch_array($res)){
            echo "<tr> <td> $i </td>";
                $id=$row['holidayid'];
                
                echo "<td>" .$row['description']."</td>";
                echo "<td>" .$row['date']."</td>";
                
                
                echo "</tr>";
                $i=$i+1;
            
        }
        echo "</table> <br/>";
        mysqli_free_result($res);
        }
    }else{                
        echo "Error while running the query"."<br/>".mysqli_error($con);
        
    }
    ?> </div>
        <div align="right">
        <a href="holidays.php">
            <button class="btn btn-secondary" > << Go Back </button>
        </a>
        </div>
</body>
</html>
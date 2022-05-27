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
//$var=$id;
    $sql="SELECT * FROM package where packageid='$id'"; ?>
    <table class="table table-striped" align="center">
            <tr>
            
                    <th>S.NO</th>
                    <th>Duration</th>
                    <th>Amount</th>
                    
                    
                    
            
           
            </tr>
    <?php
    if($res=mysqli_query($con,$sql)){
        if(mysqli_num_rows($res)>0){
            $i=1;
        while($row=mysqli_fetch_array($res)){
            echo "<tr> <td> $i </td>";
                $id=$row['packageid'];
                
                echo "<td>" .$row['duration']."</td>";
                echo "<td>" .$row['amount']."</td>";
                echo "<td> <a href='pkgview.php?id=".$row['packageid']."'><i class=\"fa fa-eye\"></i></i></a></td>";
                
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
        <a href="package.php">
            <button class="btn btn-secondary" > << Go Back </button>
        </a>
        </div>
</body>
</html>
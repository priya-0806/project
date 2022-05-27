<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="controller/css/bootstrap.min.css" />
    <link rel="stylesheet" href="controller/css/style.css" />
      <link rel="stylesheet" href="controller/css/home.css" />
  </head>
  <body>
    <br />
        <?php session_start();

          include 'connection.php';
          
           $name=$_POST['name'];
           $password=$_POST['pass'];
           $sqlh= "SELECT * FROM login where username='$name'";
            if($res=mysqli_query($con,$sqlh)){
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_array($res)){
                        $name=$row['username'];
                        $pass=$row['password'];
                        $role=$row['role'];
                        if($password==$pass){
                            $_SESSION['sname']=$row['username'];
                            $_SESSION['srole']=$row['role'];
                            if($row['role']=='admin'){
                                header("location: dashboard.php");
                            }else{
                                header("location: customeruser.php");
                            }
                        }else{
                            echo "Password Incorrect";
                            echo"<div align='left'> <br/>
                            <a href='login.php'>
                                <button class='btn btn-secondary' > << Go Back </button>
                            </a>
                            </div>";
                        }
                    }
                    mysqli_free_result($res);
                }else{
                    echo "User not found";
                    echo"<div align='left'> <br/>
                    <a href='login.php'>
                        <button class='btn btn-secondary' > << Go Back </button>
                    </a>
                    </div>";
                }
            }else{
                echo "Error: could not onnect $sql".mysqli_error($con);
                echo"<div align='left'> <br/>
                    <a href='login.php'>
                        <button class='btn btn-secondary' > << Go Back </button>
                    </a>
                    </div>";
            }     
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <scritpt src="JS/bootstrap.min.js"></script>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
         
    </head>
    <style>
            body{
                margin-top:20px;
                background:#FAFAFA;
            }
            .order-card {
                color: #fff;
            }

            .bg-c-blue {
                background: linear-gradient(45deg,#4099ff,#73b4ff);
            }

            .bg-c-green {
                background: linear-gradient(45deg,#2ed8b6,#59e0c5);
            }

            .bg-c-yellow {
                background: linear-gradient(45deg,#FFB64D,#ffcb80);
            }

            .bg-c-pink {
                background: linear-gradient(45deg,#FF5370,#ff869a);
            }


            .card {
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
                box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
                border: none;
                margin-bottom: 30px;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .card .card-block {
                padding: 25px;
            }

            .order-card i {
                font-size: 26px;
            }

            .f-left {
                float: left;
            }

            .f-right {
                float: right;
            }
        </style>
    <body>
        <table>
        <tr>
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
            <a class="nav-link" href="holidays.php">HOLIDAYS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="training.php">TRAINING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="activate.php">ACTIVATE</a>
          </li>
          
        </ul>
      </div>
     
    </nav><br>


<div align="right">
<a href="login.php" ><input type="submit" value="Logout" class="btn btn-danger h11" name="" id=""></a></div>
            <?php
         include 'connection.php';
                 ?>
                

                    
                <br/><br/><br/><br/>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Trainers </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-book f-left"></i><span>
                        <?php 
                                      $sql="SELECT trainerid FROM trainer";
                                      if($res=mysqli_query($con,$sql)){
                                         $count=mysqli_num_rows($res);
                                             
                                          echo $count;
                                          }
                                          else{
                                              echo "error";
                                          }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Customers </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-gears f-left"></i><span>
                    <?php 
                                     $sql1="SELECT customerid FROM customer";
                                     if($res=mysqli_query($con,$sql1)){
                                        $count1=mysqli_num_rows($res);
                                            
                                         echo $count1;
                                         }
                                         else{
                                             echo "error";
                                         }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Activers </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-users f-left"></i><span>
                    <?php 
                                     $sql="SELECT customerid FROM customer WHERE status='active'";
                                     if($res=mysqli_query($con,$sql)){
                                        $count=mysqli_num_rows($res);
                                            
                                         echo $count;
                                         }
                                         else{
                                             echo "error";
                                         }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h5 class="m-b-20"> Total Inactivers </h5>
                    <br/>
                    <h2 class="text-center"><i class="fa fa-credit-card f-left"></i><span>
                    <?php 
                                     $sql="SELECT customerid FROM customer WHERE status='inactive'";
                                     if($res=mysqli_query($con,$sql)){
                                        $count=mysqli_num_rows($res);
                                            
                                         echo $count;
                                         }
                                         else{
                                             echo "error";
                                         }
                        ?>
                    </span></h2>
                </div>
            </div>
        </div>
    </div>
</div>


                    
                

       </div>
        
    </body>
</html>
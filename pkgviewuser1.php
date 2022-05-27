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



    <div>   
    <?php
include 'connection.php';
$id=$_GET['id'];
$var=$id;
$sql = "SELECT * FROM package INNER JOIN trainer ON package.packageid=trainer.trainerid;";
			$res= mysqli_query($con, $sql);			
			while( $row = mysqli_fetch_assoc($res) ) {
                
                $duration=$row['duration'];
                $amount=$row['amount'];

			?>
     
     
      <div class="container">
      <div class="row justify-content-md-center">
      <div class="col-4">
            <div class="card">
                <center><h5><div class="cardheader bg-info"> !.....BOOKING CONFIRMATION....! </h5>  </center>          
                <div class="card-body info">
              <div class="row">
               
                  <div class="form">
                <form method="post" action="booking.php">
                    <input type='hidden' name='n1' value="<?php echo $row['duration']; ?>"/>
                    <input type='hidden' name='n2' value="<?php echo $row['amount']; ?>"/>
                
                    <h4><div class="title"><label>Duration: </label>
                        <?php echo $row['duration']; ?></h4>
                    </div>
				<h4>	<div class=""> <label > Amount: </label><?php echo $row['amount']; ?></h4></div>
                
                <h4>	<div class=""> <label > Trainer: </label> </h4>
                <select name="n3">
                    <?php // while(mysqli_fetch_assoc($res)){
                    echo "<option  value='".$row['trainerid']."'>".$row['trainername']."</option>" ?>
                </select></div>
        <div>
         <?php echo "<button class='btn btn-primary' type='submit' onclick='return alert(\"Your Booking Sucessfully Completed\")'> BOOK</button> "?></form>
         <?php echo "<a href='customer.php?id=$id'><button class='btn btn-dark'> CANCEL</button></a>"?>
            </div>
                
                    
                </div>
                    
            </div> <br>
			<?php } ?>
</div>
        <div align="right">
        <a href="customer.php">
            <button class="btn btn-secondary" > << Go Back </button>
        </a>
        </div>
</body>
                    
</html>
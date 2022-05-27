
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/home.css" />
 
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
      <a class="navbar-brand" href="index.html">
        <img
          class="logo_img"
          src="img/logo.png"
          alt=""
        />
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navi_linked">
          <li class="nav-item active">
        <a class="nav-link h11" href=" ">WELCOME TO GYM</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" "></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" "></a>
          </li>
        </ul>
      </div>
    </nav>
    <br />
    
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm-4">
          <div class="card">
		  <form action="login1.php" method="post">
            <h5 class="card-header bg-info">Login</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label> User name</label>
                    <input type="text" class="form-control" name="name" required/>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label> Password</label>
                    <input type="password" class="form-control" name="pass" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <ul class="list-inline pull-right">
                    <li class="list-inline-item">
                      <button type="reset" class="btn btn-danger">Cancel</button>
                    </li>
                    <li class="list-inline-item">
                      <a href="home.html">
                        <button class="btn btn-success" type="submit">Submit</button>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
			</form>
      
          </div>
        </div>
      </div>
    </div><br>
   <h5> <div align="center"> Incase you are new user
    <a href="create.php"> create new account </a> </div> </h5>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>

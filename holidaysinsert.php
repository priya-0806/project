<!DOCTYPE html>
<html>
    <head>
        <title>NEW ACCOUNT </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=0.1"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/home.css" />
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
        <a class="nav-link" href=" ">WELCOME TO GYM</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN PAGE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" "></a>
          </li>
        </ul>
      </div>
    </nav> <br>



        <div class="container">
            <form class="row g-3" action="holidaysinsert1.php" method="post" name="myform">
                <div class="col-md-12">
                    <h1 class="h1" align="center" >ADD HOLIDAYS </h1>
                </div>
                <div class="col-md-12">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter your description" name="n1"/>
                    <span id="t1" style="color:red"></span>
                </div>
                
                
                
                <div class="col-md-12">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" class="form-control" id=" "   name="n2"/>
                    <span id="t2" style="color:red"></span>
                </div>
                
                <div class="col-6">
                    <button id="B1" type="submit" class="btn btn-primary" onclick='return validate()'>Create New Holiday</button>
                </div>
            </form>
            <script type="text/javascript">
                function validate(){
                    var des=document.myform.n1.value;
                    var date=document.myform.n2.value;
                   
                     


                    var s=true;
                    if(des==""||des==null){
                        document.getElementById("t1").innerHTML="Description is required";
                        s=false;
                    }else{
                        document.getElementById("t1").innerHTML=" ";
                    }
                    if(date==""||date==null){
                        document.getElementById("t2").innerHTML="Date  is required";
                        s=false;
                    }else{
                        document.getElementById("t2").innerHTML=" ";
                    }
                    
                   
                    
                    
                    return s;
                }
                </script>


        </div>
        
    </body>
</html>
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
            <form class="row g-3" action="traininginsert1.php" method="post" name="myform">
                <div class="col-md-12">
                    <h1 class="h1" align="center" >NEW ADDING </h1>
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Cust Name:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter customer name" name="n1"/>
                    <span id="t1" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="number" class="form-label">Cust Mob Num:</label>
                    <input type="number" class="form-control" id="" placeholder="Enter customer mobile number" name="n2"/>
                    <span id="t2" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Trainer Name:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter trainer name" name="n3"/>
                    <span id="t3" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="mobile" class="form-label">Trainer Mob Num:</label>
                    <input type="number" class="form-control" id="" placeholder="Enter trainer mobile number" name="n4"/>
                    <span id="t4" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="date" class="form-label">Start Date:</label>
                    <input type="date" class="form-control" id=""  name="n5"/>
                    <span id="t5" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="date" class="form-label">End Date:</label>
                    <input type="date" class="form-control" id=""  name="n6"/>
                    <span id="t6" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="amount" class="form-label">Amount:</label>
                    <input type="number" class="form-control" id="" placeholder="Enter amount" name="n7"/>
                    <span id="t7" style="color:red"></span>
                </div>
                
               
                
               
                <div class="col-md-12">
                    <label for="dropdown" class="form-label" name="n9">Status:</label>
                    <select name="n8" class="form-label">
                        <option> Paid </option>
                        <option>Unpaid </option>
                        
                    </select>
                    
                    <span id="t8" style="color:red" name="n9"></span>
                </div><br>
                <div class="col-6">
                    <button id="B1" type="submit" class="btn btn-primary" onclick='return validate()'>Create New Trainer</button>
                </div>
            </form>
            <script type="text/javascript">
                function validate(){
                    var cname=document.myform.n1.value;
                    var cmobile=document.myform.n2.value;
                    var tname=document.myform.n3.value;
                    var tmobile=document.myform.n4.value;
                     var sdate=document.myform.n5.value;
                     var edate=document.myform.n6.value;
                     var amount=document.myform.n7.value;
                     var status=document.myform.n8.value;
                     


                    var s=true;
                    if(cname==""||cname==null){
                        document.getElementById("t1").innerHTML="Customer name is required";
                        s=false;
                    }else{
                        document.getElementById("t1").innerHTML=" ";
                    }
                    if(cmobile==""||cmobile==null){
                        document.getElementById("t2").innerHTML="Customer mobile number is required";
                        s=false;
                    }else{
                        document.getElementById("t2").innerHTML=" ";
                    }
                    if(tname==""||tname==null){
                        document.getElementById("t3").innerHTML="Trainer name is required";
                        s=false;
                    }else{
                        document.getElementById("t3").innerHTML=" ";
                    }
                    if(tmobile==""||tmobile==null){
                        document.getElementById("t4").innerHTML="Trainer Mobile number is required";
                        s=false;
                    }else{
                        document.getElementById("t4").innerHTML=" ";
                    }
                    if(sdate==""||sdate==null){
                        document.getElementById("t5").innerHTML="Starting date is required";
                        s=false;
                    }else{
                        document.getElementById("t5").innerHTML=" ";
                    }
                    if(edate==""||edate==null){
                        document.getElementById("t6").innerHTML="End date is required";
                        s=false;
                    }else{
                        document.getElementById("t6").innerHTML=" ";
                    }
                    if(amount==""||amount==null){
                        document.getElementById("t7").innerHTML="Amount is required";
                        s=false;
                    }else{
                        document.getElementById("t7").innerHTML=" ";
                    }
                    if(status==""||status==null){
                        document.getElementById("t8").innerHTML="Status is required";
                        s=false;
                    }else{
                        document.getElementById("t8").innerHTML=" ";
                    }
                    
                    
                    
                    return s;
                }
                </script>


        </div>
        
    </body>
</html>
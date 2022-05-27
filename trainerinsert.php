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
            <form class="row g-3" action="trainerinsert1.php" method="post" name="myform">
                <div class="col-md-12">
                    <h1 class="h1" align="center" >NEW TRAINER </h1>
                </div>
                <div class="col-md-12">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="" placeholder="Enter your name" name="n1"/>
                    <span id="t1" style="color:red"></span>
                </div>
                
                <div class="col-md-12">
                    <label for="dropdown" class="form-label" name="n2">Gender:</label>
                    <select name="n2" class="form-control">
                        <option> Male </option>
                        <option> Female </option>
                        <option> Others </option>
                    </select>
                    <span id="t2" style="color:red" name="n2"></span>
                    
                </div>
               
                
                <div class="col-md-6">
                    <label for="dateofbirth" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" id=" "  name="n3"/>
                    <span id="t3" style="color:red"></span>
                </div>
                <div class="col-md-6">
                    <label for="number" class="form-label">Mobile number:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter your mobile number" name="n4"/>
                    <span id="t4" style="color:red"></span>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter your address" name="n5"/>
                    <span id="t5" style="color:red"></span>
                </div>
                <div class="col-md-6">
                    <label for="City" class="form-label">City:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter your city" name="n6"/>
                    <span id="t6" style="color:red"></span>
                </div>
                <div class="col-md-6">
                    <label for="State" class="form-label">State:</label>
                    <input type="text" class="form-control" id=" " placeholder="Enter your state" name="n7"/>
                    <span id="t7" style="color:red"></span>
                </div>
                <div class="col-md-6">
                    <label for="pincode" class="form-label">Pincode:</label>
                    <input type="number" class="form-control" id=" " placeholder="Enter your pincode" name="n8"/>
                    <span id="t8" style="color:red"></span>
                </div>
                <div class="col-md-12">
                    <label for="dropdown" class="form-label" name="n9">Experience:</label>
                    <select name="n9" class="form-label">
                        <option> Null </option>
                        <option> 0-3 years </option>
                        <option> 3-5 years </option>
                        <option> 5-10 years </option>
                        <option> More </option>
                    </select>
                    
                    <span id="t9" style="color:red" name="n9"></span>
                </div><br>
                <div class="col-6">
                    <button id="B1" type="submit" class="btn btn-primary" onclick='return validate()'>Create New Trainer</button>
                </div>
            </form>
            <script type="text/javascript">
                function validate(){
                    var name=document.myform.n1.value;
                    var gender=document.myform.n2.value;
                    var dob=document.myform.n3.value;
                    var mobile=document.myform.n4.value;
                     var address=document.myform.n5.value;
                     var city=document.myform.n6.value;
                     var state=document.myform.n7.value;
                     var pincode=document.myform.n8.value;
                     var exp=document.myform.n9.value;


                    var s=true;
                    if(name==""||name==null){
                        document.getElementById("t1").innerHTML="Name is required";
                        s=false;
                    }else{
                        document.getElementById("t1").innerHTML=" ";
                    }
                    if(gender==""||gender==null){
                        document.getElementById("t2").innerHTML="Name is required";
                        s=false;
                    }else{
                        document.getElementById("t2").innerHTML=" ";
                    }
                    if(dob==""||dob==null){
                        document.getElementById("t3").innerHTML="Date of Birth is required";
                        s=false;
                    }else{
                        document.getElementById("t3").innerHTML=" ";
                    }
                    if(mobile==""||mobile==null){
                        document.getElementById("t4").innerHTML="Mobile number is required";
                        s=false;
                    }else{
                        document.getElementById("t4").innerHTML=" ";
                    }
                    if(address==""||address==null){
                        document.getElementById("t5").innerHTML="Address is required";
                        s=false;
                    }else{
                        document.getElementById("t5").innerHTML=" ";
                    }
                    if(city==""||city==null){
                        document.getElementById("t6").innerHTML="City is required";
                        s=false;
                    }else{
                        document.getElementById("t6").innerHTML=" ";
                    }
                    if(state==""||state==null){
                        document.getElementById("t7").innerHTML="State is required";
                        s=false;
                    }else{
                        document.getElementById("t7").innerHTML=" ";
                    }
                    if(pincode==""||pincode==null){
                        document.getElementById("t8").innerHTML="Pincode is required";
                        s=false;
                    }else{
                        document.getElementById("t8").innerHTML=" ";
                    }
                    if(exp==""||exp==null){
                        document.getElementById("t9").innerHTML="Years od exp is required";
                        s=false;
                    }else{
                        document.getElementById("t9").innerHTML=" ";
                    }
                    
                    
                    return s;
                }
                </script>


        </div>
        
    </body>
</html>
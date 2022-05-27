<?php
include 'connection.php';
$id=$_GET['id'];
$var=$id;
function validate($customerid){
    global $con;
$mysql1="DELETE FROM customer where customerid='$customerid'";

    if($res=mysqli_query($con,$mysql1)){
        echo "ur data deleted successfully";
    }
    else{
          echo "error was occuring";
          echo mysqli_error($con);

    }


}
validate($id)

?>
<div align="center">
        <a href="customer1.php">
            <button class="btn btn-dark" > << Go Back </button>
        </a>
        </div>
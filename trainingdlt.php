<?php
include 'connection.php';
$id=$_GET['id'];

function validate($trainingid){
    global $con;
$mysql1="DELETE FROM training where trainingid='$trainingid'";

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
        <a href="training.php">
            <button class="btn btn-dark" > << Go Back </button>
        </a>
        </div>
<?php
$con=mysqli_connect('localhost','root','','mystore');
if($con){
    // echo"connection is sucessfull";

}else{
    die(mysqli_error($con));

}


?>

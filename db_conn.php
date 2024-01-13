<?php 

$con = mysqli_connect("localhost","root","", "chrismacharia","3308");

if($con){
    echo "Connection successfull";
}else{
    echo "Connection failure";
}

?>
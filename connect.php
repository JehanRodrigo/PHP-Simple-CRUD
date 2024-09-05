<?php
$con=new mysqli("localhost","root","","crudoperation");


if(!$con){

    die("Connection failed: " . mysqli_error($con));

}

?>
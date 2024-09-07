<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `userdetails` WHERE `ID` = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die("Data deleting failed: " . mysqli_error($con));
    }
}
?>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `userdetails` (`name`, `email`, `phone`, `address`) VALUES ('$name', '$email', '$phone', '$address')";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
      die("Data inserting failed: " . mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your Name" autocomplete="off">
   
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email" autocomplete="off">
   
  </div>

  <div class="mb-3">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter your Phone" autocomplete="off">
   
  </div>

  <div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter your Address" autocomplete="off">
   
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    
  </body>
</html>
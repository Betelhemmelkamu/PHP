<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];

  $sql = "INSERT INTO `crud` (`name`, `email`, `password`, `mobile`) VALUES ('$name', '$email', '$password', '$mobile')";
  $result = mysqli_query($conn, $sql);

  if($result){
      header('location: display.php');
  }
  else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="name" name="name" class="form-control" placeholder="Enter your name" id="exampleInputEmail1" >
  
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="Email" name="email"class="form-control" placeholder="Enter your email"id="exampleInputPassword1">
  </div>
  <div class="mb-4">
    <label for="mobile" class="form-label">phone number:</label>
    <input type="phone number" name="mobile" class="form-control" placeholder="Enter your phone number" id="exampleInputPassword1">
  </div>
  <div class="mb-4">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password"class="form-control" placeholder="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
</form>
    </div>
   
  </body>
</html>
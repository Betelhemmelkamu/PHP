<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id='$id' ";
$result= mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$mobile = $row['mobile'];

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];

  $sql = "Update `crud` set id='$id',name='$name',email='$email',moble='$mobile',password='$password' where id='$id' ";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "updated successfully";
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
    <input type="name" name="name" class="form-control" placeholder="Enter your name" id="exampleInputEmail1" value=<?php echo $name; ?> >
  
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="Email" name="email"class="form-control" placeholder="Enter your email"id="exampleInputPassword1" value=<?php echo $email; ?>>
  </div>
  <div class="mb-4">
    <label for="mobile" class="form-label">phone number:</label>
    <input type="phone number" name="mobile" class="form-control" placeholder="Enter your phone number" id="exampleInputPassword1" value=<?php echo $mobile; ?>>
  </div>
  <div class="mb-4">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password"class="form-control" placeholder="password" id="exampleInputPassword1" value=<?php echo $password; ?>>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-secondary">Update</button>
</form>
    </div>
   
  </body>
</html>
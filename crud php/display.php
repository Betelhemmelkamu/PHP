<?php
include "connect.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCrud operation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone number</th>
      <th scope="col">Password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <?php

  $sql = "select * FROM `crud`";
  $result = mysqli_query($conn, $sql);
  if($result){
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row ['email'];
    $mobile = $row ['mobile'];
    $password = $row ['password'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'/td>
    <td>'.$mobile.'</td>
    <td>'.$password.'</td>
    <td>
    <button class="btn btn-primary" ><a href = "update.php ?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger" ><a href = "delete.php ?deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
  </tr>';
}
  }
  ?>
  
</table>
    </div>
</body>
</html>
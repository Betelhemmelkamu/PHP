<?php

include "config.php";

if(isset($_POST['submit']));{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_post['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}
$sql = "INSERT INTO 'tutorial'('firstname', 'lastname', 'password', 'gender', 'email')VALUE('$first_name','$last_name','$email','$gender','$password')";

$result = $conn->query($sql);
if($result == true){
    echo "record successfully";
}
else{
echo "an error occured" .$sql . "<br>" .$conn->error;
}
$conn->closed();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Signup FOrm</h1>
    <form action="" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender_male" value="Male" required>
        <label for="gender_male">Male</label>
        <input type="radio" name="gender" id="gender_female" value="Female" required>
        <label for="gender_female">Female</label><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Sign Up">
    </form>

</body>
</html>

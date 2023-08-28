<?php

include  'config.php';
$sql = "SELECT * FROM tutorial";
$resul = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>


<body>
    <div class="container">
        <h2>Users</h2>
        <table class="table">
        <head>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        <thead>
<tbody>
    <?php
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

}
?>
<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['firstname'];?></td>
    <td><?php echo $row['lastname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><a class="btn-info" href="update.php?id=<?php echo $raw['id'];?>"></a>
</tr>
        </table>
    </div>
</body>
</html>
<?php
include('./db-connect.php');

//write querry
$sql = 'SELECT * FROM department_leader ORDER BY created_at';

//get result
$result = mysqli_query($conn,$sql);

//fetch in array
$staff_members = mysqli_fetch_all($result, MYSQLI_ASSOC);
$no = 1;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAshboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>   
                      <table class="staff">
                        <thead>
                          <tr>
                            <th scope="col">N0.</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Department</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($staff_members as $member): ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $member['fullname']; ?></td>
                              <td><?php echo $member['phone']; ?></td>
                              <td><?php echo $member['email']; ?></td>
                              <td><?php echo $member['department']; ?></td>
                              <td>UPDATE</td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
</body>
</html>
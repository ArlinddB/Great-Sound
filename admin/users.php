<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="table-container">
        <h2>User details</h2>
              
        <table class="table-all">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Date of birth</th>
              <th>Gender</th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            include("../admin/model.php");
            $model = new Model();
            $rows = $model->fetch();
            
            if(!empty($rows)){
              foreach($rows as $row){
            ?>

            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['firstname']; ?></td>
              <td><?php echo $row['lastname']; ?></td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td><?php echo $row['dob']; ?></td>
              <td><?php echo $row['gender']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id'] ?>"><button class="edit">Edit</button></a>
                <a href="delete.php?id=<?php echo $row['id'] ?>"><button class="delete">Delete</button></a>
              </td>
            </tr>

            <?php
              }
            }else{
              echo "<script>alert('No Data')</script>";
            }

            ?>
            
          </tbody>
        </table>
      </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../admin/dashboard.css">
</head>
<body>
    <div class="table-container">
        <h2>Admin details</h2>
              
        <table class="table-all">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Password</th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            include("admModel.php");
            $model = new admModel();
            $rows = $model->fetchAdmins();
            
            if(!empty($rows)){
              foreach($rows as $row){
            ?>

            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['password']; ?></td>
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

        <a href="addAdmin.php"><button class="addUser" style="margin-left: 36%;">Add User</button></a>

      </div>
</body>
</html>
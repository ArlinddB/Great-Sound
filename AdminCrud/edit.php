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
<div class="form-container">
    <?php
    
    include("../AdminCrud/admModel.php");
    $model = new admModel();
    $id = $_REQUEST['id'];


    $row = $model->edit($id);
    
    if (isset($_POST['update'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
          
            
            $data['id'] = $id;
            
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
      

            $update = $model->update($data);

            if($update){
                echo "<script>alert('Data updated successfully');</script>";
                echo "<script>window.location.href = 'admins.php';</script>";
            }else{
                echo "<script>alert('Data update failed');</script>";
                echo "<script>window.location.href = 'admins.php';</script>";
            }

        }else{
            echo "<script>alert('Fill the fields');</script>";
            header("Location: edit.php?id=$id");
        }
    }
    
    ?>
  <form class="edit-form" method="POST">

    <label for="username">Username</label>
    <input type="text" name="username"value="<?php echo $row['username']; ?>">

    <label for="password">Password</label>
    <input type="text" name="password" value="<?php echo $row['password']; ?>">

    <input type="submit" value="Submit" name="update">
  </form>
</div>
</body>
</html>
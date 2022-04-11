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
<div class="form-container">
    <?php
    
    include("../admin/model.php");
    $model = new Model();
    $id = $_REQUEST['id'];


    $row = $model->edit($id);
    
    if (isset($_POST['update'])) {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && 
        !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['dob']) && !empty($_POST['password'])) {
          
            
            $data['id'] = $id;
            $data['firstname'] = $_POST['firstname'];
            $data['lastname'] = $_POST['lastname'];
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['dob'] = $_POST['dob'];
            $data['gender'] = $_POST['gender'];

            $update = $model->update($data);

            if($update){
                echo "<script>alert('Data update successfully');</script>";
                echo "<script>window.location.href = 'users.php';</script>";
            }else{
                echo "<script>alert('Data update failed');</script>";
                echo "<script>window.location.href = 'users.php';</script>";
            }

        }else{
            echo "<script>alert('Fill the fields');</script>";
            header("Location: edit.php?id=$id");
        }
    }
    
    ?>
  <form class="edit-form" method="POST">
    <label for="fname">First Name</label>
    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">

    <label for="lname">Last Name</label>
    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">

    <label for="username">Username</label>
    <input type="text" name="username"value="<?php echo $row['username']; ?>">

    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>">

    <label for="password">Password</label>
    <input type="password" name="password" value="<?php echo $row['password']; ?>">

    <label for="dob">Date of birth</label>
    <input type="date" name="dob" value="<?php echo $row['dob']; ?>">

    <label for="gender">Gender</label>
    <input type="text" name="gender" value="<?php echo $row['gender']; ?>">

    <input type="submit" value="Submit" name="update">
  </form>
</div>
</body>
</html>
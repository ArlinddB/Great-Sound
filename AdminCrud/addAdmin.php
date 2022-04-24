<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="../admin/dashboard.css">
</head>
<body>
<div class="form-container">
    <?php
    
    include("../AdminCrud/admModel.php");
    
    if (isset($_POST['update'])) {
        
        $username=$_POST['username'];
        $password=$_POST['password'];

        $register = new admModel();

        $register_query = $register->addAdmin($username,$password);
        if($register_query){
            echo "<script>alert('Data Added successfully');</script>";
            echo "<script>window.location.href = 'admins.php';</script>";
        }
    }

    
    ?>
  <form class="edit-form" method="POST">

    <label for="username">Username</label>
    <input type="text" name="username">

    <label for="password">Password</label>
    <input type="text" name="password">

    <input type="submit" value="Submit" name="update">
  </form>
</div>
</body>
</html>
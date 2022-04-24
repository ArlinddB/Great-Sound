<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<div class="form-container">
    <?php
    
    include("../admin/model.php");
    
    if (isset($_POST['update'])) {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $dob=date('Y-m-d', strtotime($_POST['date']));
        $gender=$_POST['Gender'];

        $register = new Model();

        $register_query = $register->addUser($firstname,$lastname,$username,$email,$password,$dob,$gender);
        if($register_query){
            echo "<script>alert('Data Added successfully');</script>";
            echo "<script>window.location.href = 'users.php';</script>";
        }
    }

    
    ?>
  <form class="edit-form" method="POST">
    <label for="fname">First Name</label>
    <input type="text" name="firstname">

    <label for="lname">Last Name</label>
    <input type="text" name="lastname">

    <label for="username">Username</label>
    <input type="text" name="username">

    <label for="email">Email</label>
    <input type="text" name="email">

    <label for="password">Password</label>
    <input type="password" name="password">

    <label for="dob">Date of birth</label>
    <input type="date" name="dob">

    <label for="gender">Gender</label>
    <input type="text" name="gender">

    <input type="submit" value="Submit" name="update">
  </form>
</div>
</body>
</html>
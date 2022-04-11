<?php 
include("../adminConfig/adminAuth.php");
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body style="  background: linear-gradient(135deg, rgba(2,0,36,1) 0%, rgba(52,9,121,1) 60%, rgba(0,212,255,1) 100%)">
<div class="login-box">
  <h2>Login</h2>
  <form method="post">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="admMsg">
    <?php if (isset($_GET['msg2'])) { ?>
      <label class="msg2"><?php echo $_GET['msg2']; ?></label>
    <?php } ?>
    </div>
    
    <button type="submit" class="admBtn">Login</button>
  </form>
</div>
</body>
</html>

<?php if (isset($_GET['msg'])) { ?>
    <p class="msg"><?php echo $_GET['msg']; ?></p>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="dashboard.css">
</head>

<body class="body">
    <div class="container">
        <div class="navbar">
            <div class="navitem">
                <div class="logout">

                </div>
            </div>
        </div>

        <div class="container-body">
            <div class="sidebar">
                <ul>
                    <li class="dashboard">
                        <i class="fas fa-columns"></i>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <i class="far fa-user-edit"></i>
                        <a href="users.php">Users</a>
                    </li>
                </ul>
            </div>

            <div class="main-body">
                <div class="headtitle">
                    <span style="font-size: 18px;">Hii, 
                     <?php 
                    
                    include("../adminConfig/AdminLoginController.php");
                    $model = new AdminLoginController();
                    $rows = $model->fetch();
                        echo $rows; 
                    ?> 
                    </span>
                    <h2>Overview</h2>
                </div>
                <div class="btn">
                    <form action="" method="post">
                        <button type="submit" name="logout-btn" class="logout">Logout</button>
                    </form>
                </div>
                <div class="cards">
                    <div class="row row-1">
                        <div class="col">
                            <div class="earnings-card">
                                <h2>Total Earnings</h2>
                                <span>$22,346.12</span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="total-sales">
                                <h2>Total Number of Sales</h2>
                                <span>10,324 units sold</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

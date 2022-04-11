<?php 

include_once("../adminConfig/AdminLoginController.php");

if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($input){

        $input = trim($input);
        
        $input = stripslashes($input);
        
        $input = htmlspecialchars($input);
        
        return $input;
        
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $auth = new AdminLoginController;
    $checkLogin = $auth->AdminLogin($username, $password);

    if($checkLogin){
        header("Location: dashboard.php");
    }
    else{
        header("Location: adminlogin.php?msg2=Username or password is invalid");
    }

}

?>
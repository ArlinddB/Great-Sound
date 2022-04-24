<?php

include("../AdminCrud/admModel.php");
$model = new admModel();
$id = $_REQUEST['id'];

$delete = $model->delete($id);

if($delete){
    echo "<script>alert('User was deleted successfuly')</script>";
    echo "<script>window.location.href = 'admins.php'</script>";
}

?>
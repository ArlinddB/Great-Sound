<?php

include("../admin/model.php");
$model = new Model();
$id = $_REQUEST['id'];

$delete = $model->delete($id);

if($delete){
    echo "<script>alert('User was deleted successfuly')</script>";
    echo "<script>window.location.href = 'users.php'</script>";
}

?>
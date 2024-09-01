<?php

require '../connection.php';
session_start();


if(isset($_POST['update'])){
    $id = $_POST['i_id'];
    $type = $_POST['i_type'];
    $price = $_POST['i_price'];
   

    $sql = "UPDATE `equipments_description` SET `i_price`='$price' WHERE i_id='$id'";

    if (mysqli_query($con,$sql) === TRUE){
        header("Location:http://localhost/hiring_system/Admin/components/Manage_Equipment/manage_equipment.php??msg=updateSuccess");
    } else{
        header("Location:http://localhost/hiring_system/Admin/components/Manage_Equipment/manage_equipment.php?.php?msg=updateFailed");
    }
}

if(isset($_POST['do_not_update'])){
    header("Location:http://localhost/hiring_system/Admin/index.php?msg=addItemSuccess#equipment-management");
}






?>
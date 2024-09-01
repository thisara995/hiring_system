<?php

require '../connection.php';
session_start();


if(isset($_POST['update'])){
    $id = $_POST['c_id'];
    $name = $_POST['c_fName'];
    $phone = $_POST['c_contact_number'];
    $address = $_POST['c_address'];
    $nic =  $_POST['c_nic'];
    $email =   $_POST['c_email'];
    $password =  $_POST ['c_password'];

    $sql = "UPDATE `customers` SET `c_fName`='$name',`c_contact_number`='$phone',`c_address`='$address',`c_nic`='$nic',`c_email`=' $email',`c_password`=' $password' WHERE c_id='$id'";

    if (mysqli_query($con,$sql) === TRUE){
        header("Location: ../../index.php?msg=updateSuccess");
    } else{
        header("Location: ../../index.php?msg=updateFailed");
    }
}

if(isset($_POST['do_not_update'])){
    header("Location: ../../index.php");
}






?>
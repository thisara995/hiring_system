<?php
require "../components/Manage_Equipment/connection.php";

$price = $_POST["price"];
$name = $_POST["name"];
$qty = $_POST["qty"];
$type =  $_POST["type"];
$stype =  $_POST["stype"];

if(empty($price)){
    echo("Please enter price !");
}else if(empty($name)){
    echo("Please enter name !");
}else if(empty($qty)){
    echo("Please enter qty !");
}else if(empty($type)){
    echo("Please enter type !");
}else if(empty($stype)){
    echo("Please enter item sub type !");
}else{
    Database::iud("INSERT INTO `equipments` (`e_name`,`e_price`,`e_type`,`e_sub_type`,`e_qty`) VALUES ('" . $name . "','" . $price . "','" . $type . "','" . $stype . "','" . $qty . "')");
    echo("success");
}


 ?>
<?php
require "connection.php";

// $eq_rs = Database::search("SELECT * FROM `equipments`");
// $eq_data = $eq_rs->fetch_assoc();

$price = $_POST["price"];
$qty = $_POST["qty"];
$ac = $_POST["ac"];
$id = $_POST["id"];
    
    Database::iud("UPDATE `equipments` SET `e_price`='" . $price . "', `e_qty`='" . $qty . "', `available_count`='" . $ac . "' WHERE `e_id`='" . $id . "'");
    echo("success");

 ?>
<?php require '../connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Worker</title>
    <style>

table
{
   color:white;
   background-color:black;
   border-radius : 20px; 
   border:0;
}

#button 
{
    background-color:green;
    color:white;
    height:32px;
    width:125px;
    border-radius:25px;
    font-size:16px;
}

#button_2 
{
    background-color:red;
    color:white;
    height:32px;
    width:125px;
    border-radius:25px;
    font-size:16px;
}



  </style>
</head>
<body>

<?php

$sql = "SELECT * FROM workers WHERE w_id={$_GET['id']}";
$result = mysqli_query($con, $sql);
while ($record = mysqli_fetch_assoc($result)){
    $id =  $record['w_id'];
    $name =  $record['w_name'];
    $phone =  $record['w_contact_number'];
    $address =  $record['w_address'];
    $type =  $record['w_type'];
    $description =  $record['w_description'];
    $status =  $record['availability'];
    $price =  $record['w_price'];
}
?>


<body>
  <br> <br> <br>
        <form action="edit.php" method="post">
            <table align ="center" cellspacing = "20">
                <tr>
                    <td>ID</td>
                    <td><?php echo $id; ?> <input type="text" name ="w_id" value="<?php echo $id; ?>" style="display: none"></td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td><input required type="text" name="w_name" id="w_name" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="w_phone" id="w_phone" value="<?php echo $phone; ?>"></td>
                </tr>
                
                <tr>
                    <td>Address</td>
                    <td><input required type="text" name="w_address" id="w_address" value="<?php echo $address; ?>"></td>
                </tr>
                
                <tr>
                    <td>Type</td>
                    <td>
                        <select name="type" id="type">
                            <option value="carpenters" <?php if($type === "carpenters"){echo "selected";} ?>>Carpenters</option>
                            <option value="mason" <?php if($type === "mason"){echo "selected";} ?>>Mason</option>
                            <option value="digging_Work" <?php if($type === "digging_Work"){echo "selected";} ?>>Digging Work</option>
                            <option value="glazier" <?php if($type === "glazier"){echo "selected";} ?>>Glazier</option>
                            <option value="backhoe_Driver" <?php if($type === "backhoe_Driver"){echo "selected";} ?>>Backhoe Driver</option>
                            <option value="electricians" <?php if($type === "electricians"){echo "selected";} ?>>Electricians</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Description</td>
                    <td><input required type="text" name="description" value="<?php echo $description; ?>"></td>
                </tr>
                
                <tr>
                    <td>Status</td>
                    <td>
                    <?php

                    if($status === "1"){
                        echo "Available";
                    } else {
                        echo "Not Available";
                    }
                    ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Price</td>
                    <td><input required type="number" name="price" value="<?php echo $price; ?>"></td>
                </tr>

                <tr>                

                    <td style=" left"><input type="submit"  id = "button" name="update" value="Update"></td>
                    <td style=" right"><input type="submit" id ="button_2" name="do_not_update" value="Cancel"></td>
                </tr>
                </table>
        </form>
</body>
</html>
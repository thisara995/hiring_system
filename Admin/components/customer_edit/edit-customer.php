

<?php
include ("../connection.php"); 
error_reporting (0);

$sql = "SELECT * FROM customers WHERE c_id={$_GET['id']}";

$result = mysqli_query($con, $sql);
while ($record = mysqli_fetch_assoc($result)){
    $id =  $record['c_id'];
    $name =  $record['c_fName'];
    $phone =  $record['c_contact_number'];
    $address =  $record['c_address'];
    $nic =  $record['c_nic'];
    $email =  $record['c_email'];
    $password =  $record['c_password'];
 
}
?>

<html>
<head>
<title> Customer Modification </title>

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
    <br> <br> <br> <br> <br>

<form action ="edit.php" method = "post">
    <table align ="center" cellspacing = "20">

    <tr>
      <td> Customer ID </td>
      <td><?php echo $id; ?> <input type="text" name ="c_id" value="<?php echo $id; ?>" style="display: none"></td>
</tr>

<tr>
    <td> Name </td>
    <td><input required type="text" name="c_fName" id="c_fName" value="<?php echo $name; ?>" required></td>
</tr>


<tr>
    <td> Contact Number </td>
    <td><input type="text" name="c_contact_number" id="c_contact_number" value="<?php echo $phone; ?>" required></td>
</tr>


<tr>
    <td> Address </td>
    <td><input required type="text" name="c_address" id="c_address" value="<?php echo $address; ?>" required></td>
</tr>

<tr>
    <td> NIC </td>
    <td><input required type="text" name="c_nic" id="c_nic" value="<?php echo  $nic; ?>" required></td>
</tr>

<tr>
      <td> Password </td>
      <td><input type="password" name ="c_password" value="<?php echo  $password; ?>" style="display: none"></td>
</tr>

<tr>
    <td> Email </td>
    <td><input required type="text" name="c_email" id="c_email" value="<?php echo  $email; ?>" required></td>
</tr>





<tr>                

                    <td style=" left"><input type="submit"  id = "button" name="update" value="Update"></td>
                    <td style=" right"><input type="submit" id ="button_2" name="do_not_update" value="Cancel"></td>
                </tr>

</form>
</table>
</body>
</html>
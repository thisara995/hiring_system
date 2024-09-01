<?php   
 include ("../connection.php"); 
 if (isset($_GET['id'])) {  
      $id = $_GET['id']; 
      $query =mysqli_query($con, "SELECT * FROM equipments_description WHERE i_id = '$id'");
      $row = mysqli_fetch_assoc($query);
      $pname = $row['i_type'];

      $query = mysqli_query($con, "SELECT * FROM equipments_description WHERE i_type = '$pname'");
      $count = mysqli_num_rows($query);   
      --$count;   

      $query = mysqli_query($con, "SELECT * FROM equipments WHERE e_name = '$pname'");
      $row = mysqli_fetch_assoc($query);
      $iditem = $row['e_id'];

      $query = mysqli_query($con, "UPDATE equipments SET e_qty = $count, available_count = $count  WHERE e_id = $iditem");
      $query = mysqli_query($con,"DELETE FROM `equipments_description` WHERE i_id = '$id'");  
        
       
     header("Location:http://localhost/hiring_system/Admin/index.php?msg=addItemSuccess#equipment-management"); 
 }  
 ?>  
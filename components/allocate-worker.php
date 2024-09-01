<?php require './connection.php' ?>
<?php session_start(); ?>

<?php

if(!$_SESSION["email"]){
    // header("Location: ../pages/authentication/Client/login.php?msg");
    echo "failed 01";
}
else{
  if(! $_GET["howMany"] and $_GET["Worker_id"]){
      header("Location: ../index.php?msg=updateFailed");
      // echo "failed 02";

  }
  else{
      $num_date = $_GET["howMany"];
      $worker_id = $_GET["Worker_id"];
  
      // Update worker state
      $sql = "UPDATE workers SET `availability`='0' WHERE w_id='$worker_id'";
      
      if (mysqli_query($con,$sql) === TRUE) {
          echo "success 1";
      } else {
        header("Location: ../index.php?msg=updateFailed");
        // echo "failed 03";
      }
  
      
  
      // Add data to sell_workers
      $sql = "INSERT INTO sell_worker(worker_id, customer_id, how_many_date, approval)
      VALUES ('{$worker_id}', '{$_SESSION['id']}', '{$num_date}','Pending')";
  
      if (mysqli_query($con,$sql) === TRUE) {
          header("Location: ../index.php?msg=updateSuccess");
          // echo "success 2";
        }
        else {
          header("Location: ../index.php?msg=updateFailed");
          // echo "failed 04";
        }
  
  }

}






?>
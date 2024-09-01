<?php

    try {
        //host
        $host = "localhost";

        //dbname
        $dbname = "online_hiring_system";

        //user
        $user = "root";

        //pass
        $pass = "";


        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo $e->getMessage();

    }


    


    // if($conn == true) {
    //     echo "conn works fine";
    // } else {
    //     echo "conn err";
    // }



    if(isset($_GET['po_id'])) {
        $e_id = $_GET['po_id'];
        
        $delete = $conn->prepare("DELETE FROM equipments WHERE e_id = :e_id");
        $delete->execute([
            ':e_id' => $e_id
        ]);
       
       header('location: /hiring_system/Admin/index.php?msg=addItemSuccess#equipment-management');

        
    }  else {
        header("location: http://localhost/clean-blog/404.php");
       
    }  

?>
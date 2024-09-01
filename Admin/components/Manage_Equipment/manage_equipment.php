<?php   
 include ("../connection.php");  
 $query = "SELECT * FROM equipments";  
 $run = mysqli_query($con,$query);  
 ?>  
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaialable Equipment</title>
</head>

<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
  
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #3429d4;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #3429d4;
        color: #fff;
        padding: 10px 0px;
    }
    
   
    #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 6px 20px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  


 #btn2{  
      text-decoration: none;  
      color: #FFF;  
      background-color: Green;  
      padding: 6px 30px;  
      border-radius: 3px;  
 }  
 #btn2:hover{  
      background-color: #00ab41;  
 }  
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body>



    <table>
        <tr id="header">
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Item Type</th>
            <th>Item Price</th>
            <th>Item Qty</th>
            <th>Edit</th>
            
       
        </tr>

        <?php

                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                               <td>".$result['e_id']."</td>
                               <td>".$result['e_name']."</td>  
                               <td>".$result['e_type']."</td>  
                               <td>".$result['e_price']."</td>
                               <td>".$result['e_qty']."</td>  
                               <td><a href='eq_edit.php?id=".$result['e_id']."' id='btn2'>Edit</a></td>
                              
                          </tr>  
                     ";  
                }  
            
      ?>  
 </table>  
 </body>  
 </html>  
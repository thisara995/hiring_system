<?php
include ("../connection.php"); 
error_reporting (0);

$sql = "SELECT * FROM equipments WHERE e_id={$_GET['id']}";

$result = mysqli_query($con, $sql);
while ($record = mysqli_fetch_assoc($result)){
    $id =  $record['e_id'];
    $name =  $record['e_name'];
    $price =  $record['e_price'];
    $qty = $record["e_qty"];
    $available_count = $record["available_count"];
}


?>

<html>
<head>
<title> Edit Equipment </title>
<link rel="stylesheet" href="bootstrap.css">
</head>
<body >
<br> <br>
<div class="col-lg-8 position-relative">
                <div class="card mb-4 position-absolute top-50 start-50">
                    <div class="card-body">
                        <div class="col-md-12 ">
                            <div class="p-3 py-5">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="fw-bold">Edit Equipment</h4>
                                </div>

                                <div class="row mt-4">

                                    <div class="col-12">
                                        <label class="form-label">Item Name</label>
                                        <input  type="text" class="form-control" value="<?php echo $name?> " readonly/>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Item Id</label>
                                        <input id="e_id" type="text" class="form-control" value="<?php echo $id ?>" readonly/>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Item Qty</label>
                                        <div class="input-group">
                                            <input type="text" id="e_qty" class="form-control" value="<?php echo $qty ?>"  />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Item Price</label>
                                        <input type="text" id="e_price" class="form-control" value="<?php echo $price ?>" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Item available Count</label>
                                        <input type="text" id="ac" class="form-control" value="<?php echo $available_count ?>" />
                                    </div>
                                    

                                    
                                    <div class="col-12 d-grid mt-2">
                                        <button onclick="update();" class="btn btn-primary">Update</button>
                                    </div>

                                </div>

                            </div>
                                                
                        </div>
                    </div>
                    
                </div>
            
<script src="script.js"></script>
</body>
</html>
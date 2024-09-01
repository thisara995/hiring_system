<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Equipment</title>
    <link rel="stylesheet" href="../components/Manage_Equipment/bootstrap.css">
</head>
<body>
    <br> <br> 
<div class="col-lg-8 position-relative">
                <div class="card mb-4 position-absolute top-50 start-50">
                    <div class="card-body">
                        <div class="col-md-12 ">
                            <div class="p-3 py-5">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="fw-bold">ADD Equipment</h4>
                                </div>

                                <div class="row mt-4">

                                    <div class="col-12">
                                        <label class="form-label">Item Name</label>
                                        <input id="name" type="text" class="form-control" />
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Item Price</label>
                                        <input  type="text" id="price" class="form-control"  />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Item Qty</label>
                                        <input  type="text" id="qty" class="form-control"  />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Item Sub Type</label>
                                        <input  type="text" id="stype" class="form-control"  />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Item Type</label>
                                        <input  type="text" id="type" class="form-control"  />
                                    </div>
                                    
                                    <div class="col-12 d-grid mt-2">
                                        <button onclick="addNew();" class="btn btn-primary">Add Equipment</button>
                                    </div>

                                </div>

                            </div>
                                                
                        </div>
                    </div>
                    
                </div>
    <script src="script.js"></script>
</body>
</html>
<div class="modal fade" id="modal-edits<?php echo $row['id'];?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Quantity/Price</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="process/sizess.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                         
                           
                                <input type="hidden" name="id" class="form-control" placeholder="" value="<?php echo $row['id']; ?>" required="" autocomplete="off">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                           
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" name="prodsuct" class="form-control" readonly="" required="" disabled="" placeholder="" value="<?php echo $row['stockIn'];?>" required="" autocomplete="off">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Price</label>
                                <input type="text" name="pricess" class="form-control" disabled="" readonly="" required="" value="<?php echo $row['price'];?>"   autocomplete="off">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Add Quantity</label>
                                <input type="text" name="product" class="form-control" value="<?php //echo $row['stockIn'];?>"   autocomplete="off">
                            </div>
                        </div>
                    

                        <div class="col-md-6">
                            <div class="form-group">
                               <label>New Price</label>
                                <input type="text" name="prices" class="form-control" value="<?php echo $row['price'];?>"   autocomplete="off">
                            </div>
                        </div>
                        </div>
            
                    
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
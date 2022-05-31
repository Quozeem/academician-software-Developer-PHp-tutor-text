  <?php 
session_start(); 
//authenticate Admin login
if(($_SESSION['logdir'])!="true"){
    header("location:../");
}
else{
   
?>
   <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
     <h3 class="card-title" style="float: right;"><button type="button" class="button" data-toggle="modal" data-target="#modal-overlay" style="color: black;font-weight: 600;">
                  Add New Products
                </button></h3>
                <?php include 'modal/addproduct.php';?>

 
              </div>
              <!-- /.card-header -->
         <style>
      .button {
        background-color: orange;
          border: none;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 20px;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: green;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color: yellow;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: white;
          box-shadow: 0 0 5px orange;
        }
      }
      .button {
        animation: glowing 1300ms infinite;
      }
    </style>
     
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  
<th>S/N</th>
<th>Product Name</th>
<th>Product image</th>
<th>Product Price</th>
<th>Date</th>
<th>Edit</th>
<th>Edit Product Image</th>
<th>Delete Product</th>
  
                  </tr>
                  </thead>
                  <tbody>
                    <?php
  //select all films query
                       $x=1;
                       include('include/access/connector.php');
                      $result = $phdb->query("SELECT * FROM `joinall`");
                      // if($result->num_rows === 0) echo'<div class="alert alert-warning" role="alert">No Record Found!!!</div>';
                       while ($row = $result->fetch_array()){
                             // $re=   $row['hr_position'];
                 
                     //   if($row['dones']=="come"){
                                    
                          
                    $read=$row['file'];
                         //   echo "<td> <img src='imgs/".$read."'height=100px;width=50px;/></td>";
                      ?>
                      <tr>

                        <td style="width: 30px;"><?php  echo $x++;?></td>
                        
                   <!--     <td><img src="<?php //echo $file; ?>" height="80" width="80"/></td>  -->
                      
                        <td><?php echo ucwords($row['brand']);?></td>
                        <td><img src="../Bikini_Iimages/compress_<?php echo $read; ?>" height="80" width="80"/></td>
                         <?php  // echo "<td> <img src='../Product_image/".$read."'height=80px;width=80px;/></td>"; ?>
                          <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['date'];?></td>

                    
                                    <td><i data-toggle="modal" data-target="#modal-edits<?php echo $row['id'];?>" class="fa fa-edit" style="color: green;cursor: pointer;" title="Edit" ></i> </td>
                                     <?php include 'modal/edit_product.php';?>
                                     
 <td><i data-toggle="modal" data-target="#modal-upload<?php echo $row['id'];?>" class="fa fa-edit" style="color: orange;cursor: pointer;" title="Edit" ></i> </td>
                                     <?php include 'modal/uploadnext_modal.php';?>
                                     
     <td><i data-toggle="modal" data-target="#modal-delete3<?php echo $row['id'];?>" class="fa fa-trash" style="color: red;cursor: pointer;" title="Delete"></i></td>
         <?php include 'modal/deleteall_modal.php';?>
                       
                 

               
                      </tr>

                     <?php  } ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date("Y");?> <a href="#">Human Resource Information</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 0.1
      </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="/pdf_js/pdfobject.js"></script>
<script>PDFObject.embed("/pdf_js/sample-3pp.pdf", "#example1");</script>

<script src="../Member_Dashboard/plugins/jquery/jquery.min.js"></script>
<script src="../Member_Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../Member_Dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Member_Dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Member_Dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Member_Dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?php } ?>

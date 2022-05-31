<?php
session_start();
//include "../../includes/functions.php";
include "../../includes/db.php";
$codpayment= $_GET['codpayment'];
$query =$con->query("SELECT * FROM togglelogin WHERE paymentshow ='$codpayment'");
$rowCount=$query->num_rows;
if($rowCount > 0){
   // echo '<option value="">select a zone</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '	<button type="submit" class="button alt" name="submit"  id="place_order" value="Place order" data-value="Place order">Place order</button>
	<br><br>';
 }
   }else{
    // echo '<option value="">otherddd</option>';
   }
   
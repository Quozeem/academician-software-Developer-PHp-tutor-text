<?php
//online paystack toggle button
session_start();
//include "../../includes/functions.php";
include "../../includes/db.php";
$onlinepayment= $_GET['onlinepayment'];
$query =$con->query("SELECT * FROM togglelogin WHERE onlinepayment ='$onlinepayment'");
$rowCount=$query->num_rows;
if($rowCount > 0){
   // echo '<option value="">select a zone</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '	<button type="submit" onclick="payWithPaystack()" class="button alt" name="paymentT"  id="place_order" value="Place order" 
   data-value="Online Payment not available">Make Payment</button>
	';
 }
   }else{
    // echo '<option value="">otherddd</option>';
   }?>

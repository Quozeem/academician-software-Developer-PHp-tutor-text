
<?php
session_start();
//include "../../includes/functions.php";
include "../../includes/db.php";
//account toggle
$createaccount= $_GET['createaccount'];
$query =$con->query("SELECT * FROM togglelogin WHERE showpass ='$createaccount'");
$rowCount=$query->num_rows;
if($rowCount > 0){
   // echo '<option value="">select a zone</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '	<p class="form-row validate-required" id="account_password_field" data-priority="">
  <label for="account_password" class="">Create account password&nbsp;<abbr class="required" title="required">*</abbr></label>
  <span class="woocommerce-input-wrapper"><input type="password" class="input-text " name="password" id="account_password" placeholder="Password"  value=""  /></span></p>			
  ';
 }
   }else{
    echo ' ';
   }
//payment toggle


/**
if(mysqli_num_rows($query) <1){
    echo "<option> otherrrr</option>";}

while($row = mysqli_fetch_array($query)) {?> 
   

   <option value="<?php  echo $row['zone_id'];?>"><?php echo $row['zone_name'];?></option>
    
         

   
 
$zone= $_GET['zone'];
$query =$con->query("SELECT * FROM shipping_rate WHERE zone_id ='$zone'");
$rowCount=$query->num_rows;
if($rowCount > 0){
//echo '<option value="">select a fee</option>';
  while($row=$query->fetch_assoc()){ 
      
  // echo '<option value= "'.$row['rates'].'">$'.$row['rates'].'</option>';
  $connected=new connection();
   //echo '<input type="hidden" name="shipping" value= "'.($connected->get_order_total()+$row['rates']).'">
 //<input name="shipping" disabled="" value= "$'.($connected->get_order_total()+$row['rates']).'">';
 
 echo '	
 <td ><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>
     '.($connected->get_order_total()+$row['rates'] ).'   </span></strong>
     <input type="hidden" name="total" value= "'.($connected->get_order_total()+$row['rates']).'"> </td>';
 }
   }else{
    // echo '<option value="">other</option>';
   }
   
   

/** if(mysqli_num_rows($query) <1){
  //  echo "<option>Flat Rate</option>";
   }

while($row = mysqli_fetch_array($query)) { ?> 
   

   <option value="<?php  echo $row['rates'];?>"><?php echo $row['rates'];?></option>
   
 }
*/

?>

<?php
session_start();
include "../../includes/functions.php";
include "../../includes/db.php";
$country= $_GET['country'];
$query =$con->query("SELECT * FROM zones WHERE zone_country_id ='$country'");
$rowCount=$query->num_rows;
if($rowCount > 0){
   // echo '<option value="">select a zone</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '<option value= "'.$row['zone_id'].'">'.$row['zone_name'].'</option>';
 }
   }else{
    // echo '<option value="">otherddd</option>';
   }

/**
if(mysqli_num_rows($query) <1){
    echo "<option> otherrrr</option>";}

while($row = mysqli_fetch_array($query)) {?> 
   

   <option value="<?php  echo $row['zone_id'];?>"><?php echo $row['zone_name'];?></option>
    
         

 */  
 
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
     <input type="hidden" name="total" id="total" value= "'.($connected->get_order_total()+$row['rates']).'"> </td>';
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
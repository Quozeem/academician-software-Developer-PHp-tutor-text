
<?php
session_start();
//include "../../includes/functions.php";
include "../../includes/db.php";
//create account toggle checkbox query
$showlogin= $_GET['showlogin'];
$query =$con->query("SELECT * FROM togglelogin WHERE showlogin ='$showlogin'");
$rowCount=$query->num_rows;
if($rowCount > 0){
   // echo '<option value="">select a zone</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '
<form class="woocommerce-form woocommerce-form-login login" method="post" action="">
<p>If you have shopped with us before, please enter your details below. If you are a new customer,
     please proceed to the Billing section.</p>

	<p class="form-row form-row-first">
		<label for="username">Email&nbsp;<span class="required">*</span></label>
		<input type="text" class="input-text" name="email" id="username" autocomplete="username" />
	</p>
	<p class="form-row form-row-last">
		<label for="password">Password&nbsp;<span class="required">*</span></label>
		<input class="input-text" type="password" name="password" id="password" autocomplete="current-password" />
	</p>
	<div class="clear"></div>

	
	<p class="form-row">
		<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
			<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
		</label>
		<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="e6e9d2f62b" /><input type="hidden" name="_wp_http_referer" value="/checkout/" />		<input type="hidden" name="redirect" value="http://queeny.like-themes.com/checkout/" />
		<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="LOGIN" value="Login">Login</button>
	</p>
	<p class="lost_password">
		<a href="">Lost your password?</a>
	</p>

	<div class="clear"></div>
</div>
	
';
 }
   }else{
    // echo '<option value="">otherddd</option>';
   }
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

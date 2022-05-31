<?php ob_start(); ?>
<?php include("../includes/db.php"); ?>  
<body>
<?php 
 //calculate shipping fee
$country=$_POST['country'];

if(isset($_POST['countryddd'])){
$query =$con->query("SELECT * FROM zones WHERE zone_country_id =".$_POST['country']."");
$rowCount=$query->num_rows;

 if($rowCount > 0){
    echo '<option value="">select a level</option>';
  while($row=$query->fetch_assoc()){ 
      
   echo '<option value= "'.$row['id'].'">'.$row['zone_name'].'</option>';
 }
   }else{
     echo '<option value="">other</option>';
   }
}


?>
</select>  


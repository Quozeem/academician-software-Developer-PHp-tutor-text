<?php

  include('../include/access/connector.php');

	if(isset($_POST['emplo'])){
      
       //$employee_companyid = $phdb->real_escape_string($_POST['employee_companyid']);
       $Brand = $phdb->real_escape_string($_POST['Brand']);
       
         $img =$_FILES["image"]["name"];
    
     $filetmp =$_FILES["image"]["tmp_name"];
     
     $foldername="../../Bikini_Iimages/";
     
    $fullfilename=$foldername.$img;
    //   $hr_lastname = $phdb->real_escape_string($_POST['image']);
         $date = $phdb->real_escape_string($_POST['Date']);
           $price = $phdb->real_escape_string($_POST['price']);
          
         $catalog = $phdb->real_escape_string($_POST['catalog']);
             $stock_in = $phdb->real_escape_string($_POST['stock_in']);
             $description = $phdb->real_escape_string($_POST['description']);
 $sql = $phdb->query("INSERT INTO `joinall`(`Brand`, `file`, `date`,`price`,`categories`,`stockIn`,`stockout`,`description`) VALUES ('$Brand','$img','$date','$price','$catalog','$stock_in','$stock_in','$description')")  or die (mysqli_error($phdb));
         $see=(move_uploaded_file($filetmp,$fullfilename));
       // $sqli = $phdb->query("INSERT INTO `hr_member`(`email`, `hr_type`) VALUES ( '$email',`$position`)")  or die (mysqli_error($phdb));
       // if($sqli == TRUE) {
        
  $compress_file = "compress_".$img ;     //rename compressed file
  $compressed_img = $foldername.$compress_file;
  $compress_name = compressImage( $fullfilename,$compressed_img);   //compressImage(sourcefile, compressfile);
  unlink($fullfilename);  
       if($see == TRUE){
        
       	  echo '<script>alert("Insert Successfully!!!")</script>';
	 echo '<script>window.location = "../addproduct.php"</script>';
       }else{
       	  echo '<script>alert("Insert Failed!!!")</script>';
		  echo '<script>window.location = "../addproduct.php"</script>';
       }

}


function compressImage($source_image,$compress_image) {
    $image_info = getimagesize($source_image);
    
 
    // Create a new image from file 
     if ($image_info ['mime'] == 'image/jpeg') {
    $source_image = imagecreatefromjpeg($source_image);
                   imagejpeg($source_image,$compress_image,80);
}
  elseif ( $image_info['mime'] == 'image/gif') {
     $source_image = imagecreatefromgif($source_image);
      imagegif($source_image,$compress_image,80);

}
  elseif ($image_info['mime'] == 'image/png') {
     $source_image = imagecreatefrompng( $source_image);
     imagepng($source_image,$compress_image,8);        // for png it should be 0-9
    }
      elseif ($image_info['mime'] == 'image/jpg') {
    $source_image = imagecreatefromjpg($source_image);
     imagepng($source_image,$compress_image,80);
     }
    
      elseif ($image_info['mime'] == 'image/jfif') {
    $source_image = imagecreatefromjfif($source_image);
             imagejfif($source_image,$compress_image,80);
  
      }
      return $compress_image;


}

?>
<?php

  include('../include/access/connector.php');

	if(isset($_POST['update'])){
	  // $update="update hr_member set dones='go'";
      $id = $phdb->real_escape_string($_POST['id']);
        $name = $phdb->real_escape_string($_POST['product_name']);
         $price = $phdb->real_escape_string($_POST['price']);
          $stock_in = $phdb->real_escape_string($_POST['stock_in']);
           $categories = $phdb->real_escape_string($_POST['categories']);
              $description = $phdb->real_escape_string($_POST['description']);

      // $sql = $phdb->query("DELETE FROM `joinall` WHERE id = '$id'")  or die (mysqli_error($phdb));
   $update = $phdb->query("UPDATE `joinall` SET `brand` ='$name', `price` ='$price', `stockIn` ='$stock_in', `categories` ='$categories',`description`='$description' WHERE `id` = '".$id."'") or die (mysqli_error($phdb));
      
       if($update){
       	  echo '<script>alert("Successful!!!")</script>';
		      echo '<script>window.location = "../addproduct.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		     echo '<script>window.location = "../addproduct.php"</script>';
    }

	}

?>
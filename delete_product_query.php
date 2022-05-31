<?php

  include('../include/access/connector.php');

	if(isset($_POST['delete3']))
	{
      $id = $phdb->real_escape_string($_POST['id']);
//delect product
       $sql = $phdb->query("DELETE FROM `joinall` WHERE id = '$id'")  or die (mysqli_error($phdb));
   //$update = $phdb->query("UPDATE hr_member SET dones ='go' WHERE id = '$id'");
      
       if($sql){
       	  echo '<script>alert("Successful!!!")</script>';
		      echo '<script>window.location = "../addproduct.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		      echo '<script>window.location = "../addproduct.php"</script>';
    }

	}

?>

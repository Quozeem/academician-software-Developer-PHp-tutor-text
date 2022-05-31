<?php

  include('../include/access/connector.php');

	if(isset($_POST['delete3'])){
	  // $update="update hr_member set dones='go'";
      $id = $phdb->real_escape_string($_POST['user_id']);

       $sql = $phdb->query("DELETE FROM `users` WHERE user_id = '$id'")  or die (mysqli_error($phdb));
   //$update = $phdb->query("UPDATE hr_member SET dones ='go' WHERE id = '$id'");
      
       if($sql){
       	  echo '<script>alert("Successful!!!")</script>';
		      echo '<script>window.location = "../addstaff.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		      echo '<script>window.location = "../addstaff.php"</script>';
    }

	}

?>
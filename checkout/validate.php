<?php
//login query
$erromessage="";
 if (isset($_POST['LOGIN']))  {
$email= $_POST['email'];
   $word=md5($_POST['password']);
 
     date_default_timezone_set('Africa/Lagos');
   
   include("../includes/db.php");
    
    
 // require ("includes/functions");
 $log=mysqli_query($con,"SELECT * fROM users WHERE email='$email' AND password='$word'");
   if(!$log){
	   die("faileds").mysqli_connect_error();
   }
   while($row = mysqli_fetch_array($log)){
	   $mailler=($row['email']);
		$pass=md5($row['password']);
        $uniq=$row['unique_id'];
   }if(($email == $mailler) && (md5($word) ==  $pass)){
     $_SESSION['LOGGED']="true";
                    $_SESSION['email']=$email;
                     $_SESSION['password']=$word;
	   echo "<script> location.href='../checkout'</script>";
        }
	
   
   else{
	   //validate wrong input details
    
                 $erromessage="Invalid Email or Password"; 
                 } }
   ?>

<?php
//include("includes/db.php");
class connection{
 private $host="localhost";
private $username="root";
private $pass="";
private $db ="bikini_store";

  function __construct(){
    $con = mysqli_connect($this->host,$this->username,$this->pass,$this->db)
     or die("failed to connect").mysqli_connect_error();
    //mysqli_select_db($this->db, $con);
    //return $con;
    $this->dbh=$con;
   }
   	function available_stock($pid){
	$result= mysqli_query($this->dbh,"select stockout from joinall where id=$pid") or  die("select stockout from joinall where file=$pid"."<br/><br/>".mysqli_error());
		$row=mysqli_fetch_array($result);
		return $row['stockout'];

}
	function get_product_name($pid){
	$result= mysqli_query($this->dbh,"select brand from joinall where id=$pid") or  die("select brand from joinall where file=$pid"."<br/><br/>".mysqli_error());
		$row=mysqli_fetch_array($result);
		return $row['brand'];

}

	function get_price($pid){
	   	$result=mysqli_query($this->dbh,"select price from joinall where id=$pid") or die("select price from joinall where file=$pid"."<br/><br/>".mysqli_error());
		$row=mysqli_fetch_array($result);
	return $row['price'];
    }
	function get_files($pid){
	$result=mysqli_query($this->dbh,"select file from joinall where id=$pid") or die("select file from joinall where file=$pid"."<br/><br/>".mysqli_error());
		$row=mysqli_fetch_array($result);
		return $row['file'];
 }	function get_id($pid){
		$result=mysqli_query($this->dbh,"select id from joinall where id=$pid") or die("select id from products where file=$pid"."<br/><br/>".mysqli_error());
		$row=mysqli_fetch_array($result);
		return $row['id'];
	}
    	function sizes($pid){
	$result= mysqli_query($this->dbh,"select * from product_attribute where product_id=$pid") or  die("select sizes from joinall where file=$pid"."<br/><br/>".mysqli_error());
		//$row=mysqli_fetch_array($result);
	//	return $row['sizes'];
 //if($rowCount > 0){
//  while($row=mysqli_fetch_array($result)){ 
  // return '<option value= "'.$row['sizes'].'">'.$row['sizes'].'</option>';
//}
return $result;
}//}
	function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=$this->get_price($pid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	function addtocart($pid,$q){
		if($pid<1 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if($this->product_exists($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
            $_SESSION['cart'][$max]['siz']=$s;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
            	$_SESSION['cart'][0]['siz']=$s;
		}
	}
	function product_exists($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}
	function Registration($name,$last_name,$email,$password,$createaccount,$date,$phone){
		$reg=mysqli_query($this->dbh,"INSERT INTO users (fname,lname,email,password,status,date,phone) VALUES
        ('$name','$last_name','$email','$password'
        ,'$createaccount','$date','$phone')");
		return $reg;
	}
	function emailexist(){
		$rmail=mysqli_query($this->dbh,"SELECT * FROM users");
		return $rmail;
		
	}
    function updateuser($name,$last_name,$email,$password,$createaccount,$date,$address,$phone){
        $update=mysqli_query($this->dbh,"update users set 
        address='$address',fname='$name',phone='$phone',lname='$last_name',email='$email',password='$password',
        status='$createaccount'
         WHERE email='$email' ");
	return $update;   
    }
    function login($email,$word){
        $log=mysqli_query($this->dbh,"SELECT * fROM users WHERE email='$email' AND password='$word'");
	return $log;
    }
function session(){
		$LOG=mysqli_query($this->dbh,"SELECT * fROM users WHERE email='".$_SESSION['email']."' AND password='".$_SESSION['password']."'");
		return $LOG;
}
}
?>
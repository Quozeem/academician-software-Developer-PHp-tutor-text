<?php
$host ="localhost";
$user ="root";
$password ="";
$database ="bikini_store";
$con= mysqli_connect($host,$user,$password,$database);
 if(!$con){
     die("failed").mysqli_connect_error();
 }

?>
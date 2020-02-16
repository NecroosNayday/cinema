<?php 
require "db.php";
$data = $_POST;
if(isset($data['out'])){
unset($_SESSION['logged_user']);
header('Location:/');}
  

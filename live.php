<?php
include("database/Session.php");
Session::init();
 include("query.php");
 $live=new Query();
 if(isset($_POST['roll'])){
 	$roll=$_POST['roll'];
 	  Session::set("roll",$roll);
 	$result=$live->seat_result($roll);
 	
 }



 ?>
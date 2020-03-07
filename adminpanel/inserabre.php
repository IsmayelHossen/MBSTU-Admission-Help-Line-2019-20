<?php
 include("adminquery.php");
 $ob=new Query();
 if($_SERVER['REQUEST_METHOD']=="POST"){
 	$roll=$_POST['roll'];
 	$unit=$_POST['unit'];
 	$abnc=$_POST['abnc'];
 	$result=$ob->insertdata_abnc($roll,$unit,$abnc);
 	
 }



 ?>
<?php
 include("adminquery.php");
 $ob=new Query();
 if($_SERVER['REQUEST_METHOD']=="POST"){
 	$roll=$_POST['roll'];
 	$select=$_POST['select'];
 	
 	$result=$ob->insertdata($roll,$select);
 
 	
 }



 ?>
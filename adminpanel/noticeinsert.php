<?php
 include("adminquery.php");
 $ob=new Query();
 if($_SERVER['REQUEST_METHOD']=="POST"){
 	$notice=$_POST['notice'];
 	$result=$ob->insertnotice($notice);
 	
 }



 ?>
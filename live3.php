<?php
 include("query3.php");
 $live=new Query();
 if($_SERVER['REQUEST_METHOD']=="POST"){
 	$roll1=$_POST['roll'];
 	$select1=$_POST['select'];
 	$result=$live->result_result($roll1,$select1);
 

}

 ?>
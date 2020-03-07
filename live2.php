<?php
 include("query2.php");
 $live=new Query();
 if(isset($_POST['roll'])){
 	$roll=$_POST['roll'];
 	$select=$_POST['select'];
 	$result=$live->result_result($roll,$select);
 }



 ?>
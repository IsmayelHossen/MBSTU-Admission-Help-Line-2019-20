<?php
 include("query4.php");
 $live=new Query();
 if($_SERVER['REQUEST_METHOD']=="POST"){
 	$select1=$_POST['select'];
 	$result=$live->result_result($select1);
 

}

 ?>
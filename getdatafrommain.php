<?php
 include("insertdatatocandi.php");
 $login=new Query();
  
 
 if(isset($_POST['text1'])){
 	$text1=$_POST['text1'];
 	
 	$result=$login->messquery($text1);
 	
 	
 }



 ?>
<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT* FROM admit WHERE dept IN('ICT','CSE','TE')";
              $result=$ob->select($query);
              if(isset($result)){
              $count=mysqli_num_rows($result);
              if($count>=170){
              	echo"A Unit Admission Process is Completed";
              }
              else{
              	 $count1=170-$count;
                 echo $count1;
              }
               
              }



             
?>
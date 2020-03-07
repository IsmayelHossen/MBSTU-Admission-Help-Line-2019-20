<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT* FROM admit WHERE dept IN('Chemistry','Physics','Math','Statistics')";
              $result=$ob->select($query);
              if(isset($result)){
              $count=mysqli_num_rows($result);
               if($count>=230){
              	echo"C Unit Admission Process is Completed";
              }
              else{
              	 $count1=230-$count;
                 echo $count1;
              }
              }



             
?>
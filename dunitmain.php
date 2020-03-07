<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT* FROM admit WHERE dept IN('Economics','BBA')";
              $result=$ob->select($query);
              if(isset($result)){
              $count=mysqli_num_rows($result);
               if($count>=120){
              	echo"B Unit Admission Process is Completed";
              }
              else{
              	 $count1=120-$count;
                 echo $count1;
              }
              }



             
?>
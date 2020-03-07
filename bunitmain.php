<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT* FROM admit WHERE dept IN('Pharmacy','BMB','BGE','FTNS','ESRM','CPS')";
              $result=$ob->select($query);
              if(isset($result)){
              $count=mysqli_num_rows($result);
               if($count>=295){
              	echo"B Unit Admission Process is Completed";
              }
              else{
              	 $count1=295-$count;
                 echo $count1;
              }
              }



             
?>
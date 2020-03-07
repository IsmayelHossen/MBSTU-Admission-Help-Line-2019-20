<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT * FROM admit WHERE dept='TE'  ";
              $result=$ob->select($query);
              if(isset($result)){
              $count=mysqli_num_rows($result);
                $count1=60-$count;
                 echo $count1;
              }



             
?>
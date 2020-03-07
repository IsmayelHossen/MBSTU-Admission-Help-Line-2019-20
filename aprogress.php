<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT* FROM admit WHERE dept IN('ICT','CSE','TE') ";
              $result=$ob->select($query);
             $row=$result->fetch_assoc();
               if(isset($result)){
               $count1=mysqli_num_rows($result);
                echo $count1;

               
              



             
?>
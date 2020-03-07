<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT   max(roll) roll FROM admit WHERE dept IN('Pharmacy','BMB','BGE','FTNS','ESRM','CPS') ";
              $result=$ob->select($query);
             $row=$result->fetch_assoc();
                 echo"  ". $row['roll'];
               
              



             
?>
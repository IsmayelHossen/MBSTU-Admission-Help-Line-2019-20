<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT * FROM admit1 WHERE unit='A' AND select1='Absent'  ";
              $result=$ob->select($query);
              if(isset($result)){
               while($row=$result->fetch_assoc()){
                 echo" ". $row['roll'];
               }
              }



             
?>
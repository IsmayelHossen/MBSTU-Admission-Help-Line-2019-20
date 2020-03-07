<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT * FROM admit1 WHERE unit='C' AND select1='Next Call'  ";
              $result=$ob->select($query);
              if(isset($result)){
               while($row=$result->fetch_assoc()){
                 echo" ". $row['roll']."(".$row['select2'].")";
               }
              }



             
?>
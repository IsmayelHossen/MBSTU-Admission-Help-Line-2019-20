<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT * FROM admit WHERE dept='TE'  ";
              $result=$ob->select($query);
              if(isset($result)){
               $count1=mysqli_num_rows($result);
                echo $count1;

              } ?>
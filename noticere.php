<?php include("database/Connection.php");
  $ob=new Database();
 
              $query="SELECT * FROM admit ORDER BY id DESC LIMIT 1 ";
              $result=$ob->select($query);
               $query="SELECT * FROM notice";
              $result1=$ob->select($query);
             
                while ($row=$result->fetch_assoc() && $row1=$result->fetch_assoc()) {
                	 echo "<p style='font-size:20px; '>Just Admitted Merit Position ::"." ".$row['roll']." -->"."Department:: ".$row['dept'].  $row1['notice']."</p>";
                
                	
                }
                
             
              
            
                
             



             
?>
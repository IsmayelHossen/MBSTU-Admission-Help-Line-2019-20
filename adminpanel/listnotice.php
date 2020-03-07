
  <?php 
  include_once'database/Session2.php';
   Session::checkSession();
?>
  
<?php
    
   
     include("database/Connection.php");
     include("database/Formet.php");
      $db = new Database();
      $fm=new Format();
?>


  <?php
                   if(isset($_GET["delid"]))
                   {
                      $id=$_GET["delid"];

                   
                     $query="DELETE FROM notice WHERE id='$id'";
                     $result=$db->delete($query);
                     if($result){
                      echo"Deleted Successfully";
                     }
                     else{
                       echo"Data not delete";
                     }

                      }


                  ?> 


                  <!DOCTYPE html>
<html lang="en">
<head>
   <title>MCubS It Limited</title>
    <link rel="icon"  href="images/ictlogo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot/css/bootstrap.css">
  <script src="boot/js/jquery.js"></script>
  <script src="boot/js/bootstrap.js"></script>
  <script src="boot/js/npm.js"></script>
  <script src="boot/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

       <?php  if(isset($_GET['action']) && $_GET['action']=="logout")
                               Session::destroy();
?>
      
       
     <div class="container-fluid">
    <div class="Jumbotron">
          <h3>Admin Panel Mbstu Admission</h3>
    </div>

  </div>
  <div class="container-fluid">
    <div class="well">
      <div class="row">
        <div class="col-md-3">
              <div class="list-group ">
                 <a href="home.php" class="list-group-item">Dashbord</a>
      <a href="addseat.php" class="list-group-item">Add Seat</a>
       <a href="listseat.php" class="list-group-item">List Seat</a>
        <a href="addresult.php" class="list-group-item">Add Result</a>
         <a href="listresult.php" class="list-group-item">List Result</a>
          <a href="notice.php" class="list-group-item">Notice</a>
          <li><a href="?action=logout" class="list-group-item">Logout</a></li>
    
     </div>


    </div>


<div class="col-md-9">

         
                  <div class="table-responsive" style="height: 300px;overflow:scroll;"> 
                   <table class="table table-scripted">  
          <thead>
            <tr >
              <th>No</th>
             <th>Notice</th>
             <th>Delete</th>
            
            
            </tr>
          </thead>
          <tbody>


             <?php    
            $query="SELECT*FROM notice";
            $Category=$db->select($query);
            if($Category){
              $i=0;
              while ($result=$Category->fetch_assoc()) {
                $i++; ?>
            <tr>
              <td><?php echo$result['id'];?></td>
               
            
                   <td><?php echo$result['notice'];?></td>
                    <td><a onclick="return confirm('Are you want to delete?')" href="?delid=<?php echo $result['id']?>">Delete</a></td>

            </tr>
              <?php }}?>
          
          </tbody>
        </table>
               
                 <h3>Count Visitors</h3>
        <?php 
              $query="SELECT*FROM registration";
            $Category=$db->select($query);
            $result=$Category->fetch_assoc();
            $count=mysqli_num_rows($Category);
            echo" Visitors=". $count;
           


        ?>
           
            </div>
        </div>


       
  

 </div>



       </div>

  </div>

</div>
</div>
</body>
</html>





   



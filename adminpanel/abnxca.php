
<?php 
$msg="";
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
if(isset($_POST['submit'])){
  $roll=$_POST['roll'];
  $unit=$_POST['unit'];
  $select1=$_POST['select1'];
  $select2=$_POST['select2'];
  if(empty($roll) ||empty($unit) ||empty($select1) ){
      $msg="<span class='alert alert-danger'>Filed Must Not Be Empty!</span>";

    }
    else{
    $query="INSERT INTO admit1(roll,unit,select1,select2) VALUES('$roll','$unit','$select1','$select2')";
    $result1=$db->insert($query);
    
      if($result1){
           $msg="<span class='alert alert-success'>Successfully Inserted</span>";
      }
      else{
           $msg="<span class='alert alert-danger'>Data Not  Inserted</span>";

      }
 
  
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
<script type="text/javascript" src="boot/js/bootstrap.js"></script>
 
<script type="text/javascript" src="boot/js/main2.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
  body{
    font-family:'Acme';

  }
  label{
      font-size:20px;
  }
  .side ul li a{
                    text-decoration: none;
                  }
</style>
</head>
<body>

       <?php  if(isset($_GET['action']) && $_GET['action']=="logout")
                               Session::destroy();
?>
      
   

  
  
  

  
  <div class="container-fluidh">
    <div class="Jumbotron">
          <h3>Admin Panel Mbstu Admission</h3>
    </div>

  </div>
  <div class="container-fluidm">
      <div class="row">
        <div class="col-md-3">
          <div class="side">
               <ul>
               
                <li>
                 <a href="home.php" >Dashbord</a>
                  </li>
            <li> <a href="addroll.php" style="text-decoration: none;" >List Admitted Roll </a></li>
         <li> <a href="notice.php" >Notice</a> </li>
       <li><a href="listnotice.php" >Notice List</a> </li>
         <li><a href="?action=logout" >Logout</a></li>
        </ul>


    </div>
  </div>
       <div class="col-md-9">
      
            <h3 style="text-align: center;border-bottom: 2px solid #becfe0;padding: 3px 4px;text-shadow: 0px 1px #da4c4c;">Entries Absent & Next Call Roll</h3>
           

    <form  action="" method="post" >
       <div class="form-group">
                          <label>Select Unit:</label>
                          <select name="unit" id="unit" class="form-control" required="">
                            <?php 
                              $query="SELECT*FROM unit";
                              $select=$db->select($query);
                      
                        if($select){
                          while ($row=$select->fetch_assoc()) {
                         
                            ?>

                <option value="<?php echo$row['unit_a']?>"><?php echo$row['unit_a']?></option>
                <?php }}?>
           
             </select>
              <label>Select Absent Or Next Call:</label>
                          <select name="select1" id="select1" class="form-control" required="">
                            <?php 
                        $query="SELECT*FROM unit WHERE select1='Next Call' OR select1='Absent'  ";
                              $select=$db->select($query);
                      
                        if($select){
                          while ($row=$select->fetch_assoc()) {
                         
                            ?>

                <option value="<?php echo$row['select1']?>"><?php echo$row['select1']?></option>
                <?php }}?>
           
             </select>
                        </div>
  <div class="form-group">
    <label>Roll:</label>
    <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Roll..." required="">
  </div>
  <label>Subject Required*(For Next Call):</label>
                          <select name="select2" id="select2" class="form-control" required="">
                            <?php 
                        $query="SELECT*FROM dept ";
                              $select=$db->select($query);
                      
                        if($select){
                          while ($row=$select->fetch_assoc()) {
                         
                            ?>

                <option value="<?php echo$row['dept']?>"><?php echo$row['dept']?></option>
                <?php }}?>
           
             </select>
  <input type="submit" name="submit" value="Save" id="submit" class="btn btn-success" style="font-size:18px;">
</form>

<div class="container" id="show" style="text-align: center;padding-bottom: 15px;">
                       <?php 
                             if(isset($msg)){
                              echo $msg;
                             }

                       ?>
                     </div>
                        <script type="text/javascript">
                $(document).ready(function(){
                
                   setInterval(function(){
                    $("#show").hide();

                   },2000);
                

                });
             </script>



           
       </div>
     
  </div>

</div>
</div>

<div class="container-fluidf">
    <div class="panel panel-footer">
       <h3 style="text-align: center;">Developed By McubI</h3>
    </div>
  </div>
</body>
</html>



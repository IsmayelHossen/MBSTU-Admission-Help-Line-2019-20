
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
           
         <li> <a href="notice.php" >Notice</a> </li>
       <li><a href="listnotice.php" >Notice List</a> </li>
         <li><a href="?action=logout" >Logout</a></li>
        </ul>


    </div>
  </div>
       <div class="col-md-9">
      
            <h3 style="text-align: center;border-bottom: 2px solid #becfe0;padding: 3px 4px;text-shadow: 0px 1px #da4c4c;">List Admitted Roll</h3>

            <?php  

     if(isset($_GET['delete'])){
      $id=$_GET['delete'];
        $query="DELETE FROM admit WHERE id='$id'";
       $result2=$db->delete($query);
      }
      
       ?>
           

   <form class="form-inline" action="" method="post" >
       <div class="form-group">
                          <label>Select Department:</label>
                          <select name="select" id="select" class="form-control">
                            <?php 
                              $query="SELECT*FROM dept";
                              $select=$db->select($query);
                      
                        if($select){
                          while ($row=$select->fetch_assoc()) {
                         
                            ?>

                <option value="<?php echo$row['dept']?>"><?php echo$row['dept']?></option>
                <?php }}?>
           
             </select>
                        </div>
  
  <button type="button" name="result" id="result" class="btn btn-info">Search</button>
  
</form>

<div class="container" id="liveseat" style="text-align: center;margin:20px;">

   

</div>
<script type="text/javascript">
   $(document).ready(function(){
                         $("#result").on('click',function(){
                             var select=$("#select").val();

                             if(select != ''){

                             $.ajax({

                               url:"live4.php",
                               method:"POST",
                               data:{select:select},
                               dataType:"text",
                               success:function(data){
                                $('#liveseat').fadeIn();
                                  $('#liveseat').html(data);
                                  
                               }

                             });
                               
                              }

                         });
                         });
</script>

</div>
</div>

<div class="container-fluidf">
    <div class="panel panel-footer">
       <h3 style="text-align: center;">Developed By McubI</h3>
    </div>
  </div>
</body>
</html>


 <script>
$(document).ready(function(){
   $("#result").click(function(){
    $("body").css("background","#DEDEDE");
    $(".panel-footer").css("background","#6ac5cf");
    
   });
});
</script>
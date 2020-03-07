 <?php 
ob_start();
include("database/Connection.php");
$ob=new Database();
?>
<?php include("database/Session.php");
Session::init();
?>

 <?php
        $remail=Session::get("remail");
         $email=Session::get("email");
          $query="SELECT*FROM candidate WHERE email='$email'";
          $result12=$ob->select($query);
          $count=mysqli_num_rows($result12);
          if($count>0){
              while($row12=$result12->fetch_assoc()){
          

       ?>
      
    <h5 style="border: 2px solid #2A9D74;
background: #229D70;
border-radius: 45px;
text-align:right;color:#ddd;padding-left: 13px;
padding-right: 13px;
padding-top: 4px;
max-width:auto;
padding-bottom: 5px;"><?php echo $row12['question'] ?></h5>

    <h5 style="border: 2px solid #E2EAE6;
background: #105660;
border-radius: 45px;
text-align: left;padding-left: 17px;
padding-right: 17px;
padding-top: 10px;
padding-bottom: 10px;
color:#f9f9f9"><?php echo $row12['answer'] ?></h5>
 
       <?php }}?>
       
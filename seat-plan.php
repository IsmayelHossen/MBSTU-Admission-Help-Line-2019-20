<?php include("database/Connection.php");
  $ob=new Database();
     include("database/Session2.php");
     Session::checkSession();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mbstu Admission Test 2019-20</title>
    <link rel="icon"  href="img/mbstu2.png">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="boot/css/main.css">


<script src="boot/js/jquery.js"></script>
<script type="text/javascript" src="boot/js/bootstrap.js"></script>
 
<script type="text/javascript" src="boot/js/main2.js"></script>

<script>
$(document).ready(function(){
   $("#result1").click(function(){
    $("body").css("background","#DEDEDE");
    $(".panel").css("background","#D7D7D7");
     $(".well").css("background","#E7E1E1");

   });
});
</script>

</head>
  
<body >
 
<div class="container-fluid">
<div class="jumbotron">

  <div class="row">
    <div class="col-md-12">
     <img src="img/mbstu2.png" class="img-rounded" alt="MBSTU" >
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
     <h2>MAWLANA BHASHANI SCIENCE AND TECHNOLOGY UNIVERSITY</h2>
    </div>
  </div>

     
</div>
</div>
<div class="container">
  <div class=" panel ">
  <h2>ADMISSION TEST</h2>
  <h3>SESSION 2019-20</h3>
</div>
</div>
<div class="container seat-plan">
 
    <h2>Seat Plan </h2>
       <h3 style=" padding-top: 10px;padding-bottom:10px; margin-bottom: 20px;font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #27483e;"> মা.ভা.বি.প্র.বি এর ভর্তি পরীক্ষার  সিট প্লান পাবলিশ করা হইছে যাদেরযাদের প্রয়োজন ডাউনলোড করে নিতে পারো অথবা সার্চ করেও জানা যাবে</h3>

  <div class="row" style="margin-bottom:10px;">

      <div class="col-md-3 abcd">
        <div style="margin-bottom:10px;">
   <a  href="apdf.pdf" ><i class="fa fa-download"></i>A Unit</a>
 </div>
      </div>
        <div class="col-md-3 abcd">
          <div  style="margin-bottom:10px;">
   <a  href="bpdf.pdf"  ><i class="fa fa-download"></i>B Unit</a>
 </div>
      </div>
        <div class="col-md-3 abcd">
          <div  style="margin-bottom:10px;">
   <a  href="cpdf.pdf" ><i class="fa fa-download"></i>C Unit</a>
 </div>
      </div>
        <div class="col-md-3 abcd">
   <a  href="dpdf.pdf"  ><i class="fa fa-download"></i>D Unit</a>
      </div>

     
    
  </div>


    <form class="form-inline" action="" method="post" >
      
  <div class="form-group">
    <label>Roll:</label>
    <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Roll...">
  </div>
  <button type="button" name="result1" id="result1" class="btn btn-info">Search</button>
  
</form>

<div class="container" id="liveseat" style="text-align: center;">

   



</div>
 


 

</div>

<div class="container-fluid" >
  <div class="backtohome">
  <label class="pull-left"><a href="home.php" style="font-size:14px;word-spacing:4px;">Back To Home</a></label>

</div>
  <div class="footer" style="height:200px;">
  <h3> ©2019,DEVELOPED BY DEPT. OF ICT(MBSTU)</h3>
  </div>
</div>




  <?php 
    $query="SELECT*FROM admin";
    $count=$ob->select($query);
    while($row=$count->fetch_assoc()){
       $count1=$row['count3'];
       $new=$count1+1;
       $query="UPDATE admin SET count3='$new'";
       $result=$ob->update( $query);
      
    }
    ?>


              
            
</body>
</html>
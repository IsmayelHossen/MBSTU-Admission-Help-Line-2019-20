<?php include("database/Connection.php");
  $ob=new Database();
     include ("database/Session2.php");
     Session::checkSession();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mbstu Admission Test 2018-19</title>
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
   $("#result").click(function(){
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
<div class="container seat-plan" >
  <div class="container notice">
       <div class="well">
        <strong style="font-size:25px;">Notice</strong>

            <marquee  scrolldelay="70" scrollamount="3" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

               
               <ul style="display: inline-block;"><li style="float: left;list-style-type: none;text-decoration: none;" >
         <h3 style="font-family:'Acme'" id="show"> 
            <?php

              $query="SELECT * FROM notice";
              $result1=$ob->select($query);
               while ($row=$result1->fetch_assoc()) {
                  echo $row['notice'];
               }

             
             
             ?>
         </h3>
         </li> </ul>
       
           
        
           </marquee>
       
       </div>
    
  </div>
   <h2>Result</h2>
<div class="container " style="background: #CDCFD7;">
  <!--<h3 style=" padding-top: 10px; margin-bottom: 20px;font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #27483e;"> রেজাল্ট পাবলিশ করা হইছে</h3> -->


    <form class="form-inline" action="" method="post" >
       <div class="form-group">
                          <label>Select Unit:</label>
                          <select name="select" id="select" class="form-control">
                            <?php 
                              $query="SELECT*FROM unit";
                              $select=$ob->select($query);
                      
                        if($select){
                          while ($row=$select->fetch_assoc()) {
                         
                            ?>

                <option value="<?php echo$row['unit_a']?>"><?php echo$row['unit_a']?></option>
                <?php }}?>
           
             </select>
                        </div>
  <div class="form-group">
    <label>Roll:</label>
    <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Roll...">
  </div>
  <button type="button" name="result" id="result" class="btn btn-info">Search</button>
  
</form>

<div class="container" id="liveseat" style="text-align: center;">

   

</div>

<div >
<script type="text/javascript">
                      $(document).ready(function(){
                          $("#tab").click(function(){
                                $("#myModal").modal();
                          });
                      });
                    </script>

        <div class="row">
            <div class="col-md-12">
              
               <button id="tab" class="btn btn-primary " style="margin-bottom: 5px;padding: 10px 10px">সাক্ষাৎকার ও ভর্তির সময়সূচি</button>
                            
                             <div class="modal fade" id="myModal" role="dialog">
                         <div class="modal-dialog">
    
                <!-- Modal content-->
                     <div class="modal-content" style="background-color: #e7e0e2;">
                     
        
                     <div class="modal-body">

                     <img src="img/admission.jpg" width="100%" >

                    
                         </div>
                        <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                              </div>
                            </div>
                          </div>
      
                            
  



            </div>
        </div>
   </div>

</div>
 


 
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
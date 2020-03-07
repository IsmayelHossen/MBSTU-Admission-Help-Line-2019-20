<?php include("database/Connection.php");
  $ob=new Database();
 include ("database/Session2.php");
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


<style type="text/css">
  
  

table th{
  font-size:16px;

}
td{
  font-size:15px;
}

  body{
      font-family:'Acme';
  }
  .fee td{

  font-size: 17px;
  padding: 3px;

  }
  .last {
  font-size: 18px;
  box-shadow: 1px 3px 4px 4px #d2d2d2;
  padding: 4px 5px;
  text-shadow: 1px 2px 3px #774b4b;
  font-family: 'Acme';
}
#myDIV {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: red;
  -webkit-animation: mymove 2s infinite;
  animation: mymove 2s infinite;
  text-align: center;
  padding-top: 4px;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
  from {background-color: red;}
  to {background-color: blue;}
}

/* Standard syntax */
@keyframes mymove {
  from {background-color: red;}
  to {background-color: blue;}
}
</style>

</head>
  
<body >
 
<div class="container-fluidh">
<div class="jumbotron">

  <div class="row">
    <div class="col-md-12">
     <img src="img/mbstu2.png" class="img-rounded" alt="MBSTU" >
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
     <h2 style="font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #000;">MAWLANA BHASHANI SCIENCE AND TECHNOLOGY UNIVERSITY</h2>
    </div>
  </div>

     
</div>
</div>
<div class="container-fluidlapa">
  <div class="panel">
  <h3 >Live Admission Update</h3>
  <h3 style="margin:6px 0px;">Session:2019-20</h3>
</div>
</div>
<div class="container-fluid seat-plan" style="background: #d4dedc;">
  <div class="container-fluid notice">
       
        <strong style="font-size:25px;">Notice</strong>

            <marquee  scrolldelay="40" scrollamount="2" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

               
               <ul style="display: inline-block;"><li style="float: left;list-style-type: none;text-decoration: none;" >
         <h5 style="font-family:'Acme'" id="show"> 
             <script type="text/javascript">
                $(document).ready(function(){
                
                   setInterval(function(){
                    $("#show").load('noticere.php');
                   

                   },20000);
                
                   
                });
             </script>
         </h5>
         </li> </ul>
       
           
        
           </marquee>
       
       
    
  </div>
</div>
<div class="container-fluid" >
  <div class="row">
     <div class="col-md-3">

          <table class="table table-striped ">
            <tr style="background: #74e080;color: #111010;">
             <th style="font-size:18px;">Unit:A</th>
             <th style="font-size:18px;">Seat:170</th>
             <th colspan="2" style="color:#f20b3c;font-size:18px;">Remaining:
           <span id="amain">
             <script type="text/javascript">
                $(document).ready(function(){
                
                   setInterval(function(){
                    $("#amain").load('aunitmain.php');

                   },1000);
                

                });
             </script>
           </span>
           </th>

           </tr>
           <tr>
             <th>Dept.</th>
             <th>Seat</th>
             <th>Vacant</th>
             <th>Admitted</th>
           </tr>
           <tr style="background: #286090;color: #ddd;">
             <td>ICT</td>
             <td>55</td>
             <td > <div id="myDIV">
           <span id="ict1">
             <script type="text/javascript">
                $(document).ready(function(){
                
                   setInterval(function(){
                    $("#ict1").load('Aunitd1.php');

                   },1000);
                

                });
             </script>
           </span>
         </div>
          
           </td>
             <td>
          <span id="show1">
             <script type="text/javascript">
                $(document).ready(function(){
                
                   setInterval(function(){
                    $("#show1").load('Aunitd2.php');

                   },1000);
                

                });
             </script>
               </span>

             </td>
           </tr>
           <tr style="background: #20B968;color: #ddd;">
             <td>CSE</td>
             <td>55</td>
             <td>  <div id="myDIV"> 2
         </div>
       </td>
             <td>53
</td>
           </tr>
          <tr style="background: #79b42f;color: #f9f9f9;">
             <td>TE</td>
             <td>60</td>
             <td>
               <div id="myDIV">
             15
         </div>
       </td>
             <td>45</td>
           </tr>
             <tr style="background: #48e34f;color: #f9f9f9;">
             <td colspan="4">Last Admitted Merit Position:</td>
             
            
          
           </tr>
         
          
          
          </table>
           <div class="progress" style="height:40px;margin-top: -17px">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:<?php  $query="SELECT* FROM admit WHERE dept IN('ICT','CSE','TE') ";
              $result=$ob->select($query);
             $row=$result->fetch_assoc();
               if(isset($result)){
               $count1=mysqli_num_rows($result);
                echo $count1;} ?>%">
    <span class="sr-only"></span>
  <?php  echo $count1;?>% Complete
  </div>
</div>
         
     </div>

         <div class="col-md-3">
           <table class="table table-striped ">
            <tr style="background: #3CB371;color: #ddd;">
              <th style="font-size:18px;">Unit:B</th>
               <th style="font-size:18px;">Seat:295</th>
               <td colspan="2" style="color:#f20b3c;font-size:18px;">
             Remaining: <span id="showmainb" style="color:#000;">
            70
           </span>
           </td>
            

           </tr>
           <tr>
             <th>Dept.</th>
             <th>Seat</th>
             <th>Vacant</th>
             <th>Admitted</th>
           </tr>
           <tr style="background: #3B9E8F;color: #ddd;">
             <td>Pharmacy</td>
             <td>35</td>
             <td>  <div id="myDIV"> <span id="p1">
             0
           </span>
         </div>
         </td>
             <td>
               <span id="p2">
                   35
               </span>
             </td>
           </tr>
            <tr style="background: #096F39;color: #ddd;">
             <td>BGE</td>
             <td>55</td>
             <td>  <div id="myDIV"> <span id="bge">
            17
           </span>
         </div>
         </td>
             <td><span id="bge2">
             38
               </span></td>
           </tr>
            <tr style="background: #4AA85B;color: #ddd;">
             <td>BMB</td>
             <td>35</td>
             <td>  <div id="myDIV"><span id="bmb1">
             3
           </span>
         </div>
         </td>
             <td><span id="bmb2">
                  32
               </span>
             </td>
           </tr>
            <tr style="background: #1D81B7;color: #ddd;">
             <td>FTNS</td>
             <td>55</td>
             <td>  <div id="myDIV"> <span id="ftns">
           4
           </span>
          </div>
         </td>
             <td><span id="ftns1">
            51
               </span>
</td>
           </tr>
            <tr style="background: #813167;color: #ddd;">
             <td>CPS</td>
             <td>60</td>
             <td> <div id="myDIV"> <span id="cps">
              27
           </span>
         </div>
         </td>
             <td><span id="cps1">
            33
               </span>
</td>
           </tr>
            <tr style="background: #063260;color: #ddd;">
             <td>ESRM</td>
             <td>55</td>
             <td> <div id="myDIV"> <span id="esrm">
            19
           </span>
           </div>
         </td>
             <td><span id="esrm1">
              36
               </span>
</td>
           </tr>
          
          </table>
          
     </div>
      <div class="col-md-3">
           <table class="table table-striped ">
            <tr style="background: #1C1835;color: #ddd;">
               <th style="font-size:18px;">Unit:C</th>
               <th style="font-size:18px;">Seat:230</th>
             <th colspan="2" style="color:red;font-size:18px;">Remaining:
                <span id="showmain3" style="color:#ddd;">
                   69
           </span>
             </th>
           

           </tr>
           <tr>
             <th>Dept.</th>
             <th>Seat</th>
             <th>Vacant</th>
             <th>Admitted</th>
           </tr>
           <tr style="background: #25B09B;color: #ddd;">
             <td>Chemistry</td>
             <td>55</td>
             <td> <div id="myDIV">  <span id="chem">
              17
           </span>
         </div > 
         </td>
             <td><span id="chem1">
            38
               </span>
         </td>
           </tr>
            <tr style="background: #1E7145;color: #ddd;">
             <td>Physics</td>
             <td>55</td>
             <td>  <div id="myDIV"><span id="phy">
             14
           </span>
         </div>
         </td>
             <td><span id="phy1">
                 41
               </span>
             </td>
           </tr>
             <tr style="background: #387D81;color: #ddd;">
             <td>Math</td>
             <td>60</td>
             <td> <div id="myDIV">  
              <span id="math">
            41
           </span>
         </div>
         </td>
             <td><span id="math1">
             19
               </span>
             </td>
           </tr>
           <tr style="background:#38A46A;color: #ddd;">
             <td>Statistics</td>
             <td>60</td>
             <td> <div id="myDIV"> <span id="stat">
             19
           </span>
         </div>
         </td>
             <td><span id="stat1">
                 41
               </span>
</td>
           </tr>
          
          </table>
          
     </div>
      <div class="col-md-3">

          <table class="table table-striped ">
            <tr style="background: #338fea;color: #ddd;">
              <th style="font-size:18px;">Unit:D</th>
             <th style="font-size:18px;">Seat:120</th>
             <th colspan="2" style="color: red;font-size:18px;">Remaining:
               <span id="showmain4" style="color:#ddd;">
              29
           </span>

             </th>
            
           </tr>
           <tr>
             <th>Dept.</th>
             <th>Seat</th>
             <th>Vacant</th>
             <th>Admitted</th>
           </tr>
      <tr style="background:#87871d;color: #ddd;">
             <td>BBA</td>
             <td>60</td>
             <td>  <div id="myDIV"><span id="bba">
                15
           </span>
         </div>
         </td>
             <td><span id="bba1">
              45
               </span>
             </td>
           </tr>
          <tr style="background:#18cb72;color: #ddd;">
             <td>Economics</td>
             <td>60</td>
             <td> 
               <div id="myDIV">
              <span id="eco">
             14
           </span>
         </div>
         </td>
       
             <td>
              
              <span id="eco1">
                 
                 46
            
               </span>

             
         </td>

           </tr>
          
          </table>
           
     </div>


  </div>
</div>

<div class="container-fluid" style="background: #258989;color: #fef7fc;">
  <h4 style="text-align:center;">Admission Fee</h4>
  <div class="row fee">
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-6">
      <ul>
          <li>ICT:16,985 Tk</li>
           <li>CSE:16,710 Tk</li>
             <li>TE:16,765 Tk</li>

             <li>Pharmacy:16,985 Tk</li>
           </ul>
         </div>
         <div class="col-md-6">
           <ul>
          <li>BGE:16,875 Tk</li>
           <li>BMB:16,985 Tk</li>
            <li>CPS:17,095 Tk</li>
             <li>ESRM:16,985 Tk</li>
              
        </ul>
      </div>
    </div>
      
     </div>
       <div class="col-md-4">
      <div class="row">
        <div class="col-md-6">
      <ul>
          <li>FTNS:16,985 Tk</li>
           <li>Physics:13,485 Tk</li>
            <li>Chemistry:13,430 Tk</li>
             <li>Math:13,485 Tk</li>
           </ul>
         </div>
         <div class="col-md-6">
           <ul>
          <li>Statistics:13,375 Tk</li>
           <li>BBA:13,017.50 Tk</li>
            <li>Economics:12,435 Tk</li>
             
              
        </ul>
      </div>
    </div>
  </div>
       <div class="col-md-4">
      <table style="text-align: center;">
       
             
       
        <tr>
          <th style="text-align:center;font-size:22px;">Account No:-------</th>
         
        </tr>
      </table>
     </div>


   </div>
 </div>
     

<div class="container-fluid footerouter" >

   <div class="backtohome">
  <label class="pull-left"><a href="home.php" style="font-size:14px;word-spacing:4px;">Back To Home</a></label>

</div>
 
  <div class="footer" style="height:90px;">
  <h3 style="margin-top:-20px;"> ©2019,DEVELOPED BY DEPT. OF ICT(MBSTU)</h3>
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
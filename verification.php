 <?php 
 ob_start();
    include("database/Connection.php"); 
        $ob=new Database();
   

     include("database/Session2.php");
     Session::init();
     $msg="";
    
    ?>
    <?php include("database/Formet.php");
      $fm=new Format();
     ?>

  
    <?php 
              $name=Session::get("usernames");
                    
                  $email=Session::get("emails");
                 $password=Session::get("passwords");
               
      if(isset($_POST['submit'])){

        $code=$_POST['code'];
         if(empty($code)){
           $msg="<div class='alert alert-danger' style='max-width:300px;margin:0 auto;display:block;'><span>Verification Code Needed!</span></div>";

        }
        else{
             $query="SELECT*FROM registration WHERE code='$code' ";
              $result=$ob->select($query);
              $count=mysqli_num_rows($result);
              if($count>=1){
                  
               
                $query1="UPDATE registration set active=1,user='$name',email='$email',password='$password' WHERE code='$code' ";
                $result1=$ob->insert($query1);
               
                 header("location:success.php");
               } 
               else {
                 $msg="<div class='alert alert-danger' style='max-width:300px;margin:0 auto;display:block;'><span>Something Wrong!Please Check Your Email Again For Verification Code To Confirm Your Registration</span></div>";
            
             
          }
         
                  

              
        }

      }



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
<style type="text/css">
		body{
	margin:0;
	color:#6a6f8c;
	background: #f7f7f7;
	font:600 16px/18px 'Open Sans',sans-serif;
}
.error {
	font-size: 16px;
color: #df1a1a;
text-align: center;
padding-top: 2px;
font-weight: 400px;
}
.success{
	font-size: 16px;
color: #20d56b;
text-align: center;
padding-top: 2px;
font-weight: 400px;
}
.login-html .tab, .login-form .group .label, .login-form .group  {
	text-transform: uppercase;
	text-align: left;
}

*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.container-fluid{}
.login-wrap {
	width: 100%;
	margin: auto;
	max-width: 525px;
	min-height: 573px;
	position: relative;
	background: url(img/h.jpg) no-repeat center;
	box-shadow: 0 12px 15px 0px rgba(132, 120, 120, 0.66),0 17px 50px 0 rgba(0,0,0,.19);
	margin-top: 0px;
	margin-bottom: 30px;
	top: 30%;
}

.login-html {
	width: 100%;
	height: 100%;
	position: absolute;
	/* padding: 90px 70px 50px 70px; */
	background: rgba(22, 30, 51, 0.77);
	padding-left: 10px;
	padding-right: 10px;
	padding-top:50px;
	padding-bottom: 10px;
	/* text-align: center; */
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
	text-align:center;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group {
	margin-bottom: 16px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input, .login-form .group .button {
	border: none;
	padding: 17px 10px;
	border-radius: 25px;
	background: rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label {
	color: #aaa;
	font-size: 15px;
}
.login-form .group .button {
	background: #18d26e;
}
.login-form .group .button:hover{
	background: #02ac51e8;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk {
	text-align: center;
	padding-top: 20px;
}
img {
	vertical-align: middle;
	border-style: none;
	margin: 0 auto;
	display: block;
	max-width: 250px;
	max-height:200px;
	margin-bottom:16px;
	/* padding-bottom: 3px; */
}
.col-md-12 {
	-ms-flex: 0 0 100%;
	flex: 0 0 100%;
	max-width: 100%;
	margin-bottom: 20px;
}
 h4,h5 {
	font-size: 1rem;
	text-align: center;
	text-transform: uppercase;
	color: #343937d6;
	font-family: 'Open Sans', sans-serif;
}
.login-form h2, .h2 {
	font-size: 30px;
	padding-top: 50px;
	text-align: center;
	color: #eae3e3d6;
}
	</style>
</head>
<body>
	
		
					<img src="img/mbstu2.png">
		
<div class="login-wrap">

	<div class="login-html">
			<?php 
                   if(isset($msg)){
                   	echo$msg;
                   }
				?>
	
		<div class="login-form">
			<div >
				<h2 >Confirm Registration</h2>
			<form method="post" action="">			
				<div class="group">
				<label for="user" class="label">Verification Code</label>
					<input  type="text" name="code" class="input" placeholder="Write Verification Code..." required="">
				</div>
				
				
				<div class="group">
					<input type="submit" name="submit" class="button" value="Confirm">
				</div>
			</form>
				
				<div class="foot-lnk">
					<a href="index.php">Sign In</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
</div>
<div class="container">
	<h4>© 2019 MBSTU Admission Help Line. </h4>
	<h5>Developed by ICT,mbstu</h5>
</div>
</body>
</html>



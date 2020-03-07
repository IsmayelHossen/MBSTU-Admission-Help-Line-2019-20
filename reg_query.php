<?php include("database/Connection.php");?>
<?php include("database/Session.php");
  Session::init();
?>


<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">

<?php 
class Query{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	
	 }
	

	  public function registration($user,$pass,$repass,$email){
	  	if(empty($user)||empty($pass)||empty($repass)||empty($email)){
	  		 echo"Field Must Not Be Empty";
	  		 exit();
	  	}
	    elseif($pass!=$repass){
           $msg="<div class='alert alert-danger'><span>Password Not Matched!</span></div>";
           echo $msg;
           exit();

        }
	     $query="SELECT*FROM registration WHERE email='$email' ";
              $result12=$this->db->select($query);
               $row12=$result12->fetch_assoc();
                      elseif($row12['email']=='$email'){
                         $msg="<div class='alert alert-danger'><span>This Email Is Already Exists!</span></div>";
                           echo $msg;
                             exit();
                     
                      }
                      else{
                           $code1=rand(1000,100000);
                      	  $query1="INSERT INTO registration(code) VALUES('$code1') ";
                    $result= $this->db->insert($query1);
                     
                    if($result){
                      
                     
                       $to = "$email";
                      $subject = "Your Registration  Verification Code";
                        $txt ="Code: ".$code1;
                 $headers = "From:departmentofict@gmail.com" . "\r\n" ;

                    mail($to,$subject,$txt,$headers);
                     Session::set("usernamet",$name);
                  
                  Session::set("emailt",$email);
                 Session::set("passwordt",$pass);
                    header("location:verification1.php");
                  }
                   else{
                   $msg="<div class='alert alert-danger'><span>Please Try Again!</span></div>";
                    echo $msg;
                      exit();

                 }
               }

                      

	 	

	   }
	}
	
	  
	   ?>
<?php 
ob_start();
include("database/Connection.php");?>
<?php include("database/Session.php");
Session::init();
?>


<?php 
class Query{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	
	 }
		


          public function messquery($text1){


          	$text1=$text1;
       if(empty($text1)){
         echo "PLZ Write Something!";
       }
       else{
       $text2=$text1;
        $text2=str_replace("'", "\'", $text2);
        $text3=str_replace(' ', '',$text2);
       
       
          $email=Session::get("email");
           $remail=Session::get("remail");
             date_default_timezone_set("Asia/Dhaka");
                   $date=date("Y-m-d");
         
          
        $query2="SELECT*FROM message WHERE  question LIKE'%$text3%'  ";
         $result2=$this->db->select($query2);
         $count=mysqli_num_rows($result2);
         $row=$result2->fetch_assoc();
         if($count>0){
           
                $answer=$row['answer'];
              
                if(empty($text3)){
                  echo"<span style='color:red'>Ask Your Question";
                  exit();
                }
                
               else{
                 $query2="INSERT INTO candidate(question,answer,email) VALUES('$text2','$answer','$email')";
               $result2=$this->db->insert($query2);
               }
            
         }
         else{
            echo"<span style='color:red;text-align:center'>No Result Found!</span>";
         }
        
      }
    

          }

	   	}
	   
	   
	   	?>
	
	  
	   

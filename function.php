<?php 
 include("database/Connection.php");?>

  <?php 
  class admission{
  	private $ob;
  	public function __construct(){
	 	$this->db=new Database();
	 	
	 }
	 public function ict(){
	 	 $query="SELECT* FROM admit WHERE NOT ict=0  ";
              $result=$this->db->select($query);
              if(isset($result)){
              $count=mysqli_num_rows($result);
                $count1=55-$count;
                 echo"Remaining:". $count1;
              }


	 }



  }
  

 ?>
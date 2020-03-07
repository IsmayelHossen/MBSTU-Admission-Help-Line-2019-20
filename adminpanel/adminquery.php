<?php include("database/Connection.php");?>
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
	 public function insertdata($roll,$select){
	 	if(empty($roll) ||empty($select)){
	 		return "<span class='alert alert-danger'>Filed Must Not Be Empty!</span>";

	 	}
	 	else{
	 	$query="INSERT INTO admit(dept,roll) VALUES('$select','$roll')";
	 	$result1=$this->db->insert($query);
	 	
	 		if($result1){
	 				return "<span class='alert alert-success'>Successfully Inserted</span>";
	 		}
	 		else{
	 				return "<span class='alert alert-danger'>Data Not  Inserted</span>";

	 		}
	 	}
	 	
	 }
	 public function insertnotice($notice){
	 		$query="INSERT INTO notice(notice) VALUES('$notice')";
	 	$result2=$this->db->insert($query);
	 	
	 		if($result2){
	 			 echo "<span class='alert alert-success'>Successfully Inserted</span>";
	 		}
	 		else{
	 			echo "<span class='alert alert-danger'>Data Not  Inserted</span>";

	 		}

	 }
	 public function insertdata_abnc($roll,$unit,$abnc){
	 	$query="INSERT INTO admit1(roll,unit,select1) VALUES('$roll','$unit','$abnc')";
	 	$result3=$this->db->insert($query);
	 	
	 		if($result3){
	 			 echo "<span class='alert alert-success'>Successfully Inserted</span>";
	 		}
	 		else{
	 			echo "<span class='alert alert-danger'>Data Not  Inserted</span>";

	 		}


	 }

	  

	}
	
	  
	   ?>
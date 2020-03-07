<?php include("database/Connection.php");



?>


<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">

<?php 
class Query{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	
	 }
	

	   public function seat_result($roll){
	   	$query="SELECT*FROM seat WHERE roll<='$roll' AND roll1>='$roll' ";
	 	$result1=$this->db->select($query);
	 	$count=mysqli_num_rows($result1);
	 	if($count!=0){
	 		
	 		 while($row=$result1->fetch_assoc()){?>
	 		 	<div class="well" style="max-width: 100%;">
	 		 	<div  style="font-family:'Acme';max-width:100%;margin: 0 auto;display: block;"> <table class="table table-scripted">
    
    
 
 <tbody>
      <tr>
        <td style="font-size:18px;">Roll:</td>
        <td style="text-align: center;font-size:18px;color: #123;padding-top: 10px;" ><?php
          $roll=Session::get("roll"); 

        echo $roll;?> </td>
    </tr>
    <tr>
    	   <td style="font-size:18px;color:red">Center:</td>
        <td style="text-align: center;font-size: 18px;color: #123;padding-top: 10px;color:red;" ><?php echo $row['center'];?></td>
    </tr>
    <tr>
    	  <td style="font-size:18px;">Building:</td>
        <td style="text-align: center;font-size: 18px;color: #123;padding-top: 10px;" ><?php echo $row['building'];?></td>
    </tr>
    <tr>
    	  <td style="font-size:18px;">Room :</td>
        <td style="text-align: center;font-size: 18px;color: #123;padding-top: 10px" ><?php echo $row['room'];?></td>
        
       
       
      </tr>
    </tbody>
  </table></div>
</div>
   <?php }}else{ ?>
    
	 		 	
	 		<?php 
	 		  

	 	
	 	
	 	
	 		echo"<div class='alert alert-danger' style='font-family:Acme;font-size:18px;'>Please Enter Valid Roll Number</div>";
	 	}
	 	

	   }
	}
	
	  
	   ?>
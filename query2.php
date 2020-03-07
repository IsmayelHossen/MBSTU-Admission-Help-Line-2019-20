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
	 public function seatplan($adroll){
	 	$query="SELECT*FROM result WHERE roll='$adroll'";
	 	$result1=$this->db->select($query);
	 	
	 		return $result1;
	 	
	 }

	  

	   public function result_result($roll,$select){
	   	$query="SELECT*FROM result WHERE roll='$roll'AND unit='$select'";
	 	$result1=$this->db->select($query);
	 	$count=mysqli_num_rows($result1);
	 	if($count!=0){
	 		
	 		 while($row=$result1->fetch_assoc()){?>
	 		 	<div class="well" style="font-family:'Acme';max-width:100%;margin: 0 auto;display: block;height: auto;font-size: 20px;">  <table class="table">
    
 
 <tbody>
      <tr>
        
        <td style="text-align: center;color: #123;padding-top: 10px" >Roll:<?php echo $row['roll'];?> </td>
    </tr>
    <tr>
          <td style="text-align: center;color: #123;padding-top: 10px;" >Unit:<?php echo $row['unit'];?> </td>
      </tr>
      <tr>
        <td style="text-align: center;color:#ef12d5;padding-top: 10px;" >Merit Position:
        	<?php
          Session::set('merit', $row['merit']);
        	 echo  $row['merit']; 
        	 $merit=Session::get("merit");
        if($merit>=1 && $merit<=100){
        	 echo'<br><span style="font-size:12px;font-family:Acme;color:#dd27aa;">Congratulations From Department Of ICT</span>';
        	

        }


        ?></td>
    </tr>
           <tr><td style="text-align: center;color: #123;padding-top: 10px;" >Score:<?php echo $row['score'];?></td>
       
       
      </tr>
    </tbody>
  </table></div>
   <?php }}else{ ?>
    
	 		 	
	 		<?php 
	 		  

	 	
	 	
	 	
	 		echo"<div class='alert alert-danger' style='font-family:Acme;font-size:18px;'>Sorry,You Are Not Selected</div>";
	 	}
	 	

	   }
	}
	
	  
	   ?>
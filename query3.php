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
	

	  public function result_result($roll1,$select1){
	   	$query="SELECT*FROM viva WHERE roll='$roll1'AND unit='$select1'";
	 	$result1=$this->db->select($query);
	 	$count=mysqli_num_rows($result1);
	 	if($count!=0){
	 		
	 		 while($row=$result1->fetch_assoc()){?>
	 		 	<div class="well" style="font-family:'Acme';max-width:100%;margin: 0 auto;display: block;height: auto;font-size: 20px;margin-right: 10px;background: #bfd1e3;">  <table class="table">
    
 
 <tbody>
      <tr>
        
        <td style="text-align: center;color: #123;padding-top: 10px" >Roll:<?php echo $row['roll'];?> </td>
    </tr>
    <tr>
          <td style="text-align: center;color: #123;padding-top: 10px;" >Unit:<?php echo $row['unit'];?> </td>
      </tr>
      <tr>
        <td style="text-align: center;padding-top: 10px;" >Merit Position:
        	<?php echo  $row['merit']; ?></td>
    </tr>
    <tr>
        <td style="text-align: center;color:#e9321d;padding-top: 10px;" >Selected Department:
        	<?php echo  $row['dept']; ?></td>
    </tr>
           <tr><td style="text-align: center;color: #123;padding-top: 10px;" >Applicant Name:<?php echo $row['aname'];?></td>
       
       
      </tr>
      <tr><td style="text-align: center;color: #123;padding-top: 10px;" >Father Name:<?php echo $row['fname'];?></td>
       
       
      </tr>
      <tr><td style="text-align: center;color: #123;padding-top: 10px;" >Hall:<?php echo $row['Hall'];?></td>
       
       
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
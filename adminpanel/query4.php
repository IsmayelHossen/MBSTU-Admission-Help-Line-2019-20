<?php include("database/Connection.php");
 $db=new Database();
?>
<?php include("database/Session.php");
  Session::init();
?>


<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
<style type="text/css">
.table {margin-bottom: 0px;}
.side {
	background: #7acccf;
	color: #efefef;
	max-width: 100%;
	height: 1800px;
}
</style>

<?php 
class Query{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	
	 }
	

	  public function result_result($select1){
	   	$query="SELECT*FROM admit WHERE  dept='$select1'";
	 	$result1=$this->db->select($query);
	 	$count=mysqli_num_rows($result1);
	 	if($count!=0){
	 		
	 		 while($row=$result1->fetch_assoc()){?>
	 		 	<div style="font-family:'Acme';max-width:500px;">  <table class="table table-striped "  >
    
 
 <tbody>
      <tr>
        
        <td style="text-align: center;color: #123;" >id:<?php echo $row['id'];?> </td>
         <td style="text-align: center;color: #123;" >dept:<?php echo $row['dept'];?> </td>
          <td style="text-align: center;color: #123;" >roll:<?php echo $row['roll'];?> </td>
            <td style="text-align: center;color: #123;"><a onclick="return confirm('Are you want to delete?')" href="?delete=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    
    </tbody>
  </table></div>
   <?php }}else{ ?>
    
	 		 	
	 		<?php 
	 		  

	 	
	 	
	 	
	 		
	 	}
	 	

	   }

	}
	
	  
	   ?>
<?php 
if (isset($_POST['last_id']) && (is_numeric($_POST['last_id']))) {
include '../includes/functions.php';
$last_id = $_POST['last_id'];
$db = PDOconn();
//from last id count descending order
//SELECT * FROM customers LIMIT 10 OFFSET 10
$query = "SELECT * FROM sms WHERE ID < ".$last_id." ORDER BY ID DESC LIMIT 5";
//$query = "SELECT * FROM sms ORDER BY id  LIMIT 2 OFFSET 3";
//$query = "SELECT * FROM sms ORDER BYDESC LIMIT 0,10";
	$sql = $db->prepare($query);
	$sql->execute();
	$row = $sql->fetchALL();
?>
<div class="timeline_wrapper">   
<ul class="timeline">
	<?php foreach($row as $row) {
		$id 	= $row['ID'];
		$dest 	= $row['Destination'];
		$origin = $row['Origin'];
		$mask 	= $row['Mask'];
		$sms 	= $row['SMS'];
		$datetime 	= $row['TimeHere'];
	?>
		<li>
	        <div class="timeline-badge"></div>
	      	<div class ="smscontent">
	        	<div class="timeline-heading">
	        		<a href="#" class="digits" data-toggle="tooltip" data-placement="top" title="<?php echo $origin; ?>"> 
	        			<?php echo substr($origin, -4); ?> 
	        		<img width="16px" height="8px" src="./styles/images/icons/mail.png"/> 
			
			       	<a href="#" class="digits" data-toggle="tooltip" data-placement="top" title="<?php echo $dest; ?> ">
			       		<?php echo substr($dest, -4); ?> </a> 
						  <time class="timeago" data-toggle="tooltip" data-placement="top" title="<?php echo $datetime; ?>" datetime="<?php echo $datetime; ?>" ></time>
	                 			<p class="timeline-body"><?php echo $sms; ?></p>
	   			</div>
	 	</li>
	<?php } ?>
</ul>
</div><!--/timeline wrapper-->       
<a href="#"><div class="widget_load_more text-center" last_id="<?php echo $id; ?>">Load More</div></a>
<?php } ?>


<?php include '../includes/functions.php'; ?>
<div class="timeline_wrapper">            	
<ul class="timeline">
   	<!-- FEEDS -->
	<?php
	$get_sms = get_sms();
		foreach($get_sms as $row) {
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
         						<i class="fa fa-envelope-o"></i>
	
	              	<a href="#" class="digits" data-toggle="tooltip" data-placement="top" title="<?php echo $dest; ?> ">
                 		<?php echo substr($dest, -7); ?> </a> 

				  - <time class="timeago" data-toggle="tooltip" data-placement="top" title="<?php echo $datetime; ?>" datetime="<?php echo $datetime; ?>" ></time>
         			<p class="timeline-body"><?php echo $sms; ?></p>
     			</div>
		</li>
	<?php } ?>
	
		
</ul>
</div><!--/timeline wrapper-->          
<a href="#"><div class="widget_load_more text-center" last_id="<?php echo $id; ?>">Load More </div></a>
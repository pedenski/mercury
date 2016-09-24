
<?php 
 	
	if(!empty($_POST['num'])) {


		include '../includes/functions.php';
		$sms = $_POST['sms'];

	
	
		//$destArr = array();
		//$receiver = implode(",", $_POST['num']);

	
		foreach($_POST['num'] as $num) {
		

				$ok = broadcast($num, $sms);
				echo $sent;
		?>

		<li>
	        <div class="timeline-badge"></div>
	      	<div class ="smscontent">
	        	<div class="timeline-heading">
	        		<a href="#" class="digits" data-toggle="tooltip" data-placement="top" title="4303">4303
	        		<img width="16px" height="8px" src="./styles/images/icons/mail.png"/> 
			
			       	<a href="#" class="digits" data-toggle="tooltip" data-placement="top" title="<?php echo substr($num, -4); ?> ">	<?php echo substr($num, -4); ?> </a> 
			      
						-  <time class="timeago" data-toggle="tooltip" data-placement="top" title="<?php echo date('Y-m-d H:i:s');?>" datetime="<?php echo date('Y-m-d H:i:s'); ?>" >Just Now</time>
	                 			<p class="timeline-body"><?php echo $sms; ?></p>
	   			</div>
	 	</li>


		<?php
			
		}
		//$res = broadcast($num,$sms);


			//$destination = implode(",",$destArr[]);
			
		//$ok = insert_sms($destination, $sms);
			//echo $ok;
	

		//$test = insert_sms($receiver,$sms);
		//echo $receiver;
		//$receiver = implode(",", $_POST['num']);
		




}







?>
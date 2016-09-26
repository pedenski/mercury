<div class="widget_post">
	<div class="media">
	 <form action="widgets/ajax_test.php" class="fcomposer" method="POST">
	  <div class="media-body composer_area">
	    
	    <div class="comp_wrap"> 
	   	 	<textarea class="composer" rows="1" onkeyup="countChar(this)" name="sms"></textarea>
	   		
	   		<div class="cog pull-right">
			<a href='#' class="showmore"><span class='glyphicon glyphicon-cog'></span></a>
			</div>
	   	</div>


	    <div class="composer_checkb" >
		<!-- CHECKBOX OF NUMBERS HERE -->
		
		<table class="custom_table table">
		
		<?php
			$i = 0;
			$cols = 4;
			$users = get_users();
			foreach($users as $row) 
			{
					$user_id = $row['id'];
					$user = $row['user'];
					$user_num = $row['number'];

				if($i % $cols ==0) 
				{
					echo "<tr>";
				} 
		?>
				<td> 
				
					<div class="checkbox">
					<label><input type="checkbox" name="num[]" value="<?php echo $user_num; ?>"
					<?php if(empty($session)) { 	echo "disabled";  } ?>>
					<?php echo $user; ?></label>
					</div>
					
				</td> 

		<?php
				$i++;
				if($i % $cols ==0) 
				{
					echo "</tr>";
				}
			}


		?> 
		</table>
		</div>
		<!-- CHECKBOX OF NUMBERS HERE -->

	    <div class="composer_control">
	    <div class="text-right">
		<button type="submit" class="float-right btn btn-warning btn-xs postButton"
		<?php if(empty($session)) { echo "disabled";  } ?>





		>Send </button>
		</div>
		
		<!--count char textarea -->
		<small><div id="charNum">80</div></small>
		
		</div>


	  
	  </div>
	    </form>
	</div>
</div><!-- /widget -->
<?php include '../includes/functions.php' ?>
<table class="custom_table table table-striped">
<tbody>
<?php
$posts = get_app();
foreach($posts as $row) {
	$app_id = $row['ID'];
	$app_name = $row['Name'];
	$app_username = $row['Username'];
	$app_code = $row['AccessCode'];
	$app_enabled = $row ['Enabled'];
?>

  <tr>

    <td class="col-md-1">
    
    <?php echo strtoupper($app_username); ?></td>    
    <td  class="col-md-1"><p class="text-center"><small><?php echo $app_code ?></td>
    <td class="col-md-1"><p class="text-right">
     

     <?php if ($app_enabled == 1) { ?>
     <div id="on" class="text-center">ON</div>
     <?php } else { ?>
     <div id="off" class="text-center">OFF</div>
     <?php } ?>
	</small></td>
  </tr>  

<?php } ?> 
</tbody>
</table>

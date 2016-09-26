<?php include '../includes/functions.php' ?>
<h4 class="widg-heading-applist"> APPLICATION LIST </h4 >
<table class="custom_table table table-striped">
<tbody>
<tr>

<td class="col-md-1 td-padding "> <small> App </small></td>
<td class="col-md-1 td-padding text-center"> <small> Status </small></td>
</tr>
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

    <td class="col-md-3">
    
   <i class="fa fa-database"></i> <?php echo strtoupper($app_username); ?></td>    
    
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

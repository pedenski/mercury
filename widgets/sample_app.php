<?php include '../includes/functions.php' ?> 

<?php
$posts = get_app();
foreach($posts as $row) {
	$app_id = $row['ID'];
	$app_name = $row['Name'];
	$app_username = $row['Username'];
	$app_code = $row['AccessCode'];
	$app_enabled =$row ['Enabled'];
?>

<table style="width:100%">
 <tr>
    <th>Name</th>
    <th>Code</th>
    <th>Status</th>
  </tr>

   <tr>
    <td><?php echo strtoupper($app_username); ?></td>
    <td><?php echo $app_code ?></td>
    <td><?php echo $app_enabled ?>Germany</td>
  </tr>
  
</table>


<?php } ?>
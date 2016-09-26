<?php include '../includes/functions.php' ?>
<h4 class="widg-heading"> TOP 5 </h4 >
<table>
<tbody>
<tr>

<td class="col-md-1 td-padding "> <small> Receiver </small></td>
<td class="col-md-1 td-padding text-right"> <small> Count </small></td>
</tr>
<?php
$toplist = get_topdestination();
foreach($toplist as $row) {
	$destination = $row['Destination'];
	$count = $row['count'];
?>

 
  <tr>
 
    <td class="col-md-3 td-padding font_10 "><i class="fa fa-mobile"></i>  <?php echo $destination; ?></td>    
    <td  class="col-md-1 td-padding "><p class="text-right"><small><span class="label label-info"><?php echo $count; ?></span></td>
 
  </tr>  

<?php } ?> 
</tbody>
</table>

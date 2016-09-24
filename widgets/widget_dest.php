<div class="widget margin-bot-10">
 Destinations <br/><br/>
<table class="custom_table table table-striped">
<tbody>

<?php 
$whitelist = get_whitelist();
foreach($whitelist as $row) {
	$list_id = $row['ID'];
    $list_number = $row['Number'];
    $list_name = $row['Description'];
?>
    <tr>
        <td class="col-md-3"> <?php echo strtoupper($list_number); ?> </td>
        <td class="col-md-2"> <?php echo strtoupper($list_name); ?> </td>    
        <td  class="col-md-1">
     	<input type='checkbox' name='opt1' id='opt<?php echo $list_id; ?>' value='<?php echo $list_id; ?>' /></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>   
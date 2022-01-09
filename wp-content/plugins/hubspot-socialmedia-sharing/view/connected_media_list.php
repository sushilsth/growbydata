<?php
// var_dump($res);
?>
<h1>Connected Social Media List</h1>
<table class="wp-list-table widefat fixed striped pages">
	<thead>
		<tr>
			<td>Picture</td>
		
			<td>Display Name</td>
		
			<td>Type</td>
		</tr>
	</thead>

	<tbody>
	<?php 
	if(!empty($res)){
	 foreach ($res as $key => $value) {
	 	switch ($value->accountType) {
	 		case 'Facebook':
	 			$imgUrl = $value->data->pictureUrl;
	 			break;
	 		case 'LinkedIn':
	 			$imgUrl = $value->data->pictureUrl;
	 			break;
	 		case 'Twitter':
	 			$imgUrl = $value->avatarUrl;
	 			break;
	 		
	 		default:
	 			
	 			break;
	 	}
	?>
		<tr>
			<td><img src="<?= $imgUrl; ?>" height="50"></td>
		
			<td><?= $value->data->pageName; ?></td>
		
			<td><?= $value->accountType; ?></td>
		</tr>
	<?php } } else { ?>
		<tr>
			<td colspan="2">Not media connected</td>
		</tr>
	<?php } ?>
	</tbody>

</table>
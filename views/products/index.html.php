<table>
	<tr>
		<th>Name</th>
		<th>Description</th>
	</tr>	
	<?php foreach ($this->products as $product) { ?>
	<tr>
		<td><?php echo $product['name']; ?></td>
		<td><?php echo $product['description']; ?></td>
	</tr>
	<?php }?>
</table>
<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-address.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Address</a>

				<h1>Address</h1>
				<p>This table includes <?php echo counting("address", "id");?> address.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>IP</th>
			<th>PORT</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$address = getAll("address");
				if($address) foreach ($address as $addresss):
					?>
					<tr>
		<td><?php echo $addresss['ID']?></td>
		<td><?php echo $addresss['IP']?></td>
		<td><?php echo $addresss['PORT']?></td>


						<td><a href="edit-address.php?act=edit&id=<?php echo $addresss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $addresss['id']?>&cat=address" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
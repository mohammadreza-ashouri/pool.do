<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-addressmanagement.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Addressmanagement</a>

				<h1>Addressmanagement</h1>
				<p>This table includes <?php echo counting("addressmanagement", "id");?> addressmanagement.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>Currency</th>
			<th>Withdrawal address</th>
			<th>Remarks</th>
			<th>Operating</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$addressmanagement = getAll("addressmanagement");
				if($addressmanagement) foreach ($addressmanagement as $addressmanagements):
					?>
					<tr>
		<td><?php echo $addressmanagements['ID']?></td>
		<td><?php echo $addressmanagements['Currency']?></td>
		<td><?php echo $addressmanagements['Withdrawal address']?></td>
		<td><?php echo $addressmanagements['Remarks']?></td>
		<td><?php echo $addressmanagements['operating']?></td>


						<td><a href="edit-addressmanagement.php?act=edit&id=<?php echo $addressmanagements['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $addressmanagements['id']?>&cat=addressmanagement" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-assets.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Assets</a>

				<h1>Assets</h1>
				<p>This table includes <?php echo counting("assets", "id");?> assets.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>Currency</th>
			<th>Total assets</th>
			<th>Available balance</th>
			<th>Mortgage amount</th>
			<th>Cooperation amount</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$assets = getAll("assets");
				if($assets) foreach ($assets as $assetss):
					?>
					<tr>
		<td><?php echo $assetss['ID']?></td>
		<td><?php echo $assetss['Currency']?></td>
		<td><?php echo $assetss['Total assets']?></td>
		<td><?php echo $assetss['Available balance']?></td>
		<td><?php echo $assetss['Mortgage amount']?></td>
		<td><?php echo $assetss['Cooperation amount']?></td>


						<td><a href="edit-assets.php?act=edit&id=<?php echo $assetss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $assetss['id']?>&cat=assets" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
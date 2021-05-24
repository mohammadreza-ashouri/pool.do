<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-onlineminer.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Onlineminer</a>

				<h1>Onlineminer</h1>
				<p>This table includes <?php echo counting("onlineminer", "id");?> onlineminer.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>Mining machine name</th>
			<th>Mining power</th>
			<th>Last update time</th>
			<th>Status</th>
			<th>Operating</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$onlineminer = getAll("onlineminer");
				if($onlineminer) foreach ($onlineminer as $onlineminers):
					?>
					<tr>
		<td><?php echo $onlineminers['ID']?></td>
		<td><?php echo $onlineminers['Mining machine name']?></td>
		<td><?php echo $onlineminers['Mining power']?></td>
		<td><?php echo $onlineminers['Last update time']?></td>
		<td><?php echo $onlineminers['status']?></td>
		<td><?php echo $onlineminers['operating']?></td>


						<td><a href="edit-onlineminer.php?act=edit&id=<?php echo $onlineminers['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $onlineminers['id']?>&cat=onlineminer" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
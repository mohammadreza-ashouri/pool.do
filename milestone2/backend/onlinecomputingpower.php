<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-onlinecomputingpower.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Online Computing Power</a>

				<h1>Online Computing Power</h1>
				<p>This table includes <?php echo counting("onlinecomputingpower", "id");?> Online Computing Power</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>Mining pool</th>
			<th>Status</th>
			<th>File name prefix</th>
			<th>Mining pool public key</th>
			<th>Last update time</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$onlinecomputingpower = getAll("onlinecomputingpower");
				if($onlinecomputingpower) foreach ($onlinecomputingpower as $onlinecomputingpowers):
					?>
					<tr>
		<td><?php echo $onlinecomputingpowers['ID']?></td>
		<td><?php echo $onlinecomputingpowers['Mining pool']?></td>
		<td><?php echo $onlinecomputingpowers['status']?></td>
		<td><?php echo $onlinecomputingpowers['File name prefix']?></td>
		<td><?php echo $onlinecomputingpowers['Mining pool public key']?></td>
		<td><?php echo $onlinecomputingpowers['Last update time']?></td>


						<td><a href="edit-onlinecomputingpower.php?act=edit&id=<?php echo $onlinecomputingpowers['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $onlinecomputingpowers['id']?>&cat=onlinecomputingpower" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
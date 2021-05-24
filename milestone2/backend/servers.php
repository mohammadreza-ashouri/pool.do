<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-servers.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Servers</a>

				<h1>Servers</h1>
				<p>This table includes <?php echo counting("servers", "id");?> servers.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Ip</th>
			<th>Port</th>
			<th>Performance</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$servers = getAll("servers");
				if($servers) foreach ($servers as $serverss):
					?>
					<tr>
		<td><?php echo $serverss['id']?></td>
		<td><?php echo $serverss['ip']?></td>
		<td><?php echo $serverss['port']?></td>
		<td><?php echo $serverss['performance']?></td>


						<td><a href="edit-servers.php?act=edit&id=<?php echo $serverss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $serverss['id']?>&cat=servers" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
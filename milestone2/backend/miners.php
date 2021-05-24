<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-miners.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Miners</a>

				<h1>Miners</h1>
				<p>This table includes <?php echo counting("miners", "id");?> miners.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Minerid</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$miners = getAll("miners");
				if($miners) foreach ($miners as $minerss):
					?>
					<tr>
		<td><?php echo $minerss['id']?></td>
		<td><?php echo $minerss['minerid']?></td>
		<td><?php echo $minerss['username']?></td>
		<td><?php echo $minerss['password']?></td>
		<td><?php echo $minerss['status']?></td>


						<td><a href="edit-miners.php?act=edit&id=<?php echo $minerss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $minerss['id']?>&cat=miners" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
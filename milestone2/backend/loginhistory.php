<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-loginhistory.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Loginhistory</a>

				<h1>Loginhistory</h1>
				<p>This table includes <?php echo counting("loginhistory", "id");?> loginhistory.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>Time</th>
			<th>IP</th>
			<th>Equipment</th>
			<th>Area</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$loginhistory = getAll("loginhistory");
				if($loginhistory) foreach ($loginhistory as $loginhistorys):
					?>
					<tr>
		<td><?php echo $loginhistorys['ID']?></td>
		<td><?php echo $loginhistorys['time']?></td>
		<td><?php echo $loginhistorys['IP']?></td>
		<td><?php echo $loginhistorys['equipment']?></td>
		<td><?php echo $loginhistorys['Area']?></td>


						<td><a href="edit-loginhistory.php?act=edit&id=<?php echo $loginhistorys['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $loginhistorys['id']?>&cat=loginhistory" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
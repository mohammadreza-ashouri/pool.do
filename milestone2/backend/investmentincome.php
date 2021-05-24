<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-investmentincome.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Investment Income</a>

				<h1>Investmentincome</h1>
				<p>This table includes <?php echo counting("investmentincome", "id");?> investmentincome.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>ID</th>
			<th>Currency</th>
			<th>Product name</th>
			<th>Number of cooperation</th>
			<th>Cooperation cycle</th>
			<th>Annualized interest rate</th>
			<th>Cumulative income</th>
			<th>Status</th>
			<th>Operating</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$investmentincome = getAll("investmentincome");
				if($investmentincome) foreach ($investmentincome as $investmentincomes):
					?>
					<tr>
		<td><?php echo $investmentincomes['ID']?></td>
		<td><?php echo $investmentincomes['Currency']?></td>
		<td><?php echo $investmentincomes['product name']?></td>
		<td><?php echo $investmentincomes['Number of cooperation']?></td>
		<td><?php echo $investmentincomes['Cooperation cycle']?></td>
		<td><?php echo $investmentincomes['Annualized interest rate']?></td>
		<td><?php echo $investmentincomes['Cumulative income']?></td>
		<td><?php echo $investmentincomes['status']?></td>
		<td><?php echo $investmentincomes['operating']?></td>


						<td><a href="edit-investmentincome.php?act=edit&id=<?php echo $investmentincomes['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $investmentincomes['id']?>&cat=investmentincome" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				
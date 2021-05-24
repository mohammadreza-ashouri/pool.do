<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="address.php">Address</a></td>
					<td><?=counting("address", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="addressmanagement.php">Addressmanagement</a></td>
					<td><?=counting("addressmanagement", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="assets.php">Assets</a></td>
					<td><?=counting("assets", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="investmentincome.php">Investmentincome</a></td>
					<td><?=counting("investmentincome", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="loginhistory.php">Loginhistory</a></td>
					<td><?=counting("loginhistory", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="miners.php">Miners</a></td>
					<td><?=counting("miners", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="onlinecomputingpower.php">Onlinecomputingpower</a></td>
					<td><?=counting("onlinecomputingpower", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="onlineminer.php">Onlineminer</a></td>
					<td><?=counting("onlineminer", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="servers.php">Servers</a></td>
					<td><?=counting("servers", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			
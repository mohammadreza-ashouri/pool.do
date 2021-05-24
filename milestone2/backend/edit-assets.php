<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$assets = getById("assets", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Assets</legend>
						<input name="cat" type="hidden" value="assets">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Currency</label>
							<textarea class="ckeditor form-control" name="Currency"><?=$assets['Currency']?></textarea><br>
							
							<label>Total assets</label>
							<input class="form-control" type="text" name="Total assets" value="<?=$assets['Total assets']?>" /><br>
							
							<label>Available balance</label>
							<input class="form-control" type="text" name="Available balance" value="<?=$assets['Available balance']?>" /><br>
							
							<label>Mortgage amount</label>
							<input class="form-control" type="text" name="Mortgage amount" value="<?=$assets['Mortgage amount']?>" /><br>
							
							<label>Cooperation amount</label>
							<input class="form-control" type="text" name="Cooperation amount" value="<?=$assets['Cooperation amount']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
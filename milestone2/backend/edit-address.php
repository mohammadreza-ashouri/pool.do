<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$address = getById("address", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Address</legend>
						<input name="cat" type="hidden" value="address">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>ID</label>
							<input class="form-control" type="text" name="ID" value="<?=$address['ID']?>" /><br>
							
							<label>IP</label>
							<input class="form-control" type="text" name="IP" value="<?=$address['IP']?>" /><br>
							
							<label>PORT</label>
							<input class="form-control" type="text" name="PORT" value="<?=$address['PORT']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
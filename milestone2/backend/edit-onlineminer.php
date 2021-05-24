<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$onlineminer = getById("onlineminer", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Onlineminer</legend>
						<input name="cat" type="hidden" value="onlineminer">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Mining machine name</label>
							<textarea class="ckeditor form-control" name="Mining machine name"><?=$onlineminer['Mining machine name']?></textarea><br>
							
							<label>Mining power</label>
							<textarea class="ckeditor form-control" name="Mining power"><?=$onlineminer['Mining power']?></textarea><br>
							
							<label>Last update time</label>
							<textarea class="ckeditor form-control" name="Last update time"><?=$onlineminer['Last update time']?></textarea><br>
							
							<label>Status</label>
							<textarea class="ckeditor form-control" name="status"><?=$onlineminer['status']?></textarea><br>
							
							<label>Operating</label>
							<textarea class="ckeditor form-control" name="operating"><?=$onlineminer['operating']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
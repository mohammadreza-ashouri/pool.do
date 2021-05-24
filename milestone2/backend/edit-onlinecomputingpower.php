<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$onlinecomputingpower = getById("onlinecomputingpower", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Onlinecomputingpower</legend>
						<input name="cat" type="hidden" value="onlinecomputingpower">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Mining pool</label>
							<textarea class="ckeditor form-control" name="Mining pool"><?=$onlinecomputingpower['Mining pool']?></textarea><br>
							
							<label>Status</label>
							<textarea class="ckeditor form-control" name="status"><?=$onlinecomputingpower['status']?></textarea><br>
							
							<label>File name prefix</label>
							<textarea class="ckeditor form-control" name="File name prefix"><?=$onlinecomputingpower['File name prefix']?></textarea><br>
							
							<label>Mining pool public key</label>
							<textarea class="ckeditor form-control" name="Mining pool public key"><?=$onlinecomputingpower['Mining pool public key']?></textarea><br>
							
							<label>Last update time</label>
							<textarea class="ckeditor form-control" name="Last update time"><?=$onlinecomputingpower['Last update time']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
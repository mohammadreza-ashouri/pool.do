<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$loginhistory = getById("loginhistory", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Loginhistory</legend>
						<input name="cat" type="hidden" value="loginhistory">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Time</label>
							<input class="form-control" type="text" name="time" value="<?=$loginhistory['time']?>" /><br>
							
							<label>IP</label>
							<textarea class="ckeditor form-control" name="IP"><?=$loginhistory['IP']?></textarea><br>
							
							<label>Equipment</label>
							<textarea class="ckeditor form-control" name="equipment"><?=$loginhistory['equipment']?></textarea><br>
							
							<label>Area</label>
							<textarea class="ckeditor form-control" name="Area"><?=$loginhistory['Area']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
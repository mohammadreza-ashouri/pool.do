<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$servers = getById("servers", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Servers</legend>
						<input name="cat" type="hidden" value="servers">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Ip</label>
							<textarea class="ckeditor form-control" name="ip"><?=$servers['ip']?></textarea><br>
							
							<label>Port</label>
							<textarea class="ckeditor form-control" name="port"><?=$servers['port']?></textarea><br>
							
							<label>Performance</label>
							<textarea class="ckeditor form-control" name="performance"><?=$servers['performance']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$miners = getById("miners", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Miners</legend>
						<input name="cat" type="hidden" value="miners">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Id</label>
							<input class="form-control" type="text" name="id" value="<?=$miners['id']?>" /><br>
							
							<label>Minerid</label>
							<input class="form-control" type="text" name="minerid" value="<?=$miners['minerid']?>" /><br>
							
							<label>Username</label>
							<textarea class="ckeditor form-control" name="username"><?=$miners['username']?></textarea><br>
							
							<label>Password</label>
							<textarea class="ckeditor form-control" name="password"><?=$miners['password']?></textarea><br>
							
							<label>Status</label>
							<textarea class="ckeditor form-control" name="status"><?=$miners['status']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
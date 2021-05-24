<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$addressmanagement = getById("addressmanagement", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Addressmanagement</legend>
						<input name="cat" type="hidden" value="addressmanagement">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Currency</label>
							<textarea class="ckeditor form-control" name="Currency"><?=$addressmanagement['Currency']?></textarea><br>
							
							<label>Withdrawal address</label>
							<textarea class="ckeditor form-control" name="Withdrawal address"><?=$addressmanagement['Withdrawal address']?></textarea><br>
							
							<label>Remarks</label>
							<textarea class="ckeditor form-control" name="Remarks"><?=$addressmanagement['Remarks']?></textarea><br>
							
							<label>Operating</label>
							<textarea class="ckeditor form-control" name="operating"><?=$addressmanagement['operating']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
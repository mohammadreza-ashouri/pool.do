<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$investmentincome = getById("investmentincome", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Investmentincome</legend>
						<input name="cat" type="hidden" value="investmentincome">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Currency</label>
							<textarea class="ckeditor form-control" name="Currency"><?=$investmentincome['Currency']?></textarea><br>
							
							<label>Product name</label>
							<textarea class="ckeditor form-control" name="product name"><?=$investmentincome['product name']?></textarea><br>
							
							<label>Number of cooperation</label>
							<textarea class="ckeditor form-control" name="Number of cooperation"><?=$investmentincome['Number of cooperation']?></textarea><br>
							
							<label>Cooperation cycle</label>
							<textarea class="ckeditor form-control" name="Cooperation cycle"><?=$investmentincome['Cooperation cycle']?></textarea><br>
							
							<label>Annualized interest rate</label>
							<textarea class="ckeditor form-control" name="Annualized interest rate"><?=$investmentincome['Annualized interest rate']?></textarea><br>
							
							<label>Cumulative income</label>
							<textarea class="ckeditor form-control" name="Cumulative income"><?=$investmentincome['Cumulative income']?></textarea><br>
							
							<label>Status</label>
							<textarea class="ckeditor form-control" name="status"><?=$investmentincome['status']?></textarea><br>
							
							<label>Operating</label>
							<textarea class="ckeditor form-control" name="operating"><?=$investmentincome['operating']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				
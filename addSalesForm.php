<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Han Zong NG
***** Student ID: 100084651
***** Last Modified: 03 September 2018 [Time: (+GMT 10:00)]
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Add Sales Record page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Hanzong NG" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<title>Add Sales Record</title>
</head>
<body>
	<!--CODE HERE-->
	<div id="navigation-bar">
		<?php
			include "include/template.php";
			navigationBar();
		?>
	</div>


	<div id="webpage-title">
		<?php
			webpageTitle()
		?>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<?php
					featuresList();
				?>
			</div>
			<div class="col-lg-8 col-md-6">
				<div id="form-section">
					<form action="addSalesFormItem.php" method="post">
						<fieldset>
							<legend>Add Sales</legend>
							<div class="row">
								<div class="col-12">
									<label for="salesDate">Date: </label>
									<input type="text" id="salesDate" name="salesDate" value="<?php echo date("d/m/y");?>" placeholder="dd/mm/yy" required />
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<label for="salesTime">Time: </label>
									<input type="" id="salesTime" name="salesTime" placeholder="hh:mm (eg. 23:59)" required />
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<label for="salesQuantity">Number of Item: </label>
									<input type="number" id="salesQuantity" name="salesQuantity" placeholder="eg. 5" required />
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="submit" value="Next" />
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!--CODE HERE-->
	<?php
		jsPluggins();
	?>
</body>
</html>

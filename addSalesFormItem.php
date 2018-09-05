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
					<form action="addSalesProcess.php" method="post">
						<fieldset>
							<legend>Add Sales</legend>
							<?php
								$aDate = $_POST["salesDate"];
								$aTime = $_POST["salesTime"];
								$aQuantity = $_POST["salesQuantity"];
								echo "<p>Date: " . $aDate . "</p>";
								echo "<p>Time: " . $aTime . "</p>";
								echo "<p>Item: " . $aQuantity . "</p>";
							?>
							<div class="row">
								<div class="col-12">
									<?php
										for($i=1; $i<=$aQuantity; $i++){
											echo "<div class='row'>";
											echo "<div class='col-12'>";
											echo "<label for='item".($i)."'>Item " . ($i) . ": ";
											echo "<input required type='text' id='item".($i)."' name='item".($i)."'/>";
											echo "</div></div>";
										}
									?>
									<input hidden type="text" id="aDate" name="aDate" value="<?php echo $aDate; ?>"/>
									<input hidden type="text" id="aTime" name="aTime" value="<?php echo $aTime; ?>"/>
									<input hidden type="text" id="aQuantity" name="aQuantity" value="<?php echo $aQuantity; ?>"/>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="submit" value="Submit" />
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

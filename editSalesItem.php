<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Han Zong NG
***** Student ID: 100084651
***** Last Modified: 26-9-2018
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Name" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css" />
	<title>Edit Sales</title>
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
	  <h2>Edit Supplier</h2>
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
					<h1>Edit</h1>
					<form action="editSalesProcess.php" method="post">
							<?php
								$aItem = $_POST["itemID"];
								$aReceipt = $_POST["receiptID"];
								echo "<p>Item ID: " . $aItem . "</p>";
								echo "<p>Receipt ID: " . $aReceipt . "</p>";
							?>
						<label for="soldTime">Enter New Sold Time</label>
						<input type="" id="soldTime" name="soldTime" placeholder="hh:mm (eg. 23:59)"/>
						<br />
						<label for="soldID">Enter New Sold Date</label>
						<input type="text" id="soldDate" name="soldDate" value="<?php echo date("y/m/d");?>" placeholder="yy/mm/dd"/>
						<input hidden type="text" id="aItem" name="aItem" value="<?php echo $aItem; ?>"/>
						<input hidden type="text" id="aReceipt" name="aReceipt" value="<?php echo $aReceipt; ?>"/>
						<br />
						<br />
						<p>Note: To delete record, leave blank for both input field</p>
						<button type="submit" class="btn btn-success">Confirm</button>
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

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

			<form action="editSalesItem.php" method="post">
				<label for="itemID">Enter Item ID to Edit</label>
				<input type="text" id="itemID" name="itemID" placeholder="eg. 2" required/>
				<br />
				<label for="receiptID">Enter Receipt ID to Edit</label>
				<input type="text" id="receiptID" name="receiptID" placeholder="eg. 1" required/>
				<br />
				<br />
				<button type="submit" class="btn btn-success">Edit</button>
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

<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: <name>
***** Student ID: <id>
***** Last Modified: [DATE TIME]
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
	<title>Page Title</title>
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
                        
                    <form method="post" action="insertitem.php">    

                    <fieldset>
                    <legend>Item Details</legend>

                    <p><label for="categoryID"> Category ID: </label>
                    <input type="text" name="categoryID" maxlength="15" size="15"/></p>

                    <p><label for="quantity">Quantity: </label>
                    <input type="text" name="quantity" maxlength="5" size="5"/></p>


                    <p><label for="itemCost">Cost: </label>
                    <input type="text" name="itemCost" id="" size="5" maxlength="5"/></p>

                    <p><label for="retailPrice">Retail Price: </label>
                    <input type="text" name="retailPrice" id="retailPrice" size="5" maxlength="5"/></p>

                    <p><label for="expiryDate">Expiry Date:</label>
                        <input type="date" size="60" name="expiryDate" id="expiryDate"/></p>

                    <p><label for="supplierID">Supplier ID: </label>
                    <input type="text" name="supplierID" size="5" maxlength="5"/></p>

                    <p>
                    <input name="submit" type="submit" value="Submit"/>
                    <input type="reset" value="Reset"/>
                    </p>


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
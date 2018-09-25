<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Sing Hong LEI
***** Student ID: 100084376
***** Last Modified: 25 September 2018
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Predict Single Item first page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="SingHong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Predict Single Item: product id</title>
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
            <div class="col-md-12 col-lg-12">
                <h1>Predict Sales on Single Item</h1>
            </div>
        </div>
        
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<?php
					featuresList();
				?>
			</div>
			<div class="col-lg-8 col-md-6">
				<div id="form-section">
					<form action="PredictSingle2.php" method="post">
						<fieldset>
							<legend>Please insert the Product ID that you want to predict on</legend>
							<div class="row">
								<div class="col-md-12">
									<label for="productID">Product ID: </label>
									<input type="text" id="productID" name="productID" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 offset-md-10">
									<button class="btn btn-success" type="submit">Next</button>
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

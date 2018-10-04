<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Sing Hong LEI
***** Student ID: 100084376
***** Last Modified: 27 September 2018
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Predict Group Item first page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="SingHong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Predict Group Item</title>
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
                <h1>Predict Sales on Group of Items</h1>
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
					<form action="PredictGroup2.php" method="post">
						<fieldset>
							<legend>Please insert the Product type code that you want to predict on</legend>
							<div class="row">
								<div class="col-md-12">
									<label for="typeCode">Product type code: </label>
									<input type="text" id="typeCode" name="typeCode" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 offset-md-10">
									<button class="btn btn-success" type="submit">Next</button>
								</div>
                            
							</div>
						</fieldset>
					</form>
                    <br/>
                    <h2>Product Group</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Group</th>
                                <th>Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fruit</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Coffee</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
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

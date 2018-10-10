<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: <name>
***** Student ID: <id>
***** Last Modified: [DATE TIME]
*****
-->

<?php
	function navigationBar(){
		echo "
			<navigation>
				<ul id='navUL'>
					<li><a href='index.php'>HOME</a></li>
					<li><a href='ProductAlert.php'>PRODUCT ALERT</a></li>
					<li><a href='techsupport.php'>TECHNICAL SUPPORT</li>
					<li><a href='aboutUs.php'>ABOUT US</a></li>
				</ul>
			</navigation>
		";
	}

	function webpageTitle(){
		echo "
			<h1>PHP INC.</h1>
		";
	}

	function featuresList(){
		echo '
			<div id="features-list">
					<div class="row">
						<div class="col-12">
							<div id="feature-list-title">
								<h2>Feature List</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div id="feature-list-section">
								<ul>
						<li><a href="displayinventory.php">Display Inventory</li>
						<li><a href="inventory.php">Add Inventory</li>
						<li><a href="editinventory.php">Edit Inventory</li>
						<li><a href="displaySales.php">Display Sales</li>
									<li><a href="addSalesForm.php">Add Sales</li>
									<li><a href="editSalesForm.php">Edit Sales</li>
									<li><a href="SupplierDetails.php">Display Suppliers</li>
						<li><a href="addSuppliers.php">Add Suppliers</li>
						<li><a href="EditSuppliers.php">Edit Suppliers</li>
									<li><a href="monthlysalesUI.php">Generate Report</a></li>
						<li><a href="SuppliersPriceDifferenceForm.php">Supplier Price Difference</a></li>
						<li><a href="PredictSingle1.php">Predict Item Sales</a></li>
						<li><a href="PredictGroup1.php">Predict Group Sales</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		';
	}

	function jsPluggins(){
		echo '
			<!-- jQuery - required for Bootstraps JavaScript plugins) -->
			<script src="Bootstrap_4.0/js/jquery.js"></script>
			<!-- All Bootstrap plug-ins file -->
			<script src="Bootstrap_4.0/js/bootstrap.min.js"></script>
			<!-- Basic AngularJS -->
			<script src="Bootstrap_4.0/js/angular.min.js"></script>
		';
	}
?>

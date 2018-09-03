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
				<ul>
					<li>HOME</li>
					<li>SETTING</li>
					<li>TECHNICAL SUPPORT</li>
					<li>ABOUT US</li>
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
									<li>Add Sales</li>
									<li>Add Inventory</li>
									<li>Display Suppliers</li>
									<li>Generate Report</li>
									<li>Others...</li>
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

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
	<title>About Us</title>
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
					<table id="about-us-table" border="1px">
						<thead>
							<tr>
								<th>Name</th>
								<th>Student Code</th>
								<th>Email</th>
								<th>Feature Created</th>
							</tr>
						</thead>
						<?php
							$featureCreatedFirst = ["Add Sales Record", "Display Sales Record", "Edit Sales Record", "About Us"];
							$firstDev = ["Han Zong NG", "100084651", $featureCreatedFirst];

							$featureCreatedSecond = ["Supplier's Details Record", "Predict Sales of Items on Monthly Basis", "Predict Sales of Groups of Similar Items on Monthly Basis"];
							$secondDev = ["Sing Hong LEI", "100084376", $featureCreatedSecond];

							$featureCreatedThird = ["Technical Support Notification Module", "Display Monthly Sales Report", "Generate Monthly Sales Report as CSV File", "Generate Graphs/Pie Charts"];
							$thirdDev = ["Sinclair Chat Shen CHIN", "100077949", $featureCreatedThird];

							$featureCreatedForth = ["Display Record on Price Differences", "Product Status Alert"];
							$forthDev = ["Kai Leung LUI Eddie", "101078820", $featureCreatedForth];

							$featureCreatedFifth = ["Add Inventory Record", "Display Inventory Record", "Edit Inventory Record", "Home Page"];
							$fifthDev = ["Damon Ka Poh KOO", "100076771", $featureCreatedFifth];

							$allDev = [$firstDev, $secondDev, $thirdDev, $forthDev, $fifthDev];
						?>
						<tbody>
							<?php
								foreach($allDev as $developer){
									echo "<tr>";
									echo "<td>", $developer[0], "</td>";
									echo "<td>", $developer[1], "</td>";
									echo "<td><a href='mailto:", $developer[1], "@student.swin.edu.au", "'>", $developer[1], "@student.swin.edu.au", "</a></td>";
									echo "<td>";
									echo "<ul>";

									foreach($developer[2] as $feature){
										echo "<li>", $feature, "</li>";
									}
									echo "</ul>";
									echo "</td>";
									echo "</tr>";
								}

							?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
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

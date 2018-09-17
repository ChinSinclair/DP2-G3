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
	<link href="style.css" rel="stylesheet" type="text/css" />
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
					<table class="table table-striped table-bordered">
						<thead>
							<th>Item ID</th>
							<th>Receipt ID</th>
							<th>Date</th>
							<th>Time</th>
						</thead>
						<tbody>
						<?php
							$conn = mysqli_connect("localhost","root","");
							if (!$conn) {
								echo "Database not connected";
							}
							if(!mysqli_select_db($conn,"php")){
								echo "Database not selected";
							}
							$data = mysqli_query($conn,"SELECT Sales.item_id, Sales.receipt_id, Receipt.sold_date, Receipt.sold_time FROM Sales INNER JOIN Receipt ON Sales.receipt_id = Receipt.receipt_id");
							while($row = mysqli_fetch_array($data)){
						?>
							<tr>
								<td><?php echo $row[0]?></td>
								<td><?php echo $row[1]?></td>
								<td><?php echo $row[2]?></td>
								<td><?php echo $row[3]?></td>
							</tr>
						<?php
							}
						?>
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

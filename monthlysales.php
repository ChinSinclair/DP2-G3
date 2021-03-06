<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="PHP Inc.: Page" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Name" />
    <link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <title>Monthly Sales</title>
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
			  <div class="table-responsive">
			  <!-- Generate Monthly Sales Report -->
			  <?php
				if (!isset($_POST["year"]) && !isset($_POST["month"])) {
				    // if form data does not exist
				    echo "Please select month and year to generate monthly report.";
				}
				else {
				    // form data exists, obtain data from form through post method
				    $year = $_POST["year"];
				    $month = $_POST["month"];

				    $_SESSION["year"] = $year;
				    $_SESSION["month"] = $month;

				    $username = "root";         // username to database admin
				    $password = "";             // password to database admin
				    $host = "localhost";        // localhost used to test query
				    $database = "php";          // name of database in phpMyAdmin

				    // connect to mysql database, localhost phpMyAdmin in this case
				    $connection = mysqli_connect($host, $username, $password, $database);

				    if ($connection->connect_error) {
					  // if connection to database failed
					  die ("Unable to connect" . $connection->connect_error);
				    }
				    else {
					  // connection succeesful
					  echo "Connection Successful";
				    }

				    // query to obtain data based on user inputs of Year and Month
				    $sql = "
				    SELECT i.category_id, i.item_id, i.cost, i.retail_price, s.receipt_id, sold_time, sold_date, EXTRACT(YEAR FROM sold_date) AS Year, EXTRACT(MONTH FROM sold_date) AS Month, (i.retail_price - i.cost) AS Profit
				    FROM Receipt AS r JOIN Sales AS s ON r.receipt_id = s.receipt_id JOIN Inventory AS i ON i.item_id = s.item_id
				    WHERE (EXTRACT(YEAR FROM sold_date) = $year) AND (EXTRACT(MONTH FROM sold_date) = $month);
				    ";

				    // query to obtain gross profit
				    $gross = "
				    SELECT SUM(i.retail_price - i.cost) AS Gross_Profit
				    FROM Receipt AS r JOIN Sales AS s ON r.receipt_id = s.receipt_id JOIN Inventory AS i ON i.item_id = s.item_id
				    WHERE (EXTRACT(YEAR FROM sold_date) = $year) AND (EXTRACT(MONTH FROM sold_date) = $month);
				    ";

				    // submit query to database
				    $result1 = mysqli_query($connection, $sql);
				    $result2 = mysqli_query($connection, $gross);

				    // obtain row count from query results
				    $rowcount1 = mysqli_num_rows($result1);
				    $rowcount2 = mysqli_num_rows($result2);
			  ?>

		    <br />

			  <?php
				// if query is valid and row count is more than 0, which means data exists
				if ($result1 && ($rowcount1 > 0)) {
				    echo "
				    <form action='export.php' method='post'>
					  <p>
						<input type='submit' name='export' value='Export CSV' class='btn btn-success' />
					  </p>
				    </form>
				    ";
				    // First table for monthly sales data
				    // print table header
				    echo "
				    <table class='table table-striped table-bordered'>
					  <thead>
						<th>Category ID</th>
						<th>Item ID</th>
						<th>Cost</th>
						<th>Retail </th>
						<th>Receipt ID</th>
						<th>Sold Time</th>
						<th>Sold Date</th>
						<th>Year</th>
						<th>Month</th>
						<th>Profit</th>
					  </thead>

					  <tbody>
					  ";
					  // fetch associate data based on query
					  while ($row=mysqli_fetch_assoc($result1)) {
						// print related fields
						echo "
						    <tr>
							  <td>{$row['category_id']}</td>
							  <td>{$row['item_id']}</td>
							  <td>{$row['cost']}</td>
							  <td>{$row['retail_price']}</td>
							  <td>{$row['receipt_id']}</td>
							  <td>{$row['sold_time']}</td>
							  <td>{$row['sold_date']}</td>
							  <td>{$row['Year']}</td>
							  <td>{$row['Month']}</td>
							  <td>{$row['Profit']}</td>
						    </tr>
						    ";
					  }
					  echo "
						</tbody>
					  </table>
					  ";
					  // free result from query
					  mysqli_free_result($result1);
		    ?>

		    <br />

			  <?php
					  // Second table for gross profit
					  // if query is valid and row count of gross profit is more than 0, which means data exists
					  if ($result2 && ($rowcount2 > 0)) {
					  // print table header
						echo "
						    <table class='table table-striped table-bordered'>
							  <thead>
								<th>Gross Profit</th>
							  </thead>

							  <tbody>
						";
						// fetch associate data based on query
						while ($row=mysqli_fetch_assoc($result2)) {
						    // print gross profit
						    echo "
							  <tr>
								<td>{$row['Gross_Profit']}</td>
							  </tr>
						    ";
						}
						echo "
							  </tbody>
						    </table>
						";
						// free result from query
						mysqli_free_result($result2);
					  }
				    }
				    else {
					  // if data does not exist in database
					  echo "No data in database";
					  return 0;
				    }
				    // close database connection
				    mysqli_close($connection);
				}
			  ?>
				<!-- Generate Column Graph on Monthly Sales Report -->
				<div id="graph" style="width:100%; height:400px;"></div>

				<!-- Script to generate graph -->
				<script type="text/javascript">
				    $(document).ready(function() {
					  var options = {
						// generate type of graph
						chart: {
						    renderTo: 'graph',
						    type: 'column',
						    text: 'Monthly Sales Report'
						},
						// title of graph
						title: {
						    text: 'Monthly Sales Report'
						},
						// title of y-axis
						yAxis: {
						    title: {
							  text: 'Profit'
						    }
						},
						series: [{}]
					  };
					  // Get data from data.php file
					  $.getJSON('graph_data.php', function(data) {
						options.series[0].data = data;
						var chart = new Highcharts.chart(options);
					  });
				    });
				</script>
			  </div>
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

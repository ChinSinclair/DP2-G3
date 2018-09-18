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
					<?php
						$aDate = $_POST["aDate"];
						$aTime = $_POST["aTime"];
						$aItemQuantity = $_POST["aQuantity"];
						$aItem = array();

						for($i=0; $i<$aItemQuantity; $i++){
							$aItem[$i] = $_POST["item".($i+1)];
							echo "<p>" . $aItem[$i] . "</p>";
						}

						// Set the servername, username, and password
						$serverName = "localhost";
						$userName = "root";
						$password = "";
						$dbName = "php";

						// Create Connection
						$conn = mysqli_connect($serverName, $userName, $password, $dbName);

						// Check Connection
						if(!$conn){
							die("Connection Failed: " . mysqli_connect_error());
						}
						echo "Successfully Connected\n";
						echo "<br />";

						$receiptIDGenerator = uniqid(mt_rand(100000,999999), true);

						$sqlReceipt = "INSERT INTO Receipt (receipt_id, sold_date, sold_time) VALUES ('$receiptIDGenerator','$aDate','$aTime')";

						if(mysqli_query($conn, $sqlReceipt)){
							echo "Receipt data has been recorded<br/>";
						} else{
							echo "ERROR" . $sqlReceipt . "<br/>" . mysqli_error($conn);
						}

						for($j=0; $j<$aItemQuantity; $j++){

							$sqlSales = "INSERT INTO Sales (item_id, receipt_id) VALUES ('$aItem[$j]','$receiptIDGenerator')";
							if(mysqli_query($conn, $sqlSales)){
								echo "Sales data has been recorded<br/>";
							} else{
								echo "ERROR" . $sqlSales . "<br/>" . mysqli_error($conn);
							}
						}
					?>
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

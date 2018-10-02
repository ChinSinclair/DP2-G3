<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Han Zong NG
***** Student ID: 100084651
***** Last Modified: 26 September 2018 [Time: (+GMT 10:00)]
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
	<title>Edit Sales Record</title>
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
						$aItem = $_POST["aItem"];
						$aReceipt = $_POST["aReceipt"];
						$aTime = $_POST["soldTime"];
						$aDate = $_POST["soldDate"];

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


						if($aTime != null && $aDate != null){
							$sqlEdit = "UPDATE Receipt SET sold_time = '$aTime', sold_date = '$aDate' WHERE receipt_id = $aReceipt";

							if(mysqli_query($conn, $sqlEdit)){
								echo "Receipt data has been updated<br/>";
							} else{
								echo "ERROR " . $sqlEdit . "<br/>" . mysqli_error($conn);
							}
						} else if($aTime == null && $aDate == null){
							$sqlDltSales = "DELETE FROM Sales WHERE item_id = $aItem AND receipt_id = $aReceipt";
							$sqlUdtInv = "UPDATE Inventory SET sold_status = '0' WHERE item_id = $aItem";
							if(mysqli_query($conn, $sqlDltSales)){
								echo "Sales record has been deleted<br/>";
							} else{
								echo "ERROR " . $sqlDltSales . "<br/>" . mysqli_error($conn);
							}

							if(mysqli_query($conn, $sqlUdtInv)){
								echo "Inventory record has been updated<br/>";
							} else{
								echo "ERROR " . $sqlUdtInv . "<br/>" . mysqli_error($conn);
							}
						} else {
							echo "Action Reverted! Please fill up the form in full <br/>OR<br/>Empty all field to Delete!";
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

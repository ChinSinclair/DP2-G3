<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="SingHong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<title>Page Title</title>
</head>
<body>
	<h1>Add Supplier Status:</h1>
	<?php
		if($_POST["supplierName"] == null || $_POST["supplierPhoneNum"] == null || $_POST["supplierEmail"] == null || $_POST["supplierAddress"] == null){
			echo "<p>Please fill in all field.</p>";
		} else{
			echo "<p>Success!</p>";
		}
	?>
</body>
</html>

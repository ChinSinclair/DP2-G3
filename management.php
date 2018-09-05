<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Management" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Name" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<title>Management</title>
</head>
<body>
<h1>Welcome to Management Page</h1>
<br />
<h2>Search for price differences between Suppliers</h2>
<form action = "compare.php" method = "post" >
<label for="item">Enter Item
    <input type="text" id="item" name="item" required />
</label>
    <input type="submit" Value="Search"/>
</form>


</body>
</html>
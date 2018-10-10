<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Kai Leung Lui
***** Student ID: 101078820
***** Last Modified: 4/10/2018
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
    <title>Page Title</title>
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
	  <div class="container">
		<div class="col-md-push-3">
		<h2>Product Alert Information</h2>
		<br />
		<?php
		    $user = 'root';
		    $pass = '';
		    $db = 'php';

		    $conn = @mysqli_connect('localhost', $user, $pass, $db);

		    if(!$conn){
			  echo"<p> Unable to connect Database.</p>";
		    }else {

		    $sql_table = 'Inventory';

		    $timezone = date_default_timezone_set("Australia/Melbourne");

		    $today = date("Y-m-d");

		    $date = date_create($today);

		    date_add($date,date_interval_create_from_date_string("40 days"));

		    $newdate = date_format($date,"Y-m-d");

		    $query = "SELECT i.item_id, p.category_id, p.p_name, `exp_date` FROM Inventory AS i JOIN ProductName AS p ON p.category_id = i.category_id
					  WHERE `exp_date` < '$newdate' AND `sold_status` = 0 ORDER BY p.p_name, i.item_id ASC;";

		    $query2 = "SELECT i.category_id, p.p_name, COUNT(i.sold_status) AS Original_Stock,
		    SUM(CASE WHEN i.sold_status = '1' then 1 else 0 end) Sold_Count
		    FROM Inventory AS i
		    JOIN ProductName AS p ON p.category_id = i.category_id
		    GROUP BY i.category_id
		    HAVING COUNT(i.sold_status)*0.5 <= SUM(CASE WHEN i.sold_status = '1' then 1 else 0 end)
		    ORDER BY i.category_id ASC;";

		    $result = mysqli_query($conn, $query);

		    $result2 = mysqli_query($conn, $query2);

		    if(!$result)
		    {
			  echo"<p> Somthing wrong with the, ",$query,"</p>";
		    }else {

				echo "<div class = \"container\">";
				echo "<h3>The items that listed below are going to expire / already expired.</h3>";
				echo "<table class=\"table table-striped table-hover\">";
				echo
				"<tr>\n " .
				    "<th scope=\"col\">Item_id</th>\n " .
				    "<th scope=\"col\">Category_id</th>\n " .
				    "<th scope=\"col\">Product_name</th>\n " .
				    "<th scope=\"col\">Exp_date</th>\n " .
				"</tr>\n ";

				while ($row = mysqli_fetch_assoc($result)) {
				    echo "<tr>\n ";
				    echo "<td>", $row["item_id"], "</td>\n ";
				    echo "<td>", $row["category_id"], "</td>\n ";
				    echo "<td>", $row["p_name"], "</td>\n ";
				    echo "<td>", $row["exp_date"], "</td>\n ";
				    echo "</tr>\n ";
				}

				echo "</table> ";
				echo"</div>";
				mysqli_free_result($result);
			  }


		    if(!$result2)
		    {
			  echo"<p> Somthing wrong with the, ",$query2,"</p>";
		    }else {

				echo "<div class = \"container\">";
				echo "<h3>The items that listed below are running low.</h3>";
				echo "<table class=\"table table-striped table-hover\">";
				echo
				"<tr>\n " .
				    "<th scope=\"col\">Category_id</th>\n " .
				    "<th scope=\"col\">Product_name</th>\n " .
				    "<th scope=\"col\">Original_Stock</th>\n " .
				    "<th scope=\"col\">Sold_Count</th>\n " .
				"</tr>\n ";

				while ($row = mysqli_fetch_assoc($result2)) {
				    echo "<tr>\n ";
				    echo "<td>", $row["category_id"], "</td>\n ";
				    echo "<td>", $row["p_name"], "</td>\n ";
				    echo "<td>", $row["Original_Stock"], "</td>\n ";
				    echo "<td>", $row["Sold_Count"], "</td>\n ";
				    echo "</tr>\n ";
				}

				echo "</table> ";
				echo"</div>";
				mysqli_free_result($result2);
			  }
			  mysqli_close($conn);
		    }
	  ?>
		</div>
	  </div>
    </form>
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

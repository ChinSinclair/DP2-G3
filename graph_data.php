<?php
    session_start();
    $username = "root";         // username to database admin
    $password = "";             // password to database admin
    $host = "localhost";        // localhost used to test query
    $database = "php";          // name of database in phpMyAdmin

    try {
	  $dbcon = new PDO("mysql:host={$host}; dbname={$database}", $username, $password);
	  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
	  die($ex->getMessage());
    }

    $year = $_SESSION["year"];
    $month = $_SESSION["month"];


    $stmt = $dbcon->prepare("
	  SELECT i.category_id, i.item_id, i.cost, i.retail_price, s.receipt_id, sold_time, sold_date, EXTRACT(YEAR FROM sold_date) AS Year, EXTRACT(MONTH FROM sold_date) AS Month, COUNT(i.category_id) * (i.retail_price - i.cost) AS Profit
	  FROM Receipt AS r JOIN Sales AS s ON r.receipt_id = s.receipt_id JOIN Inventory AS i ON i.item_id = s.item_id
	  WHERE (EXTRACT(YEAR FROM sold_date) = $year) AND (EXTRACT(MONTH FROM sold_date) = $month)
	  GROUP BY i.category_id;");
    $stmt->execute();

    $json = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	  extract($row);
	  $json[] = [$category_id, (int)$Profit];
    }
    echo json_encode($json);
?>

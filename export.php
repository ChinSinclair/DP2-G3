<?php
    if (isset($_POST["year"]) && isset($_POST["month"])) {
        // form data exists, obtain data from form through post method
        $year = $_POST["year"];
        $month = $_POST["month"];

        $username = "root";         // username to database admin
        $password = "";             // password to database admin
        $host = "localhost";        // localhost used to test query
        $database = "php";          // name of database in phpMyAdmin

        // connect to mysql database, localhost phpMyAdmin in this case
        $connection = mysqli_connect($host, $username, $password, $database);

        $sql = "
        SELECT i.category_id, i.item_id, i.cost, i.retail_price, s.receipt_id, sold_time, sold_date, EXTRACT(YEAR FROM sold_date) AS Year, EXTRACT(MONTH FROM sold_date) AS Month, (i.retail_price - i.cost) AS Profit
        FROM Receipt AS r JOIN Sales AS s ON r.receipt_id = s.receipt_id JOIN Inventory AS i ON i.item_id = s.item_id
        WHERE (EXTRACT(YEAR FROM sold_date) = $year) AND (EXTRACT(MONTH FROM sold_date) = $month);";

        $result1 = mysqli_query($connection, $sql);
        $rowcount1 = mysqli_num_rows($result1);

        if ($result1 && ($rowcount1 > 0)) {
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=monthly_report_' . $year . $month . '.csv');

            header('Pragma: no-cache');
            header('Expires: 0');

            $output = fopen("php://output", "w");
            fputcsv($output, array('Category_ID', 'Item_ID', 'Cost', 'Retail', 'Receipt_ID', 'Sold_Time', 'Sold_Date', 'Year', 'Month', 'Profit'));
            while ($row=mysqli_fetch_assoc($result1)) {
                fputcsv($output, $row);
            }

            fputcsv($output, array(''));

            // query to obtain gross profit
            $gross = "
            SELECT SUM(i.retail_price - i.cost) AS Gross_Profit
            FROM Receipt AS r JOIN Sales AS s ON r.receipt_id = s.receipt_id JOIN Inventory AS i ON i.item_id = s.item_id
            WHERE (EXTRACT(YEAR FROM sold_date) = $year) AND (EXTRACT(MONTH FROM sold_date) = $month);
            ";

            $result2 = mysqli_query($connection, $gross);
            $rowcount2 = mysqli_num_rows($result2);

            if ($result2 && ($rowcount2 > 0)) {
                fputcsv($output, array('Gross Profit'));
                while ($row=mysqli_fetch_assoc($result2)) {
                    fputcsv($output, $row);
                }
            }

            fclose($output);

            mysqli_free_result($result1);
            mysqli_free_result($result2);
            mysqli_close($connection);
        }
        else {
            echo "
            <script>
                alert('No data in database.');
                window.location.href='monthlysalesUI.php';
            </script>";
        }
    }
    else {
        echo "Please enter year and select month to generate CSV report";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="PHP Inc.: Page" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Name" />
    <link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
    <title></title>
</head>
<body>

<?php

$user = 'root';
$pass = '';
$db = 'php';

$conn = @mysqli_connect('localhost', $user, $pass, $db);

function checkquery($item)
{
    $query = '';
    $sql_table = 'Inventory';

    if($item != null)
    {
        $query = "SELECT `item_id`, p.category_id, p.p_name, `cost`, `retail_price`, s.supplier_id, s.supplier_name 
                FROM Inventory AS i JOIN Supplier AS s ON s.supplier_id = i.supplier_id 
                JOIN ProductName AS p ON p.category_id = i.category_id 
                WHERE p.p_name = '$item';";
    }else
        echo "<p> Please Ensure the Item that You Enter is exist.";

    return $query;
}

if(!$conn){
    echo"<p> Unable to connect Database.</p>";
}else {

$sql_table = 'Inventory';

$item = htmlspecialchars($_POST['item']);

if($item == null)
{
    header('location: management.php');
}

$query = checkquery($item);

$result = mysqli_query($conn, $query);

if(!$result)
{
    echo"<p> Somthing wrong with the, ",$query,"</p>";
}else {
    echo"<p> Successfully Selected Information !</p>";

        echo "<div class = \"container\">";
        echo "<table class=\"table table-striped table-hover\">";
        echo
        "<tr>\n " .
            "<th scope=\"col\">Item_id</th>\n " .
            "<th scope=\"col\">Category_id</th>\n " .
            "<th scope=\"col\">Product_name</th>\n " .
            "<th scope=\"col\">Cost</th>\n " .
            "<th scope=\"col\">Retail_price</th>\n " .
            "<th scope=\"col\">Supplier_id</th>\n " .
            "<th scope=\"col\">Supplier_name</th>\n " .
        "</tr>\n ";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>\n ";
            echo "<td>", $row["item_id"], "</td>\n ";
            echo "<td>", $row["category_id"], "</td>\n ";
            echo "<td>", $row["p_name"], "</td>\n ";
            echo "<td>", $row["cost"], "</td>\n ";
            echo "<td>", $row["retail_price"], "</td>\n ";
            echo "<td>", $row["supplier_id"], "</td>\n ";
            echo "<td>", $row["supplier_name"], "</td>\n ";
            echo "</tr>\n ";
        }

        echo "</table> ";
        echo"</div>";
        mysqli_free_result($result);
    }
    mysqli_close($conn);
}

?>
</body>
</html>

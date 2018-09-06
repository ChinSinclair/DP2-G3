<?php

$con = mysqli_connect('localhost', 'root', '');

if(!$con)
{
    echo 'Not connected to database server';
}

if(!mysqli_select_db($con, 'php'))
{
    echo 'Database not selected';
}

$ItemID = uniqid (mt_rand(100000, 999999), true);
$CategoryID = $_POST['categoryID'];
$Quantity = $_POST['quantity'];
$Cost = $_POST['itemCost'];
$RetailPrice = $_POST['retailPrice'];
$SupplierID = $_POST['supplierID'];

$sqlInventory = "INSERT INTO Inventory (item_id,category_id,'cost','retail_price','supplier_id','sold_statud') VALUES ('$ItemID','$CategoryID','$Cost', '$RetailPrice','$SupplierID','0')";


if(!mysqli_query($con,$sqlInventory))
{
    echo 'ivetory Not Inserted';
}
else
{
    echo 'ivneotry Inserted';
}


header("refresh:5; url=inventory.html");

?>
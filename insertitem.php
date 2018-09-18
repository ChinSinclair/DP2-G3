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
$Quantity = $_POST['quantity'];

$CategoryID = $_POST['categoryID'];
$Quantity = $_POST['quantity'];
$Cost = $_POST['itemCost'];
$RetailPrice = $_POST['retailPrice'];
$Date = htmlentities($_POST['expiryDate']);
$ExpiryDate = date('Y-m-d', strtotime($Date));
$SupplierID = $_POST['supplierID'];
$SoldStatus = 0;

$x = 0;
while($x < $Quantity ){
    $ItemID = uniqid (mt_rand(100000, 999999), true);
    $sqlInventory = "INSERT INTO Inventory (item_id,category_id,cost,retail_price,exp_date,supplier_id,sold_status) VALUES ('$ItemID','$CategoryID','$Cost','$RetailPrice','$ExpiryDate','$SupplierID','$SoldStatus')";


    if(!mysqli_query($con,$sqlInventory))
    {
        $sOutput = "<p>Inventory Not Inserted!</p>";
        echo $sOutput;
    }
    else
    {
        $sOutput = "<p>Inventory Inserted!</p>";
        echo $sOutput;
    }
    
    $x ++;
}

header("refresh:5; url=inventory.php");

?>
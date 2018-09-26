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

$itemID = $_POST['itemID'];
$CategoryID = $_POST['categoryID'];
$Cost = $_POST['itemCost'];
$RetailPrice = $_POST['retailPrice'];
$Date = htmlentities($_POST['expiryDate']);
$ExpiryDate = date('Y-m-d', strtotime($Date));
$SupplierID = $_POST['supplierID'];
$DeleteCB = isset($_POST['delete']);
$SoldStatus = 0;


if($DeleteCB == "on"){
    $dltProduct = mysqli_query($con, "DELETE FROM Inventory WHERE item_id = '$itemID'");
    echo "<p>Deleted item " . $itemID . "</p>";
    echo "<p>Redirecting back to Edit Inventory Page in 5 seconds ...</p>";
}
else{
    if($itemID == null){
        echo"<p>Please fill in the Item ID that you want to edit.</p>";
        
    }
    else{
        if($CategoryID == null && $Cost == null && $RetailPrice == null && $ExpiryDate == "1970-01-01" && $SupplierID == null){
            echo "<p>Please fill in at least 1 field to edit information.</p>";
        }
        
        $condatabase = mysqli_query($con,"SELECT * FROM Inventory WHERE item_id='$itemID'");

        if(mysqli_num_rows($condatabase) == 0){
            echo "<p>Database has no such Item ID record.</p>";
        }

        if($CategoryID != NULL){
            $sqlProduct = "UPDATE Inventory SET category_id='$CategoryID' WHERE item_id='$itemID'";

            if(!mysqli_query($con,$sqlProduct)){
                echo '<p>Category ID Not Edited</p>';
            }
            else{
                echo '<p>Category ID Edited to ' . $CategoryID . '</p>';
            }
        }

        if($Cost != NULL){
            $sqlProduct = "UPDATE Inventory SET cost='$Cost' WHERE item_id='$itemID'";

            if(!mysqli_query($con,$sqlProduct)){
                echo '<p>Cost Not Edited</p>';
            }
            else{
                echo '<p>Cost Edited to ' . $Cost . '</p>';
            }
        }

        if($RetailPrice != NULL){
            $sqlProduct = "UPDATE Inventory SET retail_price='$RetailPrice' WHERE item_id='$itemID'";

            if(!mysqli_query($con,$sqlProduct)){
                echo '<p>Retail Price Not Edited</p>';
            }
            else{
                echo '<p>Retail Price Edited to ' . $RetailPrice . '</p>';
            }
        }

        if($ExpiryDate != "1970-01-01"){
            $sqlProduct = "UPDATE Inventory SET exp_date='$ExpiryDate' WHERE item_id='$itemID'";

            if(!mysqli_query($con,$sqlProduct)){
                echo '<p>Expiry Date Not Edited</p>';
            }
            else{
                echo '<p>Expiry Date Edited to ' . $ExpiryDate . '</p>';
            }
        }

        if($SupplierID != NULL){
            $sqlProduct = "UPDATE Inventory SET supplier_id='$SupplierID' WHERE item_id='$itemID'";

            if(!mysqli_query($con,$sqlProduct)){
                echo '<p>Supplier ID Not Edited</p>';
            }
            else{
                echo '<p>Supplier ID Edited to ' . $SupplierID . '</p>';
            }
        }
        
        echo "Redirecting back to Edit Inventory Page in 5 seconds ...";
    }   
}
    
header("refresh:5; url=editinventory.php");

?>
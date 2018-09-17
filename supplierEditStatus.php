<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="SingHong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<title>Edit status</title>
</head>
<body>
	<h1>Edit Supplier Status:</h1>
	<?php
    
        $sName = $_POST["supplierName"];
        $sPhone = $_POST["supplierPhoneNum"];
        $sEmail = $_POST["supplierEmail"];
        $sAddress = $_POST["supplierAddress"];
        $supplierId = $_POST["supplierId"];
        $flag = 0;
    
        if($supplierId == null){
            echo"<h2>Please fill in the supplier id that you want to edit.</h2>"
            ?>
            <button type="button" class="btn btn-default" onclick="window.location.href='EditSuppliers.php'">Back</button>
            <?php
        }
    
		else if($_POST["supplierName"] == null && $_POST["supplierPhoneNum"] == null && $_POST["supplierEmail"] == null && $_POST["supplierAddress"] == null){
			echo "<h2>Please fill in at least 1 field to edit information.</h2>";
            
            ?>
        <button type="button" class="btn btn-default" onclick="window.location.href='EditSuppliers.php'">Back</button>
    <?php
            
		} else{
			if((!preg_match("/^[a-zA-Z ]+$/",$sName)) && ($_POST["supplierName"] != null)){
                echo "<p>Name: You can only insert alphabert and space into Name.</p>";
                $flag++;
            }
            
            if((!preg_match("/^[0-9]{6,12}$/",$sPhone)) && ($_POST["supplierPhoneNum"] != null)){
                echo "<p>Phone number: can only have 6 to 12 numerical value.</p>";
                $flag++;
            }
            
            if((!filter_var($sEmail, FILTER_VALIDATE_EMAIL))&& ($_POST["supplierEmail"] != null)){
                echo "<p>Email: format is invalid.</p>";
                $flag++;
            }
            
            if((!preg_match("/^[A-Za-z0-9,. ]{5,70}$/",$sAddress)) &&($_POST["supplierEmail"] != null)){
                echo "<p>Address: format is invalid, make sure the length in 5 - 70 characters.</p>";
                $flag++;
            }
            
            if($flag != 0){
                ?>
                <button type="button" class="btn btn-default" onclick="window.location.href='addSuppliers.php'">Back</button>
                <?php
            }
            
            if($flag == 0){
                
                
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbName = "php";
                
                $con = mysqli_connect($host,$dbUsername,$dbPassword);
                
                if(!$con){
                    echo "Not connected to database server";
                }
                
                if(!mysqli_select_db($con,$dbName)){
                    echo 'Database not selected';
                }
                
                $checkRow = mysqli_query($con,"SELECT * FROM Supplier WHERE supplier_id='$supplierId'");
                
                if(mysqli_num_rows($checkRow) == 0){
                    echo "<h2>Databse has no such supplier id record.</h2>";
                ?>    
                    <button type="button" class="btn btn-default" onclick="window.location.href='EditSuppliers.php'">Back</button>
    
                <?php
                }
                
                else{
                
                
                echo "<h2>Edit Success</h2>";
                    
                if($sName != NULL){
                    $sqlProduct = "UPDATE Supplier SET supplier_name='$sName' WHERE supplier_id='$supplierId'";
            
                    if(!mysqli_query($con,$sqlProduct)){
                        echo '<p>Name Not Edited</p>';
                    }
                    else{
                        echo '<p>Name Edited</p>';
                    }
                }
                
                if($sPhone != NULL){
                    $sqlProduct = "UPDATE Supplier SET phone_num='$sPhone' WHERE supplier_id='$supplierId'";
            
                    if(!mysqli_query($con,$sqlProduct)){
                        echo '<p>Phone number Not Edited</p>';
                    }
                    else{
                        echo '<p>Phone number Edited</p>';
                    }
                }
                
                if($sEmail != NULL){
                    $sqlProduct = "UPDATE Supplier SET email_add='$sEmail' WHERE supplier_id='$supplierId'";
            
                    if(!mysqli_query($con,$sqlProduct)){
                        echo '<p>Email Not Edited</p>';
                    }
                    else{
                        echo '<p>Email Edited</p>';
                    }
                }
                
                if($sAddress != NULL){
                    $sqlProduct = "UPDATE Supplier SET address_phy='$sAddress' WHERE supplier_id='$supplierId'";
            
                    if(!mysqli_query($con,$sqlProduct)){
                        echo '<p>Address Not Edited</p>';
                    }
                    else{
                        echo '<p>Address Edited</p>';
                    }
                }
                
                 ?>
                <button type="button" class="btn btn-success" onclick="window.location.href='SupplierDetails.php'">Display suppliers' information</button>
    
                <button type="button" class="btn btn-default" onclick="window.location.href='addSuppliers.php'">Back to home page</button>
                <?php
                
            }
            }
            
           
            
		}
	?>
    
    
</body>
</html>

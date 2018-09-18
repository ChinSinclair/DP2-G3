<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Han Zong NG
***** Student ID: 100084651
***** Last Modified: 03 September 2018 [Time: (+GMT 10:00)]
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Add Sales Record page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Hanzong NG" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Add Sales Record</title>
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
					<h1>Add Supplier Status:</h1>
	<?php
    
        $sName = $_POST["supplierName"];
        $sPhone = $_POST["supplierPhoneNum"];
        $sEmail = $_POST["supplierEmail"];
        $sAddress = $_POST["supplierAddress"];
        $flag = 0;
    
		if($_POST["supplierName"] == null || $_POST["supplierPhoneNum"] == null || $_POST["supplierEmail"] == null || $_POST["supplierAddress"] == null){
			echo "<h2>Please fill in all field.</h2>";
            
            if($_POST["supplierName"] == null){
                echo "<p>-> Please fill in supplier name</p>";
            }
            if($_POST["supplierPhoneNum"] == null){
                echo "<p>-> Please fill in supplier phone number</p>";
            }
            if($_POST["supplierEmail"] == null){
                echo "<p>->Please fill in supplier email</p>";
            }
            if($_POST["supplierAddress"] == null){
                echo "<p>->Please fill in supplier address</p>";
            }
            
            ?>
        <button type="button" class="btn btn-default" onclick="window.location.href='addSuppliers.php'">Back</button>
    <?php
            
		} else{
			if(!preg_match("/^[a-zA-Z ]+$/",$sName)){
                echo "<p>Name: You can only insert alphabert and space into Name.</p>";
                $flag++;
            }
            
            if(!preg_match("/^[0-9]{6,12}$/",$sPhone)){
                echo "<p>Phone number: can only have 6 to 12 numerical value.</p>";
                $flag++;
            }
            
            if(!filter_var($sEmail, FILTER_VALIDATE_EMAIL)){
                echo "<p>Email: format is invalid.</p>";
                $flag++;
            }
            
            if(!preg_match("/^[A-Za-z0-9,. ]{5,70}$/",$sAddress)){
                echo "<p>Address: format is invalid, make sure the length in 5 - 70 characters.</p>";
                $flag++;
            }
            
            if($flag != 0){
                ?>
                <button type="button" class="btn btn-default" onclick="window.location.href='addSuppliers.php'">Back</button>
                <?php
            }
            
            if($flag == 0){
                echo "<h2>Success</h2>";
                
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
                
                 $SupplierIDgenerate  = uniqid (mt_rand(100000, 999999), true);
            
                $sqlProduct = "INSERT INTO Supplier (supplier_id,supplier_name,phone_num,email_add,address_phy) VALUES ('$SupplierIDgenerate','$sName','$sPhone','$sEmail','$sAddress')";
            
                if(!mysqli_query($con,$sqlProduct)){
                    echo '<p>Data Not Inserted</p>';
                }
                else{
                    echo '<p>Data Inserted</p>';
                }
                
                 ?>
                <button type="button" class="btn btn-success" onclick="window.location.href='addSuppliers.php'">Add again</button>
    
                <button type="button" class="btn btn-default" onclick="window.location.href='addSuppliers.php'">Back to home page</button>
                <?php
                
            }
            
           
            
		}
	?>
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

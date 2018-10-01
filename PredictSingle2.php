<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: SingHong LEI
***** Student ID: 100084376
***** Last Modified: 27 September 2018
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Predict Single Item second page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="SingHong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Predict Single Item</title>
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

    <h1>Prediction</h1>
    
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<?php
					featuresList();
				?>
			</div>
			<div class="col-lg-8 col-md-6">
				<div id="form-section">
					
	<?php
    
        $productID = $_POST["productID"];
            
            
            if($productID != null){
                
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
                
                $checkQue = mysqli_query($con,"SELECT * FROM ProductName WHERE category_id = '$productID'");
                
                if(mysqli_num_rows($checkQue) > 0){
                    
                    $productName_query = "SELECT p_name FROM ProductName WHERE category_id = '$productID'";
                    $productName = mysqli_query($con,$productName_query);
                    $nameString = $productName->fetch_assoc();
                    
                    echo "<h1> Product <u>'".$nameString["p_name"]."'</u> has been selected to predict.</h1>";
                    
                    $soldItem_Query = "SELECT Receipt.sold_date, Inventory.item_id, Inventory.retail_price FROM ((Inventory INNER JOIN Sales ON Inventory.item_id = Sales.item_id) INNER JOIN Receipt  ON Receipt.receipt_id = Sales.receipt_id) WHERE Inventory.category_id = '$productID' AND Inventory.sold_status = 1";
                    
                    $soldItem = mysqli_query($con,$soldItem_Query);
                    $soldMonthCount = array();
                    $totalSales =0;
                    
                    while($row = mysqli_fetch_object($soldItem)){
                        $totalSales += $row->retail_price;
                        if(!in_array($row->sold_date,$soldMonthCount)){
                            array_push($soldMonthCount,$row->sold_date);
                        }
                    }
                    
                    
                    error_reporting(E_ERROR | E_PARSE);    
                    $averageSales = bcdiv($totalSales, sizeof($soldMonthCount), 2);
                   
                    $scenarioA = bcdiv(($averageSales * 120), 100, 2);
                    $scenarioB = $averageSales;
                    $scenarioC = bcdiv(($averageSales * 90), 100, 2);
                    
                    $prediction = bcdiv(($scenarioA + ($scenarioB*4) + $scenarioC),6,2);
                    if($averageSales != 0){
                    ?>
                    <table border="1">
                        <tr>
                            <th>Forcast Sales</th>
                            <td>$<?php echo $prediction?></td>
                        </tr>
                        
                        <tr>
                            <th>Previous average sales</th>
                            <td>$<?php echo $averageSales?></td>
                        </tr>
                    </table>
                    <div class="col-md-2 offset-md-8">
                    <button type="button" class="btn btn-success" onclick="window.location.href='PredictSingle1.php'">Predict Another Product</button>
                    </div>
                    
                    <?php
                    }
                    else{
                        echo"<h3>There has no historical data! There are no prediction.</h3>";
                        ?>
                    <div class="col-md-2 offset-md-9">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='PredictSingle1.php'">Predict Again</button>
                    </div>
                        <?php
                    }
                }
                else{
                    echo "<h1>Cant found this ID in database!</h1>"; 
                    echo "<p>Please insert Product ID again</p>";
                    ?>
                    <div class="col-md-2 offset-md-9">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='PredictSingle1.php'">Back</button>
                    </div>
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

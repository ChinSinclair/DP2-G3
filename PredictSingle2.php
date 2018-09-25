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
	<meta name="description" content="PHP Inc.: Predict Single Item second page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="SingHong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Predict Single Item: case scenario</title>
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
                   echo "<h1>Prediction item selected</h1>";
                }
                else{
                    echo "<h1>Cant found this id in database!</h1>"; 
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

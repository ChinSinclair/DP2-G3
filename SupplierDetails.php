<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: Sing Hong LEI
***** Student ID: 100084376
***** Last Modified: 6/9/2018
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Supplier Details Page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Sing Hong LEI" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<title>Suppliers' Details</title>
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
        <h2>Suppliers' Information</h2>
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
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact number</th>
                            <th>Email</th>
                            <th>Address</th>
                        </thead>
                        
                        <tbody>
                            <?php
                                $con = mysqli_connect("localhost","root","");
                                if (!$con) {
                                    echo "Not connected to database server";
                                }
                                
                                if(!mysqli_select_db($con,"php")){
                                    echo 'Database not selected';
                                }
            
                                $data = mysqli_query($con,"SELECT * FROM Supplier");
                                while($row = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $row[0]?></td>
                                    <td><?php echo $row[1]?></td>
                                    <td><?php echo $row[2]?></td>
                                    <td><?php echo $row[3]?></td>
                                    <td><?php echo $row[4]?></td>
                                </tr>

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    
                    
                    <button type="button" class="btn btn-success" onclick="window.location.href='addSuppliers.php'">Add supplier</button>
                    
                    <button type="button" class="btn btn-success" onclick="window.location.href='EditSuppliers.php'">Edit supplier</button>
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

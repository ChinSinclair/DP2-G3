<!--
*****
***** Unit Code: SWE30010
***** Unit Title: Development Project 2
***** Author: <name>
***** Student ID: <id>
***** Last Modified: [DATE TIME]
*****
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Name" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
	<title>Page Title</title>
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
        <h2>Edit Supplier</h2>
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
                    
                    <form action="supplierEditStatus.php" method="post" novalidate>
                    
                    <div class="row">
                        <div class="col-md-12 col-lg-12 text right">
                            <h3><label for="supplierId">Which supplier's information you want to edit?</label></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <input type="text" id="supplierId" name="supplierId"  placeholder="Please key in the supplier ID" style="width:100%" required/>
                        </div>
                    </div>
                    
                    <div class="row"><div class="col-mg-12 col-lg-12"><br/><h4>Only key in the information that you want to update!</h4></div></div>
                    
                        <!---->
                        <!-- row for supplier name-->
                        <div class="row">
                            <div class="col-md-3 col-lg-3 text-right">
                                <label for="supplierName">Name:</label>
                            </div>
                            
                            <div class="col-md-9 col-lg-9">
                                <input type="text" id="supplierName" name="supplierName" placeholder="Supplier / Company name" required/>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        
                        <!---->
                        <!-- row for supplier phone number-->
                        <div class="row">
                            <div class="col-md-3 col-lg-3 text-right">
                                <label for="supplierPhoneNum">Phone Number:</label>
                            </div>
                            
                            <div class="col-md-9 col-lg-9">
                                <input type="text" id="supplierPhoneNum" name="supplierPhoneNum" placeholder="Phone Number" required/>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        
                        <!---->
                        <!--row for email address-->
                        <div class="row">
                            <div class="col-md-3 col-lg-3 text-right">
                                <label for="supplierEmail">Email:</label>
                            </div>
                            
                            <div class="col-md-9 col-lg-9">
                                <input type="text" id="supplierEmail" name="supplierEmail" placeholder="Enter Email"required/>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        
                        <!---->
                        <!--row for address-->
                        <div class="row">
                            <div class="col-md-3 col-lg-3 text-right">
                                <label for="supplierAddress">Address:</label>
                            </div>
                            
                            <div class="col-md-9 col-lg-9">
                                <input type="text" id="supplierAddress" name="supplierAddress" placeholder="Address" required>
                            </div>
                        </div>
                        <!---->
                        <!---->
                    
                        <!---->
                        <!--row for button-->
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-success">Edit</button>
                                <button type="button" class="btn btn-default" onclick="window.location.href='SupplierDetails.php'">Cancel</button>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        
                    </form>
                    
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

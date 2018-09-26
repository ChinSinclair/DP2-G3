<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="PHP Inc.: Page" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Name" />
	<link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css" />
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
                    
                    <form action="editinventoryprocess.php" method="post" novalidate>
                    
                    <div class="row">
                        <div class="col-md-12 col-lg-12 text right">
                            <h3><label for="supplierId">Which inventory item information you want to edit?</label></h3>
                            
                        </div>
                        
                    </div>
                        
                    
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <input type="text" id="itemID" name="itemID"  placeholder="Please key in the Item ID" style="width:100%" required/>
                        </div>
                    </div>
                
                    <div class="row"><div class="col-mg-12 col-lg-12"><br/><h4>Only key in the information that you want to update!</h4></div></div>
                    
                        
                    <p><label for="categoryID"> Category ID: </label>
                    <input type="text" name="categoryID" maxlength="15" size="15"/></p>

                    <p><label for="itemCost">Cost: </label>
                    <input type="text" name="itemCost" id="" size="5" maxlength="5"/></p>

                    <p><label for="retailPrice">Retail Price: </label>
                    <input type="text" name="retailPrice" id="retailPrice" size="5" maxlength="5"/></p>

                    <p><label for="expiryDate">Expiry Date:</label>
                        <input type="date" size="60" name="expiryDate" id="expiryDate"/></p>

                    <p><label for="supplierID">Supplier ID: </label>
                    <input type="text" name="supplierID" size="5" maxlength="5"/></p>
                        
                    <div class="row"><div class="col-mg-12 col-lg-12"><br/><h4>Check on the Delete Check Box if you want to delete item.</h4></div></div>
                        
                    <p><label for="delete"> Delete: </label>
                    <input type="checkbox" name="delete"/></p>

                    <p>
                    <input name="submit" type="submit" value="Submit"/>
                   
                    <input type="button" onclick="window.location.href='displayinventory.php'" value="Cancel"/>
                    </p>
                        
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

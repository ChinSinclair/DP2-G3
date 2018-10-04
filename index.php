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
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Page Title</title>
</head>
    
    <style>
        @import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css);
@import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
@import "https://fonts.googleapis.com/css?family=Roboto:400,500";
.box-icon {
  text-align: center;
  position: relative;
}

.box-icon > .image {
  position: relative;
  z-index: 2;
  margin: auto;
  width: 93px;
  height: 93px;
  border: 8px solid white;
  line-height: 88px;
  border-radius: 50%;
  background: #DCDCDC;
  vertical-align: middle;
}


.box-icon > .image > i {
  font-size: 36px !important;
  color: #fff !important;
  line-height: 1;
  display: inline-block;
}


.box-icon > .info {
  margin-top: -24px;
  background: rgba(0, 0, 0, 0.04);
  border: 1px solid #e0e0e0;
  padding: 15px 0 10px 0;
}


.box-icon > .info > h3.title {
  font-family: "Roboto", sans-serif !important;
  font-size: 16px;
  color: #222;
  font-weight: 500;
}

.box-icon > .info > p {
  font-family: "Roboto", sans-serif !important;
  font-size: 13px;
  color: #666;
  line-height: 1.5em;
  margin: 20px;
}

.box-icon > .info > .more a {
  font-family: "Roboto", sans-serif !important;
  font-size: 12px;
  color: #222;
  line-height: 12px;
  text-transform: uppercase;
  text-decoration: none;
}


.box .space {
  height: 30px;
}
    
    </style>
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

			<div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/inventory.png" width="50dp"></i></div>
			             <div class="info">
						<h3 class="title">Inventory</h3>
					
                        <div class="more">
							<a href="displayinventory.php" title="Title Link">
								Display <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						<div class="more">
							<a href="inventory.php" title="Title Link">
								Add <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
                        <div class="more">
							<a href="editinventory.php" title="Title Link">
								Edit <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        <div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/sales.png" width="50dp"></i></div>
					<div class="info">
						<h3 class="title">Sales</h3>
					
                        <div class="more">
							<a href="displaySales.php" title="Title Link">
								Display <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						<div class="more">
							<a href="addSalesForm.php" title="Title Link">
								Add <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
                        <div class="more">
							<a href="editinventory.php" title="Title Link">
								Edit <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        <div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/supplier.png" width="50dp"></i></div>
					<div class="info">
						<h3 class="title">Supplier</h3>
					
                        <div class="more">
							<a href="SupplierDetails.php" title="Title Link">
								Display <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						<div class="more">
							<a href="addSuppliers.php" title="Title Link">
								Add <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
                        <div class="more">
							<a href="EditSuppliers.php" title="Title Link">
								Edit <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        <div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/chart.png" width="50dp"></i></div>
					<div class="info">
						<h3 class="title">Others</h3>
					
                        <div class="more">
							<a href="monthlysalesUI.php" title="Title Link">
								Monthly Sales <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
                        <div class="more">
							<a href="techsupport.php" title="Title Link">
								Tech Support <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
                        <div class="more">
							<a href="SuppliersPriceDifferenceForm.php" title="Title Link">
								Supplier Price Difference <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        <div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/predict.png" width="50dp"></i></div>
					<div class="info">
						<h3 class="title">Predict sales</h3>
					
                        <div class="more">
							<a href="PredictSingle1.php" title="Title Link">
								Items on monthly basis <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
                        <div class="more">
							<a href="PredictGroup1.php" title="Title Link">
								Group of similar items on monthly basis <i class="fa fa-angle-double-right"></i>
							</a>
                        </div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        <div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/alert.png" width="50dp"></i></div>
					<div class="info">
						<h3 class="title">Alert</h3>
					
                        <div class="more">
							<a href="ProductAlert.php" title="Title Link">
								Product Alert Information <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        <div class="col-md-3">
			<div class="box">							
				<div class="box-icon">
					<div class="image"><i><img src="img/about.png" width="50dp"></i></div>
					<div class="info">
						<h3 class="title">About</h3>
					
                        <div class="more">
							<a href="about.php" title="Title Link">
								About Company <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
        
        

	</div>



	<!--CODE HERE-->
	<?php
		jsPluggins();
	?>
</body>
</html>

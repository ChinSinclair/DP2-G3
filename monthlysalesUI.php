<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="PHP Inc.: Page" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Name" />
    <link href="Bootstrap_4.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Monthly Sales</title>
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
                    <form action="monthlysales.php" method="post">
                        <fieldset>
                            <legend>Generate Monthly Sales Report</legend>
                            <p><label>Enter Year: <input type="text" name="year" required /></label></p>
                            <p>
                                <label>Select month: </label>
                                <select name="month" required>
                                    <option value="">None</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </p>
                            <p><input type="submit" value="Submit" class="btn btn-success" /></p>
                        </fieldset>
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

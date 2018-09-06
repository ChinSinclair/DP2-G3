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
                </div>
            </div>
        </div>
    </div>

    <form action="compare.php" method="post">
        <fieldset>
            <legend>Search for price differences between Suppliers</legend>
                <p>
                    <label for="item">Enter Item
                    <input type="text" id="item" name="item" required />
                    </label>
                    <input type="submit" value="Search"/>
                </p>
        </fieldset>
    </form>



    <!--CODE HERE-->
    <?php
        jsPluggins();
    ?>
</body>
</html>

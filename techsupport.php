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
                    <h1>Technical Support</h1>
                    <form action="https://formspree.io/sinclair_chin@hotmail.com" method="post">
                        <fieldset>
                            <legend>Technical Support Form</legend>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p><label for="name">Enter your name: </label></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="Name" id="name" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p><label for="position">Enter your position: </label></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="Position" id="position" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p><label for="issue">Enter your technical issue: </label></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="Issue" id="issue" />
                                        </div>
                                    </div>
                                    <p><input type="submit" value="Alert Technical Support Team" /></p>
                                </div>
                            </div>
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

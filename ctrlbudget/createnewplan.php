<?php
require 'common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_new_plan</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <style>
        .row-style {
            padding: 194px;
        }

        body {
            background-color: #E9F5FB;

        }

        .center {
            text-align: center;
        }

        .panel-pad {
            padding: 80px;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container">
        <div class="row row-style">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-success">

                    <div class="panel-heading center">
                        <h4>create new plan</h4>
                    </div>

                    <div class="panel-body">
                        <form method="post" action="plandetails.php">
                            <div class="form-group">
                                <label for="initialbudget">initial budget</label>
                                <input type="text" id="initialbudget" name="initialbudget" class="form-control" placeholder="initial budget(EX: 4000)" required="true">
                            </div>
                            <div class="form-group">
                                <label for="noofppl" class="">how many people do you want in your group</label>
                                <input type="number" min="0" id="noofppl" name="noofppl" required="true" class="form-control" placeholder="no of people">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-success" <a href="plandetails.php"></a>next</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>
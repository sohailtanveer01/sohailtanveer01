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
    <title>plan details</title>
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

        .float-right {
            float: right;
        }

        #from {
            float: left;
            font-weight: bold;
        }

        #to {
            float: right;
            font-weight: bold;
        }

        .to-style {
            padding-right: 550px;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container">
        <div class="row row-style">
            <div class="col-xs-12">
                <div class="panel">
                    <form method="post" action="plandetails_script.php">

                        <div class="form-group">
                            <label for="tittle">Tittle</label>
                            <input type="text" class="form-control" name="tittle" placeholder="enter tittle EX:(trip to goa)" id="tittle" required="true">
                        </div>
                        <div class="container">
                            <div class="row to-style">
                                <div id="from">
                                    <span>From</span>
                                </div>
                                <div id="to">
                                    <span>To</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="date" class="sample_class" name="from" required="true" required>

                            <input type="date" class="sample_class float-right" name="to" required="true" required>

                        </div>

                        <div class="form-group row">

                            <div class="col-xs-8">
                                <label for="initialbudget">initial budget</label>
                                <input type="number" size="20" class="form-control" name="initialbudget" id="initialbudget" required="true">
                            </div>
                            <div class="col-xs-4">
                                <label for="noofpeople">No of people</label>
                                <input type="number" min="0" class="form-control float-right" id="noofpeople" name="noofpeople" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="person1">Person 1</label>
                            <input type="text" class="form-control" name="person1" placeholder="person 1 name" id="person1">
                        </div>
                        <div class="form-group">
                            <label for="person2">Person 2</label>
                            <input type="text" class="form-control" name="person2" placeholder="person 2 name" id="person2">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="form-control btn btn-info">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

    <?php include 'footer.php' ?>

</body>

</html>
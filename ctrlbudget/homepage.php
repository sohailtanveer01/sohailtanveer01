<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_page</title>
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
            overflow-x: hidden;



        }

        .center {
            text-align: center;
        }

        .panel-pad {
            padding: 70px;
        }

        .panel-heading {
            text-align: center;
        }

        #budget {
            float: left;
            font-weight: bold;
        }

        #date {
            float: left;
            font-weight: bold;
        }

        #fromto {
            float: right;

        }

        #amount {
            float: right;
        }

        .to-style {
            padding-right: 900px;
        }

        #plus-gly {
            float: right;
            font-size: 50px;
            color: green;


        }

        .glyphicon-user {
            font-size: 25px;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <?php if ($_SESSION['findout']) { ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-6">
                    <h3>Your Plans</h3>
                </div>
                <div class="col-xs-6 col-xs-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-heading"><?php echo $_SESSION['tittle']; ?>
                            <span style="float: right;" class="glyphicon glyphicon-user"><?php echo $_SESSION['noofpeople']; ?></span>
                        </div>
                        <div class="panel-body panel-pad">
                            <div class="container">
                                <div class="row to-style">
                                    <div id="budget">
                                        <span>Budget</span>
                                    </div>
                                    <div id="amount">
                                        <span><?php echo $_SESSION['budget']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row to-style">
                                    <div id="date">
                                        <span>Date</span>
                                    </div>
                                    <div id="fromto">
                                        <?php echo $_SESSION['from'] ?>
                                        to
                                        <?php echo $_SESSION['to'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="viewplan.php" class="form-control btn btn-success">view plan</a>

                    </div>

                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-6">
                    <h3>create a new plan</h3>
                </div>
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel">
                        <div class="panel-body center">
                            <div class="panel-pad"><a class="glyphicon glyphicon-plus-sign" href="createnewplan.php">create a new plan</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php}?>
    <?php } ?>
    <a href="addplan.php"><span class="glyphicon glyphicon-plus-sign" id="plus-gly"></span></a>
    <?php include 'footer.php'; ?>
</body>


</html>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php require 'common.php' ?>
<?php
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} ?>
<?php
$_SESSION['addupA'] = $_SESSION['amountspentA'];
$_SESSION['addupB'] = $_SESSION['amountspentB'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expense distribution</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <style>
        .row-style {
            padding: 100px;
        }

        body {
            background-color: #E9F5FB;

            overflow-x: hidden;



        }

        .center {
            text-align: center;
        }

        .panel-pad {
            padding: 30px;
        }

        .panel-heading {
            text-align: center;
        }

        .glyphicon-user {
            font-size: 25px;
        }

        #amount {
            float: right;
        }

        #amount-rem {
            float: right;

        }

        .to-style {
            padding-right: 540px;
            padding-bottom: 10px;
        }

        #expadd {
            position: relative;
            top: 180px;
            left: 50px;
        }

        .value {
            float: right;
        }

        .glyphicon-arrow-left {
            color: green;
        }

        .greencolor {
            color: green;
        }

        .redcolor {
            color: red;
        }
    </style>

</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="col-xs-12 ">
            <div class="row row-style">
                <div class="panel panel-success">
                    <div class="panel-heading"><?php echo $_SESSION['tittle']; ?>
                        <span style="float: right;" class="glyphicon glyphicon-user"><?php echo $_SESSION['noofpeople']; ?></span>
                    </div>
                    <div class="panel-body panel-pad">
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                initial budget
                            </div>
                            <span class="value">₹<?php echo $_SESSION['budget']; ?></span>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                <?php echo $_SESSION['person1']; ?>
                            </div>
                            <span class="value">₹<?php if ($_SESSION['expperson']) {
                                                        echo $_SESSION["amountspentA"];
                                                    } elseif ($_SESSION['addupA'] != 0) {
                                                        echo $_SESSION["addupA"];
                                                    } else {
                                                        echo 0;
                                                    }
                                                    ?></span>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                <?php echo $_SESSION['person2']; ?>
                            </div>
                            <span class="value">₹<?php if ($_SESSION['expperson'] != 1) {
                                                        echo $_SESSION["amountspentB"];
                                                    } elseif ($_SESSION['addupB'] != 0) {
                                                        echo $_SESSION['addupB'];
                                                    } else {
                                                        echo 0;
                                                    }
                                                    ?></span>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                Total amount
                            </div>
                            <span class="value">₹<?php echo $_SESSION['addupA'] + $_SESSION['addupB']; ?></span>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                remaining amount
                            </div>
                            <?php $remainingamount = ($_SESSION['budget'] - ($_SESSION['addupA'] + $_SESSION['addupB']));
                            $_SESSION['remainingamount'] = $remainingamount; ?>
                            <?php if ($remainingamount > 0) { ?>
                                <span class="value greencolor">₹<?php echo $remainingamount ?></span>
                            <?php } elseif ($remainingamount < 0) { ?>
                                <span class="value redcolor">₹<?php echo $remainingamount ?></span>
                            <?php } else { ?>
                                <span class="value">₹<?php echo $remainingamount ?></span>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                individual shares
                            </div>
                            <?php $individual_shares = ($_SESSION['addupA'] + $_SESSION['addupB']) / 2 ?>
                            <span class="value">₹<?php echo $individual_shares ?></span>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                <?php echo $_SESSION['person1']; ?>
                            </div>
                            <?php $firstguy = $_SESSION['addupA'] - $individual_shares; ?>
                            <?php if ($firstguy > 0) { ?>
                                <span class="value greencolor"><?php echo "gets back ₹" .  $firstguy; ?></span>


                            <?php } elseif ($firstguy < 0) { ?>
                                <span class="value"><?php echo "owes ₹" . abs($firstguy); ?></span>
                            <?php } else { ?>
                                <span class="value"><?php echo "all settled up" ?></span>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div style="font-weight: bold;" class="panel-list">
                                <?php echo $_SESSION['person2']; ?>
                            </div>
                            <?php $secondguy = $_SESSION['addupB'] - $individual_shares; ?>
                            <?php if ($secondguy > 0) { ?>
                                <span class="value greencolor"><?php echo "gets back ₹" . $secondguy ?></span>
                            <?php } elseif ($secondguy < 0) { ?>
                                <span class="value redcolor"><?php echo "owes ₹" . abs($secondguy) ?></span>
                            <?php } else { ?>
                                <span class="value"><?php echo "all settled up" ?></span>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 col-xs-offset-5">
                                <div class="btn btn-success">
                                    <span class="glyphicon glyphicon-arrow-left"> <a style="text-decoration: none;" href="viewplan.php">Go back</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
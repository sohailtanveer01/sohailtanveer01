<?php require 'common.php' ?>
<?php
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view plan</title>
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
            padding: 180px;
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

        .puk-style {
            padding-right: 930px;
            padding-bottom: 10px;
        }

        .bills {
            position: relative;
            bottom: 110px;
        }

        .greencolor {
            color: green;
        }

        .redcolor {
            color: red;
        }
    </style>

    <?php if (($_SESSION['budget']) > 0) { ?>
        <script>
            document.getElementById("amount-rem").style.color = "green";
        </script>


    <?php } ?>

</head>

<body>
    <?php include 'header.php' ?>
    <div class="row row-style">

        <div class="col-xs-7 ">
            <div class="panel panel-success">
                <div class="panel-heading"><?php echo $_SESSION['tittle']; ?>
                    <span style="float: right;" class="glyphicon glyphicon-user"><?php echo $_SESSION['noofpeople']; ?></span>
                </div>

                <div class="panel-body panel-pad">
                    <div class="container">

                        <div class="to-style">
                            <span style="font-weight: bold;" class="budget">Budget</span>
                            <span id="amount">₹<?php echo $_SESSION['budget']; ?></span>

                        </div>

                        <div class="to-style">
                            <span style="font-weight: bold;" class="budget">remaining budget</span>
                            <span id="amount-rem">₹<?php if (isset($_SESSION['remainingamount'])) { ?>
                                <?php if ($_SESSION['remainingamount'] > 0) { ?>
                                    <span class="value greencolor">₹<?php echo $_SESSION['remainingamount']; ?></span>
                                <?php } elseif ($_SESSION['remainingamount'] < 0) { ?>
                                    <span class="value redcolor">₹<?php echo $_SESSION['remainingamount']; ?></span>
                                <?php } else { ?>
                                    <span class="value">₹<?php echo $_SESSION['remainingamount'] ?></span>
                                <?php } ?>
                            <?php } ?>
                            </span>

                        </div>
                        <div class="to-style">
                            <span style="font-weight: bold;" class="budget">date</span>
                            <span id="amount"><?php echo $_SESSION['from']; ?> to <?php echo $_SESSION['to']; ?></span>

                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="expbtncls">
            <a href="expensedistribution.php" class="btn btn-success" id="expbtn">expense distribution</a>
        </div>
        <div class="col-xs-4 col-offset-9">
            <div class="panel panel-success" id="expadd">
                <div class="panel-heading">Add new expense</div>
                <div class="panel-body">
                    <form method="post" action="expensedistribution_script.php">
                        <div class="form-group">
                            <label for="tittle">Tittle</label>
                            <input type="text" class="form-control" id="tittle" placeholder="expense name" name="expensename">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" placeholder="dd/09/2019" name="date" min="<?php echo $_SESSION['from'] ?>" max="<?php echo $_SESSION['to'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="amountspent">Amount spent</label>
                            <input type="number" class="form-control" id="amountspent" placeholder="amountspent" name="amountspent">
                        </div>
                        <div class="form-group">
                            <label for="choose">choose: </label>

                            <select id="mySelect" name="persons" required>
                                <option value=1><?php echo $_SESSION['person1']; ?></option>
                                <option value=0><?php echo $_SESSION['person2']; ?></option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>upload file</label>
                            <input type="file" class="sample_class" name="sample_name">
                        </div>
                        <button type="submit" class="form-control btn btn-success" name="add" value="submit">ADD</button>

                    </form>
                </div>
            </div>
        </div>

        <?php if (isset($_SESSION['expensename'])) { ?>
            <?php if (isset($_SESSION['p11'])) { ?>
                <?php $expenssename1 = $_SESSION['expensename1'];
                $expperson1 = $_SESSION['expperson']; ?>
                <div class="col-xs-3 bills">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <?php echo $expenssename1; ?>
                        </div>

                        <div class="panel-body">
                            <div class="container">
                                <div class="row">
                                    <span style="font-weight: bold;" class="budget">AMOUNT</span>
                                    <span class="puk-style" style="float: right">₹<?php echo $_SESSION['addupA']; ?></span>
                                </div>
                                <div class="row">
                                    <span style="font-weight: bold;" class="budget">paid by</span>
                                    <span class="puk-style" style="float: right"><?php echo $_SESSION['person1']; ?></span>
                                </div>
                                <div class="row">
                                    <span style="font-weight: bold;" class="budget">paid on</span>
                                    <span class="puk-style" style="float: right"><?php echo $_SESSION['date1']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['p22'])) { ?>
                <div class="col-xs-3 bills">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <?php echo $_SESSION['expensename']; ?>
                        </div>

                        <div class="panel-body">
                            <div class="container">
                                <div class="row">
                                    <span style="font-weight: bold;" class="budget">AMOUNT</span>
                                    <span class="puk-style" style="float: right">₹<?php echo $_SESSION['addupB']; ?></span>
                                </div>
                                <div class="row">
                                    <span style="font-weight: bold;" class="budget">paid by</span>
                                    <span class="puk-style" style="float: right"><?php echo $_SESSION['person2']; ?></span>
                                </div>
                                <div class="row">
                                    <span style="font-weight: bold;" class="budget">paid on</span>
                                    <span class="puk-style" style="float: right"><?php echo $_SESSION['date2']; ?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="footer">
        <?php include 'footer.php' ?>
    </div>
</body>

</html>
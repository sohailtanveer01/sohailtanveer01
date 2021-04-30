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
    <title>change password</title>
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


        .to-style {
            padding-right: 540px;
            padding-bottom: 10px;
        }

        #expadd {
            position: relative;
            top: 180px;
            left: 50px;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container">
        <div class="row row-style">
            <div class="col-xs-8 col-xs-offset-3">
                <div class="panel">
                    <div class="panel-heading center">
                        <h4>change password</h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="changepassword_script.php">
                            <div class="form-group">
                                <label for="oldpassword">old password</label>
                                <input type="password" id="oldpassword" name="oldpassword" placeholder="old password" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <label for="newpassword">new password</label>
                                <input type="password" id="newpassword" name="newpassword" placeholder="new password (minimum 6 charecters)" class="form-control" pattern=".{6,}" required="true">
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword">old password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="confirm password" pattern=".{6,}" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-success" name="changepass">change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
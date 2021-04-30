<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <style>
        .row-style {
            padding: 150px;
        }

        body {
            background-color: #E9F5FB;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container">
        <div class="row row-style">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel">

                    <div class="panel-heading center">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="login_submit.php">

                            <div class="form-group">
                                <label for="EMAIL">Email:</label>
                                <input type="email" id="EMAIL" name="email" class="form-control" placeholder="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <label for="password">password:</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="password" required="true" pattern=".{6,}">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="signup" class="form-control btn btn-success">login</button>
                            </div>
                        </form>
                    </div>

                    <div class="panel-footer">Don't have an account? <a href="signup.php">click here</a> to signup</div>






                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>
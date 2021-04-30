<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Latest compiled and minified CSS -->
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
                        <h4>sign up</h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <label for:"name">name:</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for:"EMAIL">Email:</label>
                                <input type="email" id="EMAIL" name="email" class="form-control" placeholder="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <label for:"password">password:</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="password (min 6 charecters)" required="true" pattern=".{6,}">
                            </div>
                            <div class=" form-group">
                                <label for:"phonenumber">phone number:</label>
                                <input type="number" id="phonenumber" name="contact" class="form-control" placeholder="Enter valid phone number(ex:8448444853)">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="signup" class="form-control btn btn-success">sign up</button>
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
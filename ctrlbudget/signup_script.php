<?php require 'common.php'; ?>
<?php
$email = $_POST['email'];

$password = $_POST['password'];


$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, md5(md5($password)));
$name = $_POST['name'];
$phone = $_POST['contact'];
$name = mysqli_real_escape_string($con, $name);
$phone = mysqli_real_escape_string($con, $phone);
$select_query = "SELECT * FROM users WHERE email_id='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

if (mysqli_num_rows($select_query_result) > 0) {

    echo "<script>alert('this mail_id is already taken try another')</script>";
    echo "<script>location.href='signup.php'</script>";
} else {

    $_SESSION["email"] = $email;
    $row = mysqli_insert_id($con);
    $_SESSION["id"] = $row;
    $user_reg_query = "INSERT INTO users (email_id,first_name,phone,password) values ('$email','$name','$phone','$password')";
    $user_reg_submit = mysqli_query($con, $user_reg_query) or die(mysqli_error($con));



    header('location:homepage.php');
}
?>
<?php
require 'common.php'; ?>
<?php
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, md5(md5($_POST['password'])));
$select_query = "SELECT * FROM users WHERE email_id='$email' and password='$password'";
$select_query_result = mysqli_query($con, $select_query);
if (mysqli_num_rows($select_query_result) == 0) {
    echo "<script>alert('incorrect mail_id/password')</script>";
    echo "<script>location.href='login.php'</script>";
} else {
    $row = mysqli_fetch_array($select_query_result);


    $_SESSION['email'] = $row['email_id'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['count'] = 0;

    header('location:homepage.php');
}
?>
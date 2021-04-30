<?php require 'common.php' ?>
<?php
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} ?>
<?php
$email = $_SESSION['email'];
$oldpassword = md5(md5($_POST['oldpassword']));
$newpassword = $_POST['newpassword'];
$newpasswordmd5 = md5(md5($newpassword));
$confirmpassword = $_POST['confirmpassword'];
$select_query = "SELECT * FROM users WHERE email_id='$email'";
$select_query_result = mysqli_query($con, $select_query);
$row = mysqli_fetch_array($select_query_result);
$codepassword = $row['password'];
if ($codepassword != $oldpassword) {
    echo "<script>alert('wrong old password');</script>";
    echo "<script>location.href='changepassword.php'</script>";
} elseif ($newpassword != $confirmpassword) {
    echo "<script>alert('confirm correctly');</script>";
    echo "<script>location.href='changepassword.php'</script>";
} else {
    $select_query = "UPDATE users SET password='$newpasswordmd5' WHERE email_id='$email'";
    $select_query_result = mysqli_query($con, $select_query);
    echo "<script>alert('successfully updated your password');</script>";
    echo "<script>location.href='index.php'</script>";
}

?>
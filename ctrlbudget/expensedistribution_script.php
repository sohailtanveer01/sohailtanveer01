<?php
session_start();
if ((!empty($_POST['persons']))) {
    $_SESSION['p11'] = $_POST['persons'];
} elseif ((isset($_POST['persons']))) {
    $_SESSION['p22'] = $_POST['persons'];
}
$expensename = $_POST['expensename'];
$_SESSION['expensename'] = $expensename;
$expperson = $_POST['persons'];
$_SESSION['expperson'] = $expperson;
$AMS = $_POST['amountspent'];
$AMSI = (int)$AMS;
if ($expperson) {
    $_SESSION['amountspentA'] = $_SESSION['addupA'] + $AMSI + 0;
} else {
    $_SESSION['amountspentB'] = $_SESSION['addupB'] + $AMSI + 0;
}
?>
<?php if (isset($_SESSION['expensename'])) { ?>
    <?php
    $count = $_SESSION['count'] + 1;
    $_SESSION['count'] = $count;
    $number = $_SESSION['count'];
    $numberi = (int)$number;
    if ($numberi == 1) {
        $expensename1 = $_POST['expensename'];
        $_SESSION['expensename1'] = $expensename1;
        $_SESSION['numberi'] = $numberi;
        $_SESSION['date1'] = $_POST['date'];
    } elseif ($numberi == 2) {
        $_SESSION['numberi2'] = $numberi;
        $_SESSION['date2'] = $_POST['date'];
    }
    ?>
<?php }; ?>
<?php header('location:expensedistribution.php'); ?>
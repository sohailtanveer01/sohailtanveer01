<?php
include 'common.php';
?>
<?php

if (!isset($_SESSION['email'])) {
    header('location:login.php');
} else {
    $conn = mysqli_connect("localhost", "root", "", "ctrl_budget");
    if (!$conn) {
        die(mysqli_connect_error($conn));
    }
    $user_id = $_SESSION['id'];
    $tittle = mysqli_real_escape_string($conn, $_POST['tittle']);
    $from = $_POST['from'];
    $to = $_POST['to'];
    $initialbudget = mysqli_real_escape_string($conn, $_POST['initialbudget']);
    $noofpeople = mysqli_real_escape_string($conn, $_POST['noofpeople']);
    $person1 = mysqli_real_escape_string($conn, $_POST['person1']);
    $person2 = mysqli_real_escape_string($conn, $_POST['person2']);
    $select_query = "INSERT INTO budget_plan (tittle,from1,to1,initialbudget,noofpeople,person1,person2,user_id) values ('$tittle',DATE'$from',DATE'$to','$initialbudget','$noofpeople','$person1','$person2','$user_id')";
    $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
    $_SESSION['tittle'] = $tittle;
    $_SESSION['budget'] = $initialbudget;
    $_SESSION['from'] = $from;
    $_SESSION['to'] = $to;
    $_SESSION['findout'] = 1;
    $_SESSION['noofpeople'] = $noofpeople;
    $_SESSION['person1'] = $person1;
    $_SESSION['person2'] = $person2;
    header('location:homepage.php');
}

?>
<?php
include 'connect.php';
    session_start();
    $userlog = $_SESSION['log'];
    $usertext=$_POST["pole"];



    $conn->query("INSERT INTO `mess` (`login`, `message`) VALUES ('$userlog', '$usertext')");


if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}
$new_url = 'message.php';
header('Location: '.$new_url);
exit();

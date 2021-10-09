<?php
session_start();
include('../includes/config.php');
$email=$_SESSION['alogin'];
$sql ="UPDATE `myteam` SET `temp`=1 WHERE `useremail`=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();

    echo "<script type='text/javascript'>document.location = 'myteam.php';</script>";
?>
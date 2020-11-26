<?php
session_start();
include('../controller/in.php');
$app = new Controller();
$app->logout($_SESSION['user']);
?>
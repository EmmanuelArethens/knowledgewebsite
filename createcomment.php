<?php
session_start();
include_once 'index.php';
include_once 'Comment.php';
include_once 'Utilisateur.php';
$user = $_SESSION['user'];
$data = new Database();
$com = new Comment($_POST['comment'], new DateTime, $_POST['user']);
$data->saveComment($com);
header('Location:index.php');
?>


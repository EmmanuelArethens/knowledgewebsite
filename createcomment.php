<?php
include_once 'index.php';
include_once 'Comment.php';
include_once 'Utilisateur.php'; 
session_start();

$user = $_SESSION['user'];
$data = new Database();
$com = new Comment($_POST['comment'], new DateTime);
$data->saveComment($com);
header('Location:index.php');
?>


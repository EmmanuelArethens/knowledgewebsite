<?php
include_once 'index.php';
include_once 'Comment.php';
include_once 'Utilisateur.php'; 
session_start();

  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$user = $_SESSION['user'];
$data = new Database();
$com = new Comment($post['comment'], new DateTime, $user);
$data->saveComment($com);
header('Location:index.php');
?>


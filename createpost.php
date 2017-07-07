<?php
include_once 'index.php';
include_once 'Comment.php';
include_once 'Utilisateur.php';
include_once 'Post.php';
$user = $_SESSION['user'];
$data = new Database();
$pos = new Post($_POST['pos'], new DateTime, $user, $_POST['titre'], $_POST['categorie'] );
$data->savePost($pos);
header('Location:index.php');


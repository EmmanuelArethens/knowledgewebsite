<?php
session_start();
include_once 'index.php';
include_once 'Comment.php';
include_once 'Utilisateur.php';
include_once 'Post.php';
$user = $_SESSION['user'];
$data = new Database();
$pos = new Post($_POST['pos'], new DateTime, $_POST['user'], 11,11, $_POST['categorie'], $_POST['titre'] );
$data->saveComment($pos);
header('Location:index.php');


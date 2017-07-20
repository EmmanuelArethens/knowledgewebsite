<?php
include_once 'index.php';
include_once 'Comment.php';
include_once 'Utilisateur.php';
include_once 'Post.php';
session_start();
 $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$user = $_SESSION['user'];
$data = new Database();
$pos = new Post($post['pos'], new DateTime, $user, $post['titre'], $post['categorie'] );
$data->savePost($pos);
header('Location:index.php');


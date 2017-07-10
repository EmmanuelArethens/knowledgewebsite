<?php
session_start();

include_once 'Utilisateur.php';
include_once 'Database.php';
include_once 'Post.php';
include_once 'Comment.php';

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($post["pseudolog"]) && isset($post["mdplog"])) {
    $data = new Database();
    $user = $data->loaduser($post["pseudolog"], $post["mdplog"]);
    if ($user != false){
        $_SESSION["user"] = $user;
    }
      }   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>knOWledge</title>
        <link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <div class="row">
        <h1 > KN<img src="images/ow.png" id="owlogo">WLEDGE WEBSITE </h1>

<h3> Login </h3>
<div class="col-xs-2">
<form action ="" method="POST" autocomplete="off">
            <input type="text" placeholder="Nom d'utilisateur" autocomplete="off" name="pseudolog">
            <input type="password" placeholder="Mot de passe" autocomplete="off" name="mdplog">
            <input type="submit" value="login">
            </div>
</form>
<form action="logout.php" method="POST"> <input type="submit" value="logout"></form>

<a href="register.php"> New User </a>
<a href="index.php"> Accueil </a>
    </div>

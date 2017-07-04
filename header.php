<?php
session_start();

include_once 'Utilisateur.php';
include_once 'Database.php';
include_once 'Post.php';

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($post["pseudolog"]) && isset($post["mdplog"])) {
    $data = new Database();
    $user = $data->loaduser($post["pseudolog"], $post["mdplog"]);
    if ($user != false){
        $_SESSION["user"] = $user;
    }
      }   
?>

<h1> KNOWLEDGE WEBSITE </h1>

<h3> Login </h3>
<form action ="" method="POST" autocomplete="off">
            <input type="text" placeholder="Nom d'utilisateur" autocomplete="off" name="pseudolog">
            <input type="password" placeholder="Mot de passe" autocomplete="off" name="mdplog">
            <input type="submit" value="login">
</form>
<form action="logout.php" method="POST"> <input type="submit" value="logout"></form>

<a href="register.php"> New User </a>
<a href="index.php"> Accueil </a>

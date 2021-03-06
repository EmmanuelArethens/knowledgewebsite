<?php
include_once 'Utilisateur.php';
include_once 'Database.php';
include_once 'Post.php';
include_once 'Comment.php';
session_start();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if (isset($post["pseudolog"]) && isset($post["mdplog"])) {
    $data = new Database();
    $user = $data->loaduser($post["pseudolog"], $post["mdplog"]);
    if ($user != false) {
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
    <body class="container-fluid">
        <div class="row" id="head">
            <h1 class="col-md-offset-2 col-md-4"> KN<img src="images/ow.png" id="owlogo">WLEDGE WEBSITE </h1>
            <div class="col-md-6">

                <div class ='row' id="headform">
                    <?php if (!isset($_SESSION["user"])) { ?>
                    <form id="logform" class="col-md-10" action ="" method="POST" autocomplete="off">
                        <input type="text" placeholder="Nom d'utilisateur" autocomplete="off" name="pseudolog">
                        <input type="password" placeholder="Mot de passe" autocomplete="off" name="mdplog">
                        <input type="submit" value="login">
                        
                    </form>  <?php } ?>
                    <form id="logoutform" action="logout.php" method="POST" class="col-md-2"><input type="submit" value="logout">          
                    </form>
                </div>

                <a href="register.php"> New User </a>
                <a href="index.php"> Accueil </a>

                <?php
                if (isset($_SESSION["user"])) {
                    echo '<p> Bonjour' . ' ' . $_SESSION["user"]->getPseudo() . ' ' . 'met toi bien sur mon site </p>';
                }
                // var_dump($_SESSION["user"]);
                ?>
            </div>
        </div>

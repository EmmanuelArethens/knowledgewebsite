<?php
include_once 'header.php';
include_once 'Utilisateur.php';
include_once 'Database.php';
include_once 'Post.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php


        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post["pseudo"]) && isset($post["mdp"]) && isset($post["bio"])){
     $user = new Utilisateur($post['pseudo'], $post['mdp'], $post['bio']);
     $data = new Database();
     $data->saveUser($user);
}
        ?>
        
        <h1>REGISTER</h1>

<form action ="" method="POST" autocomplete="off"   >
            <input type="text" placeholder="Nom d'utilisateur" autocomplete="off" name="pseudo">
            <input type="password" placeholder="Mot de passe" autocomplete="off" name="mdp">
            <input type="textarea" placeholder="racontes ta vie" autocomplete="off" name="bio">
            <input type="submit" value="register">
</form>
        
    </body>
</html>

<?php
include_once 'Utilisateur.php';
include_once 'Database.php';
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post["pseudo"]) && isset($post["mdp"]) && isset($post["bio"])){
     $user = new Utilisateur($post['pseudo'], $post['mdp'], $post['bio']);
     $data = new Database();
     $data->saveUser($user);
}
?>
<form action ="" method="POST">
            <input type="text" placeholder="Nom d'utilisateur" name="pseudo">
            <input type="password" placeholder="Mot de passe" name="mdp">
            <input type="textarea" placeholder="racontes ta vie" name="bio">
            <input type="submit" value="register">
</form>

<form action ="" method="POST">
            <input type="text" placeholder="Nom d'utilisateur" name="pseudo">
            <input type="password" placeholder="Mot de passe" name="mdp">
            <input type="submit" value="login">
</form>
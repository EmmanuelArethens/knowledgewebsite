
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'header.php';
        include_once 'Utilisateur.php';
        include_once 'Comment.php';
        var_dump($_SESSION);
        ?>

        <h1>CREATE A POST</h1>
        <form method="POST" action="createpost.php">
        <input type="text" name ="categorie" placeholder="catégorie">
        <input type="text" name ="titre" placeholder="Titre">
        <input type="textarea" name ="pos" placeholder="Contenu du Post">
        <input type="submit">
        </form>
        
        <h1> CREATE A COMMENT </h1>

        <form action="createcomment.php" method="POST">
            <h3> Post comment </h3>
            <input type="textarea" name ="comment" placeholder="Contenu du commentaire">
            <input type="submit">
        </form>
        <?php Database::loadPost();       
        Database::lienpost(); ?>
        <a href="pagepost.php?manu=<?php echo$content ?>"></a>
  <?php
     
  ?>
    </body>
</html>
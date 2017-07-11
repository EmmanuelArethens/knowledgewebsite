<?php

include_once 'header.php';

$post = unserialize(base64_decode($_GET['manu']));
echo $post->getTitre();
echo $post->getContenu();
?>

   <h1> CREATE A COMMENT </h1>

        <form action="createcomment.php" method="POST">
            <h3> Post comment </h3>
            <input type="textarea" name ="comment" placeholder="Contenu du commentaire">
            <input type="submit">
        </form>
</body>
</html>

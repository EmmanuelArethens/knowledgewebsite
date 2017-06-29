<?php
    session_start();
?>
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
        include_once 'Comment.php';
        var_dump($_SESSION);
        ?>

        <h1> CREATE A COMMENT </h1>

        <form method="POST">
            <h3> Post comment </h3>
            <input type="textarea" name ="comment" placeholder="Contenu du post">
            <input type="submit">
        </form>
        <?php
        $data = new Database();
        $com = new Comment($_POST['comment'], new DateTime, 'Manu');
        $data->saveComment($com);
        
        $files = scandir("comment");
        foreach($files as $file) {
        if (is_dir($file)) {
            continue;
        }
        echo '<h2>'.basename($file, ".txt").'</h2>';
        $content = file_get_contents('comment/'.$file);
        echo '<p>'.$content.'</p>';
        }
        ?>
    </body>
</html>
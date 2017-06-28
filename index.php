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
        
        
        if (session_status() != 2) {
            session_start();
        }
        
        
        var_dump($_SESSION);
        ?>
        
        <h1> CREATE A COMMENT </h1>
        
        <form method="POST">
            <h3> Post content </h3>
            <input type="textarea" name ="comment" placeholder="Contenu du post">
            <input type="submit">
        </form>
        <?php
        $data = new Database();
        $com = new Comment($_POST['comment'], new DateTime, 'Manu');
        $data->saveComment($com);
        

        ?>
    </body>
</html>

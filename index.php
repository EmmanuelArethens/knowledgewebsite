
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    
        <?php
        include_once 'header.php';
        include_once 'Utilisateur.php';
        include_once 'Comment.php';
        ?>
<div class="raw">
       
            
            <div class="col-md-5 col-md-offset-4">
        
        <h2> Derniers Posts</h2>
        <?php Database::Lienposts();       
         ?>
            </div>
        
    
    <div class="col-md-5 col-md-offset-4">
        <form id="creapost" method="POST" action="createpost.php">
        <h1>CREATE A POST</h1>
        <input type="text" name ="titre" placeholder="Titre">
        <input type="textarea" name ="pos" placeholder="Contenu du Post">
        <input type="submit">
        </form>
</div>
        </div>
        

    </body>
</html>
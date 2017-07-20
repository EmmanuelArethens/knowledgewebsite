<?php

include_once 'header.php';
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
?>

<div class="raw">
<div class="col-md-5 col-md-offset-1">
<?php
$post = unserialize(base64_decode($_GET['manu']));
echo "<h2>".$post->getTitre()."</h2>"."</br>";
echo '<p id="contenudupost">'.$post->getContenu().'</p>';
?>
</div>

<div class="col-md-offset-6 row">
    
    <?php  if (isset($_SESSION["user"])) {   ?>  
            <form action="createcomment.php" method="POST" id="commentform">
            <h3> Post comment </h3>
            <input type="textarea" name ="comment" placeholder="Contenu du commentaire">
            <input type="submit">
    <?php } ?>
            
        </form>
    </div>
</div>
<div class="col-md-offset-4">
   <?php   Database::loadcomment() ?>
    </div>
</body>
</html>

<?php
    session_start();
?>

 <?php if (!empty($_GET['lunghezza_password'])) : ?>
            <h5 class="my-4">La password generata è: <span class="text-success"><?php echo generatorePassword($lunghezza); ?></span></h5> 
 <?php endif; ?>



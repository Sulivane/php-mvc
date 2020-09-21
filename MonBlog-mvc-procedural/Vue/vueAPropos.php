<?php $titre = 'Mon Blog' ?>

<?php ob_start(); ?>
<p>Blog réalisé par M.Batiste Pesquet.Un grand merci a lui pour ses ressources pédagique !</p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

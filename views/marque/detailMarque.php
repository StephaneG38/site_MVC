<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
<a class="btn btn-primary" href="<?= URL ?>/src/Controller/MarqueController.php?param=liste_marque">Retour</a>
<a href="<?= URL ?>/src/Controller/MarqueController.php?param=edit_marque&id=<?= $marque->id ?>"><i class="fa-solid fa-pencil"></i></a>
<p>Marque : <?= $marque->name ?></p>
<p>Logo : <?= $marque->logo ?></p>
<p>Pays : <?= $marque->pays ?></p>

</div>




<?php
include_once ROOT . 'views/include/footer.php';

?>
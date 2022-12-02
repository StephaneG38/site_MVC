<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
<a class="btn btn-primary" href="<?= URL ?>/src/Controller/UserController.php?param=liste_user">Retour</a>
<a href="<?= URL ?>/src/Controller/UserController.php?param=edit_user&id=<?= $user->id ?>"><i class="fa-solid fa-pencil"></i></a>
<p>Nom : <?= $user->nom ?></p>
<p>Prénom : <?= $user->prenom ?></p>
<p>Adresse : <?= $user->adresse ?></p>
<p>CP : <?= $user->cp ?></p>
<p>Ville : <?= $user->ville ?></p>
<p>Tel : <?= $user->tel ?></p>
<p>Email : <?= $user->email ?></p>
<p>Password : <?= $user->password ?></p>
<p>Id Role : <?= $user->role_id ?></p>
</div>




<?php
include_once ROOT . 'views/include/footer.php';

?>
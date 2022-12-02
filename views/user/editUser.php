<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
    <form action="<?= URL ?>/src/Controller/UserController.php?param=edit_user&id=<?= $user->id ?>" method="post" class='form-control'>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?= $user->nom ?>" class='form-control'>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="<?= $user->prenom ?>" class='form-control'>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" value="<?= $user->adresse ?>" class='form-control'>
        <label for="cp">CP</label>
        <input type="text" name="cp" id="cp" value="<?= $user->cp ?>" class='form-control'>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" value="<?= $user->ville ?>" class='form-control'>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= $user->email ?>" class='form-control'>
        <label for="tel">Tel</label>
        <input type="text" name="tel" id="tel" value="<?= $user->tel ?>" class='form-control'>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" value="<?= $user->password ?>" class='form-control'>
        <label for="role_id">Role</label>
        <input type="text" name="role_id" id="role_id" value="<?= $user->role_id ?>" class='form-control'>
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>

</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
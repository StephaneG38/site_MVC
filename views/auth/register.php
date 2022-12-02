<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';



?>
<div class="container">
    <div>
        <?php
        foreach ($errors as $message) : ?>

            <div class="alert alert-danger col-2 offset-5" role="alert">
                <?= $message ?>
            </div>
        <?php endforeach ?>

    </div>

    <form action="<?= URL ?>/src/Controller/AuthController.php?param=register" method="post" class='form-control'>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class='form-control'>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" class='form-control'>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" class='form-control'>
        <label for="cp">CP</label>
        <input type="text" name="cp" id="cp" class='form-control'>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" class='form-control'>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class='form-control'>
        <label for="tel">Tel</label>
        <input type="text" name="tel" id="tel" class='form-control'>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" class='form-control'>
        <label for="role_id">Role</label>
        <input type="text" name="role_id" id="role_id" class='form-control'>
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>

</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
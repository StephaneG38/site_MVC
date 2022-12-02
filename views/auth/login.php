<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>

<div class="container">
    <!-- pour afficher un message d'alerte -->
    <div>
        <?php
        foreach ($errors as $message) : ?>
            <div class="alert alert-danger col-2 offset-5" role="alert">
                <?= $message ?>
            </div>
        <?php endforeach ?>
    </div>

    <!-- formulaire pour se connecter -->
    <form action="<?= URL ?>/src/Controller/AuthController.php?param=login" method="post" class='form-control'>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class='form-control'>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" class='form-control'>
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
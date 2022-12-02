<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
    <form action="<?= URL ?>/src/Controller/MarqueController.php?param=ajouter_marque" method="post" class='form-control'>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" class='form-control'>
        <label for="logo">Logo</label>
        <input type="text" name="logo" id="logo" class='form-control'>
        <label for="pays">Pays</label>
        <input type="text" name="pays" id="pays" class='form-control'>
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>

</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
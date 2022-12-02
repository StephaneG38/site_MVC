<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
    <form action="<?= URL ?>/src/Controller/MarqueController.php?param=edit_marque&id=<?= $marque->id ?>" method="post" class='form-control'>
        <label for="nom">Marque</label>
        <input type="text" name="name" id="name" value="<?= $marque->name ?>" class='form-control'>
        <label for="logo">Logo</label>
        <input type="text" name="logo" id="logo" value="<?= $marque->logo ?>" class='form-control'>
        <label for="pays">Pays</label>
        <input type="text" name="pays" id="pays" value="<?= $marque->pays ?>" class='form-control'>
       
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>

</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
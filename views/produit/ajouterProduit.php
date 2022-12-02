<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
    <form action="<?= URL ?>/src/Controller/ProduitController.php?param=ajouter_produit" method="post" class='form-control'>
        <label for="ref">Ref</label>
        <input type="text" name="ref" id="ref" class='form-control'>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class='form-control'>
        <label for="marque_id">Marque_id</label>
        <input type="text" name="marque_id" id="marque_id" class='form-control'>
        <label for="taux_tva_id">Taux_tva_id</label>
        <input type="text" name="taux_tva_id" id="taux_tva_id" class='form-control'>
        <label for="prix_ht">Prix_ht</label>
        <input type="text" name="prix_ht" id="prix_ht" class='form-control'>
        <label for="stock">Stock</label>
        <input type="text" name="stock" id="stock" class='form-control'>
        <label for="categorie_id">Categorie_id</label>
        <input type="text" name="categorie_id" id="categorie_id" class='form-control'>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" class='form-control'>
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>

</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
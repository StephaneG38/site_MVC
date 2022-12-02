<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
    <form action="<?= URL ?>/src/Controller/ProduitController.php?param=edit_produit&id=<?= $produit->id ?>" method="post" class='form-control' enctype="multipart/form-data">
        <label for="ref">Ref</label>
        <input type="text" name="ref" id="ref" value="<?= $produit->ref ?>" class='form-control'>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?= $produit->nom ?>" class='form-control'>
        <label for="marque_id">Marque id</label>
        <input type="text" name="marque_id" id="marque_id" value="<?= $produit->marque_id ?>" class='form-control'>
        <label for="taux_tva_id">taux_tva_id</label>
        <input type="text" name="taux_tva_id" id="taux_tva_id" value="<?= $produit->taux_tva_id ?>" class='form-control'>
        <label for="prix_ht">Prix ht</label>
        <input type="text" name="prix_ht" id="prix_ht" value="<?= $produit->prix_ht ?>" class='form-control'>
        <label for="email">Stock</label>
        <input type="text" name="stock" id="stock" value="<?= $produit->stock ?>" class='form-control'>
        <label for="categorie_id">Categorie_id</label>
        <input type="text" name="categorie_id" id="categorie_id" value="<?= $produit->categorie_id ?>" class='form-control'>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="<?= $produit->image ?>" class='form-control'>
        <input type="file" name="file" id="file" value="<?= $produit->image ?>" class='form-control'>
       
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
    
   
   
</div>

<?php
include_once ROOT . 'views/include/footer.php';

?>
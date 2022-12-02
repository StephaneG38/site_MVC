<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<div class="container">
<a class="btn btn-primary" href="<?= URL ?>/src/Controller/ProduitController.php?param=liste_produit">Retour</a>
<a href="<?= URL ?>/src/Controller/ProduitController.php?param=edit_produit&id=<?= $produit->id ?>"><i class="fa-solid fa-pencil"></i></a>
<p>Ref : <?= $produit->ref ?></p>
<p>Nom : <?= $produit->nom ?></p>
<p>Marque_id : <?= $produit->marque_id ?></p>
<p>Taux_tva_id : <?= $produit->taux_tva_id ?></p>
<p>Prix_ht : <?= $produit->prix_ht ?></p>
<p>Stock : <?= $produit->stock ?></p>
<p>Categorie_id : <?= $produit->categorie_id ?></p>
<p>Image : <?= $produit->image ?></p>
</div>




<?php
include_once ROOT . 'views/include/footer.php';

?>
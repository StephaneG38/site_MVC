<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<!-- ___________________________ici code html _____________________________ -->

<div class="container">
    <h3> Liste des Produits </h3>
    <a class="btn btn-primary" href="<?= URL ?>/src/Controller/ProduitController.php?param=ajouter_produit">Ajouter produit</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">ref</th>
                <th scope="col">nom</th>
                <th scope="col">marque_id</th>
                <th scope="col">taux_tva_id</th>
                <th scope="col">prix_ht</th>
                <th scope="col">stock</th>
                <th scope="col">categorie_id</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit) : ?>
                <tr>
                    <th scope="row"><?= $produit->id ?></th>
                    <td><?= $produit->ref ?></td>
                    <td><?= $produit->nom ?></td>
                    <td><?= $produit->marque_id ?></td>
                    <td><?= $produit->taux_tva_id ?></td>
                    <td><?= $produit->prix_ht ?></td>
                    <td><?= $produit->stock ?></td>
                    <td><?= $produit->categorie_id ?></td>
                    <td><img src="<?= URL ?>/assets/img/<?= $produit->image ?>" /></td>
                    <?php
                    if (isset($_SESSION['user']) and $_SESSION['user']->role_id === 2) : ?>
                    <td><a href="<?= URL ?>/src/Controller/ProduitController.php?param=delete_produit&id=<?= $produit->id ?>"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></a></td>
                    <td><a href="<?= URL ?>/src/Controller/ProduitController.php?param=detail_produit&id=<?= $produit->id ?>"><i class="fa-regular fa-eye"></i></a></td>
                    <td><a href="<?= URL ?>/src/Controller/ProduitController.php?param=edit_produit&id=<?= $produit->id ?>"><i class="fa-solid fa-pencil"></i></a></td>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>


<!-- ___________________________ici Fin code html _____________________________ -->

<?php
include_once ROOT . 'views/include/footer.php';

?>
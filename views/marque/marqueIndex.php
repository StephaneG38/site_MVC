<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<!-- ___________________________ici code html _____________________________ -->

<div class="container">
    <h3> Liste des Marques </h3>
    <a class="btn btn-primary" href="<?= URL ?>/src/Controller/MarqueController.php?param=ajouter_marque">Ajouter marque</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Logo</th>
                <th scope="col">Pays</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($marques as $marque) : ?>
                <tr>
                    <th scope="row"><?= $marque->id ?></th>
                    <td><?= $marque->name ?></td>
                    <td><?= $marque->logo ?></td>
                    <td><?= $marque->pays ?></td>
                    <td><a href="<?= URL ?>/src/Controller/MarqueController.php?param=delete_marque&id=<?= $marque->id ?>"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></a></td>
                    <td><a href="<?= URL ?>/src/Controller/MarqueController.php?param=detail_marque&id=<?= $marque->id ?>"><i class="fa-regular fa-eye"></i></a></td>
                    <td><a href="<?= URL ?>/src/Controller/MarqueController.php?param=edit_marque&id=<?= $marque->id ?>"><i class="fa-solid fa-pencil"></i></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>


<!-- ___________________________ici Fin code html _____________________________ -->

<?php
include_once ROOT . 'views/include/footer.php';

?>
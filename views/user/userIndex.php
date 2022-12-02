<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

?>
<!-- ___________________________ici code html _____________________________ -->

<div class="container">
    <h3> Liste des Users </h3>
    <a class="btn btn-primary" href="<?= URL ?>/src/Controller/UserController.php?param=ajouter_user">Ajouter user</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">adresse</th>
                <th scope="col">CP</th>
                <th scope="col">Ville</th>
                <th scope="col">Email</th>
                <th scope="col">tel</th>
                <!-- <th scope="col">password</th> -->
                <th scope="col">role_id</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $user->id ?></th>
                    <td><?= $user->nom ?></td>
                    <td><?= $user->prenom ?></td>
                    <td><?= $user->adresse ?></td>
                    <td><?= $user->cp ?></td>
                    <td><?= $user->ville ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->tel ?></td>
                    <!-- <td><?= $user->password ?></td> -->
                    <td><?= $user->role_id ?></td>
                    <td><a href="<?= URL ?>/src/Controller/UserController.php?param=delete_user&id=<?= $user->id ?>"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></a></td>
                    <td><a href="<?= URL ?>/src/Controller/UserController.php?param=detail_user&id=<?= $user->id ?>"><i class="fa-regular fa-eye"></i></a></td>
                    <td><a href="<?= URL ?>/src/Controller/UserController.php?param=edit_user&id=<?= $user->id ?>"><i class="fa-solid fa-pencil"></i></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>


<!-- ___________________________ici Fin code html _____________________________ -->

<?php
include_once ROOT . 'views/include/footer.php';

?>
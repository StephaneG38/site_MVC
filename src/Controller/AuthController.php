<?php

use App\Autoload;
use App\Model\UserCrud;


$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/autoload.php';

Autoload::register();

if ($_GET['param']) {
    $param = $_GET['param'];
}

$userCrud = new UserCrud();

$errors = [];
switch ($param) {
    case 'register':
        if ($_POST) {
            extract($_POST);
            if (!$nom) {
                $errors[] = 'Entrez un Nom valide';
            }
            if (!$prenom) {
                $errors[] = 'Entrez un Prenom valide';
            }

            if ($email) {
                $result = $userCrud->findByEmail($email);

                if ($result) {
                    $errors[] = 'email non valide';
                }
            } else {
                $error[] = 'Entrer un Email';
            }

            if ($password) {
                $mdp_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $_POST['password'] = $mdp_hash;
            } else {
                $error[] = 'password non valide';
            }

            if (empty($errors)) {
                $userCrud->addUser($_POST);
                $path2 = URL . 'index.php';
                header("location: $path2");
            }
        }

        include_once ROOT . 'views/auth/register.php';

        break;



    case 'login':

        if ($_POST) {
            extract($_POST);


            if ($password) {
                // pour comparer les mots de passe cryptés
                //     $mdp_hash = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $errors[] = 'password ou email non valide';
            }

            $user = $userCrud->findByEmail($email);

            if ($user) {
                $mdp_user = $user->password;
                if (password_verify($password, $mdp_user)) {
                    $_SESSION['user'] = $user;
                    $url = URL . 'index.php';
                    header("location: $url");
                } else {

                    $errors[] = 'password ou email non valide';
                }
            } else {

                $errors[] = 'password ou email non valide';
            }
        }
        include_once ROOT . 'views/auth/login.php';
        break;

    case 'logout':
        unset($_SESSION['user']);
        $url = URL . 'index.php';
        header("location: $url");
        break;
}

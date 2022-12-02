<?php

use App\Autoload;
use App\Model\UserCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/autoload.php';
// include_once $path . '/src/Model/UserCrud.php';

verif_role(2);

Autoload::register();

if ($_GET['param']) {
    $param = $_GET['param'];
}

$userCrud = new UserCrud();
switch ($param) {

    case 'liste_user':
        $users = $userCrud->findAll();
        include_once ROOT . 'views/user/userIndex.php';
        break;

    case 'ajouter_user':
        if ($_POST) {
            $mdp_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['password'] = $mdp_hash;
            $userCrud->addUser($_POST);
            header("location: UserController.php?param=liste_user");
        }
        include_once ROOT . 'views/user/ajouterUser.php';
        break;

    case 'delete_user':
        if (isset($_SESSION['user']) and $_SESSION['user']->role_id === 2) {
            $id = $_GET['id'];
            $users = $userCrud->delete($id);
            header("location: UserController.php?param=liste_user");
        }else{
            $url = URL . 'index.php';
            header("location: $url");
        }
        break;
    case 'detail_user':
        $id = $_GET['id'];
        $user = $userCrud->find($id);
        include_once ROOT . 'views/user/detailUser.php';
        break;


    case 'edit_user':
        $id = $_GET['id'];
        $user = $userCrud->find($id);
        if ($_POST) {
            $userCrud->edit($id, $_POST);
            header("location: UserController.php?param=liste_user");
        }
        include_once ROOT . 'views/user/editUser.php';
        break;
}

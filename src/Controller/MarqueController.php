<?php

use App\Autoload;
use App\Model\MarqueCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/autoload.php';



Autoload::register();

if ($_GET['param']) {
    $param = $_GET['param'];
}

$marqueCrud = new MarqueCrud();
switch ($param) {

    case 'liste_marque':
        $marques = $marqueCrud->findAll();
        include_once ROOT . 'views/marque/marqueIndex.php';
        break;

    case 'detail_marque':
        $id = $_GET['id'];
        $marque = $marqueCrud->find($id);
        include_once ROOT . 'views/marque/detailMarque.php';
        break;

    case 'ajouter_marque':
        if ($_POST) {
            $marqueCrud->addMarque($_POST);
            header("location: MarqueController.php?param=liste_marque");
        }
        include_once ROOT . 'views/marque/ajouterMarque.php';
        break;

    case 'delete_marque':
        $id = $_GET['id'];
        $marques = $marqueCrud->delete($id);
        header("location: MarqueController.php?param=liste_marque");
        break;

    case 'edit_marque':
        $id = $_GET['id'];
        $marque = $marqueCrud->find($id);
        if ($_POST) {
            $marqueCrud->edit($id, $_POST);
            header("location: MarqueController.php?param=liste_marque");
        }
        include_once ROOT . 'views/marque/editMarque.php';
        break;
}

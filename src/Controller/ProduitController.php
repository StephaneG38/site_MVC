<?php

use App\Autoload;
use App\Core;
use App\Model\ProduitCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/autoload.php';



Autoload::register();

if ($_GET['param']) {
    $param = $_GET['param'];
}

$produitCrud = new ProduitCrud();
switch ($param) {

    case 'liste_produit':
        $produits = $produitCrud->findAll();
        include_once ROOT . 'views/produit/produitIndex.php';
        break;

    case 'detail_produit':
        $id = $_GET['id'];
        $produit = $produitCrud->find($id);
        include_once ROOT . 'views/produit/detailProduit.php';
        break;

    case 'ajouter_produit':
        if ($_POST) {
            $produitCrud->addProduit($_POST);
            header("location: ProduitController.php?param=liste_produit");
        }
        include_once ROOT . 'views/produit/ajouterProduit.php';
        break;

    case 'delete_produit':
        $id = $_GET['id'];
        $produits = $produitCrud->delete($id);
        header("location: ProduitController.php?param=liste_produit");
        break;

    case 'edit_produit':
        $id = $_GET['id'];
        $produit = $produitCrud->find($id);
        if ($_POST) {

            // Import image
        if ($_FILES['file']['name'] != null) {

            $name = $_FILES['file']['name'];
            $tmpName = $_FILES['file']['tmp_name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];

            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));
            $extensions = ['jpg', 'png', 'jpeg', 'gif', 'webp'];
            $maxSize = 400000;

            $uniqueName = uniqid('', true);
            $file = $uniqueName . "." . $extension;

            if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
                move_uploaded_file($tmpName, ROOT . 'assets/img/' . $file);
            } else {
                echo "Mauvaise extension";
            }

            $_POST['image'] = $file;
        }
        // Fin import image

            $produitCrud->edit($id, $_POST);
            // on retourne à la page liste produit
            header("location: ProduitController.php?param=liste_produit");
        }
        include_once ROOT . 'views/produit/editproduit.php';
        break;
}

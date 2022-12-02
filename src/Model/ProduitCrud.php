<?php

namespace App\Model;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';

use PDO;
use App\Core\cbd;

class ProduitCrud
{

    private $cbd;
    public function __construct()
    {
        $this->cbd = new Cbd();
    }


    public function findAll()
    {
        $sql = "SELECT * FROM produit";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }


    public function addProduit($post)
    {
        $this->cbd->add($post, 'produit');
    }

    // sans fonction "add" voir dans Cdb.php
    // public function addUser($post)
    // {
    //     extract($post);
    //     $nom = $this->cbd->netoiFormulaire($nom);
    //     $prenom = $this->cbd->netoiFormulaire($prenom);
    //     $adresse = $this->cbd->netoiFormulaire($adresse);
    //     $cp = $this->cbd->netoiFormulaire($cp);
    //     $ville = $this->cbd->netoiFormulaire($ville);
    //     $email = $this->cbd->netoiFormulaire($email);
    //     $tel = $this->cbd->netoiFormulaire($tel);
    //     $password = $this->cbd->netoiFormulaire($password);
    //     $role_id = $this->cbd->netoiFormulaire($role_id);

    //     $sql = "INSERT INTO user (nom, prenom, adresse, cp, ville, email, tel, password, role_id)
    //             VALUES (:nom, :prenom, :adresse, :cp, :ville, :email, :tel, :password, :role_id)";

    //     $stmt = $this->cbd->getConnect()->prepare($sql);
    //     $stmt->bindParam(':nom', $nom);
    //     $stmt->bindParam(':prenom', $prenom);
    //     $stmt->bindParam(':adresse', $adresse);
    //     $stmt->bindParam(':cp', $cp);
    //     $stmt->bindParam(':ville', $ville);
    //     $stmt->bindParam(':email', $email);
    //     $stmt->bindParam(':tel', $tel);
    //     $stmt->bindParam(':password', $password);
    //     $stmt->bindParam(':role_id', $role_id);

    //     $stmt->execute();
    // }



    public function delete($id)
    {
        $sql = "DELETE FROM produit WHERE id = $id";
        $stmt = $this->cbd->getConnect()->query($sql);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM produit WHERE id = $id";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function edit($id, $post)
    {

        extract($post);
        $ref = $this->cbd->netoiFormulaire($ref);
        $nom = $this->cbd->netoiFormulaire($nom);
        $marque_id = $this->cbd->netoiFormulaire($marque_id);
        $taux_tva_id = $this->cbd->netoiFormulaire($taux_tva_id);
        $prix_ht = $this->cbd->netoiFormulaire($prix_ht);
        $stock = $this->cbd->netoiFormulaire($stock);
        $categorie_id = $this->cbd->netoiFormulaire($categorie_id);
        $image = $this->cbd->netoiFormulaire($image);
       
        $sql = "UPDATE produit SET ref = :ref, nom = :nom, marque_id = :marque_id, taux_tva_id = :taux_tva_id, prix_ht = :prix_ht, stock = :stock, categorie_id = :categorie_id, image = :image WHERE id = $id";

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt->bindParam(':ref', $ref);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':marque_id', $marque_id);
        $stmt->bindParam(':taux_tva_id', $taux_tva_id);
        $stmt->bindParam(':prix_ht', $prix_ht);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':categorie_id', $categorie_id);
        $stmt->bindParam(':image', $image);
       
        $stmt->execute();
    }

      public function uploadImg($file){



        
      }

}

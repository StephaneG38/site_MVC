<?php

namespace App\Model;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';

use PDO;
use App\Core\cbd;

class UserCrud
{

    private $cbd;
    public function __construct()
    {
        $this->cbd = new Cbd();
    }


    public function findAll()
    {
        $sql = "SELECT * FROM user";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }


    public function addUser($post)
    {
        $this->cbd->add($post, 'user');
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
        $sql = "DELETE FROM user WHERE id = $id";
        $stmt = $this->cbd->getConnect()->query($sql);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM user WHERE id = $id";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function edit($id, $post)
    {

        extract($post);
        $nom = $this->cbd->netoiFormulaire($nom);
        $prenom = $this->cbd->netoiFormulaire($prenom);
        $adresse = $this->cbd->netoiFormulaire($adresse);
        $cp = $this->cbd->netoiFormulaire($cp);
        $ville = $this->cbd->netoiFormulaire($ville);
        $email = $this->cbd->netoiFormulaire($email);
        $tel = $this->cbd->netoiFormulaire($tel);
        $password = $this->cbd->netoiFormulaire($password);
        $role_id = $this->cbd->netoiFormulaire($role_id);

        $sql = "UPDATE user SET nom = :nom, prenom = :prenom, adresse = :adresse, cp = :cp, ville = :ville, email = :email, tel = :tel, password = :password, role_id = :role_id WHERE id = $id";

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':cp', $cp);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role_id', $role_id);

        $stmt->execute();
    }

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

   
}

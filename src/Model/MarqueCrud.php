<?php

namespace App\Model;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';

use PDO;
use App\Core\cbd;

class MarqueCrud
{

    private $cbd;
    public function __construct()
    {
        $this->cbd = new Cbd();
    }


    public function findAll()
    {
        return $this->cbd->findAll('marque');
    }


    public function addMarque($post)
    {
        extract($post);

        $name = $this->cbd->netoiFormulaire($name);
        $logo = $this->cbd->netoiFormulaire($logo);
        $pays = $this->cbd->netoiFormulaire($pays);


        $sql = "INSERT INTO marque (name, logo, pays)
                VALUES (:name, :logo, :pays)";

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':logo', $logo);
        $stmt->bindParam(':pays', $pays);


        $stmt->execute();
    }
    public function find($id)
    {
        $sql = "SELECT * FROM marque WHERE id = $id";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM marque WHERE id = $id";
        $stmt = $this->cbd->getConnect()->query($sql);
    }

    public function edit($id, $post)
    {

        extract($post);
        $name = $this->cbd->netoiFormulaire($name);
        $logo = $this->cbd->netoiFormulaire($logo);
        $pays = $this->cbd->netoiFormulaire($pays);

        $sql = "UPDATE marque SET name = :name, logo = :logo, pays = :pays WHERE id = $id";

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':logo', $logo);
        $stmt->bindParam(':pays', $pays);
        $stmt->execute();
    }
}

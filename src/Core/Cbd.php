<?php

namespace App\Core;

use PDO;

class Cbd
{

    private $dsn = "mysql:host=localhost;dbname=wf3_ecommercetel";
    private $username = "root";
    private $password = "";

    public function getConnect()
    {
        $pdo = new PDO($this->dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public function netoiFormulaire($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        filter_var(
            $string,
            FILTER_SANITIZE_SPECIAL_CHARS,
            [
                'flags' => FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_BACKTICK
            ]
        );
        return $string;
    }

    public function findAll($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function requette($sql, array $param = null)
    {

        $cbd = $this->getConnect();
        if ($param !== null) {
            // code pour requete prepare
            $stmt = $cbd->prepare($sql);
            $stmt->execute($param);
            return $stmt;
        } else {
            // code pour requete query
            return $cbd->query($sql);
        }
    }


    public function add(array $tab, string $table)
    {
        $champs = [];
        $valeurs = [];
        $params = [];

        foreach ($tab as $champ => $valeur) {
            $champs[] = $champ;
            $valeurs[] = ' ? ';
            $params[] = $this->netoiFormulaire($valeur);
        }

        $string_colonne = implode(' , ', $champs);
        $string_valeur = implode(' , ', $valeurs);

        $sql = "INSERT INTO $table (" . $string_colonne . ") VALUE (" . $string_valeur . ")";
        return $this->requette($sql, $params);
    }

    public function uploadImg($table, $champ)
    {
        


    }
}

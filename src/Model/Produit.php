<?php

namespace App\Model;

class Produit
{
/**
 * Undocumented variable
 *
 * @var [int]
 */
    private $id;

    private $ref;

    private $nom;

    private $marque_id;

    private $taux_tva_id;

    private $prix_ht;

    private $stock;

    private $categorie_id;

    private $image;



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set the value of ref
     *
     * @return  self
     */ 
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of marque_id
     */ 
    public function getMarque_id()
    {
        return $this->marque_id;
    }

    /**
     * Set the value of marque_id
     *
     * @return  self
     */ 
    public function setMarque_id($marque_id)
    {
        $this->marque_id = $marque_id;

        return $this;
    }

    /**
     * Get the value of taux_tva_id
     */ 
    public function getTaux_tva_id()
    {
        return $this->taux_tva_id;
    }

    /**
     * Set the value of taux_tva_id
     *
     * @return  self
     */ 
    public function setTaux_tva_id($taux_tva_id)
    {
        $this->taux_tva_id = $taux_tva_id;

        return $this;
    }

    /**
     * Get the value of prix_ht
     */ 
    public function getPrix_ht()
    {
        return $this->prix_ht;
    }

    /**
     * Set the value of prix_ht
     *
     * @return  self
     */ 
    public function setPrix_ht($prix_ht)
    {
        $this->prix_ht = $prix_ht;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of categorie_id
     */ 
    public function getCategorie_id()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     *
     * @return  self
     */ 
    public function setCategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}

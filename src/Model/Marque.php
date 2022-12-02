<?php

namespace App\Model;

class Marque
{
    /**
     * Undocumented variable
     *
     * @var [int]
     */
    private $id;

    private $name;

    private $logo;

    private $pays;

     

    /**
     * Get undocumented variable
     *
     * @return  [int]
     */ 
    public function getId()
    {
        return $this->id;
    }

    // /**
    //  * Set undocumented variable
    //  *
    //  * @param  [int]  $id  Undocumented variable
    //  *
    //  * @return  self
    //  */ 
    // public function setId([int] $id)
    // {
    //     $this->id = $id;

    //     return $this;
    // }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }
}

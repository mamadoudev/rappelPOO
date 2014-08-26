<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 25/08/14
 * Time: 11:02
 */

class produit {
    private $libelle;
    private $prix;
    private $numero;

    public function __construct($libelle='', $numero=0, $prix=0)
    {
        $this->libelle = $libelle;
        $this->numero = $numero;
        $this->prix = $prix;
    }
    function __toString()
    {
        // TODO: Implement __toString() method.

        $str="libelle= ".$this->libelle."nombre prix".$this->prix;
        return $str;
    }
    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }


} 
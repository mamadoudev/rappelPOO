<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 25/08/14
 * Time: 12:37
 */
require_once ("produit.php");
class chaise extends produit {
    /**
     * @var
     */
    private $couleur;
    /**
     * @var
     */
    private $nbPied;

    /**
     * @param string $couleur
     * @param int $nbPied
     */
    function __construct($libelle, $numero, $prix,$couleur, $nbPied)
    {
        parent::__construct($libelle, $numero, $prix);
        $this->couleur = $couleur;
        $this->nbPied = $nbPied;
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
       $str =  parent::__toString();
        $str.="couleur= ".$this->couleur."nombre pied  = ".$this->libelle;
        return $str;
    }


    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $nbPied
     */
    public function setNbPied($nbPied)
    {
        $this->nbPied = $nbPied;
    }

    /**
     * @return mixed
     */
    public function getNbPied()
    {
        return $this->nbPied;
    }


} 
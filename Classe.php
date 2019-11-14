<?php


class Classe
{
    private $nom,
            $profprincipal,
            $effectif,
            $eleves;

    public function __construct($nom, $effectif, $profprincipal)
    {
        $this->nom           = $nom;
        $this->profprincipal = $profprincipal;
        $this->effectif      = $effectif;
        $this->eleves       = [];

        // Fin du constructeur

        /*  ----------- Getter -------------*/
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function getProfprincipal()
    {
        return $this->profprincipal;
    }

    /**
     * @return array
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * @param array $eleves
     */
    public function ajouterUnEleves($eleve)
    {
        $this->eleves[] = $eleve;
    }

    /*  ----------- Setter -------------*/

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    public function setProfprincipal($profprincipal)
    {
        $this->profprincipal = $profprincipal;
    }
}
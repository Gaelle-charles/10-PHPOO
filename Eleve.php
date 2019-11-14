<?php

class Eleve
{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age){
        $this->nom     = $nom;
        $this->prenom  = $prenom ;
        $this->age     = $age;
    }

    /*  ----------- Getter -------------*/
    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    /*  ----------- Setter -------------*/

    public function setAge($age)
    {
        $this->age = age;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = prenom;
    }

    public function setNom($nom)
    {
        $this->nom = nom;
    }
}

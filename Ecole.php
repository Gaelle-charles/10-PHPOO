<?php


/**
 * Une Class Php est une entité regroupant des variables et des fonctions par thème
 * des variables appelées "propriété" et
 * les fonctions appelées "méthode"
 */
class Ecole
{
    /*
     * Déclaration des propriétés de la class Ecole
     * private nous permet d'interdire l'accès direct aux propriétés par les objets
     * EN private, les propriétes sont accesibles uniquement depuis l'intérieur de la class
     *
     * TOUJOURS METTRE LES PROPRIETES EN PRIVATE
     */
    private $nom;
    private $adresse;
    private $effectif;
    private $directeur;
    private $classes=[];

    /*
     * Alors pour permettre l'attribution de valeurs à mes propriétés,
     * je vais mettre en place un CONSTRUCTEUR
     * -------------------------------
     * L'objectif du constructeur c'est de remplir / d'initialiser / hydrater
     * les propriétés de la class avec des valeurs.
     * -------------------------------
     * Il doit ê accessible publiquement
     * -------------------------------
     * cette fonction est exécutée automatiquement par PHP au moment de l'instanciation de la classe.
     */

    public function __construct($nom, $adresse, $effectif, $directeur)
    {
        /*
         * La propriété "nom" de classe ($this->nom)
         * prend comme valuer, la valeur de la variable ( $nom )
         * passé en paramétre au moment de l'instanciation
         * -----------------------------------------------
         * $this se référe à votre objet
         */
        $this->nom       = $nom;
        $this->effectif  = $effectif;
        $this->adresse   = $adresse;
        $this->directeur = $directeur;
        // Fin du constructeur

        /*  ----------- Getter -------------*/
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function getDirecteur()
    {
        return $this->directeur;
    }
    /*  ----------- Setter -------------*/

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    /*  ----------- CREER UNE FONCTION -------------*/
    public function ajouterUneClasse(Classe$classe){
        $this->classes[] = $classe;
    }
}

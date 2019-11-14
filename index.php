<?php

#importation de notre classe Ecole
require_once 'Ecole.php';
#importation de notre classe Classe
require_once 'Classe.php';
#importation de notre classe Eleve
require_once 'Eleve.php';

/*
 * Création d'une instance, de la classe Ecole.
 * Ici, notre variable $ecole est un objet de la classe Ecole.
 * Elle a accès à l'ensemble des propriétés et des méthodes qui la compose
 */


$ecole = new Ecole(
    'WF3 Guadeloupe',
    'ASFO - ZI Bergevin 97110 PTP',
    'Nathalie BAUSSET',
    14
);

#Affectation des valeurs a notre objet:
#$ecole->nom = 'WF3 Guadeloupe';
#$ecole->adresse = 'ASFO - ZI Bergevin 97110 PTP';
#$ecole->effectif = '14';
#$ecole->directeur = 'Nathalie BAUSSET';

echo '<pre>';
print_r( $ecole );
echo '</pre>';

#Afficher le nom de l'école dans un h1
#echo '<h1>' .$ecole->nom . '</h1>';
echo '<h1>' .$ecole->getNom() . '</h1>';
echo '<h1>' .$ecole->getDirecteur() . '</h1>';
echo '<h1>' .$ecole->getEffectif() . '</h1>';

# Je veux changer le nom de l'école
$ecole->setNom('Web force3 Guadeloupe');

echo '<pre>';
print_r( $ecole );
echo '</pre>';

/*
 * CONSIGNE: En vous, appuyant sur l'exo Ecole ;
 * créer les classes "Classe" et "Eleve" dans des fichiers séparés.
 * ---------------------------------
 * Classe.php et Eleve.php : Propriétés,
 * Constructeur, Getters & Setters.
 *
 */

# CREATION DES ELEVES
$eleve1 = new Eleve(
    'Juan',
    'Carlos',
    '37');

$eleve2 = new Eleve(
    'Thierry',
    'miguel',
    '22',

);

$eleve3 = new Eleve(
    'Charles',
    'GATOX',
    '37');

$eleve4 = new Eleve(
    'Sophie',
    'COURRIER',
    '99');

$eleve5 = new Eleve(
    'Eglantine',
    'URRIER',
    '65');

# CREATION DES CLASSES
$classe1 = new Classe('Front', '14', 'Raphael ELSO');
$classe2 = new Classe('Back', '14', 'Hugo LIEGEARD');
$classe3 = new Classe('Front', '14', 'Angélique JEAN-NOEL');

#Affecter chaque éléve dans une classe
$classe1->ajouterUnEleves($eleve1);
$classe3->ajouterUnEleves($eleve2);

$classe3->ajouterUnEleves($eleve3);
$classe3->ajouterUnEleves($eleve4);

echo '<pre>';
print_r( $classe1 );
print_r( $classe2 );
print_r( $classe3 );
echo '</pre>';

$ecole->ajouterUneClasse($classe1);
$ecole->ajouterUneClasse($classe2);
$ecole->ajouterUneClasse($classe3);

echo'<pre>';
print_r( $ecole);
echo'</pre>';


/* Afficher la liste (ol) classe et pour (li) chaque étudiant */


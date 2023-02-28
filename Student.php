<?php
declare(strict_types=1);
namespace TP4;

class Student
{
    private string $lastName;
    private string $firstName;
    private array $marks;

    /**
     * Constructeur de la classe Student. Ce constructeur permet d’affecter un nom,
     * un prénom et une liste de notes à un étudiant. Lorsque ces caractéritiques ne sont pas renseignées lors de
     * l’appel du contructeur, l'étudiant aura comme attribut Unknown, Unknown et une liste vide.
     *
     * @param string $lastName (optional) Nom de l'étudiant
     * @param string $firstName (optional) Prénom de l'étudiant
     * @param array $marks (optional) Liste de notes de l'étudiant
     */
    public function __construct (string $lastName = "Unknown", string $firstName = "Unknown", array $marks = array())
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->marks = $marks;
    }

    /**
     * Affichage des attributs de l'étudiant. Retourne une chaîne de caractères composée
     * du prénom, du nom et d'une liste de note de l'étudiant.
     *
     * @return string Attributs du point
     */
    public function __toString() : string
    {
        $res = "$this->lastName $this->firstName\n";
        $res .= "Notes : ";
        for ($)
        return $res;
    }
}
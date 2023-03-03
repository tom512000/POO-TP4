<?php
declare(strict_types=1);
namespace TP4;

use OutOfRangeException;

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
     * @return string Attributs de l'étudiant
     */
    public function __toString() : string
    {
        $res = "$this->lastName $this->firstName\n";
        $res .= "Notes : [ ";
        foreach ($this->marks as $value) {
            $res .= "$value ";
        }
        $res .= "]";
        return $res;
    }

    /**
     * Accesseur à l'instance lastName de Student. Retourne la valeur de l'instance lastName
     * sous forme de chaine de caractères.
     *
     * @return string Instance lastName de Student
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * Modificateur à l'instance lastName de Student. Permet d’affecter une nouvelle
     * valeur à l'instance lastName de Student.
     *
     * @param string $lastName Instance lastName de Student
     */
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    /**
     * Accesseur à l'instance marks de Student. Retourne la valeur à l'indice $index
     * de l'instance marks sous forme de nombre à virgule.
     *
     * @param int $index Indice de la valeur dans l'instance marks
     *
     * @return float Valeur de l'instance marks à l'indice $index
     */
    public function getMark(int $index) : float // throw OutOfRangeException
    {
        if($index < 0 || $index >= count($this->marks))
            throw new OutOfRangeException ( "getMark - indice invalide : $index");
        return ($this->marks)[$index];
    }

    /**
     * Modificateur à l'instance marks de Student. Permet d’affecter une nouvelle
     * valeur à l'indice $index de l'instance marks de Student.
     *
     * @param int $index Indice de la valeur dans l'instance marks
     * @param float $value Indice de la nouvelle note dans l'instance marks
     */
    public function setMark(int $index, float $value) : void
    {
        if($index < 0 || $index >= count($this->marks))
            throw new OutOfRangeException ( "setMark - indice invalide : $index");
        ($this->marks)[$index] = $value;
    }

    /**
     * Méthode permettant de vérifier l'égalité entre les notes de deux instances de classe
     * Student.
     *
     * @param Student $student2 (optional) Instance de la classe Student
     */
    public function isEqual(Student $student2) : bool
    {
        $res = false;
        if ($this->marks == $student2->marks) {
            $res = true;
        }
        return $res;
    }

    /**
     * Méthode permettant de compter le nombre de notes dans une instance marks de classe Student.
     *
     * @return int (optional) Nombre de notes dans l'instance marks
     */
    public function getMarksCount() : int
    {
        return count($this->marks);
    }

    /**
     * Méthode permettant de calculer la moyenne des notes de l'instance marks de classe Student.
     *
     * @return float (optional) Moyenne des notes
     */
    public function getMean() : float
    {
        $moy = 0;
        foreach ($this->marks as $value){
            $moy += $value;
        }
        return round($moy/count($this->marks),2);
    }

    /**
     * Méthode permettant de retourner la note la plus petite de l'instance marks de classe Student.
     *
     * @return float (optional) Note la plus petite de l'instance marks
     */
    public function getMinimum() : float
    {
        $min = ($this->marks)[0];
        for ($i = 1; $i < count($this->marks); $i++) {
            if (($this->marks)[$i] < $min) {
                $min = ($this->marks)[$i];
            }
        }
        return $min;
    }

    /**
     * Méthode permettant de retourner l'indice de la note la plus élevé de l'instance
     * marks de classe Student.
     *
     * @return float (optional) Indice de la note la plus élevé de l'instance marks
     */
    public function getMaximumIndex() : float
    {
        $max = ($this->marks)[0];
        $indmax = 0;
        for ($i = 1; $i < count($this->marks); $i++) {
            if (($this->marks)[$i] > $max) {
                $max = ($this->marks)[$i];
                $indmax = $i;
            }
        }
        return $indmax;
    }

    /**
     * Méthode permettant de vérifier si une note se trouve dans une liste de note.
     *
     * @return bool (optional) True si la note est dans la liste, false sinon
     */
    public function contains(float $note) : bool
    {
        $res = false;
        foreach ($this->marks as $value) {
            if ($value == $note) {
                $res = true;
            }
        }
        return $res;
    }

    public function getOccurenceCount(float $)
}
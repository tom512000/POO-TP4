<?php
declare(strict_types=1);
namespace TP4;
use OutOfRangeException;

require_once "Student.php";

# Question 1
$inconnu = new Student;
var_dump($inconnu);
# Caractéristiques de l'instance $inconnu :
# - lastName   -> string   -> "Unknown"
# - firstName  -> string   -> "Unknown"
# - marks      -> array    -> None

# Question 2
$louis = new Student("Dupont", "Louis");
var_dump($louis);
# Caractéristiques de l'instance $louis :
# - lastName   -> string   -> "Dupont"
# - firstName  -> string   -> "Louis"
# - marks      -> array    -> None

# Question 3
$notes = array(9.78 , 18 , 12.5 , 10 , 16.25);
$kevin = new Student("Laplace", "Kevin", $notes);
var_dump($kevin);
# Caractéristiques de l'instance $kevin :
# - lastName   -> string   -> "Laplace"
# - firstName  -> string   -> "Kevin"
# - marks      -> array    -> array(9.78 , 18 , 12.5 , 10 , 16.25)

# Question 4
$autre = clone $kevin;
var_dump($autre);

# Question 5
echo $kevin."\n";

# Question 6
echo $kevin."\n";
$notes[0] = 0;
echo $kevin."\n";

# Question 7
echo $kevin->getlastName()."\n";
$kevin->setLastName("Didier");
echo $kevin->getlastName()."\n";

# Question 8
try
{
    echo $kevin->getMark(5)."\n";
}
catch (OutOfRangeException $e)
{
//gestion de l’exception, par exemple :
    echo $e->getMessage()."\n" ;
}

# Question 9
echo $kevin."\n";
$kevin->setMark(2, 10.5);
echo $kevin."\n";

# Question 10
$notes2 = array(19.78 , 18 , 17.5 , 19 , 18.25);
$tom = new Student("Sikora", "Tom", $notes2);
echo $kevin->isEqual($tom);

$notes3 = array(9.78 , 18 , 12.5 , 10 , 16.25);
$guillaume = new Student("Darrozes", "Guillaume", $notes3);
echo $kevin->isEqual($guillaume);

# Question 11
echo $tom->getMarksCount()."\n";

# Question 12
echo $tom->getMean()."\n";

# Question 13
echo $tom->getMinimum()."\n";

# Question 14
echo $tom."\n";
echo $tom->getMaximumIndex()."\n";

# Question 15
echo $tom."\n";
echo $tom->contains(18.25)."\n";

# Question 16

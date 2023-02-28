<?php
declare(strict_types=1);
namespace TP4;
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

<?php
/**
 * Created by PhpStorm.
 * User: bramepstein
 * Date: 1/23/18
 * Time: 11:25 AM
 */

//string value
$dog = "Janie";
//Integer Value
$age = 12;
// Boolean Values: true or false s
$male = false;

echo $dog;
print "<h1>My dog is $age</h1>";
echo "Is the dog male? $male";

//Single and Double Quote
echo '<p class="fun">Here is my text </p>';

//Concatenation
echo "My dog is " . $dog . "and she is" . $age . " years old.";

//Arrays
$animals = ["dog", "cat", "mouse", "horse", true, 32];

echo "I hate $animals[2] the most."

?>
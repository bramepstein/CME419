<?php

include('assignmentHeader.html');
$olympicSports = array ("Speed Skating", "Bobsleigh", "Snowboarding", "Curling", "Hockey", "Luge");

echo "Normal Order:". " ".  $olympicSports[0] . ", " . $olympicSports[1] . ", " . $olympicSports[2] . ", " . $olympicSports[3] . ", " . $olympicSports[4] . ", " . $olympicSports[5] . "<br/>" ;
echo "Alphabetical Order:". " ". $olympicSports[1] . ", " . $olympicSports[3] . ", " . $olympicSports[4] . ", " . $olympicSports[5] . ", " . $olympicSports[2] . ", " . $olympicSports[0] . "<br/>" ;
echo "Reserve Alphabetical Order:". " ". $olympicSports[0] . ", " . $olympicSports[2] . ", " . $olympicSports[5] . ", " . $olympicSports[4] . ", " . $olympicSports[3] . ", " . $olympicSports[1] . "<br/>" ;
?>
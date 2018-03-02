<?php

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];



if(!empty($_POST['fName'])){
    $fName = $_POST['fName'];
}
else {
    echo "<p> You did not enter a first name.</p>";
}

if(!empty($_POST['lName'])) {
    $lName = $_POST['lName'];
}
else {
    echo "<p>You did not enter a last name.</p>";
}

if(!empty($_POST['streetAddress'])) {
    $streetAddress = $_POST['streetAddress'];
}
else {
    echo "<p>You did not enter a street address.</p>";
}

if(!empty($_POST['city'])) {
    $city = $_POST['city'];
}
else {
    echo "<p>You did not enter a city.</p>";
}

if(!empty($_POST['state'])) {
    $state = $_POST['state'];
}
else {
    echo "<p>You did not enter a state.</p>";
}

if(!empty($_POST['zip'])) {
    $zip = $_POST['zip'];
}
else {
    echo "<p>You did not enter a zip code.</p>";
}

$to="bepstein@butler.edu";
$subject="contact";
$body="First Name: $fName <br/>";
$body="Last Name: $lName <br/>";
$body="Street Address: $streetAddress<br/>";
$body="City: $city<br/>";
$body="State: $state<br/>";
$body="Zip: $zip<br/>";


if($fName && $lName && $streetAddress && $city && $state && $zip) {
$sendMail=mail ($to, $subject, $body);
if($sendMail) {
    echo "Name:" . " " . $fName . " " . $lName . "<br/>";
    echo "Address:" . " " . $streetAddress . "<br/>";
    echo $city . "," . " " .  $state . " " . $zip . "<br/>";
}

else {
    echo "Please fill out all information";
}

}



?>


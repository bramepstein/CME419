<?php


include('assignmentHeader.html');


?>

<form action="responsePage.php" method="post">
    <label for="fName">First Name</label>
    <input type="text" name="fName" id="input-text" placeholder="Bob">
    <br/>
    <label for="lName">Last Name</label>
    <input type="text" name="lName" id="input-text" placeholder="Denver">
    <br/>
    <label for="streetAddress">Street Address</label>
    <input type="text" name="streetAddress" id="input-text" placeholder="1234 easy rd.">
    <br/>
    <label for="city">City</label>
    <input type="text" name="city" id="input-text" placeholder="Indianapolis">
    <br/>
    <label for="state">State</label>
    <input type="text" name="state" id="input-text" placeholder="Indiana">
    <br/>
    <label for="zip">Zip</label>
    <input type="text" name="zip" id="input-text" placeholder="123456">
    <br/>
    <button>Submit</button>



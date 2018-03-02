<?php

include('assignmentHeader.html');

    $height = $_POST['height'];
    $width = $_POST['width'];


function squareFootCalc($height, $width) {
    $total = $height * $width;
    $total = number_format($total, 2);
    return $total;
}
$total = squareFootCalc($height, $width);

$message =  "<p>The square footage is: " . $total . "</p>";

?>

<form method="post" action="assignment10.php">
    <label for="height">Height</label>
    <input type="text" name="height" id="height" placeholder="4">
    <br/>

    <label for="width">Width</label>
    <input type="text" name="width" id="height" placeholder="4">
    <br/>
    <input type="submit" value="Calculate Total" id="submit"/>

</form>

<?php

echo $message;

?>

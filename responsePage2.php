<?php
$num = $_POST['number'];

if ($num < "50") {
    echo "That was a good deal!";
} elseif ($num < "75") {
    echo "That seems about right...";
} elseif ($num < "100") {
    echo "That was a little pricey";
}
 else {
    echo "Wow! that was expensive!";
}
?>
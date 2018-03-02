<?php
include('assignmentHeader.html');

$xvalue = 12;
$yvalue = 8;

$addition = $xvalue + $yvalue;
$subtraction = $xvalue - $yvalue;
$multiplication = $xvalue * $yvalue;
$division = $xvalue / $yvalue;
$modulus = $xvalue % $yvalue;
$increment = $xvalue ++;
$decrement = $yvalue --;


?>

<table>

    <thead>

        <tr>
        <th> <b>X = 12 Y = 8 </b> </th>
        </tr>

    </thead>

    <tbody>

    <tr>
        <td>Operation</td>
        <td>Result</td>
    </tr>

    <tr>
        <td> Addition</td>
        <td> <?php echo $addition ?> </td>
    </tr>

    <tr>
        <td> Subtraction</td>
        <td> <?php echo $subtraction ?> </td>
    </tr>

    <tr>
        <td> Multiplication</td>
        <td> <?php echo $multiplication ?> </td>
    </tr>

    <tr>
        <td> Division</td>
        <td> <?php echo $division ?> </td>
    </tr>

    <tr>
        <td> Modulus</td>
        <td> <?php echo $modulus ?> </td>
    </tr>

    <tr>
        <td> Increment of X</td>
        <td> <?php echo $increment ?> </td>
    </tr>

    <tr>
        <td> Decrement</td>
        <td> <?php echo $decrement ?> </td>
    </tr>

    </tbody>


</table>

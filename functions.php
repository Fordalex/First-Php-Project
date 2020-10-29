<?php
function myCalculator($numOne, $numTwo, $oper) {
    if ($oper == "add") {
        return $numOne + $numTwo;
    } elseif ($oper == "sub") {
        return $numOne - $numTwo;
    } else {
        return "There was an error!";
    }
}

$numOne = $_GET["numOne"];
$numTwo = $_GET["numTwo"];
$oper = $_GET["oper"];

echo "Value: " . myCalculator($numOne, $numTwo, $oper);
?>
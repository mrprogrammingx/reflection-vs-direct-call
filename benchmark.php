<?php

require_once('./Classes/Calculator.php');

function calculateWithReflectionMethod()
{
    $calculator = new Calculator();
    $method = new ReflectionMethod($calculator, 'add');

    $sum = [];
    for ($i = 0; $i < 1000000; $i++) {
        $sum[] = $method->invoke($calculator, 5, 3);
    }

    return $sum;
}

function calculateMethod()
{
    $calculator = new Calculator();

    $sum = [];
    for ($i = 0; $i < 1000000; $i++) {
        $sum[] = $calculator->add(5, 3);
    }

    return $sum;
}

$startFirst = microtime(true);
calculateMethod();
$firstDuration = microtime(true) - $startFirst;
echo 'Direct method call: ' . $firstDuration . PHP_EOL;

$startSecond = microtime(true);
calculateWithReflectionMethod();
$secondDuration = microtime(true) - $startSecond;
echo 'Reflection method call: ' . $secondDuration . PHP_EOL;

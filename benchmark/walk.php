<?php
function speed_test($fun, $arg, $n = 100000)
{

    $time1 = microtime(TRUE);

    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }
    $time2 = microtime(TRUE);

    return $time2 - $time1;
}

$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function test($array)
{
    array_walk($array, function ($item, $key) {
        "$key => $item<br>";
    });
};

function test2($array)
{
    $a = [];
    foreach ($array as $value) {
        $value = $a;
    }
    return $a;
};

function test3($array)
{
    $a = [];
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = $a;
    }
    return $a;
};

echo speed_test("test", $a1);
echo "<br>";
echo speed_test("test2", $a1);
echo "<br>";
echo speed_test("test3", $a1);
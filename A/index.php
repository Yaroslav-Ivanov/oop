<?php

declare(strict_types=1);

include 'autoload.php';

$a = new A();

echo $a->clear()
    ->href('https://www.tut.by')
    ->innerText('TUT.by')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();

    echo '<br>';

    echo $a->clear()
    ->href('https://www.onliner.by')
    ->innerText('Onliner.by')
    ->HTML();

    echo '<br>';

    echo $a->clear()
    ->href('https://mystat.itstep.org')
    ->innerText('Mystat')
    ->HTML();
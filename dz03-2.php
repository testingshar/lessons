<?php
//ЗАДАНИЕ 2⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅

function randArr()
{
    $min = 1;
    $max = 7;
    $rnd = rand(1,10);
    $ms = array(rand($min, $max));
    $mass = array_fill($min, $rnd, $ms);
    echo 'Просто рандомный массив ' . "<br>";
    print_r($mass);
    echo "<br><br>" . 'Массив отсортированный в обратном порядке по ключам через ф-ию krsort' . "<br>";
    krsort($mass, SORT_NUMERIC);
    foreach ($mass as $key => $value) {
        print_r($key);
        echo ' ';
    }
}
echo randArr();

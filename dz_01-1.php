<?php

echo '1)' . "<br>";
define('KONST', '555');
$a="425.78";
echo (int)$a . "<br>";
echo (float)$a . "<br>";
echo (bool)$a . "<br>";
echo (string)$a . "<br>";
echo KONST . "<br><br>"; 

echo '2)' . "<br>";
echo "(int)$a" . "<br>";
echo "(float)$a" . "<br>";
echo "(bool)$a" . "<br>";
echo "(string)$a" . "<br>";
echo "KONST" . "<br>"; 
echo "При выделении в двойные кавычки  php выводит значения переменных<br><br>";

echo '3)' . "<br>";
echo '(int)$a' . "<br>";
echo '(float)$a' . "<br>";
echo '(bool)$a' . "<br>";
echo '(string)$a' . "<br>";
echo 'KONST' . "<br>"; 
echo 'При выделении в одинарные кавычки, php все воспринимает как текст' . "<br><br>";

echo '4)' . "<br>";
 $str1 = 'Славная осень! Здоровый, ядреный';
 $str2 = 'Воздух усталые силы бодрит';
 $str3 = 'Лед неокрепший на речке студеной';
 $str4 = 'Словно как тающий сахар лежит.';
 $str5 = 'Н. А. Некрасов';

echo "<pre>";
echo $str1 . "\n";
echo $str2 . "\n";
echo $str3 . "\n";
echo $str4 . "\n";
echo "<u>" . $str5 . "</u>";
echo "</pre>";
echo "<br><br>";

echo '5)' . "<br>";
echo "<pre>" . $str1 . "\n" . $str2 . "\n" . $str3 . "\n" . $str4 . "\n" . "<u>" . $str5 . "</u>" . "<br><br>";

echo '6)' . "<br>";
$a = 10;
$b = '20 приветов';

echo $a+$b . "<br>";
echo 'При сложении 2−х значений, т.к. используется знак +, php 
пытается привести оба значения к числовому. Первое это число, а во втором значении
php проходится по строке, определяет, значения и если они числа то воспринимает их 
за числа и как только находит символ не похожий на число то дальше всю строку отбрасывает' . "<br><br>";

echo '7)' . "<br>";
echo 'Оператор xor выводит true когда хотя бы один из операторов == true, НО не оба' . "<br><br>";
echo 'true XOR true - ';
var_dump( (1==1) xor (1==1) );

echo 'true XOR false - ';
var_dump( (1==1) xor (!1==1) );

echo 'false XOR true - ';
var_dump( (!1==1) xor (1==1) );

echo 'false XOR false - ';
var_dump( (!1==1) xor (!1==1));
echo "<br>";

echo '8)' . "<br>";


?>
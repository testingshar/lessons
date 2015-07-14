<?php
//ЗАДАНИЕ 1 ⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅

/* ⋅⋅⋅⋅⋅⋅⋅⋅СДЕЛАЛ ЦИКЛОМ  WHILE
$i=0;
while ($i<100) {
$i++;
  if(0==$i%3)
  {
    echo $i . "<br>";
  }
}
*/

/* ⋅⋅⋅⋅⋅⋅⋅⋅СДЕЛАЛ ЦИКЛОМ DO - WHILE
$i=0;
do {
	$i++;
	if($i%3==0) {
	echo $i . "<br>";	
	}
	
}
while ($i<100)
*/

/* ⋅⋅⋅⋅⋅⋅⋅⋅⋅СДЕЛАЛ ЦИКЛОМ  FOR
for($i=0; $i<100; $i++) {
	if($i%3==0) {
		echo $i . "<br>";
	}
}
*/




//ЗАДАНИЕ 2⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅
/*
$min = 1;
$max = 7;
$rnd = rand(1,10);
$ms = array(rand($min, $max));
$mass = array_fill($min, $rnd, $ms);
echo 'Просто рандомный массив ' . "<br>";
print_r($mass);

echo "<br><br>" . "Массив отсортированный в обратном порядке по ключам через ф-ию krsort <br>";

krsort($mass, SORT_NUMERIC);
foreach ($mass as $key => $value) {
	print_r($key);
	echo ' ';
}
*/

?>
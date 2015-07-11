<?php
// ЗАДАНИЕ 1 ⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅
/*
function ff($x)
{
	if($x<=2) {
		return $x;
	} else {
	return  ff($x-1)+ff($x-2);	
	}
}

echo 'Функция фибоначи = ' . ff(9);
*/

/*
function fact($x)
{
	if($x<=2) {
		return $x;
	} else {
		return $x*(fact($x-1));
	}
}
echo 'Факториал числа =' . fact(6);
*/



// ЗАДАНИЕ 2 ⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅
/*
$summ = $_POST['summ'];
$month = $_POST['month'];
$procent = $_POST['procent'];
$month = $month * 30;
function dengi($summ, $month, $procent)
{
	if(!empty($summ) && !empty($month) && !empty($procent)) {
		return  $S = $summ + (  ($summ*$procent*$month) / (365*100) );
		//$vverh = $summ * $procent * $month;
		//$niz = 365*100;
		//echo $S = $summ + ($vverh / $niz );
		//50410.95890411
	} else {
		return ' Э эээээ ..... что то ты пропустил :-(((( ';
	}
}
// http://bankirsha.com/formula-calculate-of-interest-on-deposit.html

echo dengi($summ, $month, $procent);
*/

// ЗАДАНИЕ 3 ⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅
/*
$date = $_POST['date'];
$month = $_POST['month'];

function datamonth($date, $month)
{

	if($date>28 && $month==2) {
		echo 'В Феврале у нас 28 дней, кроме высокостного года';
	} elseif ($date>30 && $month==4) {
		echo 'В апреле у нас 30 дней';
	} elseif ($date>30 && $month==6) {
		echo 'В Июне у нас 30 дней';
	} elseif ($date>30 && $month==9) {
		echo 'Сентябрь месяц у нас 30 дневный';
	} elseif ($date>30 && $month ==11) {
		echo 'В ноябре у нас 30 дней';
	} else {

		switch ($date) {
			case 1:
				echo '1 ';
				break;
			case 2:
				echo '2 ';
				break;	
			case 3:
				echo '3 ';
				break;
			case 4:
				echo '4 ';
				break;
			case 5:
				echo '5 ';
				break;
			case 6:
				echo '6 ';
				break;
			case 7:
				echo '7 ';
				break;
			case 8:
				echo '8 ';
				break;
			case 9:
				echo '9 ';
				break;
			case 10:
				echo '10 ';
				break;
			case 11:
				echo '11 ';
				break;
			case 12:
				echo '12 ';
				break;
			case 13:
				echo '13 ';
				break;
			case 14:
				echo '14 ';
				break;
			case 15:
				echo '15 ';
				break;
			case 16:
				echo '16 ';
				break;
			case 17:
				echo '17 ';
				break;
			case 18:
				echo '18 ';
				break;
			case 19:
				echo '19 ';
				break;
			case 20:
				echo '20 ';
				break;
			case 21:
				echo '21 ';
				break;
			case 22:
				echo '22 ';
				break;
			case 23:
				echo '23 ';
				break;
			case 24:
				echo '24 ';
				break;
			case 25:
				echo '25 ';
				break;
			case 26:
				echo '26 ';
				break;
			case 27:
				echo '27 ';
				break;
			case 28:
				echo '28 ';
				break;
			case 29:
				echo '29 ';
				break;
			case 30:
				echo '30 ';
				break;
			case 31:
				echo '31 ';
				break;
			default:
			echo 'Такой даты не существует ';
				break;
		}

		switch ($month) {
			case '1':
				echo 'Января ';
				break;
			case '2':
				echo 'Февраля ';
				break;
			case '3':
				echo 'Марта ';
				break;
			case '4':
				echo 'Апреля ';
				break;
			case '5':
				echo 'Мая ';
				break;
			case '6':
				echo 'Июня';
				break;
			case '7':
				echo 'Июля ';
				break;
			case '8':
				echo 'Августа';
				break;
			case '9':
				echo 'Сентября';
				break;
			case '10':
				echo 'Октября';
				break;
			case '11':
				echo 'Ноября';
				break;
			case '12':
				echo 'Декабря';
				break;
			default:
				echo ' Такого месяца не существует';
				break;
		}
	}
}

echo datamonth($date, $month);
*/



?>
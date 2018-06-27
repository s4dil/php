<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php
//1
$a=1;
if ($a==0) {echo 'Верно';} else {echo 'НЕВерно';}

//3
if ($a<0) {echo 'Верно';} else {echo 'НЕВерно';}

//5
if ($a<=0) {echo 'Верно';} else {echo 'НЕВерно';}

//7
$a1='test';
if ($a1=='test') {echo 'Верно';} else {echo 'НЕВерно';}

//9
$a2=0;
if (empty($a2)) {echo 'Верно';} else {echo 'НЕВерно';}

//11
$a3=3;
if (isset($a2)) {echo 'Верно';} else {echo 'НЕВерно';}

//13
$var=true;
if ($var) {echo 'Верно';} else {echo 'НЕВерно';}

//15
$a4=2;
if ($a4>0 and $a4<5) {echo 'Верно';} else {echo 'НЕВерно';}

//17
$a5=1;
$b=3;
if ($a5<=1 and $b>=3) {echo $a5+$b;} else {echo $a5-$b;}

//19
$num=3;
switch($num){
case 1: $result='зима';break;
case 2: $result='весна';break;
case 3: $result='лето';break;
case 4: $result='осень';break;
}
echo $result;

//21
$day = 12;
if ($day <= 10) {
	$decade = 1;
}
if ($day >= 11 and $day <= 20) {
	$decade = 2;
}
if ($day >= 21 and $day <= 31) {
	$decade = 3;
}
echo $decade;

//23
	$str = 'abcde';
	if ($str[0] == 'a') {
		echo 'Да';
	} else {
		echo 'Нет';
	}

//25
	$str1 = '123';
	$result1 = $str1[0] + $str1[1] + $str1[2];
	echo $result1;
	?>
 </body>
</html>
<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php
//1 
   $a=3;
   echo $a.' ';
//3   
   $c=15;
   $d=2;
   $result=$c+$d;
   echo $result.' ';
//5
   $a1=17;
   $b=10;
   $c1=$a1-$b;
   $d1=7;
   $result1=$c1+$d1;
   echo $result1.' ';
//7
$text1='Привет, ';
$text2='Мир!';
echo $text1.$text2.' ';	
//9
$age=19;
echo 'Мне '.$age.' лет! ';
//11
$str='abcde ';
$str[0]='!';
echo $str;
//13
echo 60 * 60; //количество секунд в часе
echo 60 * 60 * 24; //количество секунд в сутках
echo 60 * 60 * 24 * 31; //количество секунд в месяце
echo '  ';
//15
$a2=100;
echo $a2 * $a2.' ';
//17
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text.' ';
//19
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
	?>
 </body>
</html>
<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php
//1
$arr=['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem){echo $elem.'<br>';}

//3
$arr1=[1, 2, 3, 4, 5];
$result=0;
foreach ($arr1 as $elem){$result+=$elem*$elem;}
echo $result.'<br>';

//5
$arr2=[ 'Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
foreach ($arr2 as $key=>$elem) {echo $key.' - зарплата '.$elem.' долларов'.'<br>';}

//7
for ($i=11;$i<=33;$i++){echo $i.'<br>';}

//9
$i=1;
$sum=0;
while ($i<=100){
	$sum += $i;
	$i++;
	}
	
//11
$sum1 = 0;
$arr3 = [2, -5, -2, -9, 5, 15, 11, -7];
foreach ($arr3 as $elem) {
if ($elem > 0) {
	$sum1 += $elem;
}
}	

//13
$arr4=['10', '20', '30', '50', '235', '3000'];	
foreach ($arr4 as $elem) {
if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5'){echo $elem.'<br>';}
}

//15
	$arr5 = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	foreach ($arr5 as $key=>$elem) {
		if ($key == 5 or $key == 6) {
			echo '<b>'.$elem.'</b><br>';
		} else {
			echo $elem.'<br>';
		}
	}

//17
$arr6=[];
for ($i=1;$i<=100;$i++) {$arr6[]=$i;}	
var_dump($arr6);

//19
$num2=1000;
$j=0;
while ($num2>=50){
	$num2=$num2/2;
	$j++;
}
echo $num2.'<br>';
echo $j;
	?>
 </body>
</html>
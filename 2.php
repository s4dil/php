<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php
//1
$arr=['a','b','c'];
var_dump($arr);
//3
$arr1=['a', 'b', 'c', 'd'];
echo $arr1[0].'+'.$arr1[1].','.$arr1[2].'+'.$arr1[3].'   ';
//5
$arr2[]=1;
$arr2[]=2;
$arr2[]=3;
$arr2[]=4;
$arr2[]=5;
//7
$arr3 = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr3['a']+$arr3['b']+$arr3['c'].'  ';
//9
$arr4 = [1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
echo $arr4[1].'  ';
//11
$arr5 = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr5['cms'][0].$arr5['cms'][2].$arr5['colors']['green'].$arr5['colors']['red'];	
//13
$arr6=['ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],'en'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],];	
	$lang = 'ru';
	$day = 3;

	echo $arr5[$lang][$day]; 
	?>
 </body>
</html>
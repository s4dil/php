<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php
//1
$arr=[1,2,3,4,6,5];
echo count($arr);

//3
$arr1 = [1, 2, 3, 4, 5];
var_dump(in_array(3, $arr1));

//5
$arr2 = [1, 2, 3, 4, 5];
echo array_product($arr2);

//7
$arr3 = range(1, 100);
var_dump($arr3);

//9
echo implode('-', range(1, 9));

//11
echo array_product(range(1, 10));

//13
$arr4 = [1, 2, 3, 4, 5];
$result = array_slice($arr4, 1, 3);
var_dump($result);

//15
$arr5 = [1, 2, 3, 4, 5];
$result = array_splice($arr5, 1, 3);
var_dump($result);

//17
$arr6 = [1, 2, 3, 4, 5];
array_splice($arr6, 1, 0, ['a', 'b']);
array_splice($arr6, 6, 0, ['c']);
array_splice($arr6, 8, 0, ['e']);
var_dump($arr6);

//19
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
var_dump(array_combine($keys, $values));

//21
$arr7 = [1, 2, 3, 4, 5];
$arr7 = array_reverse($arr7);
var_dump($arr7);

//23
$arr8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr8);
array_splice($arr8, $pos, 1);
var_dump($arr8);

//25
	$arr9 = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	sort($arr9);
	var_dump($arr9);
	
//27
	$arr11 = ['a'=>1, 'b'=>2, 'c'=>3];
	echo $arr11[array_rand($arr11)];
	
//29
$arr12 = range(1, 25);
shuffle($arr12);
var_dump($arr12);

//31
	$arr13 = range('a', 'z');
	shuffle($arr13);
	$str13 = implode('', $arr13);
	echo substr($str13, 0, 6);
	
//33
$arr14 = [1, 2, 3, 4, 5];
echo array_shift($arr14); 
echo array_pop($arr14); 
var_dump($arr14);

//35
$arr15 = [1, 2, 3, 4, 5, 6, 7, 8];

$str15 = '';
while (count($arr15) > 0) {
	$str15 .= array_shift($arr15);
	$str15 .= array_pop($arr15);
}
echo $str;

//37
$arr16 = array_fill(0, 10, 'x');
var_dump($arr16);

//39
$arr17 = ['a', 'a', 'a', 'b', 'b', 'c'];
var_dump(array_count_values($arr17));

//41
$arr18 = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags', $arr18);
var_dump($result);

//43
$arr111 = [1, 2, 3, 4, 5];
$arr222 = [3, 4, 5, 6, 7];
$result = array_intersect($arr111, $arr222);
var_dump($result);

//45
echo array_sum(str_split('1234567890', 1));

//47
$arr121 = range(1, 9);
var_dump(array_chunk($arr121, 3));
	?>
 </body>
</html>
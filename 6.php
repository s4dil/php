<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php
//1
$a=10;
$b=3;
echo $a%$b;

//3
$st=pow(2,10);

//5
$arr=[4, 2, 5, 19, 13, 0, 10];
$sum=0;
foreach($arr as $elem) {$sum+=$elem*$elem;};
echo sqrt($sum);

//7
$a2=sqrt(587);
$arr1 = ['floor'=>floor($sqrt), 'ceil'=>ceil($sqrt)];

//9
echo mt_rand(1,100);

//11
$a1=10;
$b1=22;
echo abs($a1-$b1);

//13
$a2=30;
$arr2=[];
for ($i = 1; $i <= $a2; $i++) {
		if ($a2 % $i == 0) {
			$arr2[] = $i;
		}
	}

//15
    $a3 = 20;
	$b3 = 1.5;
	echo floor($a3 / $b3);	
	?>
 </body>
</html>
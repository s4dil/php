<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
<?php
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_name = 'test';


$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));


mysqli_query($link, "SET NAMES 'utf8'");
?>

<form action="" method="get">
<label>Искать работника, с зарплатой <input type="text" name="user-salary"></label>
<input type="submit" value="Найти" name="search">
</form>

<?php
if(!empty($_GET['user-salary'])) {

$query = "SELECT * FROM `workers` WHERE salary =" . $_GET['user-salary'];

$result = mysqli_query($link, $query) or die(mysqli_error($link));


for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

if(count($data) == 0) {
echo 'Работника с такой зарплатой, не существует';
}

else {
echo '<table border="1" width="50%" cellpadding="5" style="border-collapse: collapse; text-align: center;">';
echo '<tr>';
foreach($data[0] as $key => $val) {
echo '<th>'.$key.'</th>';
}
echo '</tr>';

foreach($data as $arr) {
echo '<tr>';
foreach($arr as $k => $v) {
echo '<td>'.$v.'</td>';
}
echo '</tr>';
}

echo '</table>';
}

echo '<br><br>';
}
?>


 </body>
</html>
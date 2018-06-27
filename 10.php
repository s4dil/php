<html>
 <head> 
   <meta charset="utf-8">
  <title>Тестируем PHP</title>
 </head>
 <body>
 <form action="" method="GET">
	<input type="text" name="name">
	<input type="submit">
</form>
 <?php
//1
if (isset($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
	echo 'Привет,'.$name;
}
?>	

<?php
//3
	if (!isset($_REQUEST['age'])) {
?>
		<form action="" method="GET">
			<input type="text" name="age">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	if (isset($_REQUEST['age'])) {
		$age = strip_tags($_REQUEST['age']);
		echo 'Ваш возраст: '.$age;
	}
?>

<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<input type="submit">
</form>
<?php
//5
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $name;
	}
?>
 </body>
</html>
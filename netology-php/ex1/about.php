
<?php 
$userName = 'Олисия Медведева';
$userAge = '34';
$userEmail = 'pejma2001@mail.ru';
$userCity = 'Petropavlovsk-Kamchatsky';
$userAbout = 'Экономист, мечтающий стать веб-разработчиком';
echo($userName);
echo PHP_EOL;
echo($userAge);
echo PHP_EOL;
echo($userEmail);
echo PHP_EOL;
echo($userCity);
echo PHP_EOL;
echo($userAbout);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Мой первый PHP файл</title>
  <link rel="stylesheet" href="css.css">
</head>
<body>
	<h1>Страница пользователя Олисия</h1>
	<table>
	  <tr>
	    <td>Имя</td>
	    <td><?php echo 'Олисия Медведева'; ?></td>
	  </tr>  
	   <tr>
	    <td>Возраст</td>
	    <td><?php echo '34'; ?></td>
	  </tr> 
	  <tr>
	    <td>Адрес электронной почты</td>
	    <td><a href="mailto:pejma2001@mail.ru"><?php echo 'pejma2001@mail.ru;' ?></a></td>
	  </tr> 
	  <tr>
	    <td>Город</td>
	    <td><?php echo 'Petropavlovsk-Kamchatsky'; ?></td>
	  </tr>  
	   <tr>
	    <td>О себе</td>
	    <td><?php echo 'Экономист, мечтающий стать веб-разработчиком'; ?></td>
	  </tr> 
	 
	</table>
</body>
</html>  

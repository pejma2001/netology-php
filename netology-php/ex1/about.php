
<?php 
$userName = 'Олисия Медведева';
$userAge = '34';
$userEmail = 'pejma2001@mail.ru';
$userCity = 'Petropavlovsk-Kamchatsky';
$userAbout = 'Экономист, мечтающий стать веб-разработчиком';
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
	    <td><?php echo($userName); ?></td>
	  </tr>  
	   <tr>
	    <td>Возраст</td>
	    <td><?php echo($userAge); ?></td>
	  </tr> 
	  <tr>
	    <td>Адрес электронной почты</td>
	    <td><a href="mailto:pejma2001@mail.ru"><?php echo($userEmail); ?></a></td>
	  </tr> 
	  <tr>
	    <td>Город</td>
	    <td><?php echo($userCity); ?></td>
	  </tr>  
	   <tr>
	    <td>О себе</td>
	    <td><?php echo($userAbout); ?></td>
	  </tr> 
	 
	</table>
</body>
</html>  

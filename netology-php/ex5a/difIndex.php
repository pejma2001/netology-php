<?php
$jsonString = file_get_contents(__DIR__ .'/difPhonebook.json');
$data = json_decode($jsonString,true);

?>

<!Doctype html>
<html lang ="ru">
  <head>
    <meta charset="UTF-8">
    <title>Телефонная книжка</title>
      <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
    <table class="table">
      <tr>
        <td><h3>Параметры</h3></td>
          <td><h3>Данные</h3></td>
      </tr>

        <?php foreach($data as $datum){ ?>

      <tr>
        <td><h4> Имя </h4></td>
        <td> <?php echo $datum['firstName'] ?></td>
      </tr>
      <tr>
        <td><h4> Фамилия </h4></td>
        <td> <?php echo $datum['secondName'] ?></td>
      </tr>
      <tr>
        <td ><h4> Адрес</h4></td>
        <td> Город</td>
        <td><?php echo $datum['address']['city'] ?></td>
      </tr>
      <tr>
        <td > </td>
        <td> Улица</td>
        <td><?php echo $datum['address']['street'] ?></td>
      </tr>
      <tr>
        <td > </td>
        <td> Дом</td>
        <td><?php echo $datum['address']['house'] ?></td>
      </tr>
      <tr>
        <td><h4> Телефон</h4></td>
        <td> </td>
        <td><?php echo $datum['phoneNumbers'][0]; ?></td>
      </tr>
      <tr>
        <td rowspan="2"> </td>
        <td> </td>
        <td><?php echo $datum['phoneNumbers'][1]; ?></td>
      </tr>
     <?php } ?>
    </table>
  </body>
</html>


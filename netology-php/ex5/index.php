<?php
$jsonString = file_get_contents(__DIR__ .'/phonebook.json');
$data = json_decode($jsonString,true);

?>
<!Doctype html>
<html lang ="ru">
  <head>
    <meta charset="UTF-8">
    <title>Телефонная книжка</title>
  </head>
  <body>
    <table>
      <tr>
        <td><h4>Information</h4></td>
          <td><h4>Person</h4></td>
      </tr>

        <?php foreach ($data as $datum){ ?>

      <tr>

        <td> <? echo $datum['block'] ?></td>
        <td> <? echo $datum['contain'] ?></td>

      </tr>
        <?php } ?>
    </table>
  </body>
</html>


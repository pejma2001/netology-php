<?php
$jsonString = file_get_contents(__DIR__ .'/difPhonebook.json');
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

        <?php foreach($data as $datum){ ?>

      <tr>

        <td> <?php echo $datum['block'] ?></td>
        <td> <?php echo $datum['contain'] ?></td>

      </tr>
        <?php } ?>
        Вот с этого места не получается вывести в табличку.

            <tr>

                <td> <?php echo $datum['contain']['country'] ?></td>
                <td> <?php echo $datum['contain']['city'] ?></td>

            </tr>
        >
            <tr>

                <td> <?php echo implode('<br />', $datum['phoneNumber']) ?></td>
                <td> <?php echo implode('<br />', $datum['phoneNumber']) ?></td>

            </tr>

    </table>
  </body>
</html>


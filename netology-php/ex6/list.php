<?php
error_reporting(E_ALL);
$allMyFiles = scandir(__DIR__. '/tests');
?>

    <!DOCTYPE HTML>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Тесты</title>
    </head>
    <body>
    <p>

    <?php foreach($allMyFiles as $id => $file){
        if ($file == "." || $file == ".."){
            continue;
        }
        ?>
    <p>

        <a href="test.php?id=<?php echo $id ?>">

       <?php echo $file ?>
        </a>
    </p>

<?php } ?>
    </body>
    </html>


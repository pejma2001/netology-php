<?php
error_reporting(E_ALL);
$allMyFiles = scandir(__DIR__. '/tests');
$id = $_GET['id'];
if(empty($_GET['$id']):
    http_response_code(404);
    echo 'Страница не найдена!';
    exit;
}else {
    $fileTest = $allMyFiles[$id];
    $data = file_get_contents(__DIR__ . "/tests/$fileTest");
    $jsonString = json_decode($data);
    $count = 1;
    $result = 0;
}endif;

?>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>TESTs</title>
</head>
<body>
<p><a href = "list.php">Перейти к тестам</a></p>
<h1><?php echo $jsonString[0]->title; ?></h1>

<form action="" method = "post" enctype = "multipart/form-data">
    <label>
        <input type="text" name="name" placeholder="Введите ваше имя">

    </label>

    <?php foreach($jsonString as $questions):
        if (is_array($questions)) : ?>
        <?php foreach ($questions as $question) :?>
            <fieldset>
               <legend><?= $question -> question ?></legend>

            <p>
                <input type="radio" id="first" name="<?= $count ?>" value="<?= $question->varAnswer->var1 ?>">
                <label for="first"><?= $question->varAnswer->var1 ?></label>
            </p>
            <p>
                <input type="radio" id="second" name="<?= $count ?>" value="<?= $question->varAnswer->var2 ?>">
                <label for="second"><?= $question->varAnswer->var2; ?></label>
            </p>
    <p>
        <input type="radio" id="third" name="<?= $count ?>" value="<?= $question->varAnswer->var3 ?>">
        <label for="third"><?= $question->varAnswer->var3 ?></label>
    </p>
                <p>
                    <input type="radio" id="forth" name="<?= $count ?>" value="<?= $question->varAnswer->var4 ?>">
                    <label for="forth"><?= $question->varAnswer->var4; ?></label>
                </p>
                <p>
                    <input type="radio" id="fifth" name="<?= $count ?>" value="<?= $question->varAnswer->var5 ?>">
                    <label for="fifth"><?= $question->varAnswer->var5 ?></label>
                </p>
</fieldset>
            <?php if(!empty($_POST["$count"])):
               if($_POST[$count] == $question->rightAnswer):
              $result++;
             endif; endif;
              $count++;

   endforeach ?>
    <?php endif ?>
   <?php endforeach ?>
    <input type="submit" value="Результат">
</form>
<?php
if(!empty($_POST['submit'])){
    $_SESSION['allQuestion'] = count($questions);
    $_SESSION['rightQuestion'] = $result;
    if(!empty($_POST['name'])){
        $_SESSION['name'] = $_POST['name'];
    }else{
        $_SESSION['name'] = 'Вы забыли ввести свое имя!';
    }
    ?>
    <img src="'/assets/present.png'">
<?php } ?>
</body>
</html>
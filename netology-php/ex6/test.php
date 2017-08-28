<?php

$jsonString = file_get_contents(__DIR__ .'/data.json');
$data = json_decode($jsonString,true);

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>TEST</title>
</head>
<body>

<form action="result.php" method = "post" enctype = "multipart/form-data">
    <div> <?php foreach ($data as $datum){?>
        <p><b><?php echo $datum[question1] ?></b></p>
    <?php }?>

    <p><label>1.<input name="answer1" type="radio"  value="a"><?php echo $datum[var_answer1] ?></label><br>
        <label>2.<input name="answer1" type="radio"  value="b"></label><br>
        <label>3.<input name="answer1" type="radio"  value="c"></label><br>
        <label>4.<input name="answer1" type="radio"  value="d"></label><br>
        <label>5.<input name="answer1" type="radio"  value="e"></label></p>
</div>
    <div><?php foreach ($data as $datum){?>
        <p><b><?php echo $datum[question2] ?></b></p>

    <?php }?>
    <p><label>1.<input name="answer2" type="radio" value="a"><?php echo $datum[var1] ?></label><br>
        <label> 2.<input name="answer2" type="radio" value="b"></label><br>
        <label> 3.<input name="answer2" type="radio" value="c"></label><br>
        <label> 4.<input name="answer2" type="radio" value="d"></label><br>
        <label> 5.<input name="answer2" type="radio" value="e"></label></p>
    </div>
    <p><button type="submit" value="Отправить">Отправить</p>
</form>
</body>
</html>


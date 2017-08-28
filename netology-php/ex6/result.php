<?php

$jsonString = file_get_contents(__DIR__ .'/data.json');
$data = json_decode($jsonString,true);

?>
<?php
$ot = 0;
$not = 0;
if ($_POST[answer1] == $data[var_answer1][var1]){
    echo '<pre>';
    echo "Правильный ответ";
    echo '</pre>';
}
 else {
     echo '<pre>';
     echo "Неправильный ответ";
     echo '</pre>';
 }
if ($_POST[answer2] == $data[var2]){
    echo '<pre>';
    echo "Правильный ответ";
    echo '</pre>';
}
else {
    echo '<pre>';
    echo "Неправильный ответ";
    echo '</pre>';
}
?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

</body>
</html>
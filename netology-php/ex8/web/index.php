<?php
//require_once 'core/core.php';
//if (!isAuthorized()){
//    header ('Location: login.php');//редирект
//    die;
//}
require_once '../core/core.php';
if (!isAuthorized()){
    redirect('login');
    die;
}
?>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
     Добро пожаловать <?= 1 ?>
</body>
</html>
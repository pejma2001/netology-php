<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TEST</title>
</head>
<body>
<p>
<form method = "post" action="admin.php" enctype = "multipart/form-data">
    Файл <input type = "file" multiple name = "file"><br/>
         <input type="submit" value="Отправить">
</form>
</p>
<p>
    <a href = "list.php">Перейти к тестам</a>
</p>
</body>
</html>
<?php

if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name']))
{
    if($_FILES['file']['error']==UPLOAD_ERR_OK &&
        move_uploaded_file($_FILES['file']['tmp_name'], 'tests/'.$_FILES['file']['name']))
    {
    echo "<a href =\"list.php\">Перейти к тестам</a>";

    }
    else {
    echo "Ошибка: Файл с тестами не загружен!!!";
    }
}
?>
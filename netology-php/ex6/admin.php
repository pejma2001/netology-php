
<form method = "post" action="list.php" enctype = "multipart/form-data">
    Файл <input type = "file" name = "answer"><br/>
         <input type="submit" value="Отправить">
</form>

<?php

if (isset($_FILES['answer']['name']) && !empty($_FILES['answer']['name']))
{
    if($_FILES['answer']['error']==UPLOAD_ERR_OK &&
        move_uploaded_file($_FILES['answer']['tmp_name'], 'tests'.$_FILES['answer']['name']))
    {
    echo "Файл с тестами загружен";

    }
    else {
    echo "Ошибка: Файл с тестами не загружен!!!";
    }
}
?>
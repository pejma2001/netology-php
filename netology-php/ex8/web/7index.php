<!DOCTYPE html>

<html lang="ru">
<head><title>Capture</title></head>
<body>

<form action="check.php" method="POST">

    <label>Имя:
        <input type="text" name="full_name">
    </label>
    <br>
    <img src="captcha.php">
    <br>
    <label>Код с картинки:
        <input type="text" name="captcha">
    </label>
    <br>
    <input type="submit" value="Я не робот">

</form>

</body>
</html>

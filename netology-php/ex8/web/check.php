<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 BAD REQUEST');
    exit;
}
if (!isset($_POST['captcha'])) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 BAD REQUEST');
    exit;
}
include_once __DIR__.'/../src/Captcha.php';

session_start();
$captchaGenerator = new Captcha();

$captcha = (int)$_POST['captcha'];

if ($captcha === $captchaGenerator->get()) {
    echo 'Да, ты не робот';
    exit;
}
    echo 'Ты робот';
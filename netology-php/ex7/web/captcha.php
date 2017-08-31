<?php
session_start();

include_once __DIR__.'/../src/Captcha.php';
include_once __DIR__.'/../src/GdGenerator.php';

$codeGenerator = new Captcha();
$code = $codeGenerator->generate();

$imgGenerator = new GdGenerator();
$imgGenerator->generate($code);
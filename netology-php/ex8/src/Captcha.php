<?php

class Captcha
{
    public function generate()
    {
        $code = mt_rand(10000, 999999);
        $_SESSION['captcha'] = $code;
        return $code;
    }
    public function get()
{
    if(isset($_SESSION['captcha'])) {
        return $_SESSION['captcha'];
    }
    return 0;
}
}
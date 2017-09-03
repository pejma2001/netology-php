<?php


class GdGenerator
{
    public function generate($code){

        $image = imagecreatetruecolor(300, 300);
        $backColor = imagecolorallocate($image, 255, 224, 220);
        $textColor = imagecolorallocate($image, 129, 16, 89);

        $fontFile = __DIR__. '/assets/FONT.ttf';
        $imBox = imagecreatefrompng(__DIR__. '/assets/present.png');

        imagefill($image, 0, 0, $backColor);
        imagecopy($image, $imBox, 10, 10, 0, 0, 256, 256);
        imagettftext($image, 45, 20, 30, 200, $textColor, $fontFile, $code);
        header('Content-Type: image/png');
        imagepng($image);
        imagedestroy($image);
        imagedestroy($imBox);

    }

}
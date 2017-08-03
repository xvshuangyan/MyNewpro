<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/8
 * Time: 16:32
 */
header("content-type: image/png");
$img=imagecreatetruecolor(100, 50);
$color=imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
$color1=imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
$color2=imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
$color3=imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
imagefill($img, 0, 0, $color);

$code='';
for($i=0;$i<6;$i++){
    $item=dechex(rand(0,15));
    $code.=$item;
}
imagestring($img, 5, 20,20,$code, $color1);
for($i=0;$i<20;$i++){
    $start=array(rand(0,50),rand(0,50));
    $end=array(rand(0,100),rand(0,100));
    imageline($img,$start[0],$start[1],$end[0],$end[1],$color2);
}
for($i=0;$i<50;$i++) {
    imagesetpixel($img, rand(0, 100), rand(0, 50), $color3);
}
    imagepng($img);
imagedestroy($img);
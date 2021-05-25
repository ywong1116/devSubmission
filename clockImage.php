<?php
 
header("Content-type: image/png");
 
$img_width = 800;
$img_height = 600;
 
$img = imagecreatetruecolor($img_width, $img_height);
 
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue  = imagecolorallocate($img, 0, 0, 255);
$orange = imagecolorallocate($img, 255, 200, 0);

$font = 'arial.ttf';

imagefill($img, 0, 0, $white);
 
imagerectangle($img, $img_width*0.05, $img_height*0.05, $img_width*0.13, $img_height*0.10, $red);
imagestring($img, 5, $img_width*0.06, $img_height*0.06, '15:00', $blue);

imageellipse($img, 400, 300, 500, 500, $black);

imagestring($img, 5, $img_width*0.49, $img_height*0.12, '12',$black);
imagestring($img, 5, $img_width*0.79, $img_height*0.49, '3',$black);
imagestring($img, 5, $img_width*0.49, $img_height*0.88, '6',$black);
imagestring($img, 5, $img_width*0.21, $img_height*0.49, '9',$black);
imageline($img, 400, $img_height*0.5, $img_width*0.7, $img_height *0.5, $green);
imageline($img, $img_width*0.5, $img_height*0.2, $img_width*0.5, 300 , $green);

 
imagepng($img);
 
?>
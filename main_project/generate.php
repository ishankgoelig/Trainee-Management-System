<?php

header('Content-type:image/jpeg');
session_start();
$text=$_SESSION['secure'];
$font_size=48;
$image_width=200;
$image_height=40;
$image=imagecreate($image_width,$image_height);
imagecolorallocate($image,255,255,225);
$text_color=imagecolorallocate($image,0,0,0);
$font_face="Calibri (Body)";
for($x=1;$x<=30;$x++)
{
	$x1=rand(0,200);
	$y1=rand(0,30);
	$x2=rand(0,200);
	$y2=rand(0,50); 
	imageline($image,$x1,$y1,$x2,$y2,$text_color);
	
}
imagettftext($image,$font_size,0,30,30,$text_color,'font.ttf',$text);
imagejpeg($image);
?>
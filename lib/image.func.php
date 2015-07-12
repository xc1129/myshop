<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/12
 * Time: 下午9:12
 */

$width=80;
$height=20;
$image=imagecreateturecolor($width,$height);
$white=imagecolorallocate($image,255,255,255);
$black=imagecolorallocate($image,0,0,0);

imagefilledrectangle($image,1,1,$width-2,$height-2,$white);
$chars=buildRandomString($type,$length);
$sess_name="verify";
$_SESSION[$sess_name]=$chars;
$fontfile=array()
for($i=0;$i<$length;$i++)
{
    $size=mt_rand(14,18);
    $angle=mt_rand(-15,15);
    $x=5+$i*$size;
    $y=mt_rand(20,26);
    $color=imagecolorallocate($image,mt_rand(50,90),mt_rand(80,200),mt_rand(90,180));
    $fontfile
    imagettftext($image,$size,$)
}
fucntion verifyImage()
{

}
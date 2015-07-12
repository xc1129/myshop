<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/12
 * Time: 下午9:12
 */


function buildRandomString($type=1,$length=4)
{
    if($type==1)
    {
        $chars=join("",range(0,9));

    }
    else if($type==2)
    {
        $chars=join("",array_merge(range("a","z"),range("A","Z")));
    }
    else if($type==3)
    {
        $chars=join("",array_merge(range("a","z"),range("A","Z"),range(0,9)));
    }

    if($length>strlen($chars))
    {
        exit("not that long");
    }
    $chars=str_shuffle($chars);
    return substr($chars,0,$length);
}
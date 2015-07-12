<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/13
 * Time: 上午1:52
 */

require_once '../include.php';
$act=$_REQUEST['act'];
if($act=="logout")
{
    logout();
}
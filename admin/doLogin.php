<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/13
 * Time: 上午12:56
 */

require_once '../include.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];

if($verify==$verify1)
{
    $sql="select * from myshop_admin where username='{$username}' and password='{$password}'";
    $row=checkAdmin($sql);
    if($row)
    {
        $_SESSION['adminName']=$row['username'];
        $_SESSION['adminId']=$row['id'];
        alertMes("登录成功","index.php");
    }
    else
    {
        alertMes("登陆失败，重新登陆","login.php");
    }
}
else
{
    alertMes("验证码错误","login.php");
}

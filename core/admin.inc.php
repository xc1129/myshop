<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/13
 * Time: 上午1:28
 */

function checkAdmin($sql)
{
    return fetchOne($sql);
}

function checkLogined()
{
    if($_SESSION['adminId']=="" && $_COOKIE['adminId']=="")
    {
        alertMes("请先登录","login.php");
    }
}

function logout()
{
    $_SESSION=array();
    if(isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(),"",time()-1);
    }
    if(isset($_COOKIE['adminId']))
    {
        setcookie("adminId","",time()-1);
    }
    if(isset($_COOKIE[adminName]))
    {
        setcookie("adminName","",time()-1);
    }
    session_destroy();
    header("location:login.php");
}
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


function addAdmin()
{
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(insert("myshop_admin",$arr))
    {
        $mes="添加成功!<br/><a href='addAdmin.php'>继续添加</a> | <a href='listAdmin.php'>查看管理员列表</a> ";
    }
    else
    {
        $mes="添加失败!<br/><a href='addAdmin.php'>重新添加</a> ";
    }
    return $mes;
}

function getAllAdmin()
{
    $sql="select id,username,email from myshop_admin";
    $rows=fetchAll($sql);
    return $rows;
}

function editAdmin($id)
{
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(update("myshop_admin",$arr,"id={$id}"))
    {
        $mes="编辑成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
    }
    else
    {
        $mes="编辑失败!<br/> <a href='listAdmin.php'>请重新修改</a>";
    }
    return $mes;
}

function delAdmin($id)
{
    if(delete("myshop_admin","id={$id}"))
    {
        $mes="删除成功!<br/><a href='listAdmin.php'>查看管理员列表</a>";
    }
    else
    {
        $mes="删除失败!<br/><a href='listAdmin.php'>请重新删除</a>";
    }
    return $mes;
}
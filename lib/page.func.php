<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/12
 * Time: 下午9:13
 */

/*
require_once '../include.php';
$sql="select * from myshop_admin";
$totalRows=getResultNum($sql);
//echo $totalRows;

$pageSize=2;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1 || $page==null || !is_numeric($page))
{
    $page=1;
}
if($page>=$totalPage)
{
    $page=$totalPage;
}
$offset=($page-1)*$pageSize;
$sql="select * from myshop_admin limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
//print_r($rows);

foreach($rows as $row)
{
    echo "编号:".$row['id']."<br/>";
    echo "名称".$row['username']."<hr/>";
}

echo showPage($page,$totalPage);
echo "<br/>";
echo showPage($page,$totalPage,"cid=5&pid=6");
*/
function showPage($page,$totalPage,$where=null,$sep="&nbsp;")
{
    $where=($where==null)?null:"&".$where;
    $url = $_SERVER['PHP_SELF'];
    $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
    $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
    $prev = ($page == 1) ? "上一页" : "<a href='{$url}?page=" . ($page - 1) . "{$where}'>上一页</a>";
    $next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?page=" . ($page + 1) . "{$where}'>下一页</a>";
    $p="";
    $str = "总共{$totalPage}页/当前是{$page}页";

    for ($i = 1; $i <= $totalPage; $i++) {
        if ($page == $i) {
            $p .= "[{$i}]";
        } else {
            $p .= "<a href='{$url}?page={$i}'>[{$i}]</a>";
        }
    }

    $pageStr=$str .$sep .$sep. $index .$sep. $prev .$sep. $p .$sep. $next .$sep. $last;
    return $pageStr;
}

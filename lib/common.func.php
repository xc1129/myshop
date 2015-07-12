<?php
/**
 * Created by PhpStorm.
 * User: Spirit_xc
 * Date: 15/7/12
 * Time: 下午9:13
 */

function alertMes($mes,$url)
{
    echo "<script>alert('{$mes}');</script>";
    echo "<script>window.location='{$url}'</script>";
}
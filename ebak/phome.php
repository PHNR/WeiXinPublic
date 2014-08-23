<?php
require('class/connect.php');
require('class/db_sql.php');
require('class/functions.php');
require LoadLang('f.php');
$phome = empty($_GET['phome']) ? $_POST['phome'] : $_GET['phome'];
//登陆
if($phome == "login" || $phome == "ChangeLanguage") {
} else {
    $lur = islogin();
    $loginin = $lur['username'];
    $rnd = $lur['rnd'];
}
if($phome == "SetDb" || $phome == "DoRep" || $phome == "DoOpi" || $phome == "DoDrop" || $phome == "DropDb" ||
    $phome == "CreateDb" || $phome == "EmptyTable" || $phome == "DoSave" || $phome == "DoDelSave" ||
    $phome == "DelBakpath" || $phome == "DelZip" || $phome == "DoExecSql" || $phome == "DoTranExecSql" ||
    $phome == "RepPathFiletext" || $phome == 'ReplaceTable'
) {
    include("class/combakfun.php");
}
if($phome == "SetDb" || $phome == "login" || $phome == "exit" || $phome == "ChangeLanguage") {
} else {
    $link = db_connect();
    $empire = new mysqlquery();
}
if($phome == "SetDb") //参数设置
{
    Ebak_SetDb($_POST);
} elseif($phome == "DoRep") //修复表
{
    $tablename = $_POST['tablename'];
    $mydbname = $_POST['mydbname'];
    Ebak_Rep($tablename, $mydbname);
} elseif($phome == "DoOpi") //忧化表
{
    $tablename = $_POST['tablename'];
    $mydbname = $_POST['mydbname'];
    Ebak_Opi($tablename, $mydbname);
} elseif($phome == "DoDrop") //删除表
{
    $tablename = $_POST['tablename'];
    $mydbname = $_POST['mydbname'];
    Ebak_Drop($tablename, $mydbname);
} elseif($phome == "ReplaceTable") //替换表
{
    $tablename = $_POST['tablename'];
    $mydbname = $_POST['mydbname'];
    $oldpre = $_POST['oldtablepre'];
    $newpre = $_POST['newtablepre'];
    Ebak_ReplaceTable($tablename, $oldpre, $newpre, $mydbname);
} elseif($phome == "DropDb") //删除数据库
{
    $mydbname = $_GET['mydbname'];
    Ebak_DropDb($mydbname);
} elseif($phome == "CreateDb") //建立数据库
{
    $mydbname = $_POST['mydbname'];
    $mydbchar = $_POST['mydbchar'];
    Ebak_CreatDb($mydbname, $mydbchar);
} elseif($phome == "EmptyTable") //清空表
{
    $tablename = $_POST['tablename'];
    $mydbname = $_POST['mydbname'];
    Ebak_EmptyTable($tablename, $mydbname);
} elseif($phome == "exit") //退出系统
{
    LoginOut();
} elseif($phome == "login") //登陆
{
    $lusername = $_POST['lusername'];
    $lpassword = $_POST['lpassword'];
    $key = empty($_POST['key']) ? null : $_POST['key'];
    login($lusername, $lpassword, $key, null);
} elseif($phome == "DelBakpath") //删除备份目录
{
    $path = $_GET['path'];
    Ebak_DelBakpath($path);
} elseif($phome == "DelZip") //删除压缩包
{
    $f = $_GET['f'];
    Ebak_DelZip($f);
} elseif($phome == "DoZip") //压缩目录
{
    $p = $_GET['p'];
    Ebak_Dozip($p);
} elseif($phome == "DoExecSql") //执行sql
{
    Ebak_DoExecSql($_POST);
} elseif($phome == "DoTranExecSql") //上传执行sql
{
    $file = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    Ebak_DoTranExecSql($file, $file_name, $file_type, $file_size, $_POST);
} elseif($phome == "DoSave") //保存设置
{
    Ebak_SaveSeting($_POST);
} elseif($phome == "DoDelSave") //删除设置
{
    Ebak_DelSeting($_GET);
} elseif($phome == "SetGotoBak") //设置转向
{
    $savename = $_GET['savename'];
    Ebak_SetGotoBak($savename);
} elseif($phome == "PathGotoRedata") //目录转向
{
    $mypath = $_GET['mypath'];
    Ebak_PathGotoRedata($mypath);
} elseif($phome == "ChangeLanguage") //选择语言
{
    Ebak_ChangeLanguage($_GET);
} elseif($phome == "RepPathFiletext") //替换目录文件
{
    Ebak_RepPathFiletext($_POST);
} else {
    printerror("ErrorUrl", "history.go(-1)");
}
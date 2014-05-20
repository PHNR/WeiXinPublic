<?php if(!defined('THINK_PATH')) exit(); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台首页</title>
    <link href="<?php echo RES; ?>/images/main.css" type="text/css" rel="stylesheet">
    <meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body style="background:none">
<div class="content">
    <div class="box">
        <h3>狗扑·微信平台更新消息</h3>

        <div class="con dcon">
            <div class="update">
                <p>服务器环境：[<?php echo PHP_OS; ?>]<?php echo $_SERVER[SERVER_SOFTWARE]; ?>
                    MySql:<?php echo mysql_get_server_info(); ?> php:<?php echo PHP_VERSION; ?></p>

                <p>服务器IP：<?php echo $_SERVER['SERVER_ADDR'] . ":" . $_SERVER['SERVER_PORT']; ?></p>

                <p>当前网站语言：<?php echo getenv("HTTP_ACCEPT_LANGUAGE"); ?></p>

                <p>被屏蔽的函数：<?php echo get_cfg_var("disable_functions") ? get_cfg_var("disable_functions") : "无"; ?></p>

                <p>集团网站：<a href="#" class="blue">公司网站</a></p>

                <p>系统版本：weiwin W_5_0_20131225_1_UTF8 <a href="javascript:alert('暂无升级')" class="isub">检查更新</a></p>
            </div>
            <ul class="myinfo">
                <li><p class="red">您的程序版本为：weiwin多用户微信营销系统</p><span>[ 授权版本：商业版 (终身使用权) ]</span></li>
                <li><p class="red">您的程序版本为：weiwin多用户微信营销系统</p><span>[ 授权版本：商业版 (终身免费) ]</span></li>

            </ul>
        </div>
    </div>
    <!--/box-->
    <div class="box">
        <h3>weiwin官方动态</h3>

        <div class="con dcon">
            <div class="kjnav">
                <a href="http://v.qq.com/boke/page/p/p/e/p0126u0ripe.html">使用帮助</a><a
                    href="http://my.tv.sohu.com/us/208524917/65298931.shtml">技术售后</a><a
                    href="http://v.youku.com/v_show/id_XNjgxODY0MzUy.html">安装指导</a><a
                    href="http://www.weiwin.cc">联系我们</a><a href="http://www.weiwin.cc">升级咨询</a>
            </div>
            <ul class="myinfo kjinfo">
                <li class="title">售后服务范围</li>
                <li>程序第一次安装指导,或第一次协助安装</li>
                <li>服务时间：早9:00 晚10:00 如有疑问请在这个时间段联系我们，周未双休</li>
                <li>个人版，请勿修改程序,您的擅自修改出现的任何问题,将不在售后内('可指导')</li>
                <li>如果有BUG,weiwin承诺15天内发布修复补丁</li>
                <li>如果您购买的是全功能版,开发出新的模块功能,您会在第一时间得到升级包</li>
                <li>客服QQ：75943938</li>
            </ul>
        </div>
    </div>

    <!--/box-->
</div>
</body>
</html>
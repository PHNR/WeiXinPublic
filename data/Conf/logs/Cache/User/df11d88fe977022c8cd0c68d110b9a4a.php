<?php if(!defined('THINK_PATH')) exit(); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo C('site_title'); ?> <?php echo C('site_name'); ?></title>
    <link href="<?php echo RES; ?>/css/ss.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo RES; ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../wm-xin-a/font-awesome.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/css/stylet.css" />
    <script type="text/javascript" src="<?php echo RES; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo RES; ?>/js/common.js"></script>
    <script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/lang/zh-cn/zh-cn.js"></script>

    <style>

        /*UP*/

        a.a_upload, a.a_choose { border: 1px solid #3d810c; box-shadow: 0 1px #CCCCCC; -moz-box-shadow: 0 1px #CCCCCC; -webkit-box-shadow: 0 1px #CCCCCC; cursor: pointer; display: inline-block; text-align: center; vertical-align: bottom; overflow: visible; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; vertical-align: middle; background-color: #f1f1f1; background-image: -webkit-linear-gradient(bottom, #CCC 0%, #2F8BC9 3%, #2F8BC9 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color: white; border: 1px solid #AAA; padding: 2px 8px 2px 8px; font-size: 14px; line-height: 1.5;
        }

    </style>
</head>

<body style="background-color:#3B82B8">
<div class=" w top">
    <div class="left">
        <a>
            <img src="<?php echo RES; ?>/images/logo.png" />
        </a>
    </div>
    <div class="right">
        <img src="<?php echo RES; ?>/images/portrait2.png" width="28" height="29" />
        <a><?php echo(session('uname')); ?></a>
        |
        <a href="<?php echo U('User/Index/index'); ?>">管理中心</a>
        |
        <a href="#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout'); ?>')"
           onLoad=setTimeout("abc.style.display='none'",5000)>安全退出</a>
    </div>
</div>


<div id="Frame">
<div id="nav">
    <div class="top"></div>
    <div class="account">
        <div class="uname">
            <img src="<?php echo RES; ?>/images/portrait2.png" />
            <span><?php echo(session('uname')); ?></span>
        </div>
        <ul>
            <li>
                用户等级：VIP<?php if($_SESSION['gid'] > 1) {
                    echo $_SESSION['gid'] - 1;
                } else {
                    echo 0;
                } ?>
            </li>
            <li>会员余额</li>
            <li>
                VIP有效时间：
                <?php if($_SESSION['viptime'] != 0): echo(date("Y-m-d", $thisUser["viptime"])); ?>
                <?php else: ?>
                    vip0不限时间<?php endif; ?>
            </li>
            <li>
                  <span>
                    <a href="<?php echo U('Index/useredit'); ?>">修改密码</a>
                  </span>
                  <span>
                    <a href="<?php echo U('Alipay/index'); ?>">会员充值</a>
                  </span>
                  <span>
                    <a href="#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout'); ?>')"
                       onLoad=setTimeout("abc.style.display='none'",5000)>安全退出</a>
                  </span>
            </li>
        </ul>

    </div>
    <div>
        <div class="public">
            <img src="<?php echo RES; ?>/images/title1.jpg" width="71" height="28" />

            <div>
                <div class="img">
                    <img src="<?php echo($wecha["headerpic"]); ?>" />
                </div>
                <ul>
                    <li>公众账号:<?php echo($wecha["weixin"]); ?></li>
                    <li>VIP等级:VIP<?php if($_SESSION['gid'] > 1) {
                            echo $_SESSION['gid'] - 1;
                        } else {
                            echo 0;
                        } ?></li>
                    <li>图文数量:<?php echo($thisUser["diynum"]); ?>/<?php echo($userinfo["diynum"]); ?></li>
                    <li>请求数量:<?php echo $_SESSION['diynum']; ?>/<?php echo($userinfo["connectnum"]); ?>
                        <span>
                            <a href="<?php echo U('Index/edit', array('id' => $_GET['id'])); ?>">编辑</a>
                            <a href="<?php echo U('Index/del', array('id' => $_GET['id'])); ?>">删除</a>
                            </span>
                    </li>
                </ul>

            </div>
        </div>
        <div class="analyse">
            <img src="<?php echo RES; ?>/images/title2.jpg" width="71" height="28" />

            <div>
                <ul>
                    <li>日期:2012-12-12</li>
                    <li>文本请求数: 0/4000 &nbsp;&nbsp;&nbsp; 关注人数：100</li>
                    <li>图文请求数: 0/4000 &nbsp;&nbsp;&nbsp; 取消关注：100</li>
                    <li>语音请求数: 0/4000</li>

                </ul>
            </div>
                <span class="add">
                    <a href="<?php echo U('Index/add'); ?>"><img src="<?php echo RES; ?>/images/jia.png" /></a>
                </span>
        </div>
    </div>
</div>
<!--nav 结束-->


<div id="floatline"></div>

<div class="Menu">
    <div class="TwoMenu">
        <a href="<?php echo U('Function/index', array('token' => $token, 'id' => session('wxid'))); ?>">
            <img src="<?php echo RES; ?>/images/jichu.jpg" />

        </a>

        <div id="TwoMenu-01" <?php if (in_array(MODULE_NAME, array(
                'Function', 'Areply', 'Text', 'Voiceresponse', 'Call', 'Company', 'Other', 'Requerydata',
                'Alipay_config', 'Index'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/jichu2.jpg" />
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo U('Home/set', array('token' => $token)); ?>">
            <img src="<?php echo RES; ?>/images/3g.jpg" />

        </a>

        <div id="TwoMenu-02" <?php if (in_array(MODULE_NAME, array(
                'Home', 'Tmpls', 'Classify', 'Img', 'Diymen', 'Flash', 'Photo', 'Catemenu', 'Plugin'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/3g2.jpg" />
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo U('Lottery/index', array('token' => $token)); ?>">
            <img src="<?php echo RES; ?>/images/yingxiao.jpg" />
        </a>

        <div id="TwoMenu-03" <?php if (in_array(MODULE_NAME, array(
                'Lottery', 'Coupon', 'Guajiang', 'Zadan', 'Yaoqing', 'Wxusermeasage'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/yingxiao2.jpg" />
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo U('Product/index', array('token' => $token)); ?>">
            <img src="<?php echo RES; ?>/images/shangwu.jpg" />
        </a>

        <div id="TwoMenu-04" <?php if (in_array(MODULE_NAME, array(
                'Product', 'Groupon', 'orders', 'Host', 'Selfform', 'Adma', 'Panorama', 'Reply_info', 'Wall', 'Dining'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/shangwu2.jpg" />
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo U('Estate/index', array('token' => $token)); ?>">
            <img src="<?php echo RES; ?>/images/hangye.jpg" />
        </a>

        <div id="TwoMenu-05" <?php if (in_array(MODULE_NAME, array(
                'Estate', 'Jiudian', 'Reservation', 'Yiliao', 'Wedding', 'Meirong', 'Lvyou', 'Jianshen', 'Zhengwu',
                'Wuye', 'Ktv', 'Jiuba', 'Hunqing', 'Zhuangxiu', 'Jiaoyu', 'Huadian'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/hangye2.jpg" />
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo U('Member_card/index', array('token' => $token)); ?>">
            <img src="<?php echo RES; ?>/images/huiyuan.jpg" />
        </a>

        <div id="TwoMenu-06" <?php if (in_array(MODULE_NAME, array(
                'info', 'Member_card', 'privilege', 'create', 'exchange', 'Member'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/huiyuan2.jpg" />
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo U('Taobao/index', array('token' => $token)); ?>">
            <img src="<?php echo RES; ?>/images/hudong.jpg" />
        </a>

        <div id="TwoMenu-07" <?php if (in_array(MODULE_NAME, array(
                'Taobao', 'Api', 'Liuyan', 'Heka', 'Diaoyan', 'Shake', 'Wewall', 'Vote', 'Yuyue', 'Wai', 'Wxq'
            ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            <img src="<?php echo RES; ?>/images/hudong2.jpg" />
        </div>
    </div>
    <!-- TwoMenu   end-->
</div>


<div class="Menu">
<div class="ThreeMenu">
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'Function', 'Areply', 'Text', 'Voiceresponse', 'Call', 'Company', 'Other', 'Requerydata', 'Alipay_config',
        'Index'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Function/index', array('token' => $token, 'id' => session('wxid'))); ?>" class="Red">
        <img src="<?php echo RES; ?>/images/coin6.jpg" /><span>互联网接入</span><span
            class="introduction">这里您可以开启想接入的互联网应用</span>
    </a>
    <a href="<?php echo U('Areply/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/guanzhuhuifu_34.jpg" /><span>关注回复</span><span class="introduction">设置新客户关注后第一条信息</span>
    </a>
    <a href="<?php echo U('Text/index', array('token' => $token)); ?>" class="Navy">
        <img src="<?php echo RES; ?>/images/wannengbiaoge_34.jpg" /><span>内容回复</span><span class="introduction">您可以设置图文关键字回复</span>
    </a>
    <a href="<?php echo U('Voiceresponse/index', array('token' => $token)); ?>" class="DarkGreen">
        <img src="<?php echo RES; ?>/images/yuyinhuifu_33.jpg" /><span>语音回复</span><span
            class="introduction">设置语音关键字回复</span>
    </a>

    <a href="<?php echo U('Other/index', array('token' => $token)); ?>" class="LightRed">
        <img src="<?php echo RES; ?>/images/coin8.jpg" /><span>自定义回复</span><span class="introduction">关闭聊天后回复信息</span>
    </a>

    <a href="<?php echo U('Index/editsms', array('token' => $token)); ?>" class="LightBlue">
        <img src="<?php echo RES; ?>/images/coin9.jpg" /><span>短信设置</span><span class="introduction">系统短信接口配置</span>
    </a>

    <a href="<?php echo U('Company/index', array('token' => $token)); ?>" class="Brown">
        <img src="<?php echo RES; ?>/images/lbshuifu_34.jpg" /><span>LBS回复</span><span
            class="introduction">LBS回复设置</span>
    </a>
    <a href="<?php echo U('Alipay_config/index', array('token' => $token)); ?>" class="LightPurple">
        <img src="<?php echo RES; ?>/images/zhifuguanli_34.jpg" /><span>支付系统配置</span><span class="introduction">电子商务支付系统配置</span>
    </a>
    <a href="<?php echo U('Requerydata/index', array('token' => $token)); ?>" class="LightRed">
        <img src="<?php echo RES; ?>/images/coin12.jpg" /><span>统计分析</span><span class="introduction">提供站点数据分析</span>

    </a>

</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'Home', 'Tmpls', 'Classify', 'Img', 'Diymen', 'Flash', 'Photo', 'plugmenu', 'Catemenu', 'Plugin'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Home/set', array('token' => $token)); ?>" class="Red">
        <img src="<?php echo RES; ?>/images/coin7.jpg" /><span>微网站基本设置</span><span
            class="introduction">在这里您需要设置微网站基本信息</span>
    </a>
    <a href="<?php echo U('Tmpls/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin14.jpg" /><span>微网站模版管理</span><span
            class="introduction">在这里您可以自由切换微信站风格</span>
    </a>
    <a href="<?php echo U('Classify/index', array('token' => $token)); ?>" class="Navy">
        <img src="<?php echo RES; ?>/images/coin1.jpg" /><span>微网站板块分类管理</span><span
            class="introduction">这里您可以设置微网站的分类</span>
    </a>
    <a href="<?php echo U('Img/index', array('token' => $token)); ?>" class="DarkGreen">
        <img src="<?php echo RES; ?>/images/coin2.jpg" /><span>微网站内容管理</span><span
            class="introduction">在这里您可以添加微网站内容</span>
    </a>
    <a href="<?php echo U('Diymen/index', array('token' => $token)); ?>" class="LightBlue">
        <img src="<?php echo RES; ?>/images/coin15.jpg" /><span>微信导航菜单管理</span><span class="introduction">添加微信底部菜单（需开通接口服务）</span>
    </a>
    <a href="<?php echo U('Flash/index', array('token' => $token)); ?>" class="Orange">
        <img src="<?php echo RES; ?>/images/coin4.jpg" /><span>幻灯片</span><span class="introduction">微网站头部幻灯片管理</span>
    </a>
    <a href="<?php echo U('Photo/index', array('token' => $token)); ?>" class="Brown">
        <img src="<?php echo RES; ?>/images/xiangce_34.jpg" /><span>相册</span><span class="introduction">微网站相册图片管理</span>
    </a>
    <a href="<?php echo U('Catemenu/index', array('token' => $token)); ?>" class="LightPurple">
        <img src="<?php echo RES; ?>/images/bohaobanquan_34.jpg" /><span>底部导航菜单</span><span class="introduction">设置微网站版权信息及底部菜单</span>
    </a>
    <a href="<?php echo U('Plugin/index', array('token' => $token)); ?>" class="LightPurple">
        <img src="<?php echo RES; ?>/images/bohaobanquan_34.jpg" /><span>实用小工具外链</span><span class="introduction">实用小工具外链</span>
    </a>
    <a target="_blank" href="<?php echo U('Yulan/index', array('token' => $token)); ?>" class="LightPurple">
        <img src="<?php echo RES; ?>/images/coin18.JPG" /><span>在线预览</span><span class="introduction">您可以用通过PC浏览器进行3G站的预览</span>
    </a>
</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'Lottery', 'Coupon', 'Guajiang', 'Research', 'Zadan', 'Yaoqing', 'Wxusermeasage'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Lottery/index', array('token' => $token)); ?>" class="Red">
        <img src="<?php echo RES; ?>/images/dazhuanpan_34.jpg" /><span>大转盘</span><span
            class="introduction">发布大转盘营销活动</span>
    </a>
    <a href="<?php echo U('Coupon/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/youhuiquan_34.jpg" /><span>优惠券</span><span
            class="introduction">发布优惠券营销活动</span>
    </a>
    <a href="<?php echo U('Guajiang/index', array('token' => $token)); ?>" class="Navy">
        <img src="<?php echo RES; ?>/images/guaguaka_34.jpg" /><span>刮刮卡</span><span
            class="introduction">发布刮刮卡营销活动</span>
    </a>
    <a href="<?php echo U('Zadan/index', array('token' => $token)); ?>" class="DarkGreen">
        <img src="<?php echo RES; ?>/images/zajindan_34.jpg" /><span>砸金蛋</span><span
            class="introduction">发布砸金蛋营销活动</span>
    </a>
    <!-- <a href="<?php echo U('LuckyFruit/index', array('token' => $token)); ?>" class="DarkGreen">
                    <img src="<?php echo RES; ?>/images/zajindan_34.jpg" /><span>水果机</span><span class="introduction">发布水果机营销活动</span>
                </a>-->


    <!-- <a href="<?php echo U('Xitie/index', array('token' => $token)); ?>" class="LightBlue">
                    <img src="<?php echo RES; ?>/images/weixitie_34.jpg" /><span>微喜帖</span><span class="introduction">电子喜帖发布 可用于结婚等场合</span>
                </a>
                <a href="<?php echo U('Yaoqing/index', array('token' => $token)); ?>" class="Orange" >
                    <img src="<?php echo RES; ?>/images/yaoqinghan_34.jpg" /><span>邀请函</span><span class="introduction">电子邀请函（会议，开业，店庆，活动等邀请）</span>
                </a>
              <a href="<?php echo U('Heka/index', array('token' => $token)); ?>" class="Orange" >
                    <img src="<?php echo RES; ?>/images/yaoqinghan_34.jpg" /><span>微贺卡</span><span class="introduction">可用于拜年</span>
                </a>  -->
    <a href="<?php echo U('Wxusermeasage/index', array('token' => $token)); ?>" class="Orange">
        <img src="<?php echo RES; ?>/images/kefu.jpg" /><span>人工客服</span><span class="introduction">这里您可以开通人工客户服务</span>
    </a>
</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'Product', 'Groupon', 'orders', 'Host', 'Selfform', 'Adma', 'Panorama', 'Reply_info', 'Wall', 'Xitie', 'Dining'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Product/index', array('token' => $token)); ?>" class="Red">
        <img src="<?php echo RES; ?>/images/weishangcheng_34.jpg" /><span>微商城</span><span
            class="introduction">移动端电子商务平台</span>
    </a>
    <a href="<?php echo U('Groupon/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/weituangou_34.jpg" /><span>微团购</span><span
            class="introduction">移动端团购平台</span>
    </a>
    <a href="<?php echo U('Dining/orders', array('token' => $token, 'dining' => 1)); ?>" class="Navy">
        <img src="<?php echo RES; ?>/images/wuxiandingcan_34.jpg" /><span>无线订餐</span><span
            class="introduction">移动端无线订餐</span>
    </a>
    <a href="<?php echo U('Host/index', array('token' => $token)); ?>" class="DarkGreen">
        <img src="<?php echo RES; ?>/images/tongyongdingcan_34.jpg" /><span>通用订单</span><span class="introduction">电子商务平台订单管理</span>
    </a>
    <a href="<?php echo U('Selfform/index', array('token' => $token)); ?>" class="LightBlue">
        <img src="<?php echo RES; ?>/images/wannengbiaoge_34.jpg" /><span>万能表单</span><span class="introduction">自定义万能表单工具可发布预约等功能</span>
    </a>
    <a href="<?php echo U('Adma/index', array('token' => $token)); ?>" class="Orange">
        <img src="<?php echo RES; ?>/images/diyxuanchuan_34.jpg" /><span>DIY宣传</span><span class="introduction">制作自己的二维码宣传页面</span>
    </a>
    <a href="<?php echo U('Panorama/index', array('token' => $token)); ?>" class="LightPurple">
        <img src="<?php echo RES; ?>/images/360quanjing_34.jpg" /><span>360全景</span><span
            class="introduction">3D全景展示</span>
    </a>
    <a href="<?php echo U('Xitie/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/shangjiashezhi_34.jpg" /><span>微喜帖</span><span
            class="introduction">微喜帖</span>
    </a>
    <!--   <a href="<?php echo U('Wedding/index', array('token' => $token)); ?>" class="Highland" >
                 <img src="<?php echo RES; ?>/images/shangjiashezhi_34.jpg" /><span>新喜帖</span><span class="introduction">新喜帖</span>
                </a>-->
</div>

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'Estate', 'Jiudian', 'Reservation', 'Yiliao', 'Wedding', 'Meirong', 'Lvyou', 'Jianshen', 'Zhengwu', 'Wuye',
        'Ktv', 'Jiuba', 'Hunqing', 'Zhuangxiu', 'Jiaoyu', 'Huadian'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Estate/index', array('token' => $token)); ?>" class="Navy">
        <img src="<?php echo RES; ?>/images/coin22.jpg" /><span>微房产</span><span class="introduction">微房产</span>
    </a>
    <a href="<?php echo U('Jiudian/index', array('token' => $token)); ?>" class="Orange">
        <img src="<?php echo RES; ?>/images/coin24.jpg" /><span>微酒店</span><span class="introduction">微酒店</span>
    </a>
    <a href="<?php echo U('Reservation/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin23.jpg" /><span>微预约</span><span class="introduction">微预约</span>
    </a>
    <a href="<?php echo U('Yiliao/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin25.jpg" /><span>微医疗</span><span class="introduction">微医疗</span>
    </a>
    <a href="<?php echo U('Meirong/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/weituangou_34.jpg" /><span>微美容</span><span class="introduction">微美容</span>
    </a>
    <a href="<?php echo U('Lvyou/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin6.jpg" /><span>微旅游</span><span class="introduction">微旅游</span>
    </a>
    <a href="<?php echo U('Jianshen/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin7.jpg" /><span>微健身</span><span class="introduction">微健身</span>
    </a>
    <a href="<?php echo U('Zhengwu/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin18.JPG" /><span>微政务</span><span class="introduction">微政务</span>
    </a>
    <a href="<?php echo U('Wuye/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin1.jpg" /><span>微物业</span><span class="introduction">微物业</span>
    </a>
    <a href="<?php echo U('Ktv/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/yuyinhuifu_33.jpg" /><span>微KTV</span><span class="introduction">微KTV</span>
    </a>
    <a href="<?php echo U('Jiuba/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/disanfang_34.jpg" /><span>微酒吧</span><span class="introduction">微酒吧</span>
    </a>
    <a href="<?php echo U('Hunqing/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/zajindan_34.jpg" /><span>微婚庆</span><span class="introduction">微婚庆</span>
    </a>
    <a href="<?php echo U('Zhuangxiu/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin15.jpg" /><span>微装修</span><span class="introduction">微装修</span>
    </a>
    <a href="<?php echo U('Jiaoyu/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin2.jpg" /><span>微教育</span><span class="introduction">微教育</span>
    </a>
    <a href="<?php echo U('Huadian/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/email.jpg" /><span>微花店</span><span class="introduction">微花店</span>
    </a>

</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'info', 'Member_card', 'privilege', 'create', 'exchange', 'Member'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Member_card/info', array('token' => $token)); ?>" class="Red">
        <img src="<?php echo RES; ?>/images/shangjiashezhi_34.jpg" /><span>会员卡商家设置</span><span class="introduction">设置商户信息</span>
    </a>
    <a href="<?php echo U('Member_card/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/huiyuanka_34.jpg" /><span>会员卡</span><span
            class="introduction">会员卡样式名称等信息设置</span>
    </a>
    <a href="<?php echo U('Member_card/replyInfoSet', array('token' => $token)); ?>" class="Navy">
        <img src="<?php echo RES; ?>/images/huiyuantequan_34.jpg" /><span>回复设置</span><span
            class="introduction">回复设置</span>
    </a>
    <!--   <a href="<?php echo U('Member_card/create', array('token' => $token)); ?>" class="DarkGreen" >
                    <img src="<?php echo RES; ?>/images/zaixiankaika_34.jpg" /><span>在线开卡</span><span class="introduction">在线会员卡开卡管理</span>
                </a>
                <a href="<?php echo U('Member_card/exchange', array('token' => $token)); ?>" class="LightBlue" >
                    <img src="<?php echo RES; ?>/images/jifenguanli_34.jpg" /><span>积分设置</span><span class="introduction">会员积分功能设置</span>
                </a>
                <a href="<?php echo U('Member/index', array('token' => $token)); ?>" class="Orange" >
                    <img src="<?php echo RES; ?>/images/ziliaoguanli_34.jpg" /><span>资料管理</span><span class="introduction">会员资料管理</span>
                </a>-->
</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="contab" <?php if (in_array(MODULE_NAME, array(
        'Taobao', 'Api', 'Liuyan', 'Heka', 'Diaoyan', 'Shake', 'Wewall', 'Vote', 'Yuyue', 'Wai', 'Wxq'
    ))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
    <a href="<?php echo U('Taobao/index', array('token' => $token)); ?>" class="Red">
        <img src="<?php echo RES; ?>/images/taobaotianmao_34.jpg" /><span>淘宝天猫</span><span
            class="introduction">功能失效</span>
    </a>
    <a href="<?php echo U('Api/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/disanfang_34.jpg" /><span>第三方</span><span
            class="introduction">调用第三方插件</span>
    </a>
    <a href="<?php echo U('Heka/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin14.jpg" /><span>微贺卡</span><span class="introduction">微贺卡</span>
    </a>
    <a href="<?php echo U('Diaoyan/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin2.jpg" /><span>微调研</span><span class="introduction">微调研</span>
    </a>
    <a href="<?php echo U('Vote/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin2.jpg" /><span>微投票</span><span class="introduction">微投票</span>
    </a>
    <a href="<?php echo U('Yuyue/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin23.jpg" /><span>微预约</span><span class="introduction">微预约</span>
    </a>
    <a href="<?php echo U('Shake/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin19.jpg" /><span>摇一摇</span><span class="introduction">摇一摇</span>
    </a>
    <a href="<?php echo U('Wewall/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/coin20.jpg" /><span>微信墙</span><span class="introduction">微信墙</span>
    </a>

    <a href="<?php echo U('Liuyan/index', array('token' => $token)); ?>" class="Highland">
        <img src="<?php echo RES; ?>/images/diyxuanchuan_34.jpg" /><span>留言板</span><span class="introduction">留言板</span>
    </a>

</div>
</div>
<!-- ThreeMenu end-->
</div>
<!--Menu   end -->


<link rel="stylesheet" type="text/css" href="<?php echo RES; ?>/css/cymain.css" />

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS; ?>/kindeditor/themes/default/default.css" />

<link rel="stylesheet" href="<?php echo STATICS; ?>/kindeditor/plugins/code/prettify.css" />

<script src="<?php echo STATICS; ?>/kindeditor/kindeditor.js" type="text/javascript"></script>

<script src="<?php echo STATICS; ?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>

<script src="<?php echo STATICS; ?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>

<script src="./tpl/User/default/common/js/cart/jscolor.js" type="text/javascript"></script>


<script type="text/javascript" src="/tpl/User/default/common/js/jQuery.js"></script>

<script>

    var editor;

    KindEditor.ready(function(K) {

        editor = K.create('#intro', {

            resizeType: 1,

            allowPreviewEmoticons: false,

            allowImageUpload: true,

            uploadJson: '/index.php?g=User&m=Upyun&a=kindedtiropic',

            items: [

                'source', 'undo', 'clearhtml', 'hr',

                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',

                'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'unlink', 'baidumap', 'lineheight', 'table', 'anchor', 'preview', 'print', 'template', 'code', 'cut']

        });


    });

</script>

<script src="<?php echo RES; ?>/js/date/WdatePicker.js"></script>

<form class="form" method="post" action="" target="_top" enctype="multipart/form-data">

<div class="content">

<!--活动开始-->

<div class="cLineB">

    <h4>编辑幸运大转盘活动开始内容</h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a>

</div>

<div class="msgWrap bgfc">

    <TABLE class="userinfoArea" style=" margin:0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
        <TBODY>

        <TR>

            <th valign="top"><span class="red">*</span>关键词：</th>

            <TD>

                <input type="hidden" class="px" value="1" name="type" style="width:350px">

                <input type="input" class="px" id="keyword"
                       value="<?php if($vo['keyword'] == ''): ?>大转盘<?php else: echo($vo["keyword"]); endif; ?>"
                       name="keyword" style="width:350px"><br />

                <span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。

            </TD>

            <TD rowspan="7" valign="top">

                <div style="margin-left:20px">

                    <img id="pic1_src"
                         src="<?php if($vo['starpicurl'] == ''): echo C('site_url'); ?>/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg<?php else: echo($vo["starpicurl"]); endif; ?>"
                         width="373px">

                    <br />

                    <input class="px" name="starpicurl"
                           value="<?php if($vo['starpicurl'] == ''): echo C('site_url'); ?>/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg<?php else: echo($vo["starpicurl"]); endif; ?>"
                           id="pic1" style="width:363px;" />

                    <br />

                    <script src="/tpl/static/upyun.js"></script>
                    <a href="###" onclick="upyunPicUpload('pic1',700,420,'<?php echo($token); ?>')"
                       class="a_upload">上传</a> <a href="###" onclick="viewImg('pic1')">预览</a>&nbsp;活动开始图片

                </div>

            </TD>

        </TR>

        <TR>

            <th valign="top"><span class="red">*</span>活动名称：</th>

            <TD>

                <input type="input" class="px" id="title"
                       value="<?php if($vo['title'] == ''): ?>幸运大转盘活动开始了<?php else: echo($vo["title"]); endif; ?>"
                       name="title" style="width:350px" />

                <br />

                请不要多于50字!

            </TD>

        <TR>

            <th valign="top"><span class="red">*</span>兑奖信息：</th>

            <td>

                <input type="input" class="px" id="txt"
                       value="<?php if($vo['txt'] == ''): ?>兑奖请联系我们，电话18950099999<?php else: echo($vo["txt"]); endif; ?>"
                       name="txt" style="width:350px" />

                <br />请不要多于100字! 这个设定但用户输入兑奖时候的显示信息!

            </td>

        </TR>

        <TR>

            <th valign="top"><span class="red">*</span>中奖提示：</th>

            <td><textarea class="px" id="sttxt" name="sttxt" style="width:350px"><?php echo($vo["sttxt"]); ?></textarea>
                中奖后,提示信息

            </td>

        </TR>

        <TR>

            <th><span class="red">*</span>活动时间：</th>

            <td><input type="input" class="px" id="statdate"
                       value="<?php if($vo['statdate'] != ''): echo(date("Y-m-d H:i:s", $vo["statdate"])); endif; ?>"
                       onClick="WdatePicker()" name="statdate" />

                到

                <input type="input" class="px" id="enddate"
                       value="<?php if($vo['enddate'] != ''): echo(date("Y-m-d H:i:s", $vo["enddate"])); endif; ?>"
                       name="enddate" onClick="WdatePicker()" />

            </td>

        </TR>

        <TR>

            <th valign="top">活动说明：</th>

            <td><textarea class="px" id="info" name="info"
                          style="width:350px; height:125px"><?php if($vo['info'] == ''): ?>亲，请点击进入大转盘抽奖活动页面，祝您好运哦！<?php else: echo($vo["info"]); endif; ?></textarea><br />换行请输入

                &lt;br&gt;

            </td>

        </TR>

        <TR>

            <th><span class="red">*</span>重复抽奖回复：</th>

            <td><input type="input" class="px" id="aginfo"
                       value="<?php if($vo['aginfo'] == ''): ?>亲，继续努力哦！<?php else: echo($vo["aginfo"]); endif; ?>"
                       name="aginfo" style="width:350px" />备注：

                如果设置只允许抽一次奖的，请写：你已经玩过了，下次再来。


                如果设置可多次抽奖，请写：亲，继续努力哦！
            </td>

        </TR>

        </TBODY>

    </TABLE>

</div>


<!--活动结束-->

<div class="cLineB">

    <h4>活动结束内容</h4></div>

<div class="msgWrap bgfc">


    <table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">

        <tbody>

        <tr>

            <th valign="top"><span class="red">*</span>活动结束公告主题：</th>

            <td><input type="input" class="px" id="endtite"
                       value="<?php if($vo['endtite'] == ''): ?>幸运大转盘活动已经结束了<?php else: echo($vo["endtite"]); endif; ?>"
                       name="endtite" style="width:350px" />

                <br />

                请不要多于50字!
            </td>

            <td rowspan="4" valign="top">
                <div style="margin-left:20px"><img id="pic2_src"
                                                   src="<?php if($vo['endpicurl'] == ''): echo C('site_url'); ?>/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg<?php else: echo($vo["endpicurl"]); endif; ?>"
                                                   width="373px" /> <br />

                    <input class="px" id="pic2" name="endpicurl"
                           value="<?php if($vo['endpicurl'] == ''): echo C('site_url'); ?>/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg<?php else: echo($vo["endpicurl"]); endif; ?>"
                           style="width:363px;" />

                    <br />

                    <script src="/tpl/static/upyun.js"></script>
                    <a href="###" onclick="upyunPicUpload('pic2',700,420,'<?php echo($token); ?>')"
                       class="a_upload">上传</a> <a href="###" onclick="viewImg('pic2')">预览</a>&nbsp; 活动结束图片网址
                </div>
            </td>

        </tr>

        <tr>

            <th valign="top">活动结束说明：</th>

            <td valign="top"><textarea class="px" id="endinfo" name="endinfo"
                                       style="width:350px; height:125px"><?php if($vo['endinfo'] == ''): ?>亲，活动已经结束，请继续关注我们的后续活动哦。<?php else: echo($vo["endinfo"]); endif; ?></textarea><br />换行请输入

                &lt;br&gt;

            </td>

        </tr>

        </tbody>

    </table>

</div>


<!--奖项设置-->

<div class="cLineB">

    <h4>奖项设置</h4></div>

<div class="msgWrap bgfc">


    <TABLE class="userinfoArea" style=" margin: 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">

        <TBODY>

        <TR>

            <th valign="top"><span class="red">*</span>一等奖奖品设置：</th>

            <td><input type="input" class="px" id="fist" name="fist" value="<?php echo($vo["fist"]); ?>"
                       style="width:250px" />

                请不要多于50字!
            </td>

            <TD rowspan="9" valign="top">&nbsp;</TD>

        </TR>

        <TR>

            <th valign="top"><span class="red">*</span>一等奖奖品数量：</th>

            <td><input type="input" class="px" id="fistnums" name="fistnums" value="<?php echo($vo["fistnums"]); ?>"
                       style="width:60px" />

                <span class="red">如果是100%中奖,请把一等奖的奖品数量[ 1000就代表前1000人都中奖 ]填写多点</span></td>

        </TR>

        <TR>

            <th valign="top">二等奖奖品设置：</th>

            <td><input type="input" class="px" id="second" name="second" value="<?php echo($vo["second"]); ?>"
                       style="width:250px" />

                请不要多于50字!
            </td>

        </TR>

        <TR>

            <th valign="top">二等奖奖品数量：</th>

            <td><input type="input" class="px" id="secondnums" name="secondnums"
                       value="<?php echo($vo["secondnums"]); ?>" style="width:60px" />

            </td>

        </TR>

        <TR>

            <th valign="top">三等奖奖品设置：</th>

            <td><input type="input" class="px" id="third" name="third" value="<?php echo($vo["third"]); ?>"
                       style="width:250px" />

                请不要多于50字!
            </td>

        </TR>

        <TR>

            <th valign="top">三等奖奖品数量：</th>

            <td><input type="input" class="px" id="thirdnums" name="thirdnums" value="<?php echo($vo["thirdnums"]); ?>"
                       style="width:60px" />

            </td>

        </TR>

        <TR>

            <th valign="top">四等奖奖品设置：</th>

            <td><input type="input" class="px" id="four" name="four" value="<?php echo($vo["four"]); ?>"
                       style="width:250px" />

                请不要多于50字!
            </td>

            <TD rowspan="9" valign="top">&nbsp;</TD>

        </TR>

        <TR>

            <th valign="top">四等奖奖品数量：</th>

            <td><input type="input" class="px" id="fournums" name="fournums" value="<?php echo($vo["fournums"]); ?>"
                       style="width:60px" />

            </td>

        </TR>

        <TR>

            <th valign="top">五等奖奖品设置：</th>

            <td><input type="input" class="px" id="five" name="five" value="<?php echo($vo["five"]); ?>"
                       style="width:250px" />

                请不要多于50字!
            </td>

            <TD rowspan="9" valign="top">&nbsp;</TD>

        </TR>

        <TR>

            <th valign="top">五等奖奖品数量：</th>

            <td><input type="input" class="px" id="fivenums" name="fivenums" value="<?php echo($vo["fivenums"]); ?>"
                       style="width:60px" />

            </td>

        </TR>

        <TR>

            <th valign="top">六等奖奖品设置：</th>

            <td><input type="input" class="px" id="six" name="six" value="<?php echo($vo["six"]); ?>"
                       style="width:250px" />

                请不要多于50字!
            </td>

            <TD rowspan="9" valign="top">&nbsp;</TD>

        </TR>

        <TR>

            <th valign="top">六等奖奖品数量：</th>

            <td><input type="input" class="px" id="sixnums" name="sixnums" value="<?php echo($vo["sixnums"]); ?>"
                       style="width:60px" />

            </td>

        </TR>


        </tbody>

        <tbody>

        <TR>

            <th valign="top"><span class="red">*</span>预计活动的人数：</th>

            <td><input type="input" class="px" id="allpeople" name="allpeople" value="<?php echo($vo["allpeople"]); ?>"
                       style="width:150px" /> 预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/(预估活动人数*每人抽奖次数) 如果要确保任何时候都100%中奖建议设置为1人参加!<span
                    class='red'>如果要确保任何时候都100%中奖建议设置为1人参加!并且奖项只设置一等奖.</span></td>

        </TR>

        <TR>

            <th valign="top"><span class="red">*</span>每人最多允许抽奖次数：</th>

            <td><input type="input" class="px" id="canrqnums" name="canrqnums" value="<?php echo($vo["canrqnums"]); ?>"
                       style="width:150px" />

                必须1-5之间的数字
            </td>

        </TR>

        <TR>

            <th valign="top">抽奖页面是否显示奖品数量：</th>

            <td><input class="radio" type="radio" name="displayjpnums" value="1"
                       <?php if ($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示 <input class="radio"
                                                                                                 type="radio"
                                                                                                 name="displayjpnums"
                                                                                                 value="0"
                                                                                                 <?php if ($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显
            </td>

        </TR>

        <TR>

            <th valign="top">中奖是否短信提醒：</th>

            <td><input class="radio" type="radio" name="remind" value="1"
                       <?php if ($vo['remind'] == 1): ?>checked<?php endif; ?> >发送 <input class="radio" type="radio"
                                                                                          name="remind" value="0"
                                                                                          <?php if ($vo['remind'] == 0): ?>checked<?php endif; ?>>不发送
            </td>

        </TR>

        <TR>

            <th>&nbsp;</th>

            <td>
                <button type="submit" class="btnGreen">保存</button>
                　<a href="" class="btnGray vm">取消</a>　<span class="red">请确认功能管理已开启大转盘功能</span></td>

        </TBODY>

    </TABLE>


</div>


</div>

</form>


<div class="clr"></div>

</div>

</div>

</div>


<!--底部-->

</div>


<div style="clear:both;"></div>
</div>


</body>
</html>
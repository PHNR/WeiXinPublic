<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo C('site_title');?> <?php echo C('site_name');?></title>
  <link href="<?php echo RES;?>/css/ss.css" rel="stylesheet" type="text/css"  />
  <link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../wm-xin-a/font-awesome.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/stylet.css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/lang/zh-cn/zh-cn.js"></script>

<style>

/*UP*/ 

a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #2F8BC9 3%, #2F8BC9 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:white;border:1px solid #AAA;padding:2px 8px 2px 8px;font-size: 14px;line-height: 1.5;

}

</style>
</head>

<body style="background-color:#3B82B8">
  <div class=" w top">
    <div class="left">
      <a>
        <img src="<?php echo RES;?>/images/logo.png" />
      </a>
    </div>
    <div class="right">
      <img src="<?php echo RES;?>/images/portrait2.png" width="28" height="29" />
      <a><?php echo (session('uname')); ?></a>
      |
      <a href="<?php echo U('User/Index/index');?>">管理中心</a>
      |
      <a href="#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
    </div>
  </div>


<div id="Frame">
    <div id="nav">
        <div class="top"></div>
        <div class="account">
            <div class="uname">
              <img src="<?php echo RES;?>/images/portrait2.png" />
              <span><?php echo (session('uname')); ?></span>  
            </div>
            <ul>
                <li>
                    用户等级：VIP<?php if($_SESSION['gid']>1){echo $_SESSION['gid']-1;}else{echo 0;}?>
                </li>
                <li>会员余额</li>
                <li>
                    VIP有效时间：
                    <?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); ?>
                    <?php else: ?>
                    vip0不限时间<?php endif; ?>
                </li>
                <li>
                  <span>
                    <a href="<?php echo U('Index/useredit');?>">修改密码</a>
                  </span>
                  <span>
                    <a href="<?php echo U('Alipay/index');?>">会员充值</a>
                  </span>
                  <span>
                    <a href="#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
                  </span>                    
                </li>
            </ul>
            
        </div>
        <div>
            <div class="public">
                <img src="<?php echo RES;?>/images/title1.jpg" width="71" height="28" />
                <div>
                    <div class="img">
                        <img src="<?php echo ($wecha["headerpic"]); ?>"/>
                    </div>
                    <ul>
                        <li>公众账号:<?php echo ($wecha["weixin"]); ?></li>
                        <li>VIP等级:VIP<?php if($_SESSION['gid']>1){echo $_SESSION['gid']-1;}else{echo 0;}?></li>
                        <li>图文数量:<?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></li>
                        <li>请求数量:<?php echo $_SESSION['diynum']; ?>/<?php echo ($userinfo["connectnum"]); ?>
                            <span>
                            <a href="<?php echo U('Index/edit',array('id'=>$_GET['id']));?>">编辑</a>
                            <a href="<?php echo U('Index/del',array('id'=>$_GET['id']));?>">删除</a>
                            </span>      
                        </li>
                    </ul>
                                          
                </div>
            </div>
            <div class="analyse">
                <img src="<?php echo RES;?>/images/title2.jpg" width="71" height="28" />
                <div>
                    <ul>
                        <li>日期:2012-12-12</li>
                        <li>文本请求数: 0/4000 &nbsp;&nbsp;&nbsp; 关注人数：100</li>
                        <li>图文请求数: 0/4000 &nbsp;&nbsp;&nbsp; 取消关注：100</li>
                        <li>语音请求数: 0/4000</li>
                        
                    </ul>                     
                </div>
                <span class="add">
                    <a href="<?php echo U('Index/add');?>"><img src="<?php echo RES;?>/images/jia.png" /></a>                        
                </span>                                 
            </div>
        </div>
    </div><!--nav 结束-->


    <div id="floatline"></div>

    <div class="Menu">
        <div class="TwoMenu">
            <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" >
                <img src="<?php echo RES;?>/images/jichu.jpg" />
        
            </a>
            <div id="TwoMenu-01" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Call','Company','Other','Requerydata','Alipay_config','Index'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/jichu2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Home/set',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/3g.jpg" />
                
            </a>
            <div id="TwoMenu-02" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','Catemenu','Plugin'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/3g2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/yingxiao.jpg" />
            </a>
            <div id="TwoMenu-03" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Zadan','Yaoqing','Wxusermeasage'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/yingxiao2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Product/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/shangwu.jpg" />
            </a>
            <div id="TwoMenu-04" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info','Wall','Dining'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/shangwu2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Estate/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/hangye.jpg" />
            </a>
            <div id="TwoMenu-05" <?php if(in_array(MODULE_NAME,array('Estate','Jiudian','Reservation','Yiliao','Wedding','Meirong','Lvyou','Jianshen','Zhengwu','Wuye','Ktv','Jiuba','Hunqing','Zhuangxiu','Jiaoyu','Huadian'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/hangye2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/huiyuan.jpg" />
            </a>
            <div id="TwoMenu-06" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/huiyuan2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Taobao/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/hudong.jpg" />
            </a>
            <div id="TwoMenu-07" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan','Heka','Diaoyan','Shake','Wewall','Vote','Yuyue','Wai','Wxq'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/hudong2.jpg" />
            </div>
        </div><!-- TwoMenu   end-->
</div>


<div class="Menu">
        <div class="ThreeMenu">
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Call','Company','Other','Requerydata','Alipay_config','Index'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" class="Red" >
                    <img src="<?php echo RES;?>/images/coin6.jpg" /><span>互联网接入</span><span class="introduction">这里您可以开启想接入的互联网应用</span>
                </a>
                <a href="<?php echo U('Areply/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/guanzhuhuifu_34.jpg" /><span>关注回复</span><span class="introduction">设置新客户关注后第一条信息</span>
                </a>
                <a href="<?php echo U('Text/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/wannengbiaoge_34.jpg" /><span>内容回复</span><span class="introduction">您可以设置图文关键字回复</span>
                </a>
                <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/yuyinhuifu_33.jpg" /><span>语音回复</span><span class="introduction">设置语音关键字回复</span>
                </a>

                     <a href="<?php echo U('Other/index',array('token'=>$token));?>" class="LightRed" >
                    <img src="<?php echo RES;?>/images/coin8.jpg" /><span>自定义回复</span><span class="introduction">关闭聊天后回复信息</span>
                </a>

                <a href="<?php echo U('Index/editsms',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/coin9.jpg" /><span>短信设置</span><span class="introduction">系统短信接口配置</span>
                </a>
               
                <a href="<?php echo U('Company/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/lbshuifu_34.jpg" /><span>LBS回复</span><span class="introduction">LBS回复设置</span>
                </a>
                <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/zhifuguanli_34.jpg" /><span>支付系统配置</span><span class="introduction">电子商务支付系统配置</span>
                </a>
                <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>" class="LightRed" >
                    <img src="<?php echo RES;?>/images/coin12.jpg" /><span>统计分析</span><span class="introduction">提供站点数据分析</span>

                </a>

            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','plugmenu','Catemenu','Plugin'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                 <a href="<?php echo U('Home/set',array('token'=>$token));?>" class="Red" >
                     <img src="<?php echo RES;?>/images/coin7.jpg" /><span>微网站基本设置</span><span class="introduction">在这里您需要设置微网站基本信息</span>
                 </a>
                <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin14.jpg" /><span>微网站模版管理</span><span class="introduction">在这里您可以自由切换微信站风格</span>
                </a>
                <a href="<?php echo U('Classify/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/coin1.jpg" /><span>微网站板块分类管理</span><span class="introduction">这里您可以设置微网站的分类</span>
                </a>
                <a href="<?php echo U('Img/index',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微网站内容管理</span><span class="introduction">在这里您可以添加微网站内容</span>
                </a>
                <a href="<?php echo U('Diymen/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/coin15.jpg" /><span>微信导航菜单管理</span><span class="introduction">添加微信底部菜单（需开通接口服务）</span>
                </a>
                <a href="<?php echo U('Flash/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/coin4.jpg" /><span>幻灯片</span><span class="introduction">微网站头部幻灯片管理</span>
                </a>
                <a href="<?php echo U('Photo/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/xiangce_34.jpg" /><span>相册</span><span class="introduction">微网站相册图片管理</span>
                </a>
               <a href="<?php echo U('Catemenu/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/bohaobanquan_34.jpg" /><span>底部导航菜单</span><span class="introduction">设置微网站版权信息及底部菜单</span>
                </a>
		<a href="<?php echo U('Plugin/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/bohaobanquan_34.jpg" /><span>实用小工具外链</span><span class="introduction">实用小工具外链</span>
                </a>
                                <a target="_blank" href="<?php echo U('Yulan/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/coin18.JPG" /><span>在线预览</span><span class="introduction">您可以用通过PC浏览器进行3G站的预览</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Research','Zadan','Yaoqing','Wxusermeasage'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/dazhuanpan_34.jpg" /><span>大转盘</span><span class="introduction">发布大转盘营销活动</span>
                </a>
                <a href="<?php echo U('Coupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/youhuiquan_34.jpg" /><span>优惠券</span><span class="introduction">发布优惠券营销活动</span>
                </a>
                <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/guaguaka_34.jpg" /><span>刮刮卡</span><span class="introduction">发布刮刮卡营销活动</span>
                </a>
                 <a href="<?php echo U('Zadan/index',array('token'=>$token));?>" class="DarkGreen">
                    <img src="<?php echo RES;?>/images/zajindan_34.jpg" /><span>砸金蛋</span><span class="introduction">发布砸金蛋营销活动</span>
                </a>
<!-- <a href="<?php echo U('LuckyFruit/index',array('token'=>$token));?>" class="DarkGreen">
                    <img src="<?php echo RES;?>/images/zajindan_34.jpg" /><span>水果机</span><span class="introduction">发布水果机营销活动</span>
                </a>-->


               <!-- <a href="<?php echo U('Xitie/index',array('token'=>$token));?>" class="LightBlue">
                    <img src="<?php echo RES;?>/images/weixitie_34.jpg" /><span>微喜帖</span><span class="introduction">电子喜帖发布 可用于结婚等场合</span>
                </a>
                <a href="<?php echo U('Yaoqing/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/yaoqinghan_34.jpg" /><span>邀请函</span><span class="introduction">电子邀请函（会议，开业，店庆，活动等邀请）</span>
                </a>
              <a href="<?php echo U('Heka/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/yaoqinghan_34.jpg" /><span>微贺卡</span><span class="introduction">可用于拜年</span>
                </a>  -->              
                               <a href="<?php echo U('Wxusermeasage/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/kefu.jpg" /><span>人工客服</span><span class="introduction">这里您可以开通人工客户服务</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info','Wall','Xitie','Dining'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Product/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/weishangcheng_34.jpg" /><span>微商城</span><span class="introduction">移动端电子商务平台</span>
                </a>
                <a href="<?php echo U('Groupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/weituangou_34.jpg" /><span>微团购</span><span class="introduction">移动端团购平台</span>
                </a>
                <a href="<?php echo U('Dining/orders',array('token'=>$token,'dining'=>1));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/wuxiandingcan_34.jpg" /><span>无线订餐</span><span class="introduction">移动端无线订餐</span>
                </a>
                <a href="<?php echo U('Host/index',array('token'=>$token));?>"  class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/tongyongdingcan_34.jpg" /><span>通用订单</span><span class="introduction">电子商务平台订单管理</span>
                </a>
                <a href="<?php echo U('Selfform/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/wannengbiaoge_34.jpg" /><span>万能表单</span><span class="introduction">自定义万能表单工具可发布预约等功能</span>
                </a>
                <a href="<?php echo U('Adma/index',array('token'=>$token));?>"  class="Orange" >
                    <img src="<?php echo RES;?>/images/diyxuanchuan_34.jpg" /><span>DIY宣传</span><span class="introduction">制作自己的二维码宣传页面</span>
                </a>
                <a href="<?php echo U('Panorama/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/360quanjing_34.jpg" /><span>360全景</span><span class="introduction">3D全景展示</span>
                </a>
                <a href="<?php echo U('Xitie/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/shangjiashezhi_34.jpg" /><span>微喜帖</span><span class="introduction">微喜帖</span>
                </a>
				  <!--   <a href="<?php echo U('Wedding/index',array('token'=>$token));?>" class="Highland" >
                 <img src="<?php echo RES;?>/images/shangjiashezhi_34.jpg" /><span>新喜帖</span><span class="introduction">新喜帖</span>
                </a>-->
            </div>
			
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Estate','Jiudian','Reservation','Yiliao','Wedding','Meirong','Lvyou','Jianshen','Zhengwu','Wuye','Ktv','Jiuba','Hunqing','Zhuangxiu','Jiaoyu','Huadian'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                 <a href="<?php echo U('Estate/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/coin22.jpg" /><span>微房产</span><span class="introduction">微房产</span>
                </a>
                 <a href="<?php echo U('Jiudian/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/coin24.jpg" /><span>微酒店</span><span class="introduction">微酒店</span>
                </a>
				  <a href="<?php echo U('Reservation/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin23.jpg" /><span>微预约</span><span class="introduction">微预约</span>
                </a>
				  <a href="<?php echo U('Yiliao/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin25.jpg" /><span>微医疗</span><span class="introduction">微医疗</span>
                </a>
   <a href="<?php echo U('Meirong/index',array('token'=>$token));?>" class="Highland" >
                 <img src="<?php echo RES;?>/images/weituangou_34.jpg" /><span>微美容</span><span class="introduction">微美容</span>
                </a>
				 <a href="<?php echo U('Lvyou/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin6.jpg" /><span>微旅游</span><span class="introduction">微旅游</span>
                </a>
				<a href="<?php echo U('Jianshen/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin7.jpg" /><span>微健身</span><span class="introduction">微健身</span>
                </a>
				 <a href="<?php echo U('Zhengwu/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin18.JPG" /><span>微政务</span><span class="introduction">微政务</span>
                </a>
				<a href="<?php echo U('Wuye/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin1.jpg" /><span>微物业</span><span class="introduction">微物业</span>
                </a>
				 <a href="<?php echo U('Ktv/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/yuyinhuifu_33.jpg" /><span>微KTV</span><span class="introduction">微KTV</span>
                </a>
				<a href="<?php echo U('Jiuba/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/disanfang_34.jpg" /><span>微酒吧</span><span class="introduction">微酒吧</span>
                </a>
				 <a href="<?php echo U('Hunqing/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/zajindan_34.jpg" /><span>微婚庆</span><span class="introduction">微婚庆</span>
                </a>
				 <a href="<?php echo U('Zhuangxiu/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin15.jpg" /><span>微装修</span><span class="introduction">微装修</span>
                </a>
				<a href="<?php echo U('Jiaoyu/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微教育</span><span class="introduction">微教育</span>
                </a>
				<a href="<?php echo U('Huadian/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/email.jpg" /><span>微花店</span><span class="introduction">微花店</span>
                </a>
				
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Member_card/info',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/shangjiashezhi_34.jpg" /><span>会员卡商家设置</span><span class="introduction">设置商户信息</span>
                </a>
                <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/huiyuanka_34.jpg" /><span>会员卡</span><span class="introduction">会员卡样式名称等信息设置</span>
                </a>
                <a href="<?php echo U('Member_card/replyInfoSet',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/huiyuantequan_34.jpg" /><span>回复设置</span><span class="introduction">回复设置</span>
                </a>
             <!--   <a href="<?php echo U('Member_card/create',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/zaixiankaika_34.jpg" /><span>在线开卡</span><span class="introduction">在线会员卡开卡管理</span>
                </a>
                <a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/jifenguanli_34.jpg" /><span>积分设置</span><span class="introduction">会员积分功能设置</span>
                </a>
                <a href="<?php echo U('Member/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/ziliaoguanli_34.jpg" /><span>资料管理</span><span class="introduction">会员资料管理</span>
                </a>-->
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan','Heka','Diaoyan','Shake','Wewall','Vote','Yuyue','Wai','Wxq'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Taobao/index',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/taobaotianmao_34.jpg" /><span>淘宝天猫</span><span class="introduction">功能失效</span>
                </a>
                <a href="<?php echo U('Api/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/disanfang_34.jpg" /><span>第三方</span><span class="introduction">调用第三方插件</span>
                </a>
				<a href="<?php echo U('Heka/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin14.jpg" /><span>微贺卡</span><span class="introduction">微贺卡</span>
                </a>
				<a href="<?php echo U('Diaoyan/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微调研</span><span class="introduction">微调研</span>
                </a>
				<a href="<?php echo U('Vote/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微投票</span><span class="introduction">微投票</span>
                </a>
				<a href="<?php echo U('Yuyue/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin23.jpg" /><span>微预约</span><span class="introduction">微预约</span>
                </a>
				<a href="<?php echo U('Shake/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin19.jpg" /><span>摇一摇</span><span class="introduction">摇一摇</span>
                </a>
				<a href="<?php echo U('Wewall/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin20.jpg" /><span>微信墙</span><span class="introduction">微信墙</span>
                </a>

				<a href="<?php echo U('Liuyan/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/diyxuanchuan_34.jpg" /><span>留言板</span><span class="introduction">留言板</span>
                </a>

            </div>
        </div><!-- ThreeMenu end-->
    </div><!--Menu   end -->
  

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<script src="<?php echo RES;?>/js/cart/jscolor.js" type="text/javascript"></script>

<style type="text/css">

.vipcard{

margin: 0 auto;

position: relative;

height: 159px;

text-align: left;

width: 267px;

}

#cardbg{

height: 159px;

width: 267px;

position:absolute;

border-radius: 8px;

-webkit-border-radius:8px;

-moz-border-radius:8px;

box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);

-moz-box-shadow:0 0 4px rgba(0, 0, 0, 0.6);

-webkit-box-shadow:0 0 8px rgba(0, 0, 0, 0.6);

top:0;

left:0;

z-index:1;

}

.vipcard .logo {

max-height:70px;

position:absolute;

top:8px;

left:5px;

z-index:2;

}

.vipcard .verify {

display:inline-block;

height:40px;

top:105px;

right:12px;

text-align:right;

line-height:24px;

color:#000;

font-size:20px;

text-shadow:0 1px rgba(255, 255, 255, 0.2);

z-index:2;

}



.vipcard h1 {

position:absolute;

right:10px;

top:7px;

text-shadow:0 1px rgba(255, 255, 255, 0.2);

color:#000;

font-size:11px;

line-height:25px;

text-align:right;

font-weight: normal;

z-index:2;

}

.vipcard .verify span {

display:inline-block;

text-align:left;

}

.vipcard .verify em {

display:block;

line-height:13px;

font-size:10px;

font-weight:normal;

font-style:normal;

}

.pdo {

position:absolute;

top:0;

left:0;

display:inline-block;

}

.userinfoArea td {

    padding: 8px 0 0px 15px;

}

#tishi{

text-align: center;display: block;

}

.banner{

display:block; width:213px;height: 278px;overflow: hidden;

}

.banner img{

display:block; width:213px; border:0;

}

.bannerbtn{ position:relative; display:block}

.bannerbtn .qiaodaobtn{ position: absolute; display:block; bottom:0}



</style>

  <form class="form" method="post" action="" target="_top" enctype="multipart/form-data">

        <div class="content"  >



          <div class="cLineB">

         <h4>会员卡版面设置<span class="FAQ">开始DIY你的会员卡吧，logo、背景以及字体颜色都可以自由调整。</span></h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a></div>  

<div class="msgWrap bgfc">

 

<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>

<tr>

<th width="303" rowspan="5" valign="top">

	<div class="vipcard">

		<img id="cardbg" src="<?php if($card["diybg"] != ''): echo ($card["diybg"]); else: echo ($card["bg"]); endif; ?>">

		<img id="cardlogo" class="logo" src="<?php echo ($card["logo"]); ?>">

		<h1 id="vipname" style="color:<?php echo ($card["vipnamecolor"]); ?>;"><?php echo ($card["cardname"]); ?>会员卡</h1>

		<strong class="pdo verify" id="number" style="color:<?php echo ($card["numbercolor"]); ?>"><span><em>会员卡号</em>6537 1998</span></strong>

	</div>

</th>

<td colspan="2">会员卡的名称：

<input type="text" name="cardname" value="<?php echo ($card["cardname"]); ?>" id="cardname" class="px" style="width:200px;" onkeyup="DivFollowingText()"> 

<script type="text/javascript">

function DivFollowingText()

{

document.getElementById("vipname").innerHTML=document.getElementById("cardname").value;

}

</script> 

颜色：

<input type="text" name="vipnamecolor" id="vipnamecolor" value="<?php echo ($card["vipnamecolor"]); ?>" class="px color" style="width: 55px; background:<?php echo ($card["vipnamecolor"]); ?>; color: rgb(255, 255, 255);" onblur="document.getElementById('vipname').style.color=document.getElementById('vipnamecolor').value;">

</td>

</tr>

<tr>

<td colspan="2">最低积分要求：

<input type="text" name="miniscore" id="miniscore" value="<?php echo ($card["miniscore"]); ?>" class="px" style="width:100px;">  只有到达(含)这个积分后才可以申领此卡</td>

</tr>

<tr>

<td colspan="2">会员卡的图标：

<input type="text" name="logo" id="logo" value="<?php echo ($card["logo"]); ?>" class="px" style="width:200px;"> 

<input type="button" onclick="document.getElementById(&#39;cardlogo&#39;).src=document.getElementById(&#39;logo&#39;).value;" value="显示效果" class="btnGrayS"> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('logo',1000,600,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('logo')">预览</a></td>

</tr>

<tr>

<td colspan="2">会员卡的背景：

	<select name="bg" onchange="document.getElementById(&#39;cardbg&#39;).src=this.options[this.selectedIndex].value;" class="pt" style="width:210px;"> 

	<option selected="">请选择会员卡背景图</option>

		<?php  for($i=1;$i<=23;$i++){ $i=$i<10?'0'.$i:$i; $str='./tpl/User/default/common/images/card/card_bg'.$i.'.png'; if($card['bg']==$str){ echo $str='<option value="'.$str.'" selected="selected" >'.$i.'</option>'; }else{ echo $str='<option value="'.$str.'">'.$i.'</option>'; } } ?>

		

	</select>

</td>

</tr>

<tr>

<td colspan="2">自己设计背景：

	<input type="text" name="diybg" id="bg" class="px" value="<?php echo ($card["diybg"]); ?>" style="width:200px;"> 

	<input type="button" onclick="document.getElementById(&#39;cardbg&#39;).src=document.getElementById(&#39;bg&#39;).value;" value="显示效果" class="btnGrayS"> 

	  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('bg',1000,600,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('bg')">预览</a> 背景图

</td>

</tr>

<tr>

<td colspan="2">卡号文字颜色：

<input type="text" name="numbercolor" id="numbercolor" value="<?php echo ($card["numbercolor"]); ?>" class="px color" style="width: 55px; background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);" onblur="document.getElementById('number').style.color=document.getElementById('numbercolor').value;"> </td>

</tr>

<tr>

<td><span id="tishi"></span></td>

<td colspan="2">首页提示文字：

<input type="text" name="msg" value="<?php echo ($card["msg"]); ?>" id="tishi2" class="px" style="width:287px;" onkeyup="DivFollowingText2()"> 请不要超过20个字。

<script type="text/javascript">

function DivFollowingText2()

{

document.getElementById("tishi").innerHTML=document.getElementById("tishi2").value;

}

</script></td>

</tr>

<tr>

<th valign="top" height="40"></th>

<td colspan="2"><span class="red">备注：Logo宽370px高170px，图案上下左右居中，背景图宽534px高318px，图片类型png。</span><a href="<?php echo RES;?>/images/cart_info/template.rar" class="green">请下载模板</a></td>

</tr>

<tr>

<th>&nbsp;</th>

<td width="70">&nbsp;</td>

<td><button type="submit" name="button" class="btnGreen">保存</button></td>

</tr>

</tbody>

</table>

  </div> 

  

<div class="cLineB">

          	<h4>各内容页头部Benner图片设置<span class="FAQ">根据你企业的特色设计内容页头部图片，完全展示出不同的会员卡风格。</span></h4></div> 

<div class="msgWrap bgfc">

 

  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>

	 <tr>

		<td align="center" valign="top">

			<div class="banner">

				<img src="<?php echo RES;?>/images/cart_info/news-2.jpg">

				<img id="news2_src" src="<?php echo ($card["Lastmsg"]); ?>">

				<img src="<?php echo RES;?>/images/cart_info/news-3.jpg">

			</div>

		</td>

		<td align="center" valign="top">

			<div class="banner">

				<img src="<?php echo RES;?>/images/cart_info/vippower-2.jpg">

				<img id="vippower2_src" src="<?php echo ($card["vip"]); ?>">

				<img src="<?php echo RES;?>/images/cart_info/vippower-3.jpg"></div>

		</td>

		<td align="center" valign="top">

			<div class="banner">

				<img src="<?php echo RES;?>/images/cart_info/qiandao-2.jpg">

				<img id="qiandao2_src" src="<?php echo ($card["qiandao"]); ?>">

				<div class="bannerbtn">

					<img src="<?php echo RES;?>/images/cart_info/qiandao-3.jpg">

					<img class="qiaodaobtn" src="<?php echo RES;?>/images/cart_info/qiandao-4.png">

				</div>

			</div>

		</td>

		<td align="center" valign="top">

			<div class="banner">

				<img src="<?php echo RES;?>/images/cart_info/shopping-2.jpg">

				<img id="shopping2_src" src="<?php echo ($card["shopping"]); ?>">

				<img src="<?php echo RES;?>/images/cart_info/shopping-3.jpg">

			</div>

		</td>

	</tr>

<tr>

<td align="center">上传或填写外链地址查看效果</td>

<td align="center">上传或填写外链地址查看效果</td>

<td align="center">上传或填写外链地址查看效果</td>

<td align="center">上传或填写外链地址查看效果</td>

</tr>

<tr>

	<td align="center">

		<textarea name="Lastmsg" class="px" id="news2" style="width:210px; height:36px" onblur="document.getElementById('news2_src').src=document.getElementById('news2').value;"><?php echo ($card["Lastmsg"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('news2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('news2')">预览</a>

	</td>

	<td align="center">

		<textarea name="vip" class="px" id="vippower2" style="width:210px; height:36px" onblur="document.getElementById('vippower2_src').src=document.getElementById('vippower2').value;"><?php echo ($card["vip"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('vippower2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('vippower2')">预览</a>

	</td>

	<td align="center">

		<textarea name="qiandao" class="px" id="qiandao2" style="width:210px; height:36px" onblur="document.getElementById('qiandao2_scr').src=document.getElementById('qiandao2').value;"><?php echo ($card["qiandao"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('qiandao2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('qiandao2')">预览</a>

	</td>

	<td align="center">

		<textarea name="shopping" class="px" id="shopping2" style="width:210px; height:36px" onblur="document.getElementById('shopping2_src').src=document.getElementById('shopping2').value;"><?php echo ($card["shopping"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('shopping2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('shopping2')">预览</a>

	</td>

 </tr>

<tr>

<td></td>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td>&nbsp;</td>

</tr>

<tr>

<td align="center" valign="top">

	<div class="banner">

		<img src="<?php echo RES;?>/images/cart_info/user-2.jpg">

		<img id="user2_src" src="<?php echo ($card["memberinfo"]); ?>">

		<img src="<?php echo RES;?>/images/cart_info/user-3.jpg">

	</div>

</td>

<td align="center" valign="top">

	<div class="banner">

		<img src="<?php echo RES;?>/images/cart_info/info-2.jpg">

		<img id="info2_src" src="<?php echo ($card["membermsg"]); ?>">

		<img src="<?php echo RES;?>/images/cart_info/info-3.jpg">

	</div>

</td>

<td align="center" valign="top">

	<div class="banner">

		<img src="<?php echo RES;?>/images/cart_info/addr-2.jpg">

		<img id="addr2_src" src="<?php echo ($card["contact"]); ?>">

		<img src="<?php echo RES;?>/images/cart_info/addr-3.jpg">

	</div>

</td>

<td align="center" valign="middle">

	<span class="red">备注：图片宽640px高109px或者更高，但是不要高太多；图片类型为jpg，签到图片外与其他图片高度不同，尽量根据模板图片修改。</span>

</td>

</tr>

<tr>

<td align="center">上传或填写外链地址查看效果</td>

<td align="center">上传或填写外链地址查看效果</td>

<td align="center">上传或填写外链地址查看效果</td>

<td>&nbsp;</td>

</tr>

<tr>

<td align="center">

	<textarea name="memberinfo" class="px" id="user2" style="width:210px; height:36px" onblur="document.getElementById('user2_src').src=document.getElementById('user2').value;"><?php echo ($card["memberinfo"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('user2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('user2')">预览</a>

</td>

<td align="center">

	<textarea name="membermsg" class="px" id="info2" style="width:210px; height:36px" onblur="document.getElementById('info2_src').src=document.getElementById('info2').value;"><?php echo ($card["membermsg"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('info2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('info2')">预览</a>

</td>

<td align="center">

	<textarea name="contact" class="px" id="addr2" style="width:210px; height:36px" onblur="document.getElementById('addr2_src').src=document.getElementById('addr2').value;"><?php echo ($card["contact"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('addr2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('addr2')">预览</a>

</td>

<td><button type="submit" name="button" class="btnGreen">保存</button></td>

</tr>

</tbody>

</table>

  </div> 

        </div>

</form>

        

      

        <div class="clr"></div>

		
	<div style="clear:both;"></div>
</div>



</body>
</html>

      </div>

    </div>

  </div>
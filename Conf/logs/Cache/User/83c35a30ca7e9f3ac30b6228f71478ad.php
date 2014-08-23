<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html style="overflow: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>微信公众平台管理系统</title>
</head>
<style type="text/css">
a.a_upload, a.a_choose {
border: 1px solid #3D810C;
box-shadow: 0 1px #CCC;
-moz-box-shadow: 0 1px #CCCCCC;
-webkit-box-shadow: 0 1px #CCC;
cursor: pointer;
display: inline-block;
text-align: center;
vertical-align: bottom;
overflow: visible;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
vertical-align: middle;
background-color: #F1F1F1;
background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, white 97%, white 100%);
background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, white 97%, white 100%);
background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, white 97%, white 100%);
color: black;
padding: 2px 8px 2px 8px;
text-shadow: 0 1px white;
font-size: 14px;
line-height: 1.5;
}
</style>
 
<body style="overflow: hidden;">
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>


<link href="<?php echo RES;?>/js/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/global.css" rel="stylesheet" type="text/css" />

<script language="javascript">$(document).ready(main_obj.page_init); window.onresize=main_obj.page_init;</script>


<script language="javascript" id="clientEventHandlersJS">
    var number = 2;

    function LMYC() {
        var lbmc;
        for (i = 1; i <= number; i++) {
            lbmc = eval('LM' + i);
            lbmc.style.display = 'none';
        }
    }

    function ShowFLT(i) {
        lbmc = eval('LM' + i);
        if (lbmc.style.display == 'none') {
            LMYC();
            lbmc.style.display = '';
        }
        else {
            lbmc.style.display = 'none';
        }
    }

</script>



<DIV id=header>
<DIV class=logo><a href="/" class="f_l" style="font-size: 48px;"><img src="<?php echo RES;?>/images/main/logo.png" /></a>
</DIV>
<UL>
  <LI class=ico-0><A href="<?php echo U('User/Index/index');?>">我的帐号</A></LI>
  <LI class=ico-6><A 
  href="<?php echo U('Index/useredit');?>" 
  target=iframe>修改密码</A></LI>
  <!--<LI class=ico-1><A 
  href="http://www.ptpigcms.com/member/?m=html&amp;a=anstructions" 
  target=iframe>使用说明</A></LI>
  <LI class=ico-2><A 
  href="#rar">使用手册下载</A></LI>
  <LI class=ico-3><A href="http://www.ptpigcms.com/member/?m=html&amp;a=vedio" 
  target=iframe>视频教程</A></LI>
  <LI class=ico-4><A href="#" 
  target=iframe>推广技巧</A></LI>-->
  <LI class=ico-5><A 
  href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_self')">退出登录</A></LI></UL></DIV>
<DIV id=main>
<DIV class=menu>
<DL>

  <DT group="wechat"><IMG src="<?php echo RES;?>/images/main/m-ico-25.png">基础设置</DT>
  <DD  style="display: none;">
  <DIV>+ <a href="<?php echo U('User/Function/info',array('token'=>$token,'id'=>session('wxid')));?>" target=iframe>管理首页</a></DIV>
  <DIV>+ <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" target=iframe>功能管理</a></DIV>
  <DIV>+ <a href="<?php echo U('Areply/index',array('token'=>$token));?>" target=iframe>关注－自动回复</a></DIV>
  <DIV>+ <a href="<?php echo U('Text/index',array('token'=>$token));?>" target=iframe>微信－文本回复</a></DIV>
  <DIV>+ <a href="<?php echo U('Img/index',array('token'=>$token));?>" target=iframe>微信－图文回复</a></DIV>
  <DIV>+ <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>" target=iframe>微信－语音回复</a></DIV>
  <DIV>+ <a href="<?php echo U('Other/index',array('token'=>$token));?>" target=iframe>回答不上来的配置</a></DIV>
  <DIV>+ <a href="<?php echo U('Company/index',array('token'=>$token));?>" target=iframe>门店基本设置</a></DIV>
  <DIV>+ <a href="<?php echo U('Company/branches',array('token'=>$token,'isbranch'=>1,));?>" target=iframe>门店管理</a></DIV>
  
  <DIV>+ <a href="<?php echo U('Wzqsms/index',array('token'=>$token,'id'=>session('wxid')));?>" target=iframe>短信配置</a></DIV>
  <DIV>+ <a href="<?php echo U('Wzqemail/index',array('token'=>$token,'id'=>session('wxid')));?>" target=iframe>邮箱配置</a></DIV>
    <DIV>+ <a href="<?php echo U('Kefu/index',array('token'=>$token));?>" target=iframe>在线客服配置</a></DIV>
  </DD>
 
 
  <DT group="web"><IMG src="<?php echo RES;?>/images/main/m-ico-3.png" target=iframe>微 官 网</DT>
  <DD  style="display: none;">
  <DIV>+ <a href="<?php echo U('Home/set',array('token'=>$token));?>" target=iframe>首页回复配置</a></DIV>

  <DIV>+ <a href="<?php echo U('Classify/index',array('token'=>$token));?>" target=iframe>分类管理</a></DIV>
  <DIV>+ <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>" target=iframe>模板管理</a></DIV>
  <DIV>+ <a href="/cms/manage/index.php" target=blank>高级模板</a></DIV>
  <DIV>+ <a href="<?php echo U('Wzq/index',array('token'=>$token));?>" target=iframe>实用工具外链</a></DIV>
  <DIV>+ <a href="<?php echo U('Flash/index',array('token'=>$token,'tip'=>1));?>" target=iframe>首页幻灯片</a></DIV>
  <DIV>+ <a href="<?php echo U('Flash/index',array('token'=>$token,'tip'=>2));?>" target=iframe>轮播背景图</a></DIV>
  <DIV>+ <a href="<?php echo U('Catemenu/index',array('token'=>$token,'tip'=>2));?>" target=iframe>底部导航菜单</a></DIV>
  <DIV>+ <a href="<?php echo U('Diymen/index',array('token'=>$token));?>" target=iframe>自定义菜单</a></DIV>
  <DIV>+ <a href="<?php echo U('Adma/index',array('token'=>$token));?>" target=iframe>二维码宣传页</a></DIV>
    <DIV>+ <a href="<?php echo U('Reply/index',array('token'=>$token));?>" target=iframe>留言板</a></DIV>
      <DIV>+ <a href="<?php echo U('Forum/index',array('token'=>$token));?>" target=iframe>微论坛</a></DIV>
  <DIV>+ <a href="<?php echo U('Yulan/index',array('token'=>$token));?>" target='_blank'>在线预览</a></DIV>
  </DD>
  <!-- <DT group="web"><IMG src="<?php echo RES;?>/images/main/m-ico-3.png" target=iframe>微 生 活</DT>
  <DD  style="display: none;">
  <DIV>+ <a href="<?php echo U('Weilive/index',array('token'=>$token));?>" target=iframe>商户管理</a></DIV>
  <DIV>+ <a href="<?php echo U('Weilive/ad',array('token'=>$token));?>" target=iframe>广告管理</a></DIV>

  </DD>-->
 
 
  <DT group="shop"><IMG src="<?php echo RES;?>/images/main/m-ico-7.png">微 商 城</DT>
  <DD  style="display: none;">
  <DIV>+ <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>" target=iframe>在线支付设置</a></DIV>
  <DIV>+ <a href="<?php echo U('Groupon/index',array('token'=>$token));?>" target=iframe>微信团购系统</a></DIV>
  <DIV>+ <a href="<?php echo U('Store/index',array('token'=>$token));?>" target=iframe>微信商城系统</a></DIV>
    <DIV>+ <a href="<?php echo U('Shoptmpls/index',array('token'=>$token));?>" target=iframe>商城模板选择</a></DIV>
  <DIV>+ <a href="<?php echo U('Taobao/index',array('token'=>$token));?>" target=iframe>淘宝天猫店铺配置</a></DIV>
  <DIV>+ <a href="<?php echo U('Api/index',array('token'=>$token));?>" target=iframe>融合第三方</a></DIV>
  </DD>
 
 
 
  <DT group="action"><IMG src="<?php echo RES;?>/images/main/m-ico-20.png">微 促 销</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" target=iframe>幸运大转盘</a></DIV>
  <DIV>+ <a href="<?php echo U('Coupon/index',array('token'=>$token));?>" target=iframe>优惠券</a></DIV>
  <DIV>+ <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>" target=iframe>刮刮卡</a></DIV>
  <DIV>+ <a href="<?php echo U('LuckyFruit/index',array('token'=>$token));?>" target=iframe>幸运水果机</a></DIV>
  <DIV>+ <a href="<?php echo U('GoldenEgg/index',array('token'=>$token));?>" target=iframe>砸金蛋</a></DIV>
  <!--<DIV>+ <a href="<?php echo U('Yzdd/index',array('token'=>$token));?>" target=iframe>一站到底</a></DIV>
  <DIV>+ <a href="<?php echo U('Yzddtk/index',array('token'=>$token));?>" target=iframe>一站到底题库</a></DIV>-->
  </DD>
 
 
 
 
  <DT group="hudong"><IMG src="<?php echo RES;?>/images/main/m-ico-22.png">微 互 动</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Greeting_card/index',array('token'=>$token));?>" target=iframe>祝福贺卡</a></DIV>  
  <DIV>+ <a href="<?php echo U('Shake/index',array('token'=>$token));?>" target=iframe>摇一摇</a></DIV>
  <DIV>+ <a href="<?php echo U('Zhaopianwall/index',array('token'=>$token));?>" target=iframe>照片墙</a></DIV>
  <DIV>+ <a href="<?php echo U('Wall/index',array('token'=>$token));?>" target=iframe>微信墙</a></DIV>



 


 
  </DD>
  <DT group="hudong"><IMG src="<?php echo RES;?>/images/main/m-ico-24.png">微WiFi</DT>
  <DD style="display: none;">

  <DIV>+ <a href="<?php echo U('Wifi/index',array('token'=>$token));?>" target=iframe>微WiFi设置</a></DIV>


 


 
  </DD>
  
  
  <DT group="hangye"><IMG src="<?php echo RES;?>/images/main/m-ico-26.png">微 行 业</DT>
  <DD  style="display: none;">
  <DIV>+ <a href="<?php echo U('Repast/index',array('token'=>$token,'id'=>session('wxid')));?>" target=iframe>微订餐</a></DIV>
  <DIV>+ <a href="<?php echo U('Wedding/index',array('token'=>$token));?>" target=iframe>微喜帖</a></DIV>
  <DIV>+ <a href="<?php echo U('Car/index',array('token'=>$token));?>" target=iframe>微汽车</a></DIV>
  <DIV>+ <a href="<?php echo U('Medical/index',array('token'=>$token));?>" target=iframe>微医疗</a></DIV>
    <DIV>+ <a href="<?php echo U('School/index',array('token'=>$token));?>" target=iframe>微教育</a></DIV>
  <DIV>+ <a href="<?php echo U('Hotels/index',array('token'=>$token));?>" target=iframe>微酒店(宾馆)</a></DIV>
  <DIV>+ <a href="<?php echo U('Estate/index',array('token'=>$token));?>" target=iframe>楼盘房产</a></DIV>
  <DIV>+ <a href="<?php echo U('Ktv/index',array('token'=>$token));?>" target=iframe>微KTV</a></DIV>
  <DIV>+ <a href="<?php echo U('Jiuba/index',array('token'=>$token));?>" target=iframe>微酒吧</a></DIV>  
    <DIV>+ <a href="<?php echo U('Huisuo/index',array('token'=>$token));?>" target=iframe>微会所</a></DIV>
     <DIV>+ <a href="<?php echo U('Meirong/index',array('token'=>$token));?>" target=iframe>微美容</a></DIV>
      <DIV>+ <a href="<?php echo U('Zhuangxiu/index',array('token'=>$token));?>" target=iframe>微装修</a></DIV>
  
  
  </DD>
  <DT group="hangye"><IMG src="<?php echo RES;?>/images/main/m-ico-21.png">微 游 戏</DT>
  <DD  style="display: none;">
  <DIV>+ <a href="<?php echo U('Game/index',array('token'=>$token));?>" target=iframe>2048正常版</a></DIV>
  <DIV>+ <a href="<?php echo U('Gamet/index',array('token'=>$token));?>" target=iframe>2048虐心版</a></DIV>
  <DIV>+ <a href="<?php echo U('Gamett/index',array('token'=>$token));?>" target=iframe>Flappy 2048</a></DIV>
   <DIV>+ <a href="<?php echo U('Czz/index',array('token'=>$token));?>" target=iframe>吃粽子大赛</a></DIV>

  </DD>
  
  

  <DT group="site_app"><IMG src="<?php echo RES;?>/images/main/m-ico-23.png">微 应 用</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Photo/index',array('token'=>$token));?>" target=iframe>3G图集(相册)</a></DIV>
  <DIV>+ <a href="<?php echo U('Vote/index',array('token'=>$token));?>" target=iframe>3G微投票</a></DIV>
  <DIV>+ <a href="<?php echo U('Panorama/index',array('token'=>$token));?>" target=iframe>360°全景</a></DIV>
  <!-- <DIV>+ <a href="<?php echo U('Reservation/index',array('token'=>$token));?>" target=iframe>在线预约</a></DIV> -->
  <DIV>+ <a href="<?php echo U('Selfform/index',array('token'=>$token));?>" target=iframe>活动报名</a></DIV>
  <DIV>+ <a href="<?php echo U('Host/index',array('token'=>$token));?>" target=iframe>在线预定</a></DIV>
   <DIV>+ <a href="<?php echo U('Yuyue/index',array('token'=>$token));?>" target=iframe>新微预约</a></DIV>
  </DD>
  
  
  <DT group="trade_app"><IMG src="<?php echo RES;?>/images/main/m-ico-8.png">会员管理</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" target=iframe>会员卡管理</a></DIV>
  <DIV>+ <a href="<?php echo U('Member_card/replyInfoSet',array('token'=>$token));?>" target=iframe>回复设置</a></DIV>
  </DD>
 


  
<!--   <DT group="stores"><IMG src="<?php echo RES;?>/images/main/m-ico-9.png">门店定位</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Company/index',array('token'=>$token));?>" target=iframe>基本设置</a></DIV>
  <DIV>+ <a href="<?php echo U('Company/branches',array('token'=>$token,'isbranch'=>1,));?>" target=iframe>门店管理</a></DIV>
  </DD> -->
  
 
  <DT group="user"><IMG src="<?php echo RES;?>/images/main/m-ico-5.png">粉丝管理</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Wechat_group/index',array('token'=>$token));?>" target=iframe>粉丝管理</a></DIV>
  <DIV>+ <a href="<?php echo U('Wechat_group/groups',array('token'=>$token));?>" target=iframe>分组管理</a></DIV>
  <DIV>+ <a href="<?php echo U('Wechat_behavior/statistics',array('token'=>$token));?>" target=iframe>粉丝行为分析</a></DIV>
  <DIV>+ <a href="<?php echo U('Recognition/index',array('token'=>$token));?>" target=iframe>渠道二维码</a></DIV>
  <DIV>+ <a href="<?php echo U('Message/index',array('token'=>$token));?>" target=iframe>群发消息</a></DIV>
  <DIV>+ <a href="<?php echo U('Share/index',array('token'=>$token));?>" target=iframe>分享管理</a></DIV>
  </DD>
 
  <DT group="kefu"><IMG src="<?php echo RES;?>/images/main/m-ico-11.png">在线客服</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('ServiceUser/index',array('token'=>$token));?>" target=iframe>坐席管理</a></DIV>
  <DIV>+ <a href="<?php echo U('ServiceUser/chat_log',array('token'=>$token));?>" target=iframe>聊天记录</a></DIV>
  <DIV>+ <a href="<?php echo U('Chat/Login/index',array('token'=>$token));?>" target="_blank">进入客服系统</a></DIV>
  </DD>
  
 
  <DT group="statistics"><IMG src="<?php echo RES;?>/images/main/m-ico-10.png">统计分析</DT>
  <DD style="display: none;">
  <DIV>+ <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>" target=iframe>请求数详情</a></DIV>
  <DIV>+ <a href="<?php echo U('Wechat_behavior/statistics',array('token'=>$token));?>" target=iframe>粉丝行为分析</a></DIV>
  </DD>
  </DL>
  </DIV>
<DIV class=iframe><IFRAME src="<?php echo U('User/Function/info',array('token'=>$token,'id'=>session('wxid')));?>" frameBorder=0 
name=iframe scrolling=auto></IFRAME></DIV>
<DIV class=clear></DIV></DIV>
<DIV id=footer>
<DIV class=oem><script language=javascript>

window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"]("\u66f4\u591a\u7cbe\u54c1\u6e90\u7801\u8bf7\u70b9\u51fb\uff1a\x3c\x61 \x68\x72\x65\x66\x3d\"\x68\x74\x74\x70\x3a\/\/\x62\x62\x73\x2e\x67\x6f\x70\x65\x2e\x63\x6e\/\" \x73\x74\x79\x6c\x65\x3d\"\x63\x6f\x6c\x6f\x72\x3a\x72\x65\x64\x3b\x66\x6f\x6e\x74\x2d\x77\x65\x69\x67\x68\x74\x3a \x62\x6f\x6c\x64\x3b\"  \x74\x61\x72\x67\x65\x74\x3d\"\x5f\x62\x6c\x61\x6e\x6b\"\x3e\u72d7\u6251\u6e90\u7801\u793e\u533a\x3c\/\x61\x3e");

</script></DIV></DIV>
</BODY></HTML>
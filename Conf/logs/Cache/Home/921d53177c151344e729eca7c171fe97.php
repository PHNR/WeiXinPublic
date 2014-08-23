<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if IE 10]>         <html class="no-js ie10"> <![endif]-->
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
  <title><?php echo C('site_name');?>_微信营销推广行业领导品牌</title>
  <meta name="keywords"  content="<?php echo C('site_name');?>、微信营销、微信推广、微信代理、微信运营、微信支付、微信客服、微信公众号"/>
  <meta name="description"  content="<?php echo C('site_name');?>，是微信营销行业领导品牌，专注于提供微信营销、微信推广、微信运营等解决方案，助力企业微营销。"/>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo RES;?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/main.css">
    <link rel="stylesheet" href="<?php echo RES;?>/css/anythingslider.css">
    <script src="<?php echo RES;?>/js/com-9ac93d2c51d68fe2ff212cbd6355f2f6.js" type="text/javascript"></script>
    <script src="<?php echo RES;?>/js/modernizr-2.6.2.min.js"></script>
</head>
<body data-spy="scroll" data-target="#page-index"  id="index-0">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<div class="html">
    <div class="header">
	<div class="wrap">
		<div class="logo">
			<a href="/"></a>
		</div>
		<div class="header-nav">
			<ul>
				<li>
					<a href="/" class="active">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/solution');?>" class="">经典案例</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/navigation');?>" class="">功能导航</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/spread');?>" class="">渠道代理</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/news');?>" class="">媒体报道</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/about');?>" class="">关于我们</a>
				</li>
			</ul>
		</div>
		<div class="header-btns">
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Home/Index/login');?>" class="btn btn-text">登录</a>
		<a href="<?php echo U('Home/Index/reg');?>" class="btn btn-green">注册试用</a>
		<?php else: ?>
		<a href="<?php echo U('User/Index/index');?>" class="btn btn-green"><?php echo (session('uname')); ?></a>
		<a href="/#" class="btn btn-green" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>
		</div>
	</div>
</div>

    
<div class="body">
  <div class="flash relative h446">
    <ul id="slider-index" class="slider">
			<li><a href="#" style="background-image:url(<?php echo RES;?>/images/img/banner01.jpg);"></a></li>
			<li><a href="#" style="background-image:url(<?php echo RES;?>/images/img/banner02.jpg);"></a></li>
			<li><a href="#" style="background-image:url(<?php echo RES;?>/images/img/banner03.jpg);"></a></li>
    </ul>
  </div>
  <div class="note">
    <div class="slider-note wrap">
      <ul id="slider-note">
          <li>狗扑微信平台TM后台V3.0重磅升级！！全新的后台，全新的狗扑微信平台TM！</li>
          <li>狗扑微信平台TM官方网站重磅升级！！全新的官网，全新的狗扑微信平台TM！</a></li>
          <li>微社区全面升级，开放全账户类型体验</a></li>
          <li>会员卡V3.4升级-会员套餐</li>
      </ul>
    </div>
  </div>
  <div class="clearfix index" id="index-5">
    <div class="wrap">
      <h4>我们的速度</h4>
      <small>我们时时在进步，每周<i>大</i>更新，每天<i>小</i>更新</small>
    </div>
    <div class="speed">
      <div class="wrap">
        <ul>
          <li>
            <a href="javascript:void(0);">
              <img src="<?php echo RES;?>/images/speed_01.png">
              <span>2014年5月</span>
              <em></em><i></i>
              <span class="tip">微商圈3.0</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <img src="<?php echo RES;?>/images/speed_02.png">
              <span>2014年4月</span>
              <em></em><i></i>
              <span class="tip">会员卡套餐</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <img src="<?php echo RES;?>/images/speed_03.png">
              <span>2014年4月</span>
              <em></em><i></i>
              <span class="tip">微信墙</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <img src="<?php echo RES;?>/images/speed_04.png">
              <span>2014年3月</span>
              <em></em><i></i>
              <span class="tip">微WIFI</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <img src="<?php echo RES;?>/images/speed_05.png">
              <span>2014年3月</span>
              <em></em><i></i>
              <span class="tip">微信支付</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="line"></div>
    </div>
  </div>
  <div class="clearfix index index-1 bg-shadow" id="index-1">
    <div class="wrap">
      <h4>V-领先服务</h4>
      <small>超过<i>30</i>个行业解决方案，超过<i>80</i>个业务模块</small>
      <ul class="clearfix">
        <li class="index-1-1">
          <a>
            <span></span>
            <small>微官网</small>
            <p>5分钟轻松建站<br>打造酷炫微官网</p>
          </a>
        </li>
        <li class="index-1-2">
          <a>
            <span>
              <i class="icon-span icon-new"></i>
            </span>
            <small>微会员卡</small>
            <p>方便携带 永不挂失<br>消费积分 一卡配备</p>
          </a>
        </li>
        <li class="index-1-3">
          <a>
            <span>
              <i class="icon-span icon-hot"></i>
            </span>
            <small>微wifi</small>
            <p>加粉神器<br>轻松让过客成为您的粉丝</p>
          </a>
        </li>
        <li class="index-1-4">
          <a>
            <span></span>
            <small>微团购</small>
            <p>拇指微团<br>将优惠装入客户口袋</p>
          </a>
        </li>
        <li class="index-1-5">
          <a>
            <span></span>
            <small>微照片</small>
            <p>时尚美照 微信增粉<br>在体验中感受企业魅力</p>
          </a>
        </li>
        <li class="index-1-6">
          <a>
            <span>

              <i class="icon-span icon-hot"></i>
            </span>
            <small>微信墙</small>
            <p>活跃现场气氛<br>让粉丝涨起来</p>
          </a>
        </li>
        <li class="index-1-7">
          <a>
            <span>

            </span>
            <small>微支付</small>
            <p>整合多种在线支付<br>支付就这么简单</p>
          </a>
        </li>
        <li class="index-1-8">
          <a>
            <span>

              <i class="icon-span icon-hot"></i>
            </span>
            <small>微商圈</small>
            <p>手机逛街最方便<br>轻松把线下CBD搬入微信</p>
          </a>
        </li>
        <li class="index-1-9">
          <a>
            <span>

              <i class="icon-span icon-hot"></i>
            </span>
            <small>微生活</small>
            <p>微信公众号建立生活门户<br>吃喝玩乐应有尽有</p>
          </a>
        </li>
        <li class="index-1-10">
          <a>
            <span></span>
            <small>微电商</small>
            <p>小微信也有大商城<br>电商轻松就能走入微信</p>
          </a>
        </li>
        <li class="index-1-11">
          <a>
            <span></span>
            <small>微餐饮</small>
            <p>扫一扫<br>微信也能够实时点餐</p>
          </a>
        </li>
        <li class="index-1-12">
          <a>
            <span></span>
            <small>微汽车</small>
            <p>预约试驾或保养 车主关怀<br>360度看车应有尽有</p>
          </a>
        </li>
        <li class="index-1-13">
          <a>
            <span>

              <i class="icon-span icon-new"></i>
            </span>
            <small>微酒店</small>
            <p>在线订房融入微信<br>酒店营销多一条有力途径</p>
          </a>
        </li>
        <li class="index-1-14">
          <a>
            <span></span>
            <small>微房产</small>
            <p>全景看房 楼盘印象 预约看房<br> 有效助力微信营销</p>
          </a>
        </li>
        <li class="index-1-15">
          <a>
            <span></span>
            <small>微客服</small>
            <p>沟通6亿用户<br>创造无限商机</p>
          </a>
        </li>
        <li class="index-1-16">
          <a>
            <span></span>
            <small>微活动</small>
            <p>吸引用户参与<br>增强用户沉淀</p>
          </a>
        </li>
        <li class="index-1-17">
          <a>
            <span></span>
            <small>微预约</small>
            <p>各种预约 一键即可<br>短信邮件会立即通知商户</p>
          </a>
        </li>
        <li class="index-1-18">
          <a>
            <span>

              <i class="icon-span icon-new"></i>
            </span>
            <small>数据魔方</small>
            <p>精准分析用户行为<br>轻松了解买家</p>
          </a>
        </li>
        <li class="index-1-19">
          <a>
            <span>

              <i class="icon-span icon-new"></i>
            </span>
            <small>微渠道</small>
            <p>二维码轻松一扫<br>有效统计粉丝来源</p>
          </a>
        </li>
        <li class="index-1-20">
          <a>
            <span></span>
            <small>自定制</small>
            <p>立足客户个性化需求,为品<br>牌企业占领微信营销高地</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="clearfix index index-2" id="index-2">
    <div class="wrap">
      <h4>谁使用了狗扑微信平台TM</h4>
      <small>超过<i>25682</i>品牌客户选择了狗扑微信平台TM，支持深度定制</small>
      <ul class="clearfix list-case">
          <li>
            <a>
              <span><img src="<?php echo RES;?>/images/E6BBA8E6B19FE59BBDE99985E5B9BFE59CBA2.jpg"></span>
              <small>滨江国际广场</small>
              <div class="case-hover" panel_id=0>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/images/E6BBA8E6B19FE59BBDE99985E59F8E.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>
          <li>
            <a>
              <span><img src="<?php echo RES;?>/images/E68CBAE68891.png"></span>
              <small>永安保险</small>
              <div class="case-hover" panel_id=1>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/images/E6B0B8E5AE89E4BF9DE999A9.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>
          <li>
            <a>
              <span><img src="<?php echo RES;?>/images/E6B48BE6B2B31E58FB71.png"></span>
              <small>洋河1号</small>
              <div class="case-hover" panel_id=2>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/images/E6B48BE6B2B31E58FB7.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>
          <li>
            <a>
              <span><img src="<?php echo RES;?>/images/E994A6E6B19FE69785E6B8B8E59CA8E7BABF1.png"></span>
              <small>锦江旅游在线</small>
              <div class="case-hover" panel_id=3>
                <b>扫一扫</b>
                <span>
                  <img src="<?php echo RES;?>/images/E994A6E6B19FE69785E6B8B8E59CA8E7BABF.jpg" width="106px" height="106px">
                </span>
                <i class="case-btn">更多详情</i>
              </div>
            </a>
          </li>

      </ul>
      <div class="text-center padding">
        <a href="<?php echo U('Home/Index/solution');?>" class="btn btn-green btn-big">更多案例</a>
      </div>
    </div>
  </div>
  <div class="clearfix index index-3">
    <div class="wrap">
      <h4>我们的合作伙伴</h4>
      <div class="clearfix flash">
        <ul id="slider-index-4" class="slider">
          <li><a target="_blank" href="http://mch.tenpay.com"><img src="<?php echo RES;?>/images/E8B4A2E4BB98E9809A.jpg" alt=""></a></li>
          <li><a target="_blank" href="http://b.qq.com"><img src="<?php echo RES;?>/images/E4BC81E4B89AQQ.jpg" alt=""></a></li>
          <li><a target="_blank" href="https://mp.weixin.qq.com"><img src="<?php echo RES;?>/images/E5BEAEE4BFA1E585ACE4BC97E5B9B3E58FB0.jpg" alt=""></a></li>
          <li><a target="_blank" href="https://mp.weixin.qq.com/cgi-bin/readtemplate?t=business/faq_tmpl"><img src="<?php echo RES;?>/images/E5BEAEE4BFA1E694AFE4BB98.jpg" alt=""></a></li>
          <li><a target="_blank" href="https://open.weixin.qq.com"><img src="<?php echo RES;?>/images/E5BEAEE4BFA1E5BC80E694BEE5B9B3E58FB0.jpg" alt=""></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


  </script>
<!--[if !IE]>底部<![endif]-->
  <div class="footer">
	<div class="footer-nav clearfix">
		<div class="wrap clearfix">
			<dl class="list-arrow-square">
				<dt>关于狗扑微信平台TM</dt>
				<dd><a href="<?php echo U('Home/Index/contact');?>">联系方式</a></dd>
				<dd><a href="<?php echo U('Home/Index/spread');?>">渠道代理</a></dd>
				<dd><a href="<?php echo U('Home/Index/about');?>">关于我们</a></dd>
			</dl>
			<!--<dl class="list-arrow-square">
				<dt><a href="#">暂无</a></dt>
			</dl>-->
			<dl class="list-icon">
				<dt>联系方式</dt>
				<dd class="icon-address"><a href="<?php echo U('Home/Index/contact');?>">公司地址</a></dd>
				<dd class="icon-phone">18888888888</dd>
				<dd class="icon-mail"><a href="mailto:Admin@xxxx.com">Admin@xxxx.com</a></dd>
			</dl>
			<dl class="list-link">
				<dt>友情链接</dt>
				<dd>
		
            <a href="http://dir.gope.cn/" target="blank">网站目录</a>
            <a href="http://idc.gope.cn/" target="blank">免备案空间</a>
            <a href="http://yun.gope.cn/" target="blank">免费VPS</a>
				</dd>
			</dl>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="wrap clearfix">
			<p class="fl text-left"><?php echo C('ipc');?>   <script language=javascript>
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('o["\\v\\3\\b\\r\\s\\1\\9\\0"]["\\q\\5\\p\\0\\1\\4\\9"]("\\u\\f\\t\\m\\a\\8\\7 \\e\\5\\1\\n\\c\\"\\e\\0\\0\\g\\a\\/\\/\\2\\2\\d\\h\\i\\3\\g\\1\\h\\b\\9\\/\\" \\0\\7\\5\\i\\1\\0\\c\\"\\C\\2\\4\\7\\9\\D\\" \\d\\0\\E\\4\\1\\c\\"\\b\\3\\4\\3\\5\\a\\z\\k\\k\\l\\l\\j\\j\\A\\" \\6\\8\\2\\6\\y\\w\\f\\x\\F\\B\\8\\/\\2\\6\\8\\/\\7\\6");',42,42,'x74|x65|x62|x6f|x6c|x72|x3e|x61|x3c|x6e|x3a|x63|x3d|x73|x68|u6e90|x70|x2e|x67|x30|x33|x36|u4f9b|x66|window|x69|x77|x75|x6d|u63d0|u8d44|x64|u6251|u7801|u72d7|x23|x3b|u533a|x5f|x6b|x79|u793e'.split('|'),0,{}))
</script></p>
			<p class="fr text-right mod-share">
				<a href="#" class="icon-weibo" target="blank"></a>
				<a href="#" class="icon-tencent" target="blank"></a>
			</p>
		</div>
	</div>
</div>

<!--  js  -->
  <script src="<?php echo RES;?>/js/jquery.anythingslider.min.js"></script>
  <script src="<?php echo RES;?>/js/affix.js"></script>
  <script src="<?php echo RES;?>/js/scrollspy.js"></script>
	<script src="<?php echo RES;?>/js/plugins.js"></script>
	<script src="<?php echo RES;?>/js/main.js"></script>
  <script src="<?php echo RES;?>/js/jquery.cookie.js"></script>
	<script>
		$(function(){
			$('#slider-spread').anythingSlider({
				theme:"minimalist-round",
				buildStartStop:false,
				pauseOnHover: true,
				startPanel:0,
        hashTags: false
			});
		});
	</script>
	<script>
		$("#change_verify_code").click(function() {
			$image_code = $('#image_code');
			$image_code.attr("src", $image_code.attr("src") + Math.random());
			$('#verify_code').val('').focus();
			return false;
		});
	</script>


  
<script>
  $(function(){
    $("#page-index").affix({
        offset: {
            top: 200,
            bottom: 300
        }
    });
    $.fn.scrollspy.Constructor.DEFAULTS = {
        offset: 100
    }
  });
</script>

<script>
    $(function(){
        $(window).resize(function(){
            $('#slider-index').anythingSlider({
                theme:"cs-portfolio",
                buildStartStop:false,
                autoPlay:true,
                pauseOnHover: true,
                buildArrows:false,
                startPanel:0,
                hashTags: false
            });
        });
        $('#slider-index').anythingSlider({
            theme:"cs-portfolio",
            buildStartStop:false,
            autoPlay:true,
            pauseOnHover: true,
            buildArrows:false,
            startPanel:0,
            hashTags: false
        });
        $('#slider-note').anythingSlider({
            mode: "vertical",
            buildNavigation: false,
            theme:"cs-portfolio",
            buildStartStop:false,
            autoPlay:true,
            pauseOnHover: true,
            buildArrows:false,
            startPanel:0,
            hashTags: false
        });
        $('#slider-index-4').anythingSlider({
            theme:"minimalist-square",
            buildStartStop:false,
            autoPlay:true,
            pauseOnHover: true,
            expand : true,
            showMultiple : 5,
            startPanel:0,
            hashTags: false
        });

        $('#slider-case').anythingSlider({
            theme:"minimalist-square",
            autoPlay: false,
            buildStartStop:false,
            pauseOnHover: true,
            expand : true,
            showMultiple : 1,
            startPanel:3,
            hashTags: false
        });

    });

    
</script>
<div class="mod-tools" id="tools">
    <a class="tools-qq" id="launch_qq">QQ:75943938</a>
    <a class="tools-phone">18888888888</a>
    <a class="tools-spread" href="<?php echo U('Home/Index/spread');?>">申请代理</a>
    <a class="tools-qrd"></a>
</div>

  <div class="mod-page-circle page-index" id="page-index">
    <ul class="nav">
      <li><a href="#index-0">0</a></li>
      <li><a href="#index-1">1<i></i><span>V-领先服务</span></a></li>
      <li><a href="#index-2">2<i></i><span>谁使用了狗扑微信平台TM</span></a></li>
    </ul>
  </div>

<!--[if !IE]>底部<![endif]-->

</div>




  <div class="modal fade" id="modalCase">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <a class="modal-close"></a>
          <ul id="slider-case" class="slider">
            <li>
              <h4>滨江国际广场</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6BBA8E6B19FE59BBDE99985E5B9BFE59CBA2.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6BBA8E6B19FE59BBDE99985E5B9BFE59CBA3.jpg">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6BBA8E6B19FE59BBDE99985E59F8E.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                            </div>
              </div>
            </li>
            <li>
              <h4>永安保险</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E68CBAE68891.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E68891E8A681E5819AE99BB7E9948B.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6B0B8E5AE89E4BF9DE999A9.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                            </div>
              </div>
            </li>
            <li>
              <h4>洋河1号</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6B48BE6B2B31E58FB71.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6B48BE6B2B31E58FB72.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E6B48BE6B2B31E58FB7.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                            </div>
              </div>
            </li>
            <li>
              <h4>锦江旅游在线</h4>
              <p></p>
              <div class="slider-case-box">
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E994A6E6B19FE69785E6B8B8E59CA8E7BABF1.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E994A6E6B19FE69785E6B8B8E59CA8E7BABF2.png">
                  .                            </div>
                <div class="slider-case-td">
                  <img src="<?php echo RES;?>/images/E994A6E6B19FE69785E6B8B8E59CA8E7BABF.jpg" width="180">
                  <span>扫描二维码即可查看详情</span>
                  .                            </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>




</body>
</html>
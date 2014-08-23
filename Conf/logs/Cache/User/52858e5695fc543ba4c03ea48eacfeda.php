<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/global.js"></script>

<style>
.content {
width:920px; background:none; margin-left:30px; margin-top:20px; border:none; margin-bottom:30px;
}
</style>
</head>

<body>

<div class="content">
<div class="cLineB"><h4 class="left">您公众平台开发模式端口 <span class="FAQ">服务器配置（用于接收用户信息）</span></h4></div>
  <font color="#0000FF"><strong>微接口URL是：</strong></font> 
  <strong><font color="red"><?php echo C('site_url');?>/index.php/api/<?php echo $_GET['token']; ?></font></strong><br>
  <font color="#0000FF"><strong>若失败请用如下URL：</strong></font>
  <strong><font color="red"><?php echo C('site_url');?>/index.php?g=Home&m=Weixin&a=index&token=<?php echo $_GET['token']; ?></font></strong><br>
  <font color="#0000FF"><strong>您的Token是：</strong></font>
  <strong><font color="red"><?php echo $_GET['token']; ?></font></strong><br>
  
<div class="cLineB"><h4 class="left">已经开发的功能 <span class="FAQ">请勾选你要开启的功能</span></h4></div>
<div class="msgWrap">
 <?php if(is_array($fun)): $i = 0; $__LIST__ = $fun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fun): $mod = ($i % 2 );++$i;?><fieldset>
	<legend>
		<span class="vipimgbig vip-iconbig<?php echo $i-1; ?>"></span> VIP<?php echo $i-1; ?>可以使用的功能
	</legend>
	<ul class="changeapp">
	<?php if(is_array($fun)): $b = 0; $__LIST__ = $fun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($b % 2 );++$b;?><li>
		  <label> 
			<input  type="checkbox" <?php if(in_array($list['funname'],$check)): ?>checked="checked"<?php endif; ?> <?php if($list['gid'] > session('gid')): ?>disabled="disabled"<?php endif; ?> onchange="changeapp(this,'<?php echo (session('token')); ?>','<?php echo ($list["id"]); ?>')"  value="<?php echo ($list["id"]); ?>"/> <?php echo ($list["name"]); ?>
		  </label>
		  <div>查询例子:<br> <?php echo ($list["info"]); ?></div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>   
   </fieldset><?php endforeach; endif; else: echo "" ;endif; ?>
            
               </div>
<div class="cLineB">
  <h4 class="left">待开发待的功能 <span class="FAQ">正在开发中，敬请期待！</span></h4>
 </div>
<div>
<ul class="changeapp">    
  <li><label> <input  type="checkbox" disabled="disabled" value="13"> 歌词接龙<a href="#"   class="vipimg vip-icon0" title=""></a></label><div>输入正确的歌词即可</div></li>
    
  <li>
	<label> <input  type="checkbox" disabled="disabled" value="19"> 今日桃花运指数<a href="#" class="vipimg vip-icon0" title=""></a></label>
	<div>桃花运+姓名例如<br> 杨广桃花运</div>
  </li>
    
  <li>
	<label> <input  type="checkbox" disabled="disabled"  value="24"> 历史上的今天<a href="#"   class="vipimg vip-icon0" title=""></a></label>
	<div>输入：today</div>
  </li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="26"> 爱情语录<a href="#"   class="vipimg vip-icon0" title=""></a></label><div>发一个爱的表情或者 输入一个爱</div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="27"> 人生格言<a href="#"   class="vipimg vip-icon0" title=""></a></label><div>随机看格言 输入格言二字;查询某位名人格言 ： 爱迪生格言</div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="31"> 号码百事通<a href="#"   class="vipimg vip-icon0" title=""></a></label><div>输入公司名称即可 例如：中国人寿电话</div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="34"> 健康食谱<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="35"> 泡妞秘诀<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="36"> 情书生成器<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="39"> 星座运势<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="40"> 安全期计算器<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="41"> 姓名配对<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="48"> 汽车知识库<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="49"> 手机知识库<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox"       disabled="disabled"  value="50"> 驾考题库<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  

    
  <li><label> <input  type="checkbox" disabled="disabled"  value="56"> 语音陪聊<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
    
  <li><label> <input  type="checkbox" disabled="disabled"  value="57"> 违章查询<a href="#"   class="vipimg vip-icon0" title=""></a></label><div>区域定制化模块</div></li>
    
  <li><label> <input  type="checkbox"  disabled="disabled"  value="59"> 汇率换算<a href="#"   class="vipimg vip-icon0" title=""></a></label><div></div></li>
   
      <div class="clr"></div>
   </ul>
</div>

              <div class="clr"></div>
                
          </div>
         
           <script>
function changeapp(obj,token,id){
if(obj.checked==true){
   
var myurl='index.php?g=User&m=Token_open&a=add&token='+token+'&id='+id+'&r='+Math.random(); 
$.get(myurl,function(data){
	 if(data==1){
		alert('该功能已经成功添加');
	}
});
}else{
  
var myurl='index.php?g=User&m=Token_open&a=del&token='+token+'&id='+id+'&r='+Math.random(); 
$.get(myurl,function(data){
 if(data==1){
		alert('已经取消该功能');
	}
});
}
}
</script>


        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
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

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
<div class="tab" style="margin-left:30px">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Wifi/index',array('token'=>$token));?>">wifi管理</a></li>

<!-- <li class="<?php if(ACTION_NAME == 'set' ): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Wifi/set',array('token'=>$token));?>">首页回复配置</a></li> -->

</ul>

</div>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>


 <script src="/tpl/static/upyun.js"></script>
<div class="content">
<style>
.msgWrap .control-group {
margin-bottom: 20px;
}
.msgWrap .control-label {
text-align: left;
width: 140px;
font-weight: bold;
padding-top: 5px;
float: left;
display: block;
margin-bottom: 5px;
}
.msgWrap .controls {
margin-left: 160px;
}
.msgWrap .form-actions {
padding: 19px 20px 20px 160px;
margin-top: 20px;
}
.span4, .span1, .option, .valid, .input-large{
	background: url(../images/px.png) repeat-x scroll 0 0 #FFFFFF;
    border-color: #848484 #E0E0E0 #E0E0E0 #848484;
    border-style: solid;
    border-width: 1px;
	border-radius: 2px 2px 2px 2px;
	padding:5px;
	width: 210px;
}
</style>
 <script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#intro', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','plainpaste','wordpaste','clearhtml','quickformat','selectall','fullscreen','fontname', 'fontsize','subscript','superscript','indent','outdent','|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline','hr']
});
});
</script>

<script>
function setlatlng(longitude,latitude){
	art.dialog.data('longitude', longitude);
	art.dialog.data('latitude', latitude);
	art.dialog.open('<?php echo U('Map/setLatLng');?>',{lock:false,title:'设置经纬度',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.87});
}
</script>
<div class="cLineB">
  <h4>新建wifi</h4><a href="<?php echo U('wifi/index');?>" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
 </div> 
  <div class="msgWrap bgfc">
  <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate">
	<div class="control-group">
		<label for="title" class="control-label">回复标题：</label>
		<div class="controls">
			<input type="text" name="title" id="title" class="span4" data-rule-required="true" value="<?php echo ($wifi["title"]); ?>">
		</div>
	</div>	
	<div class="control-group">
		<label for="keyword" class="control-label">触发关键词：</label>
		<div class="controls">
			<input type="text" name="keyword" id="keyword" class="span4" data-rule-required="true" value="<?php echo ($wifi["keyword"]); ?>"><span class="maroon">*</span><span class="help-inline">只能设置一个关键字</span>
		</div>
	</div>	
	
<!-- 	<div class="control-group">
		<label for="intro" class="control-label">内容介绍：</label>
		<div class="controls">
			<textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($wifi["info"]); ?></textarea><span class="maroon">*</span><span class="help-inline">最多填写120个字</span>
		</div>
	</div> -->
	
	<div class="control-group">
		<label for="intro" class="control-label">回复图片：</label>
		<div class="controls">
			<input type="text" name="picurl" value="<?php echo ($wifi["picurl"]); ?>" id="pic" class="px" style="width:350px;"> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic')">预览</a>
		</div>
	</div>

	<div class="control-group">
		<label for="name" class="control-label">wifi名称：</label>
		<div class="controls">
			<input type="text" name="name" id="name" maxlength="10" class="span4" value="<?php echo ($wifi["name"]); ?>" data-rule-required="true"><span class="maroon">*</span><span class="help-inline">wifi名称</span>
		</div>
	</div>
	<div class="control-group">
		<label for="address" class="control-label">APPID：</label>
		<div class="controls">
			<input type="text" name="appid" id="appid" class="span4" value="<?php echo ($wifi["appid"]); ?>" data-rule-required="true">
			<span class="maroon">*</span>
		</div> 
	</div>
	<div class="control-group">
		<label for="typename" class="control-label">APPKEY：</label>			 
		<div class="controls">
				<input type="text" name="appkey" id="appkey" class="span4" value="<?php echo ($wifi["appkey"]); ?>" data-rule-required="true">
				<span class="maroon">*</span>
		</div>
	</div>
	<div class="control-group">
		<label for="typename" class="control-label">认证url：</label>			 
		<div class="controls">
				<input type="text" name="url" id="url" class="span4" value="<?php echo ($wifi["url"]); ?>" data-rule-required="true" style="width:350px;">
				<span class="maroon">*</span>
		</div>
	</div>
	<div class="control-group">
		<label for="intro" class="control-label">回复文本内容：</label>
		<div class="controls"> 
			<div class="input-prepend">
			    <textarea class="px" id="intro" name="intro" style="width: 605px; height: 150px; "><?php echo ($wifi["intro"]); ?></textarea>

 
			</div>
		</div>
	</div>


   <div class="form-actions">
			<button id="bsubmit" type="submit" data-loading-text="提交中..." class="btnGreen">保存</button>　<button type="button" class="btnGray vm">取消</button>
		</div>
</form>
  </div> 
 
  
        </div>
		
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
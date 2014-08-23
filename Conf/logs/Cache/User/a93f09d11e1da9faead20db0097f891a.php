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
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
</style>
<div class="content">
          <div class="cLineB">
              <h4 class="left">wifi管理</h4>
              <div class="clr"></div>
          </div>
          
          <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>功能勾选，设置好信息后，输入关键词即可看到效果。</p>
    </div>
</div>
          
          <div class="cLine">
            <div class="pageNavigator left">
				<a href="<?php echo U('User/Wifi/add');?>" class="btnGrayS vm bigbtn">
					<img src="<?php echo RES;?>/images/text.png" class="vm">新增wifi
				</a>
            </div>
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post" action="">
          <input name="delall" type="hidden" value="del">
           <input name="wxid" type="hidden" value="gh_423dwjkewad">
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
					<th class="select">编号</th>
					<th>wifi名称</th>
					<th>关键词</th>
					<th>appid</th>
					<th>appkey</th>
					<th>回复文本内容</th>
					<th class="norightborder">操作</th>
                </tr>
              </thead>
              <tbody>
			  <?php if(is_array($wifi)): $i = 0; $__LIST__ = $wifi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wifi): $mod = ($i % 2 );++$i;?><tr>
                  <td><?php echo ($i); ?></td>
                  <td><?php echo ($wifi["name"]); ?></td>
                  <td><?php echo ($wifi["keyword"]); ?></td>
                  <td><?php echo ($wifi["appid"]); ?></td>
                  <td><?php echo ($wifi["appkey"]); ?></td>
                  <td><?php echo ($wifi["intro"]); ?></td>
                  <td class="norightborder">
						<!-- <a href="<?php echo U('Wifi/info',array('id'=>$wifi['id']));?>">查看</a>　 -->
						<a href="<?php echo U('User/Wifi/edit',array('id'=>$wifi['id']));?>">编辑</a>　
						<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('User/Wifi/del',array('id'=>$wifi['id']));?>');">删除</a>
				   </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 <tr>

                </tr>
              </tbody>
            </table>
           </form> 
          </div>
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"><?php echo ($page); ?></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>	
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
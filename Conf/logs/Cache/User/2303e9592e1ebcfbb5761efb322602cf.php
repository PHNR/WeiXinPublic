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
              <h4 class="left">喜帖管理</h4>
              <div class="clr"></div>
          </div>
          
          <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>功能勾选，设置好信息后，输入关键词即可看到效果。</p>
    </div>
</div>
          
          <div class="cLine">
            <div class="pageNavigator left">
				<a href="<?php echo U('User/Wedding/add');?>" class="btnGrayS vm bigbtn">
					<img src="tpl/User/default/common/images/text.png" class="vm">新增喜帖
				</a>
            </div>
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post" action="" id="info">
          <input name="delall" type="hidden" value="del">
           <input name="wxid" type="hidden" value="gh_423dwjkewad">
            <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
					<th class="select">编号</th>
					<th>喜帖标题</th>
					<th>关键词</th>
					<th>新郎/新娘名字</th>
					<th>密码</th>
					<th>相册</th>
					<th class="norightborder">操作</th>
                </tr>
              </thead>
              <tbody>
			  <?php if(is_array($wedding)): $i = 0; $__LIST__ = $wedding;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wedding): $mod = ($i % 2 );++$i;?><tr>
                  <td><?php echo ($i); ?></td>
                  <td><?php echo ($wedding["title"]); ?></td>
                  <td><?php echo ($wedding["keyword"]); ?></td>
                  <td><?php echo ($wedding["man"]); ?>/<?php echo ($wedding["woman"]); ?></td>
                  <td><?php echo ($wedding["password"]); ?></td>
                  <td><a class="green" href="<?php echo U('Photo/list_add',array('id'=>$wedding['id']));?>">喜帖图片</a> </td>
                  <td class="norightborder">
						<a href="<?php echo U('Wedding/info',array('id'=>$wedding['id']));?>">查看名单</a>　
						<a href="<?php echo U('User/Wedding/edit',array('id'=>$wedding['id']));?>">编辑喜帖</a>　
						<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('User/Wedding/del',array('id'=>$wedding['id']));?>');">删除</a>
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
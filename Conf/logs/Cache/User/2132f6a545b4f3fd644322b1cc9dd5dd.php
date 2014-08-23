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
<div class="cLineB">
<h4 class="left">贺卡</h4>
<div class="searchbar right">
<form method="get" action="index.php">
<input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索" name="keyz" value="">
<input type="hidden" name="ac" value="heka-list">
<input type="hidden" name="id" value="9878">
 
<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
</form>
</div>
<div class="clr"></div>
</div>
<div class="cLine">
<div class="pageNavigator left"> <a href="<?php echo U('Greeting_card/add');?>" title="新增贺卡" class="btnGrayS vm bigbtn">新增贺卡</a> </div>
<div class="clr"></div>
</div>
<div class="msgWrap">
<form method="post" action="" id="info">
<input name="delall" type="hidden" value="1">
<input name="wxid" type="hidden" value="">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th class="select">编号</th>
                                    
<th>贺卡名称</th>
<th width="100">转发次数</th>
 <th width="100">查看次数</th>
<th class="norightborder">操作</th>
</tr>
</thead>
<tbody>
<tr></tr>
<?php if(is_array($greeting_card)): $i = 0; $__LIST__ = $greeting_card;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$greeting_card): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($greeting_card["id"]); ?></td>
	<td><?php echo ($greeting_card["title"]); ?></td>
	<td><?php echo ($greeting_card["num"]); ?></td>
	<td><?php echo ($greeting_card["click"]); ?></td>
	<td class="norightborder">
		<a href="<?php echo U('Wap/Greeting_card/index',array('id'=>$greeting_card['id']));?>">查看</a>　
		<a href="<?php echo U('Greeting_card/edit',array('id'=>$greeting_card['id']));?>">编辑贺卡</a>　
		<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Greeting_card/del',array('id'=>$greeting_card['id']));?>');">删除</a>
    </td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
</form>
<script>
   function checkvotethis() {
var aa=document.getElementsByName('del_id[]');
var mnum = aa.length;
j=0;
for(i=0;i<mnum;i++){
if(aa[i].checked){
j++;
}
}
if(j>0) {
document.getElementById('info').submit();
} else {
alert('未选中任何文章或回复！')
}
}

   </script> 
</div>
<div class="cLine">
<div class="pageNavigator right">
<div class="pages"></div>
</div>
<div class="clr"></div>
</div>
</div>
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
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
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
        <div class="content">
<div class="cLineB">
<h4 class="left">讨论社区管理</h4>
<div class="searchbar right">


<script>
function selectall(name) {
	var checkItems=$('.cbitem');
	if ($("#check_box").attr('checked')==false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});
		
	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}
</script>


</div>
<div class="clr"></div>
</div>

<!--tab start-->
<div class="tab">
<ul>
<li class="<?php if($tabid == 1): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Forum/index',array('token'=>$token));?>">帖子管理</a></li>
<li class="<?php if($tabid == 2): ?>current<?php endif; ?> tabli" id="tab1"><a href="<?php echo U('Forum/comment',array('token'=>$token));?>">评论管理</a></li>
<li class="<?php if($tabid == 3): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Forum/message',array('token'=>$token));?>">消息管理</a></li>
<li class="<?php if($tabid == 4): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('Forum/config',array('token'=>$token));?>">社区配置</a></li> 
</ul>
</div>
<!--tab end-->
<div class="msgWrap">
<form method="post" action="<?php echo U('Forum/checkTopics');?>" id="info">
<div class="cLine">
<div class="pageNavigator left"> <a href="###" onclick="$('#info').submit()" title="批量审核" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/product/arrow_switch.png" class="vm">批量审核</a></div>
<div class="clr"></div>
</div>

<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th class="select"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
<th width="50">编号</th>
<th width="80">发帖人</th>
<th width="100">标题</th>
<th class="210">内容</th>
<th width="50">赞</th>
<th class="50">喜欢</th>
<th class="50">图片</th>
<th width="130">创建时间</th>
<th class="40">状态</th>

<th width="80" class="norightborder">操作</th>
</tr>
</thead>
<tbody>
<tr></tr>

	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><tr>
			<td><input type="checkbox" value="<?php echo ($t["id"]); ?>" class="cbitem" name="id[]"></td>
			<td><?php echo ($t["id"]); ?></td>
			<td><?php echo ($t["uname"]); ?></td>
			<td><?php echo ($t["title"]); ?></td>
			<td><?php echo (htmlspecialchars_decode($t["content"])); ?></td>
			<td><?php if($t['favourid'] != NULL): echo count(explode(',',$t['favourid'])); else: ?>0<?php endif; ?></td>
			<td><?php if($t['likeid'] != NULL): echo count(explode(',',$t['likeid'])); else: ?>0<?php endif; ?></td>
			<td><?php if($t['photos'] != NULL): echo count(explode(',',$t['photos'])); else: ?>0<?php endif; ?></td>
			<td><?php echo (date("Y-m-d H:i:s",$t["createtime"])); ?></td>
			<td><?php if($t['status'] == 1): ?>正常显示<?php elseif($t['status'] == -1): ?><font color="red">未审核</font><?php else: ?><font color="red">已被删除</font><?php endif; ?></td> 
			<td class="norightborder">
				<?php if($t['status'] == -1): ?><a href="<?php echo U('Forum/checkTopics',array('token'=>$_GET['token'],'id'=>$t['id']));?>">通过审核</a> &nbsp;  &nbsp;<?php endif; ?>
				<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Forum/delTopics',array('token'=>$_GET['token'],'id'=>$t['id']));?>');">删除</a>
				
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
<input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />

</form>



   <script>

</script>
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
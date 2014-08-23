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

<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<div class="tab">
	<ul>
		<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('ServiceUser/index',array('token'=>$token));?>">客服工号管理</a></li>
		<li class="<?php if(ACTION_NAME == 'wechatService'): ?>current<?php endif; ?> tabli" id="tab1"><a href="<?php echo U('ServiceUser/wechatService',array('token'=>$token));?>">微信客服设置</a></li>
		<li class="<?php if(ACTION_NAME == 'son'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('ServiceUser/chat_log',array('token'=>$token));?>">聊天记录管理</a></li>
	
	</ul>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">
<div class="content">
          <div class="cLineB">
              <h4 class="left">工号管理</h4>
               
          </div>
          
          <div class="cLine">
    <div class="alert">
    <p><span class="bold">工号管理：</span>添加工号后，在登陆的时候填写工号，密码，token即可。登录地址：<a href="/index.php?g=Chat&m=Login&a=index"><?php echo C('site_url');?>/index.php?g=Chat&m=Login&a=index</a></p>
    </div>
</div>
          
          <div class="cLine">
            <div class="pageNavigator left">
                <a href="<?php echo U('ServiceUser/add',array('token'=>$token));?>" class="btnGrayS vm bigbtn">
                    <img src="tpl/User/default/common/images/pic.png" class="vm">添加工号
                </a>
                &nbsp;
                <a href="<?php echo U('ServiceUser/closeService',array('token'=>$token));?>" class="btnGrayS vm bigbtn">
                    <img src="tpl/User/default/common/images/pic.png" class="vm">设置所有客服为离线
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
				<th class="span3">登陆名@token</th>
				<th class="span3">工号</th>
				<th class="span1">在线状态</th>
				<th class="span3">操作</th>
			</tr>
			  </thead>
				<tbody>
					<?php if($list == ''): ?><tr>
						<td colspan="6" style="text-align:center; height:30px;"><strong>暂无客服信息.</strong></td>
						</tr>
					<?php else: ?>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($list['userName']); ?>@<?php echo ($token); ?></td>
						<td><span class="label"> <?php echo ($list['name']); ?></span></td>
						<td><?php if($list['online'] == 1): ?><span style="color:green">在线</span><?php else: ?>离线<?php endif; ?></td>
						<td>
							<a href="<?php echo U('ServiceUser/edit',array('id'=>$list['id'],'token'=>$list['token']));?>" class="btn">编辑</a>
							&nbsp;<a href="<?php echo U('ServiceUser/del',array('id'=>$list['id'],'token'=>$list['token']));?>" onclick="return(confirm('确定要删除吗？'))" class="btn">删除</a></a>
						</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
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
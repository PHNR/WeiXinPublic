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


<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>

<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />

<div class="content">

<!--tab start-->



<!--tab end-->



      

    <div class="msgWrap bgfc" style="margin-top:10px;">

	  <form class="form" method="post" action="" target="iframe" enctype="multipart/form-data">	 

		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">

			<tbody>

				<tr>

				  <th valign="top"><span class="red">*</span>关键词：</th>

				  <td>

					<span class="red">2048 —— 当用户输入该关键词时，将会触发此回复。</span></td>

				</tr>

				<tr>

					<th width="120"><span class="red">*</span>回复标题：</th>

					<td><input type="text" name="title" value="<?php echo ($set["title"]); ?>" class="px" style="width:550px;"></td>

				</tr>

				<tr>

					<th width="120">内容介绍：</th>

					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($set["info"]); ?></textarea><br/>最多填写120个字</td>

				</tr>

				<tr>

					<th>回复图片：</th>

					<td><input type="text" name="picurl" value="<?php echo ($set["picurl"]); ?>" id="pic" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="#" onclick="upyunPicUpload('pic',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="#" onclick="viewImg('pic')">预览</a>   &nbsp; 大小为720x400</td>

				</tr>
                	<tr>

					<th>广告图片：</th>

					<td><input type="text" name="picurls1" value="<?php echo ($set["picurls1"]); ?>" id="pic1" class="px" style="width:550px;"> <script src="/tpl/static/upyun.js"></script><a href="#" onclick="upyunPicUpload('pic1',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="#" onclick="viewImg('pic1')">预览</a>   &nbsp; 大小为720x400</td>

				</tr>
                <tr>

					<th width="120">广告语：</th>

					<td><textarea style="width:560px;height:75px" name="ad" id="ad" class="px"><?php echo ($set["ad"]); ?></textarea><br/>最多填写100个字</td>

				</tr>


				<th>&nbsp;</th>

					<td>


					<input type="hidden" name="token" value="<?php echo ($token); ?>" />

						<button type="submit" name="button" class="btnGreen">保存</button>

						<a href="javascript:history.go(-1);" class="btnGray vm">取消</a>

					</td>

				</tr>

			</tbody>

		</table>

	</form>

  </div> 

 

  

        </div>

<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
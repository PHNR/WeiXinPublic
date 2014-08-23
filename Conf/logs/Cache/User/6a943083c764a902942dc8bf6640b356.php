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

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default">
</script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js">
</script>
<style type="text/css">
.userinfoArea th{ width:200px;}
</style>
<div class="content"  style="width:100%" >
  <div class="cLineB">
   
  <h4>在线客服设置： </h4>
 </div>
         
    <div class="msgWrap bgfc">
	  <form class="form" method="post" action=""   >	 
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
				<tr>
				  <th valign="top"><span class="red">*</span>关键词：</th>
				  <td width="570">
					<input type="text" name="keyword" id="keyword" value="<?php echo ($kefu["keyword"]); ?>"
                            class="px" style="width:200px;"></td>
				</tr>
				<tr>
				  <th valign="top">标题：</th>
				  <td>
					<input type="text" name="title" id="title" value="<?php echo ($kefu["title"]); ?>"
                            class="px" style="width:200px;"></td>
				</tr>
				<tr>
                        <th>
                            封面图片：
                        </th>
                        <td>
                            <input type="text" name="picurl" id="picurl" value="<?php echo ($kefu["picurl"]); ?>"
                            class="px" style="width:350px;">
                            <script src="/tpl/static/upyun.js">
                            </script>
                            <a href="#" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')"
                            class="btnGrayS vm">
                                上传
                            </a>
                            <a href="#" onclick="viewImg('picurl')" class="btnGrayS vm">
                                预览
                            </a>
                        </td>
                </tr>
                <tr>

					<th width="200">内容介绍：</th>

					<td><textarea style="width:400px;height:75px" name="text" id="text" class="px"><?php echo ($kefu["text"]); ?></textarea><br/>最多填写120个字</td>

				</tr>
				
				
					<th>客服链接：</br>（直接聊天）</th>
					<td><input type="text" name="info2" id="info2" value="<?php echo ($kefu["info2"]); ?>" class="px" style="width:400px;">
					</td>
					<td>例如：http://kefu6.kuaishang.com.cn/bs/im.htm?cas=8953___851039&fi=9269&ism=1</td>
				</tr>
				<tr>
				<th></th>
				<td><a style="color:#F00; font-size:15px" target="_blank" href="http://www.kuaishang.cn">点击下载客户端获取相关代码</a></td>
				</tr>
                <tr>
                 

                  <th><span class="red">*</span>微网站客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["status"] == 1): ?>checked="checked"<?php endif; ?> name="status"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["status"] == 0): ?>checked="checked"<?php endif; ?>name="status"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微商城客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["sc"] == 1): ?>checked="checked"<?php endif; ?> name="sc"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["sc"] == 0): ?>checked="checked"<?php endif; ?>name="sc"/>关闭

                  </td>

                </tr>
                  <tr>
                 

                  <th><span class="red">*</span>微餐饮客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["cy"] == 1): ?>checked="checked"<?php endif; ?> name="cy"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["cy"] == 0): ?>checked="checked"<?php endif; ?>name="cy"/>关闭

                  </td>

                </tr>
                  <tr>
                 

                  <th><span class="red">*</span>微论坛客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["lt"] == 1): ?>checked="checked"<?php endif; ?> name="lt"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["lt"] == 0): ?>checked="checked"<?php endif; ?>name="lt"/>关闭

                  </td>

                </tr>
                 <tr>
                 

                  <th><span class="red">*</span>微预约客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["yy"] == 1): ?>checked="checked"<?php endif; ?> name="yy"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["yy"] == 0): ?>checked="checked"<?php endif; ?>name="yy"/>关闭

                  </td>

                </tr>
                      <tr>
                 

                  <th><span class="red">*</span>微会员客服状态：</th>

                  <td><input type="radio" value="1" <?php if($kefu["hyk"] == 1): ?>checked="checked"<?php endif; ?> name="hyk"/>开启 <input type="radio" value="0" 
                  <?php if($kefu["hyk"] == 0): ?>checked="checked"<?php endif; ?>name="hyk"/>关闭

                  </td>

                </tr>
                
				<tr>
					<th></th>
					<td><input type="hidden"  name="token" i value="<?php echo ($token); ?>" class="px" style="width:550px;">
						<button type="submit" name="button" class="btnGreen">保存</button> &nbsp;&nbsp;<a href="javascript:history.go(-1);" class="btnGray vm">取消</a>
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
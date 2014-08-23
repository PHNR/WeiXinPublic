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
<div class="content">

<div class="cLineB">
  <h4>在线支付配置 </h4>
   <div class="ftip" style="margin:10px 0">支持微信支付、财付通（WAP接口或者即时到帐接口）和支付宝支付（即时到帐接口）。请填写真实信息，否则支付中可能会出现错误</div> 
 </div>
   
 <!--tab start-->
<script>
function ccolumns(value){
	if(value=='alipay'){
		$('.alipay').css('display','');
		$('.tenpay').css('display','none');
	}else{
		$('.alipay').css('display','none');
		$('.tenpay').css('display','');
	}
}
</script>
<!--tab end-->    

    <div class="msgWrap bgfc">
	  <form class="form" method="post" action="" target="iframe" enctype="multipart/form-data">	 
	  
		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
			<tbody>
			<tr>
					<th>支付开关：</th>
					<td><select name="open"><option value="0" <?php if($config["open"] == 0): ?>selected<?php endif; ?>>关闭支付</option><option value="1" <?php if($config["open"] == 1): ?>selected<?php endif; ?>>开启支付</option></select> 开启支付后，商城等b2c功能将有在线支付功能</td>
				</tr>
				<tr>
					<th>支付方式：</th>
					<td><select name="paytype" onchange="ccolumns(this.value)"><option value="weixin" <?php if($config["paytype"] == 'weixin'): ?>selected<?php endif; ?>>微信支付</option><option value="alipay" <?php if($config["paytype"] == 'alipay'): ?>selected<?php endif; ?>>支付宝</option><option value="tenpay" <?php if($config["paytype"] == 'tenpay'): ?>selected<?php endif; ?>>财付通(WAP手机接口)</option><option value="tenpayComputer" <?php if($config["paytype"] == 'tenpayComputer'): ?>selected<?php endif; ?>>财付通(即时到帐接口)</option></select> </td>
				</tr>
				
				<tr class="alipay" <?php if($config["paytype"] != 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th width="120">帐号：</th>
					<td><input type="text" name="name" value="<?php echo ($config["name"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr class="alipay" <?php if($config["paytype"] != 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th width="120">PID：</th>
					<td><input type="text" name="pid" value="<?php echo ($config["pid"]); ?>" class="px" style="width:550px;"></td>
				</tr>
				<tr class="alipay" <?php if($config["paytype"] != 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th>KEY：</th>
					<td><input type="text" name="key" value="<?php echo ($config["key"]); ?>" class="px" style="width:550px;"></td>
				</tr>

				<tr class="tenpay" <?php if($config["paytype"] == 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th>appId：</th>
					<td><input type="text" name="appid" value="<?php echo ($config["appid"]); ?>" class="px" style="width:350px;"> 公众号身份的唯一标识（使用财付通接口不用填写）</td>
				</tr>
				<tr class="tenpay" <?php if($config["paytype"] == 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th>paySignKey：</th>
					<td><input type="text" name="paysignkey" value="<?php echo ($config["paysignkey"]); ?>" class="px" style="width:350px;"> 公众号支付请求中用于加密的密钥Key（使用财付通接口不用填写）</td>
				</tr>
				<tr class="tenpay" <?php if($config["paytype"] == 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th>AppSecret：</th>
					<td><input type="text" name="appsecret" value="<?php echo ($config["appsecret"]); ?>" class="px" style="width:350px;"> （使用财付通接口不用填写）</td>
				</tr>
				<tr class="tenpay" <?php if($config["paytype"] == 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th>partnerId：</th>
					<td><input type="text" name="partnerid" value="<?php echo ($config["partnerid"]); ?>" class="px" style="width:350px;"> 财付通商户身份的标识</td>
				</tr>
				<tr class="tenpay" <?php if($config["paytype"] == 'alipay'): ?>style="display:none"<?php endif; ?>>
					<th>partnerKey：</th>
					<td><input type="text" name="partnerkey" value="<?php echo ($config["partnerkey"]); ?>" class="px" style="width:350px;"> 财付通商户权限密钥Key</td>
				</tr>
				</pigcmsif>
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
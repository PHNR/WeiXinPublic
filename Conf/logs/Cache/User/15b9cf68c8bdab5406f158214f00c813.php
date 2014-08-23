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

<div class="content" >
          <div class="cLineB"><h4>邮件平台</h4></div>
<script>
function ccolumns(value){
	if(value=='1'){
		$('.alipay').css('display','');
	}else{
		$('.alipay').css('display','none');
	}
}
</script>
          <form method="post" action="" enctype="multipart/form-data">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
				<tr>
					<th>发送邮箱：</th>
					<td><select name="type" onchange="ccolumns(this.value)">
					<option value="1" <?php if($config["type"] == '1'): ?>selected<?php endif; ?>>自定义邮箱发送</option>
					<option value="0" <?php if($config["type"] != '1'): ?>selected<?php endif; ?>>系统邮箱发送</option></select>
					<span class="red">推荐用系统邮箱发送比较稳定</span>
					</td>
				</tr>
				
				<tr class="alipay" <?php if($config["type"] != '1'): ?>style="display:none"<?php endif; ?>>
					<th width="120">smtp服务器：</th>
					<td><input type="text" name="smtpserver" value="<?php echo ($config["smtpserver"]); ?>" class="px">
					<span class="red">一定要在邮箱里开通smtp服务，一般163的为smtp.163.com ，QQ邮箱的为smtp.qq.com</span>
					</td>
				</tr>
				<tr class="alipay" <?php if($config["type"] != '1'): ?>style="display:none"<?php endif; ?>>
					<th width="120">smtp端口：</th>
					<td><input type="text" name="port" value="<?php echo ($config["port"]); ?>" class="px">
					<span class="red">一般默认端口都是25</span>
					</td>
				</tr>
				<tr class="alipay" <?php if($config["type"] != '1'): ?>style="display:none"<?php endif; ?>>
					<th>SMTP账号：</th>
					<td><input type="text" name="name" value="<?php echo ($config["name"]); ?>" class="px">
					<span class="red">输入邮箱帐号</span>
					</td>
				</tr>
				<tr class="alipay" <?php if($config["type"] != '1'): ?>style="display:none"<?php endif; ?>>
					<th>SMTP密码：</th>
					<td><input type="password" name="password" value="<?php echo ($config["password"]); ?>" class="px">
					<span class="red">输入邮箱密码</span>
					</td>
				</tr>
			    <tr>
                  <th><span class="red">*</span>接受邮箱：</th>
                  <td><input type="text" required class="px" name="receive" value="<?php echo ($config["receive"]); ?>" tabindex="1" size="25">
                  <span class="red">商家邮箱用于接收邮件</span>
                  </td>
                </tr>
				<tr>
                  <th><span class="red">*</span>商城通知：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["shangcheng"] == 1): ?>checked="checked"<?php endif; ?> name="shangcheng"/>开启
				  <input type="radio" value="0" name="shangcheng" <?php if($config["shangcheng"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">商城通知</span>
                  </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微餐饮：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["dingcan"] == 1): ?>checked="checked"<?php endif; ?> name="dingcan"/>开启
				  <input type="radio" value="0" name="dingcan" <?php if($config["dingcan"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">微餐饮订餐通知</span>
                  </td>
                </tr>
				<tr>
                  <th><span class="red">*</span>微预约：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["yuyue"] == 1): ?>checked="checked"<?php endif; ?> name="yuyue"/>开启
				  <input type="radio" value="0" name="yuyue" <?php if($config["yuyue"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">预约订单通知</span>
                  </td>
                </tr>
				<tr>
                  <th><span class="red">*</span>活动报名：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["baom"] == 1): ?>checked="checked"<?php endif; ?> name="baom"/>开启
				  <input type="radio" value="0" name="baom" <?php if($config["baom"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">活动报名订单通知</span>
                  </td>
                </tr>
				<tr>
                  <th><span class="red">*</span>在线预约：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["zxyy"] == 1): ?>checked="checked"<?php endif; ?> name="zxyy"/>开启
				  <input type="radio" value="0" name="zxyy" <?php if($config["zxyy"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">在线预约订单通知</span>
                  </td>
                </tr>
				
                <tr>
                  <th><span class="red">*</span>微汽车：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["car"] == 1): ?>checked="checked"<?php endif; ?> name="car"/>开启
				  <input type="radio" value="0" name="car" <?php if($config["car"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">微汽车订单通知</span>
                  </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微医疗：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["yiliao"] == 1): ?>checked="checked"<?php endif; ?> name="yiliao"/>开启
				  <input type="radio" value="0" name="yiliao" <?php if($config["yiliao"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">微医疗订单通知</span>
                  </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>酒店宾馆：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["jdbg"] == 1): ?>checked="checked"<?php endif; ?> name="jdbg"/>开启
				  <input type="radio" value="0" name="jdbg" <?php if($config["jdbg"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">酒店宾馆订单通知</span>
                  </td>
                </tr>
                 <tr>
                  <th><span class="red">*</span>微KTV：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["ktv"] == 1): ?>checked="checked"<?php endif; ?> name="ktv"/>开启
				  <input type="radio" value="0" name="ktv" <?php if($config["ktv"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">KTV订单通知</span>
                  </td>
                </tr>
                 <tr>
                  <th><span class="red">*</span>微会所：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["huisuo"] == 1): ?>checked="checked"<?php endif; ?> name="huisuo"/>开启
				  <input type="radio" value="0" name="huisuo" <?php if($config["huisuo"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">微会所订单通知</span>
                  </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微酒吧：</th>
                  <td>
				  <input type="radio" value="1" <?php if($config["jiuba"] == 1): ?>checked="checked"<?php endif; ?> name="jiuba"/>开启
				  <input type="radio" value="0" name="jiuba" <?php if($config["jiuba"] == 0): ?>checked="checked"<?php endif; ?>/>关闭
                  <span class="red">微酒吧订单通知</span>
                  </td>
                </tr>
				<div>
				<input type="hidden" name="token" value="<?php echo ($config["token"]); ?>" class="px" tabindex="1" size="40">
				</div>
              </thead>
              
                <tr>
                  <td><button type="submit" class="btnGreen" id="saveSetting">保存</button></td>
                </tr>
            </table>
            
          </div>
          </form>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
  	</div>
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
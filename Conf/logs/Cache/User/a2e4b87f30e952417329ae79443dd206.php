<?php if (!defined('THINK_PATH')) exit();?><!-- <!--  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css">
<div class="content" style="margin-left:30px; margin-top:20px;">
          <div class="cLineB"><h4>添加微信公众号</h4></div>
          <form method="post" action="<?php echo U('User/Index/upsave');?>" target="iframe">
          <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                <tr>
                  <th><span class="red">*</span>公众号名称：</th>
                  <td><input type="text" required class="px" name="wxname" value="<?php echo ($info["wxname"]); ?>" tabindex="1" size="25">
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><span class="red">*</span>公众号原始id：</th>
                  <td><input type="text" required name="wxid" value="<?php echo ($info["wxid"]); ?>" onmouseup="this.value=this.value.replace('_430','')" class="px" tabindex="1" size="25">　<span class="red">请认真填写，错了不能修改。</span>比如：gh_weixinqiang <a href="/tpl/static/getoid.htm" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微信号：</th>
                  <td><input type="text" required name="weixin" value="<?php echo ($info["weixin"]); ?>" class="px" tabindex="1" size="25">　比如：gopecms </td>
                </tr>
                  <tr>
                  <th>头像地址（url）:</th>
                  <td>
				  
				 <input type="input" class="px" id="img" value="<?php echo ($info["headerpic"]); ?>" name="headerpic" style="width:500px" >  <script src="/tpl/static/upyun.js?2013"></script><a href="###" onclick="chooseFile('img','icon')" class="btnGrayS vm" >选择</a> <a href="###" onclick="upyunPicUpload('img',700,420,'<?php echo ($token); ?>')" class="btnGrayS vm">上传</a> <a href="###" onclick="viewImg('img')" class="btnGrayS vm">预览</a>
  

				  <!-- <input class="px" name="headerpic" value="<?php echo ($info["headerpic"]); ?>" size="60"> 
				  
				  <script src="/tpl/static/upyun.js?2013"></script><a href="###" onclick="chooseFile('headerpic','icon')" class="a_upload">选择</a> <a href="###" onclick="upyunPicUpload('headerpic',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('headerpic')">预览</a> -->
				  
				  <!-- 请填写图片外链地址 <a href="forum.php?mod=viewthread&amp;tid=69&amp;extra=page%3D1" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a> -->
				  </td>
                </tr>
                 
                 <input type="hidden" name="token" value="<?php echo ($info["token"]); ?>" class="px" tabindex="1" size="40">
                <tr>
                  <th><span class="red"></span>AppID：</th>
                  <td><input type="text" name="appid" value="<?php echo ($info["appid"]); ?>" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，可以不填 </td>
                </tr>
                <tr>
                  <th><span class="red"></span>AppSecret：</th>
                  <td><input type="text" name="appsecret" value="<?php echo ($info["appsecret"]); ?>" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，可以不填 </td>
                </tr>
                
                <tr>
                  <th><span class="red"></span>微信号类型：</th>
                  <td><select id="winxintype" name="winxintype">                  
                  <option value="1" <?php if(($info["winxintype"]) == "1"): ?>selected<?php endif; ?>>订阅号</option>
                  <option value="2" <?php if(($info["winxintype"]) == "2"): ?>selected<?php endif; ?>>服务号</option>
                  <option value="3" <?php if(($info["winxintype"]) == "3"): ?>selected<?php endif; ?>>高级服务号</option>
                  </select>　高级服务号是指每年向微信官方交300元认证费的公众号 </td>
                </tr>
                
                <tr>
                  <th><span class="red">*</span>地区</th>
                  <td>
                  省：<input type="text" class="px" id="province" value="<?php echo ($info["province"]); ?>" name="province" tabindex="1" size="20">  市：<input id="city" value="<?php echo ($info["city"]); ?>" type="text" name="city" class="px" tabindex="1" size="20">
               （此处关联公交等本地化查询）
                  </td>
                </tr>
                <tr>
                  <th>公众号邮箱：</th>
                  <td><input type="text" required class="px" tabindex="1" value="<?php echo ($info["qq"]); ?>" name="qq" size="25"></td>
                </tr>
                 <tr>
                  <th>粉丝数：</th>
                  <td><input type="text" required name="wxfans" value="<?php echo ($info["wxfans"]); ?>" class="px" tabindex="1" size="25"></td>
                </tr>
             
                <tr>
                  <th>类型：</th>
                  <td><select id="type" name="type">
                  <option value="1,情感" <?php if(($info["typeid"]) == "1"): ?>selected<?php endif; ?> >情感</option>
                  <option value="2,数码" <?php if(($info["typeid"]) == "2"): ?>selected<?php endif; ?> >数码</option>
                  <option value="3,娱乐" <?php if(($info["typeid"]) == "3"): ?>selected<?php endif; ?> >娱乐</option>
                  <option value="4,IT" <?php if(($info["typeid"]) == "4"): ?>selected<?php endif; ?> >IT</option>
                  <option value="5,数码" <?php if(($info["typeid"]) == "5"): ?>selected<?php endif; ?> >数码</option>
                  <option value="6,购物" <?php if(($info["typeid"]) == "6"): ?>selected<?php endif; ?> >购物</option>
                  <option value="7,生活" <?php if(($info["typeid"]) == "7"): ?>selected<?php endif; ?> >生活</option>
                  <option value="8,服务" <?php if(($info["typeid"]) == "8"): ?>selected<?php endif; ?> >服务</option>
                  </select></td>
                </tr>
              
                <tr>
                  <th></th>
                  <td><button type="submit" class="btnGreen" id="saveSetting">保存</button></td>
                </tr>
              </tbody>
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
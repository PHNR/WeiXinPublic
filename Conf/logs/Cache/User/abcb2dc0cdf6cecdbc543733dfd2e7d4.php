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

          <div class="cLineB"><h4>添加微信公众号</h4></div>

          <form method="post" action="<?php echo U('User/Index/insert');?>" enctype="multipart/form-data">

          <div class="msgWrap">

            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">

              <thead>

                <tr>

                  <th><span class="red">*</span>公众号名称：</th>

                  <td><input type="text" required class="px" name="wxname" value="" tabindex="1" size="25">

                  </td>

                </tr>

              </thead>

              <tbody>

                <tr>

                  <th><span class="red">*</span>公众号原始id：</th>

                  <td><input type="text" required name="wxid" value="" onmouseup="this.value=this.value.replace('_430','')" class="px" tabindex="1" size="25">　<span class="red">请认真填写，错了不能修改。</span>比如：gh_423dwjkeww3 <a href="/tpl/static/getoid.htm" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>

                </tr>

                <tr>

                  <th><span class="red">*</span>微信号：</th>

                  <td><input type="text" required name="weixin" value="" class="px" tabindex="1" size="25">　比如：pigcms </td>

                </tr>

                <tr>

                  <th><span class="red"></span>AppID：</th>

                  <td><input type="text" name="appid" value="" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，可以不填 </td>

                </tr>

                <tr>

                  <th><span class="red"></span>AppSecret：</th>

                  <td><input type="text" name="appsecret" value="" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，可以不填 </td>

                </tr>

                

                <tr>

                  <th><span class="red"></span>微信号类型：</th>

                  <td><select id="winxintype" name="winxintype">                  

                  <option value="1">订阅号</option>

                  <option value="2">服务号</option>

                  <option value="3">高级服务号</option>

                  </select>　高级服务号是指每年向微信官方交300元认证费的公众号 </td>

                </tr>

                  <tr style="display:none">

                  <th><span class="red">*</span>头像地址（url）:</th>

                  <td><input class="px" name="headerpic" value="<?php echo RES;?>/images/portrait.jpg" size="60">请填写图片外链地址 <a onclick="alert('请填写以jpg,png,gif,bmp等后缀的图文')" target="_blank"><img src="<?php echo RES;?>/images/help.png" class="vm helpimg" title="帮助"></a></td>

                </tr>

                 <tr style="display:none">

                  <th><span class="red">*</span>TOKEN</th>

                  <td><input type="text" name="token" value="<?php echo ($tokenvalue); ?>" class="px" tabindex="1" size="40">(填写你的公众号)例：pigcmsweixin,请勿填写文,或者其它特殊字符，此处token和腾讯平台必须一致!</td>

                </tr>

                

                <tr style="display:none">

                  <th><span class="red">*</span>地区</th>

                  <td>

                  <input type="text" class="px" id="province" value="p" name="province" tabindex="1" size="20"> 省  <input id="city" value="c" type="text" name="city" class="px" tabindex="1" value="c" size="20"> 市

               （此处关联公交等本地化查询）

                  </td>

                </tr>

                <tr style="display:none">

                  <th><span class="red">*</span>公众号邮箱：</th>

                  <td><input type="text" required class="px" tabindex="1" value="<?php echo ($email); ?>" name="qq" size="25"></td>

                </tr>

                 <tr style="display:none">

                  <th><span class="red">*</span>粉丝数：</th>

                  <td><input type="text" required name="wxfans" value="0" class="px" tabindex="1" size="25"></td>

                </tr>

             

                <tr style="display:none">

                  <th>类型：</th>

                  <td><select id="type" name="type">                  

                  <option value="1,情感">情感</option>

                  <option value="2,数码">数码</option>

                  <option value="3,娱乐">娱乐</option>

                  <option value="4,IT">IT</option>

                  <option value="5,数码">数码</option>

                  <option value="6,购物">购物</option>

                  <option value="7,生活">生活</option>

                  <option value="8,服务" selected>服务</option>

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
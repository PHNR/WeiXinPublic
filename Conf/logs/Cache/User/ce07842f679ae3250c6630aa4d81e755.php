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




<script type="text/javascript" src="/tpl/static/audioplayer/inc/jquery.jplayer.min.js"></script>

    <script type="text/javascript" src="/tpl/static/audioplayer/inc/jquery.mb.miniPlayer.js"></script>

    <link rel="stylesheet" type="text/css" href="/tpl/static/audioplayer/css/miniplayer.css" title="style" media="screen"/>

    <script type="text/javascript">

        $(function () {



            $(".audio").mb_miniPlayer({

                width: 200,

                inLine: false,

                onEnd: playNext

            });



            function playNext(player) {

                var players = $(".audio");

                document.playerIDX = player.idx + 1 <= players.length - 1 ? player.idx + 1 : 0;

                players.eq(document.playerIDX).mb_miniPlayer_play();

            }

        });

    </script>

    

<div class="content">



<div class="cLineB">

  <h4>首页回复配置 </h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a>

 </div>

         

    <div class="msgWrap bgfc">

	  <form class="form" method="post" action="" enctype="multipart/form-data">	 

		<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">

			<tbody>

				<tr>

				  <th valign="top"><span class="red">*</span>关键词：</th>

				  <td>

					<input type="text" name="keyword" value="<?php echo ($home["keyword"]); ?>" class="px" style="width:550px;"><span class="red"><br/>输入：首页 或者 home —— 当用户输入关键词时，将会触发此回复。</span></td>

				</tr>

				<tr>

					<th width="120">回复标题：</th>

					<td><input type="text" name="title" value="<?php echo ($home["title"]); ?>" class="px" style="width:550px;"></td>

				</tr>

				<tr>

					<th width="120">内容介绍：</th>

					<td><textarea style="width:560px;height:75px" name="info" id="info" class="px"><?php echo ($home["info"]); ?></textarea><br/>最多填写120个字</td>

				</tr>

				<tr>

					<th>回复图片：</th>

					<td><input type="text" name="picurl" id="picurl" value="<?php echo ($home["picurl"]); ?>" class="px" style="width:550px;"> &nbsp; <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('picurl',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> &nbsp; <a href="###" onclick="viewImg('picurl')" class="btnGrayS vm">预览</a></td>

				</tr>

				<tr>

					<th>3G网站背景：</th>

					<td><input type="hidden" name="homeurl" id="homeurl" value="<?php echo ($home["homeurl"]); ?>" class="px" style="width:550px;"><a href="?g=User&m=Flash&a=index&token=<?php echo ($token); ?>&tip=2">请在首页背景图中设置</a></td>

				</tr>

				<tr>

					<th>背景音乐：</th>

					<td>

					<table><tr><?php if($home["musicurl"] != ''): ?><td><a style="width:120px;float:left" id="musicurl_src" class="audio {skin:'blue'}" href="<?php echo ($home["musicurl"]); ?>">音乐播放</a></td><?php endif; ?><td> <input class="px" name="musicurl" value="<?php echo ($home["musicurl"]); ?>" id="musicurl" style="width:200px;float:left" onchange="$('#musicurl_src').attr('href'),this.value"> &nbsp; <a href="###" onclick="chooseFile('musicurl','music')" class="a_upload">选择</a></td></tr></table>

					 </td>

				</tr>
                <tr>
                <th>开场动画：</th>
                <td><select name="animation" id="select_animation" class="input-medium">
											<option value="0"  <?php if(($home["animation"]) == "0"): ?>selected="selected"<?php endif; ?> >关闭开场动画</option>
											<option value="6"  <?php if(($home["animation"]) == "6"): ?>selected="selected"<?php endif; ?>>宝马动画</option>
											<option value="4"  <?php if(($home["animation"]) == "4"): ?>selected="selected"<?php endif; ?>>左右展开</option>
											<option value="5"  <?php if(($home["animation"]) == "5"): ?>selected="selected"<?php endif; ?>>上下展开</option>
 											<option value="1"   <?php if(($home["animation"]) == "1"): ?>selected="selected"<?php endif; ?>>倒计时</option>
 											<option value="2"    <?php if(($home["animation"]) == "2"): ?>selected="selected"<?php endif; ?>>倒计时-左右展开</option>
 											<option value="3"    <?php if(($home["animation"]) == "3"): ?>selected="selected"<?php endif; ?>>倒计时-上下展开</option>
										</select></td>
                
                
                
                
                </tr>

				<tr>

					<th>公司Logo：</th>

					<td><input type="text" name="logo" id="logo" value="<?php echo ($home["logo"]); ?>" class="px" style="width:550px;"> &nbsp; <a href="###" onclick="upyunPicUpload('logo',1500,1000,'<?php echo ($token); ?>')" class="a_upload">上传</a> &nbsp; <a href="###" onclick="viewImg('logo')" class="btnGrayS vm">预览</a><br/> </td>

				</tr>
                <tr>

					<th>电话：</th>

					<td><input type="text" name="dianhua" id="dianhua" value="<?php echo ($home["dianhua"]); ?>" class="px" style="width:550px;"> </td>

				</tr>
                <tr>
                <th>智能跳转：</th>

					<td>  

                                                      

<textarea id="smart_branch" name="smart_branch"  style="width:560px;height:75px;cursor: not-allowed;background-color: #EEE;" height:75px"  class="px" rows="5" readonly  disabled="disabled">

<script>

	var pc_style = ""

	var browser = {

	versions: function () {

	var u = navigator.userAgent, app = navigator.appVersion;

	return {

	trident: u.indexOf('Trident') > -1,

	presto: u.indexOf('Presto') > -1,

	webKit: u.indexOf('AppleWebKit') > -1,

	gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,

	mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/) && u.indexOf('QIHU') && u.indexOf('Chrome') < 0,

	ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),

	android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,

	iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1,

	iPad: u.indexOf('iPad') > -1,

	webApp: u.indexOf('Safari') == -1,

	ua: u

	};

	}(),

	language: (navigator.browserLanguage || navigator.language).toLowerCase()

	}

	if (browser.versions.mobile && !browser.versions.iPad) {

	this.location = "<?php echo C('site_url');?>/index.php?g=Wap&m=Index&a=index&token=<?php echo ($token); ?>&wecha_id={wechat_id}";

	}

</script>

</textarea>   

                                        

  <br/>

请将此段代码复制到您<strong class="red">PC网站</strong>&lt;/head&gt;&lt;body&gt;之间,这样手机访问PC网站的用户就会自动跳转到微官网 

   </td>
                </tr>

				<tr>

					<th>第三方接口：</th>

					<td><input type="text" name="apiurl" value="<?php echo ($home["apiurl"]); ?>" class="px" style="width:550px;"><br/> 只适用于引用第三方3G网站的链接</td>

				</tr>

				<th>&nbsp;</th>

					<td>

						<button type="submit" name="button" class="btnGreen">保存</button> &nbsp;

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
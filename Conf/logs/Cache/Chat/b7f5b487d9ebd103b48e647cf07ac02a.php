<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf8">
	<meta name="keywords" content="aaa">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
	<title><?php echo ($userInfo["nickname"]); ?></title>	
	<script src="/tpl/User/default/common/js/jquery.js"></script>	
	<script>
	function jsbq(n){
		$('#textInput').val($('#textInput').val()+'['+n+']');
		$('#qq').hide('slow');
		}
		
	
	function ajaxMain(){
		$time=$('#chat_scorll').attr('time');
		$pic=$('#chat_scorll').attr('img');
		$.post("<?php echo U('Index/ajaxMain');?>",{time:$time,openid:'<?php echo ($userInfo["openid"]); ?>'},
		function(data){
			$('#textNow').append(data);
			if(data==1) return false;
			$objct=eval(data);
			  $($objct).each(function(d){
				val=$objct[d];
$string='<div class="chatItem you"><div class="chatItemContent"> <img class="avatar" src="'+$pic+'"/> <div class="cloud cloudText"> <div class="cloudPannel" style=""> <div class="sendStatus"></div><div class="cloudBody"> <div class="cloudContent"><pre style="white-space:pre-wrap">'+val.keyword+'</pre></div>  </div> <div class="cloudArrow "></div></div></div></div></div>';
				$('#chat_chatmsglist').append($string);
				$('#chat_scorll').attr('time',val.enddate)
				$('#chat_scorll').scrollTop($('#chat_scorll').children().height()+100);
			});
	   });
	}
	$(function(){
		
		setInterval("ajaxMain()",3000);
		$('#chat_scorll').scrollTop($('#chat_scorll').children().height());
		$("#sendEmojiIcon").click( function () {
			if($('#qq').css('display')=='none'){
				$('#qq').show();
			}else{
				$('#qq').hide();
			}
		});
	    $("#close").click( function () { 
			$("#popupcontactprofile").hide();
			
		});
		$(".chatItemContent").click( function () { 
			$("#popupcontactprofile").show();
			
		});
		
		
		
		$("#sendmsg").click( function () {
			$a=$('#textInput').val(); 
			$.post("<?php echo U('Index/send',array('openid'=>htmlspecialchars($_GET['openid'])));?>",
				{ keyword: $a },
		   function(data){
				if(data==1){
					$str='<div class="chatItem me"> <div class="chatItemContent"><img class="avatar" src="/tpl/Chat/default/style/css/img/avatar_default17ced3.png"><div class="cloud cloudText"><div class="cloudPannel"> <div class="sendStatus"></div><div class="cloudBody"> <div class="cloudContent">    <pre style="white-space:pre-wrap">'+$a+'</pre>  </div>  </div><div class="cloudArrow "></div>  </div>  </div>  </div></div>';
					
					$('#chat_chatmsglist').append($str);
					$('#chat_scorll').scrollTop($('#chat_scorll').children().height()+100);
					$('#textInput').val('');
				}else{
					alert('非48小时请求过的客户');
					$('#textInput').val('');
				}
		   });
		   
		});
	});  


	</script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/tpl/Chat/default/style/css/css.css">
<div class="content">
<div id="chat" class="chatPanel normalPanel" ctrl="1" style="padding: 0 0 30px 0;">
<div class="chatMainPanel" id="chatMainPanel">
					
					<div class="chatTitle">
						<div class="chatNameWrap">
							<p class="chatName" id="messagePanelTitle">正在与 <span color='red'>[</span><?php echo (($userInfo["nickname"])?($userInfo["nickname"]):'新客服'); ?><span color='red'>]</span>进行会话</p>
						</div>
					</div>

					<div class="chatScorll" id="chat_scorll" time='<?php echo ($endtime); ?>' img="<?php if($userInfo['headimgurl'] != ''): ?>index.php?g=Chat&m=Index&a=showExternalPic&url=<?php echo ($userInfo["headimgurl"]); else: ?>/tpl/Chat/default/style/css/img/avatar_default17ced3.png<?php endif; ?>" style="height: 400px; overflow-y: hidden; position: relative;overflow: hidden;overflow-y: auto;" >
						<div id="chat_chatmsglist"  class="chatContent" style="top: 0; position: absolute;">                        
							<?php if(is_array($msgList)): $i = 0; $__LIST__ = $msgList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msgList): $mod = ($i % 2 );++$i; if($msgList['type'] == 2): ?><div class="chatItem me"> 
								<div class="chatItemContent"> 
									<img class="avatar" src="/tpl/Chat/default/style/css/img/avatar_default17ced3.png" onerror="reLoadImg(this)" un="avatar_yixiaoweb" title="we v" click="showProfile"> 
									<div class="cloud cloudText">
										<div class="cloudPannel" style=""> 
											<div class="sendStatus">   </div> 
											<div class="cloudBody"> 
												<div class="cloudContent">                                  
													<pre style="white-space:pre-wrap"><?php echo ($msgList["keyword"]); ?></pre>  
												</div>  
											</div>
											<div class="cloudArrow "></div>  
										</div>  
									</div>  
								</div>  
							</div>
							<?php else: ?>						
							<div class="chatItem you">
								<div class="chatItemContent"> 
									<img class="avatar" src="<?php if($userInfo['headimgurl'] != ''): ?>index.php?g=Chat&m=Index&a=showExternalPic&url=<?php echo ($userInfo["headimgurl"]); else: ?>/tpl/Chat/default/style/css/img/avatar_default17ced3.png<?php endif; ?>"/> 
									<div class="cloud cloudText"> 
										<div class="cloudPannel" style=""> 
											<div class="sendStatus">   </div> 
											<div class="cloudBody"> 
												<div class="cloudContent">                                  
													<pre style="white-space:pre-wrap"><?php echo ($msgList["keyword"]); ?></pre>  
												</div>  
											</div> 
											<div class="cloudArrow "></div> 
										</div> 
									</div> 
								</div>  
							</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>							
						</div>
						<div class="scrollbarBox" style="position: absolute; right: 0px; top: 0px; height: 100%;">
							<div class="scrollbar" style="position: absolute; right: 0px; top: 0px; height: 186px; opacity: 0; display: none;"></div>
						</div>
					</div>
					<div id="chat_editor" class="chatOperator lightBorder">
						<style>
							.biaoqing{
								position: relative; 
								display:none; 
								height:25px; 
								width:60px;
								position: absolute;
								z-index: 0;
								background-color: #FFF;
								border: 1px solid #9FA0A0;
								bottom: 4px;
								margin-bottom: 249px;
								left: 5px;
							
							}
							.biaoqing span{
								display: block;
								line-height: 25px;
								text-indent: 20px;
								cursor:pointer
							}
							.biaoqing:hover ul{ 
								display:block
							}
							.biaoqing ul{ 
								display:block; 
								background-color: #FFFFFF;
								border: 1px solid #CCCCCC;box-shadow:0px 1px 3px #ccc;
								
								padding: 5px;
								position: absolute;
								width: 450px; 
							}
							.biaoqing ul li{
								border: 1px solid #dfe6f6;
								height:24px;
								width: 24px;
								display:block;
								padding:2px;
								float:left; 
								cursor:pointer
							}
							.biaoqing ul li:hover{ 
								border: 1px solid #336699;
							}
					</style>
				
						<div class="inputArea">
							<div class="attach">
									
						<ul>
							<li class="biaoqing" id="qq">
								<ul>
									<li><img src="./tpl/User/default/common/images/face/0.gif" alt="微笑" onclick="jsbq('微笑')"></li>
									<li><img src="./tpl/User/default/common/images/face/1.gif" alt="撇嘴" onclick="jsbq('撇嘴')"></li>
									<li><img src="./tpl/User/default/common/images/face/2.gif" alt="色" onclick="jsbq('色')"></li>
									<li><img src="./tpl/User/default/common/images/face/3.gif" alt="发呆" onclick="jsbq('发呆')"></li>
									<li><img src="./tpl/User/default/common/images/face/4.gif" alt="得意" onclick="jsbq('得意')"></li>
									<li><img src="./tpl/User/default/common/images/face/5.gif" alt="流泪" onclick="jsbq('流泪')"></li>
									<li><img src="./tpl/User/default/common/images/face/6.gif" alt="害羞" onclick="jsbq('害羞')"></li>
									<li><img src="./tpl/User/default/common/images/face/7.gif" alt="闭嘴" onclick="jsbq('闭嘴')"></li>
									<li><img src="./tpl/User/default/common/images/face/8.gif" alt="睡" onclick="jsbq('睡')"></li>
									<li><img src="./tpl/User/default/common/images/face/9.gif" alt="大哭" onclick="jsbq('大哭')"></li>
									<li><img src="./tpl/User/default/common/images/face/10.gif" alt="尴尬" onclick="jsbq('尴尬')"></li>
									<li><img src="./tpl/User/default/common/images/face/11.gif" alt="发怒" onclick="jsbq('发怒')"></li>
									<li><img src="./tpl/User/default/common/images/face/12.gif" alt="调皮" onclick="jsbq('调皮')"></li>
									<li><img src="./tpl/User/default/common/images/face/13.gif" alt="呲牙" onclick="jsbq('呲牙')"></li>
									<li><img src="./tpl/User/default/common/images/face/14.gif" alt="惊讶" onclick="jsbq('惊讶')"></li>
									<li><img src="./tpl/User/default/common/images/face/15.gif" alt="难过" onclick="jsbq('难过')"></li>
									<li><img src="./tpl/User/default/common/images/face/16.gif" alt="酷" onclick="jsbq('酷')"></li>
									<li><img src="./tpl/User/default/common/images/face/17.gif" alt="冷汗" onclick="jsbq('冷汗')"></li>
									<li><img src="./tpl/User/default/common/images/face/18.gif" alt="抓狂" onclick="jsbq('抓狂')"></li>
									<li><img src="./tpl/User/default/common/images/face/19.gif" alt="吐" onclick="jsbq('吐')"></li>
									<li><img src="./tpl/User/default/common/images/face/20.gif" alt="偷笑" onclick="jsbq('偷笑')"></li>
									<li><img src="./tpl/User/default/common/images/face/21.gif" alt="可爱" onclick="jsbq('可爱')"></li>
									<li><img src="./tpl/User/default/common/images/face/22.gif" alt="白眼" onclick="jsbq('白眼')"></li>
									<li><img src="./tpl/User/default/common/images/face/23.gif" alt="傲慢" onclick="jsbq('傲慢')"></li>
									<li><img src="./tpl/User/default/common/images/face/24.gif" alt="饥饿" onclick="jsbq('饥饿')"></li>
									<li><img src="./tpl/User/default/common/images/face/25.gif" alt="困" onclick="jsbq('困')"></li>
									<li><img src="./tpl/User/default/common/images/face/26.gif" alt="惊恐" onclick="jsbq('惊恐')"></li>
									<li><img src="./tpl/User/default/common/images/face/27.gif" alt="流汗" onclick="jsbq('流汗')"></li>
									<li><img src="./tpl/User/default/common/images/face/28.gif" alt="憨笑" onclick="jsbq('憨笑')"></li>
									<li><img src="./tpl/User/default/common/images/face/29.gif" alt="大兵" onclick="jsbq('大兵')"></li>
									<li><img src="./tpl/User/default/common/images/face/30.gif" alt="奋斗" onclick="jsbq('奋斗')"></li>
									<li><img src="./tpl/User/default/common/images/face/31.gif" alt="咒骂" onclick="jsbq('咒骂')"></li>
									<li><img src="./tpl/User/default/common/images/face/32.gif" alt="疑问" onclick="jsbq('疑问')"></li>
									<li><img src="./tpl/User/default/common/images/face/33.gif" alt="嘘" onclick="jsbq('嘘')"></li>
									<li><img src="./tpl/User/default/common/images/face/34.gif" alt="晕" onclick="jsbq('晕')"></li>
									<li><img src="./tpl/User/default/common/images/face/35.gif" alt="折磨" onclick="jsbq('折磨')"></li>
									<li><img src="./tpl/User/default/common/images/face/36.gif" alt="衰" onclick="jsbq('衰')"></li>
									<li><img src="./tpl/User/default/common/images/face/37.gif" alt="骷髅" onclick="jsbq('骷髅')"></li>
									<li><img src="./tpl/User/default/common/images/face/38.gif" alt="敲打" onclick="jsbq('敲打')"></li>
									<li><img src="./tpl/User/default/common/images/face/39.gif" alt="再见" onclick="jsbq('再见')"></li>
									<li><img src="./tpl/User/default/common/images/face/40.gif" alt="擦汗" onclick="jsbq('擦汗')"></li>
									<li><img src="./tpl/User/default/common/images/face/41.gif" alt="抠鼻" onclick="jsbq('抠鼻')"></li>
									<li><img src="./tpl/User/default/common/images/face/42.gif" alt="鼓掌" onclick="jsbq('鼓掌')"></li>
									<li><img src="./tpl/User/default/common/images/face/43.gif" alt="糗大了" onclick="jsbq('糗大了')"></li>
									<li><img src="./tpl/User/default/common/images/face/44.gif" alt="坏笑" onclick="jsbq('坏笑')"></li>
									<li><img src="./tpl/User/default/common/images/face/45.gif" alt="左哼哼" onclick="jsbq('左哼哼')"></li>
									<li><img src="./tpl/User/default/common/images/face/46.gif" alt="右哼哼" onclick="jsbq('右哼哼')"></li>
									<li><img src="./tpl/User/default/common/images/face/47.gif" alt="哈欠" onclick="jsbq('哈欠')"></li>
									<li><img src="./tpl/User/default/common/images/face/48.gif" alt="鄙视" onclick="jsbq('鄙视')"></li>
									<li><img src="./tpl/User/default/common/images/face/49.gif" alt="委屈" onclick="jsbq('委屈')"></li>
									<li><img src="./tpl/User/default/common/images/face/50.gif" alt="快哭了" onclick="jsbq('快哭了')"></li>
									<li><img src="./tpl/User/default/common/images/face/51.gif" alt="阴险" onclick="jsbq('阴险')"></li>
									<li><img src="./tpl/User/default/common/images/face/52.gif" alt="亲亲" onclick="jsbq('亲亲')"></li>
									<li><img src="./tpl/User/default/common/images/face/53.gif" alt="吓" onclick="jsbq('吓')"></li>
									<li><img src="./tpl/User/default/common/images/face/54.gif" alt="可怜" onclick="jsbq('可怜')"></li>
									<li><img src="./tpl/User/default/common/images/face/55.gif" alt="菜刀" onclick="jsbq('菜刀')"></li>
									<li><img src="./tpl/User/default/common/images/face/56.gif" alt="西瓜" onclick="jsbq('西瓜')"></li>
									<li><img src="./tpl/User/default/common/images/face/57.gif" alt="啤酒" onclick="jsbq('啤酒')"></li>
									<li><img src="./tpl/User/default/common/images/face/58.gif" alt="篮球" onclick="jsbq('篮球')"></li>
									<li><img src="./tpl/User/default/common/images/face/59.gif" alt="乒乓" onclick="jsbq('乒乓')"></li>
									<li><img src="./tpl/User/default/common/images/face/60.gif" alt="咖啡" onclick="jsbq('咖啡')"></li>
									<li><img src="./tpl/User/default/common/images/face/61.gif" alt="饭" onclick="jsbq('饭')"></li>
									<li><img src="./tpl/User/default/common/images/face/62.gif" alt="猪头" onclick="jsbq('猪头')"></li>
									<li><img src="./tpl/User/default/common/images/face/63.gif" alt="玫瑰" onclick="jsbq('玫瑰')"></li>
									<li><img src="./tpl/User/default/common/images/face/64.gif" alt="凋谢" onclick="jsbq('凋谢')"></li>
									<li><img src="./tpl/User/default/common/images/face/65.gif" alt="示爱" onclick="jsbq('示爱')"></li>
									<li><img src="./tpl/User/default/common/images/face/66.gif" alt="爱心" onclick="jsbq('爱心')"></li>
									<li><img src="./tpl/User/default/common/images/face/67.gif" alt="心碎" onclick="jsbq('心碎')"></li>
									<li><img src="./tpl/User/default/common/images/face/68.gif" alt="蛋糕" onclick="jsbq('蛋糕')"></li>
									<li><img src="./tpl/User/default/common/images/face/69.gif" alt="闪电" onclick="jsbq('闪电')"></li>
									<li><img src="./tpl/User/default/common/images/face/70.gif" alt="炸弹" onclick="jsbq('炸弹')"></li>
									<li><img src="./tpl/User/default/common/images/face/71.gif" alt="刀" onclick="jsbq('刀')"></li>
									<li><img src="./tpl/User/default/common/images/face/72.gif" alt="足球" onclick="jsbq('足球')"></li>
									<li><img src="./tpl/User/default/common/images/face/73.gif" alt="瓢虫" onclick="jsbq('瓢虫')"></li>
									<li><img src="./tpl/User/default/common/images/face/74.gif" alt="便便" onclick="jsbq('便便')"></li>
									<li><img src="./tpl/User/default/common/images/face/75.gif" alt="月亮" onclick="jsbq('月亮')"></li>
									<li><img src="./tpl/User/default/common/images/face/76.gif" alt="太阳" onclick="jsbq('太阳')"></li>
									<li><img src="./tpl/User/default/common/images/face/77.gif" alt="礼物" onclick="jsbq('礼物')"></li>
									<li><img src="./tpl/User/default/common/images/face/78.gif" alt="拥抱" onclick="jsbq('拥抱')"></li>
									<li><img src="./tpl/User/default/common/images/face/79.gif" alt="强" onclick="jsbq('强')"></li>
									<li><img src="./tpl/User/default/common/images/face/80.gif" alt="弱" onclick="jsbq('弱')"></li>
									<li><img src="./tpl/User/default/common/images/face/81.gif" alt="握手" onclick="jsbq('握手')"></li>
									<li><img src="./tpl/User/default/common/images/face/82.gif" alt="胜利" onclick="jsbq('胜利')"></li>
									<li><img src="./tpl/User/default/common/images/face/83.gif" alt="抱拳" onclick="jsbq('抱拳')"></li>
									<li><img src="./tpl/User/default/common/images/face/84.gif" alt="勾引" onclick="jsbq('勾引')"></li>
									<li><img src="./tpl/User/default/common/images/face/85.gif" alt="拳头" onclick="jsbq('拳头')"></li>
									<li><img src="./tpl/User/default/common/images/face/86.gif" alt="差劲" onclick="jsbq('差劲')"></li>
									<li><img src="./tpl/User/default/common/images/face/87.gif" alt="爱你" onclick="jsbq('爱你')"></li>
									<li><img src="./tpl/User/default/common/images/face/88.gif" alt="NO" onclick="jsbq('NO')"></li>
									<li><img src="./tpl/User/default/common/images/face/89.gif" alt="OK" onclick="jsbq('OK')"></li>
									<li><img src="./tpl/User/default/common/images/face/90.gif" alt="爱情" onclick="jsbq('爱情')"></li>
									<li><img src="./tpl/User/default/common/images/face/91.gif" alt="飞吻" onclick="jsbq('飞吻')"></li>
									<li><img src="./tpl/User/default/common/images/face/92.gif" alt="跳跳" onclick="jsbq('跳跳')"></li>
									<li><img src="./tpl/User/default/common/images/face/93.gif" alt="发抖" onclick="jsbq('发抖')"></li>
									<li><img src="./tpl/User/default/common/images/face/94.gif" alt="怄火" onclick="jsbq('怄火')"></li>
									<li><img src="./tpl/User/default/common/images/face/95.gif" alt="转圈" onclick="jsbq('转圈')"></li>
									<li><img src="./tpl/User/default/common/images/face/96.gif" alt="磕头" onclick="jsbq('磕头')"></li>
									<li><img src="./tpl/User/default/common/images/face/97.gif" alt="回头" onclick="jsbq('回头')"></li>
									<li><img src="./tpl/User/default/common/images/face/98.gif" alt="跳绳" onclick="jsbq('跳绳')"></li>
									<li><img src="./tpl/User/default/common/images/face/99.gif" alt="挥手" onclick="jsbq('挥手')"></li>
									<li><img src="./tpl/User/default/common/images/face/100.gif" alt="激动" onclick="jsbq('激动')"></li>
									<li><img src="./tpl/User/default/common/images/face/101.gif" alt="街舞" onclick="jsbq('街舞')"></li>
									<li><img src="./tpl/User/default/common/images/face/102.gif" alt="献吻" onclick="jsbq('献吻')"></li>
									<li><img src="./tpl/User/default/common/images/face/103.gif" alt="左太极" onclick="jsbq('左太极')"></li>
								</ul>
							</li>
						</ul>
					
								<a href="javascript:;" id="sendEmojiIcon" class="func expression"></a>
								<a href="javascript:;" id="screenSnapIcon" class="func screensnap" click="screenSnap" title="aa" style=""></a>
								<form class="left" id="sendFileIcon" url="" enctype="multipart/form-data" method="post" target="actionFrame" style="">
									<input type="hidden" name="uploadmediarequest" value="{BaseRequest:{}}">
									<a href="javascript:;" class="func file" style="position:relative;display:block;margin:0;" title="文件图片" id="uploadFileContainer">
										<div style="position: absolute;top:0;left:0; width: 100%; height: 100%;overflow:hidden;filter:alpha(opacity=0);opacity:0;cursor:pointer;">
										<div>
											<input change="sendAppMsg@form" type="file" name="filename" style="width:100%;height:100%;margin:0;cursor:pointer;font-size:100px;"></div>
										</div>
									</a>
								</form>
															
							</div>
							<textarea type="text" id="textInput" class="chatInput lightBorder"></textarea>
							<a href="javascript:;" class="chatSend" id='sendmsg'><b>发送</b></a>
							<div id="recordInput" class="recordInput chatInput" style="display:none;"></div>
							<div class="clr"></div>
							
						<textarea type="text" id="textInput" class="chatInput lightBorder" style="visibility: hidden; position: absolute; left: -1000px; padding: 0px 10px; width: 403px; overflow: hidden;"></textarea></div>
						<div class="dragUploaderPanel" id="dragPanel" style="display:none;">
							<div intxt="fadsfa" outtxt="faadsf" style="text-align:center;">
							</div>
						</div>
						<div class="emojiPanel" style="display:none;" id="emojiPanel"></div>
					</div>
				</div>
				<!--change main panel end-->
			</div>
			</div>
			
			
			</div>
			</div>
		
			
<script type="text/javascript">
$(document).ready(function(){
	$(".nav-header").mouseover(function(){
		$(this).css('background-color','#126CA9');
	}).mouseout(function(){
		$(this).css('background-color','#2f8bc9');
	}).click(function(){
		$(this).toggleClass('nav-header-current');
		$(this).next('.ckit').slideToggle();
	})
});

$(document).ready( function(){ 
$('.checkall').click(function(){

$('.checkitem').each(function(){
$(this).attr('checked',$('.checkall').attr('checked'));
});
});

});
  </script>
<div id="popupcontactprofile" class="complexDialog" style="position: absolute;z-index: 1002;left: 100px;top: 107px;display: none;opacity: 1;" ctrl="1">  
	<div class="window" id="popupWindow" style=""> 
		<div class="header"> 
			<p>详细资料</p> <span class="closeIconPanel right"> <a href="javascript:;" class="closeIcon" id="close"></a> </span> 
		</div> 
		<div class="content"> 
			<div class="friendInfo"> 
				<div class="profileContainer" xmlns="http://www.w3.org/1999/html">
					<div class="loadingMaskWind" style="display:none;z-index:1000;"></div>
					<div class="section">
						<div class="personalInfo">
							<img class="friendImg left" src="<?php if($userInfo['headimgurl'] != ''): ?>index.php?g=Chat&m=Index&a=showExternalPic&url=<?php echo ($userInfo["headimgurl"]); else: ?>/tpl/Chat/default/style/css/img/avatar_default17ced3.png<?php endif; ?>" width="100"/>
							<div class="friendMesg left">
								<div><span class="left nickname"><?php echo (($userInfo["nickname"])?($userInfo["nickname"]):'新客服'); ?></span>
								<span class="genderIcon maleIcon left"></span>
								<div class="clr"></div></div>
								<p>微信号：<span>zhuge_pig</span></p>                                                            
								<p style="display:none;" class="remarkSection">备注名：<a href="javascript:;" click="editRemarkName"><span class="remarkname"></span><span class="editRemarkNameIcon show" title="修改"></span></a><input class="modifyInput" type="text" style="display:none;" nickname="Nerking"></p>                 
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="section">
						<div class="physicalInfor"><p class="tr firstTr"><span class="tdLeft left">地区</span><span class="tdRight left">安徽&nbsp;合肥	</span></p><p class="tr"><span class="tdLeft left">个性签名</span><span class="tdRight left">一切都是命运'我却不信</span></p></div>
					</div>
					<div class="section" style="display:none;">
						<div class="verification"><p>对方启用了朋友验证，请输入你的验证申请<br>对方通过后你才能添加其为朋友</p><input class="inputVerifi" type="text" keyup="enterRequest@.section"><div class="operBtn"><a class="left btnBrown" href="javascript:;" un="ok"><input type="button" value="发送" click="sendRequest@.section" addsucctips="发送成功" adderrtips="发送失败"></a><a class="btnGray right" href="javascript:;" un="cancel"><input type="button" value="取消" click="cancelRequest@.section"></a><div class="clr"></div></div>
						</div>
					</div>
					<div class="section">
						<div class="nextStep"><a class=" btnBrown" href="javascript:;"><input type="button" value="发消息" click="enterSession" username="yixiaoweb"></a></div>
					</div>
				</div>
				<div class="hdAvatarContainer" style="display:none;"><img><a href="javascript:;" click="returnToProfile@.hdAvatarContainer">back</a><a></a></div> 
			</div> 
		</div> 
	</div> 
</div>
<div style="height:200px" id="textNow">

</div>
			</body>
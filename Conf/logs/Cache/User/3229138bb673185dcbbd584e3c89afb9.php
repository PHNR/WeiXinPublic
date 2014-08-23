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
         
          <div class="cLineB">
              <h4 class="left">自定义回复信息</h4>
              <div class="clr"></div>
          </div>
          <div class="cLine">
            <div class="pageNavigator left">
  <a href='<?php echo U("Voiceresponse/add");?>' title='新增语音回复' class='btnGrayS vm bigbtn'><img src="<?php echo RES;?>/images/music.png" class="vm" />新增语音回复</a>
            </div>
          
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
<TH class="select">选择</TH>
                    <TH class="keywords">关键词</TH>
<TH class="keywords">标题</TH>
<TH class="answer">试听</TH>
                    
<TH class="time">时间</TH>
<TH class="edit norightborder">操作</TH>
                </TR>
              </THEAD>
              <TBODY>
                <TR></TR>
				<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                  <td>  <input type="checkbox" name="del_id[]" value="<?php echo ($vo["id"]); ?>" class="checkitem"></td>
                  <td><?php echo ($vo["keyword"]); ?></td>
                  <td><?php echo ($vo["title"]); ?></td>
                  <td><div class="audiojs  error playing" classname="audiojs" id="audiojs_wrapper0"><audio src="http://stream13.qqmusic.qq.com/31319431.mp3" preload="auto"></audio>          <div class="play-pause">             <p class="play"></p>             <p class="pause"></p>             <p class="loading"></p>             <p class="error"></p>           </div>           <div class="scrubber">             <div class="progress" style="width: 0px;"></div>             <div class="loaded"></div>           </div>           <div class="time">             <em class="played">00:00</em>/<strong class="duration">00:00</strong>           </div>           <div class="error-message">Error loading: "http://stream13.qqmusic.qq.com/31319431.mp3"</div></div></td>
                
                    <td><?php echo date('Y-m-d',$vo['uptatetime']); ?></td>
                   <td class="norightborder"> <a href="<?php echo U('Voiceresponse/edit',array('id'=>$vo['id']));?>" title="编辑图文自定义回复">编辑</a>  <a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Voiceresponse/del',array('id'=>$vo['id']));?>');">删除</a></td>
          
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                 <tr>
                <td colspan="6" class="edit norightborder"> <input type="checkbox" id="chkall" name="chkall" onclick="checkAll(this.form, 'del_id')"><label for="checkallBottom">全选</label>
<input type="radio" name="optype" checked="checked" value="1"   >
删除


          <a href="JavaScript:void(0);" class="btnGreens" onclick="if(confirm('您确定操作吗?')){checkvotethis();}"><span>确定</span></a>
</td>
                </tr>
              </TBODY>
            </TABLE>
           <script>
   function checkvotethis() {
var aa=document.getElementsByName('del_id[]');
var mnum = aa.length;
j=0;
for(i=0;i<mnum;i++){
if(aa[i].checked){
j++;
}
}
if(j>0) {
document.getElementById('info').submit();
} else {
alert('未选中任何文章或回复！')
}
}

   </script>
          </div>
            


 
 
          <div class="cLine">
            <div class="pageNavigator right">
                 <div class="pages"></div>
              </div>
            <div class="clr"></div>
          </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}


  </script>
  <!--底部-->
  	</div>
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
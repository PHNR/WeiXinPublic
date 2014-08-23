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
              <h4 class="left">幸运大转盘活动信息 (<?php echo ($count); ?>) 条<span class="FAQ">你本月有 <?php echo ($group["activitynum"]); ?> 次机会可免收活动创建费，已经使用了 <?php echo ($activitynum); ?> 次机会!</span></h4>
                  <div class="searchbar right">  <form method="get"  action="index.php"  >
                  <input type="text" id="msgSearchInput" class="txt left" placeholder="输入关键词搜索"  name="keyz" value="">
                  <input type="hidden" name="ac" value="activity-lottery-list"  />
                  <input type="hidden" name="id" value="9878"  />
                  <input type="hidden" name="wxid" value="gh_423dwjkewad"  />
                 
                  <input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
                  </form>
                  </div>
              <div class="clr"></div>
          </div>
          <div class="cLine">
            <div class="pageNavigator left">
			<a href='/index.php?g=User&m=Lottery&a=add' title='新增幸运大转盘活动' class='btnGrayS vm bigbtn'><img src="<?php echo RES;?>/images/img/activity-lottery.png" class="vm" />新增幸运大转盘活动</a>
              
            </div>
          
            <div class="clr"></div>
          </div>
          <div class="msgWrap">
          <form method="post"  action="" id="info" >
          <input name="delall"  type="hidden" value="" />
           <input name="wxid"  type="hidden" value="" />
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
<TH class="select">选择</TH>
<TH>活动名称</TH>
<TH>关键字</TH>
<TH style="display:none">有效参与人数</TH>
<TH style="display:none">总浏览数</TH>
<TH>开始时间/结束时间</TH>
<TH>状态</TH>
<TH>外链代码</TH>
<TH class="norightborder">操作</TH>
                </TR>
              </THEAD>
              <TBODY>
                <TR></TR>
                  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><TR>
                  <TD><input type="checkbox" name='del_id[]' value="842" class="checkitem"></TD>
                  <TD><?php echo ($list["title"]); ?></TD>
                  <TD><?php echo ($list["keyword"]); ?></TD> 
				  <TD style="display:none"><?php echo ($list["joinnum"]); ?></TD>
                  <TD style="display:none"><?php echo ($list["click"]); ?></TD>                  
                  <TD><?php echo (date('Y-m-d',$list["statdate"])); ?><br /><?php echo (date('Y-m-d',$list["enddate"])); ?></TD>
                  <TD>
				  <?php if($list['status'] == 0): ?><span class="red">未开始</span><?php elseif($list['status'] == 2): ?><span class="red">已经结束</span><?php else: ?><span class="green">已经开始</span><?php endif; ?>
				  
				 </TD>
                  <TD>大转盘 <?php echo ($list["id"]); ?></TD>
                   <TD class="norightborder">
				   <a href="index.php?g=User&m=Lottery&a=sn&id=<?php echo ($list["id"]); ?>">SN码管理</a> 
				   <a href="index.php?g=User&m=Lottery&a=cheat&id=<?php echo ($list["id"]); ?>">作弊</a> 
				   <a href="index.php?g=User&m=Lottery&a=edit&id=<?php echo ($list["id"]); ?>">编辑</a>  
				   <a href="
				   <?php if($list['status'] == 1): ?>javascript:drop_confirm('你确定要结束活动吗，结束后不可再开启本活动!', 'index.php?g=User&m=Lottery&a=endLottery&id=<?php echo ($list["id"]); ?>');<?php else: ?>index.php?g=User&m=Lottery&a=startLottery&id=<?php echo ($list["id"]); endif; ?>">
				   <?php if($list['status'] == 0): ?>开始<?php else: ?>结束<?php endif; ?>				   
				   </a>
				  
				   <a href="index.php?g=User&m=Lottery&a=del&id=<?php echo ($list["id"]); ?>">删除</a></TD>
                </TR><?php endforeach; endif; else: echo "" ;endif; ?>
                         
              </TBODY>
            </TABLE>
           </form> 
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

function changesort(tid,sortval){

var image=new Image();   
image.src='index.php?ac=app&op=sort&wxid=gh_423dwjkewad&tid='+tid+'&sort='+sortval+'&r='+Math.random(); 

}
  </script>
  <!--底部-->
  	</div>
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
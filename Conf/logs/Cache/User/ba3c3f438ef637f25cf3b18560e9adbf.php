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

<script src="<?php echo RES;?>/js/cart/jscolor.js" type="text/javascript"></script>

<style type="text/css">

.vipcard{

margin: 0 auto;

position: relative;

height: 159px;

text-align: left;

width: 267px;

}

#cardbg{

height: 159px;

width: 267px;

position:absolute;

border-radius: 8px;

-webkit-border-radius:8px;

-moz-border-radius:8px;

box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);

-moz-box-shadow:0 0 4px rgba(0, 0, 0, 0.6);

-webkit-box-shadow:0 0 8px rgba(0, 0, 0, 0.6);

top:0;

left:0;

z-index:1;

}

.vipcard .logo {

max-height:70px;

position:absolute;

top:8px;

left:5px;

z-index:2;

}

.vipcard .verify {

display:inline-block;

height:40px;

top:105px;

right:12px;

text-align:right;

line-height:24px;

color:#000;

font-size:20px;

text-shadow:0 1px rgba(255, 255, 255, 0.2);

z-index:2;

}



.vipcard h1 {

position:absolute;

right:10px;

top:7px;

text-shadow:0 1px rgba(255, 255, 255, 0.2);

color:#000;

font-size:11px;

line-height:25px;

text-align:right;

font-weight: normal;

z-index:2;

}

.vipcard .verify span {

display:inline-block;

text-align:left;

}

.vipcard .verify em {

display:block;

line-height:13px;

font-size:10px;

font-weight:normal;

font-style:normal;

}

.pdo {

position:absolute;

top:0;

left:0;

display:inline-block;

}

.userinfoArea td {

    padding: 8px 0 0px 15px;

}

#tishi{

text-align: center;display: block;

}

.banner{

display:block; width:213px;height: 278px;overflow: hidden;

}

.banner img{

display:block; width:213px; border:0;

}

.bannerbtn{ position:relative; display:block}

.bannerbtn .qiaodaobtn{ position: absolute; display:block; bottom:0}



.juli li{

	float: left;

	margin-right: 10px;

	margin-bottom: 18px;

	margin-left: 10px;

	width: 95px;

}



</style>

<div class="content" >

<div class="cLineB">

<h4 class="left">会员卡 </h4>

<div class="searchbar right">

</div>

<div class="clr"></div>

</div>

<div class="cLine">

<div class="pageNavigator left">



<a href='/index.php?g=User&m=Member_card&a=design&token=<?php echo ($token); ?>' title='新增会员卡' class='btnGrayS vm bigbtn'>添加会员卡</a>





</div>

<div class="clr"></div>

</div>

<div class="msgWrap">

 <div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-top:5px;">在这里可以添加多种级别的会员卡，比如：普通卡、银卡、金卡等，可以设置每个会员卡的最低积分要求，然会员根据不同的积分领取不同的卡</div>

<form method="post"  action="" id="info" >

<TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">

<THEAD>

<tr>

<th width="120">会员卡样式</th>

<th width="80">名称</th>

<th width="60">会员数量</th>

<th width="80">外链代码</th>

<th width="308" class="norightborder">操作</th>

</tr>

</THEAD>

<TBODY>

<TR></TR>

<?php if(is_array($cards)): $i = 0; $__LIST__ = $cards;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><TR>

<TD>

	<div class="vipcard">

		<img id="cardbg" src="<?php echo ($item["diybg"]); ?>">

		<img id="cardlogo" class="logo" src="<?php echo ($item["logo"]); ?>">

		<h1 id="vipname" style="color:<?php echo ($item["vipnamecolor"]); ?>;"><?php echo ($item["cardname"]); ?></h1>

		<strong class="pdo verify" id="number" style="color:<?php echo ($item["numbercolor"]); ?>"><span><em>会员卡号</em>6537 1998</span></strong>

	</div>



</TD>

<TD><?php echo ($item["cardname"]); ?></TD>

<TD><?php echo ($item["usercount"]); ?></TD>

<TD> <a  class="green" href="###">会员卡</a></TD>

<TD class="norightborder">

<ul class="juli">

<li>

<a href="/index.php?g=User&m=Member_card&a=design&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>设计本卡</a>

</li>

<li><a href="/index.php?g=User&m=Member_card&a=create&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>在线开卡</a></li>



<li><a href="/index.php?g=User&m=Member_card&a=exchange&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>积分设置</a> </li>

<li><a href="/index.php?g=User&m=Member_card&a=notice&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>设置通知</a></li><li><a href="/index.php?g=User&m=Member_card&a=privilege&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>会员特权</a></li><li><a href="/index.php?g=User&m=Member_card&a=coupon&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>会员优惠券</a></li>

<li><a href="/index.php?g=User&m=Member_card&a=integral&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>礼品券</a></li>

<li><a href="/index.php?g=User&m=Member_card&a=members&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>会员管理</a></li>

<li><a href="/index.php?g=User&m=Member_card&a=staff&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>" class='ChooseImage'>管理员</a>

</li><li><a href="javascript:drop_confirm('您确定要删除吗?', '/index.php?g=User&m=Member_card&a=delete&token=<?php echo ($token); ?>&id=<?php echo ($item["id"]); ?>');" class='ChooseImage'>删除本卡</a>



</li>

</ul>

</TD>

</TR><?php endforeach; endif; else: echo "" ;endif; ?>

</TBODY>

</TABLE>

</form>



</div>

<div class="cLine">

<div class="pageNavigator right">

<div class="pages"></div>

</div>

<div class="clr"></div>

</div>

</div>

      

        <div class="clr"></div>

		<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>


      </div>

    </div>

  </div>
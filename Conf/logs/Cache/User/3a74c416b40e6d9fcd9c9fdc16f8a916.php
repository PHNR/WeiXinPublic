<?php if (!defined('THINK_PATH')) exit();?>

<div id="wp" class="wp"><link href="./tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css">

 <div class="contentmanage">

    <div class="developer">
    <div class="tableContent">

        <!--左侧功能菜单--><script src="./tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>



<div class="content">

<style>

.usercontent ul li{

float:none;

line-height:50px;

padding-left:10px;

}

input{border: 1px solid #DDDDDD;height:30px;width:200px;margin-left:10px;}

.new-btn-login{

    background-color: transparent;

    background-image: url("<?php echo RES;?>/images/img/new-btn-fixed.png");

    border: medium none;

	border:1px solid red;

	

}

.new-btn-login{

    background-position: 0 -198px;

    width: 82px;

	color: #FFFFFF;

    font-weight: bold;

    height: 28px;

    line-height: 28px;

    padding: 0 10px 3px;

	

}

.new-btn-login:hover{

	background-position: 0 -167px;

	width: 82px;

	color: #FFFFFF;

    font-weight: bold;

    height: 28px;

    line-height: 28px;

    padding: 0 10px 3px;

}

.bottonbox{

border: 1px solid #D74C00;

padding: 1px;

display: inline-block;

}

</style>

<script>



$(function(){

	var price=new Array();

	<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>price[<?php echo ($p["id"]); ?>]=<?php echo ($p["price"]); ?>;<?php endforeach; endif; else: echo "" ;endif; ?>

	$('#group').change(function(){

		$('#price').val(price[$('#group').val()]*$('#num').val());

		$('#needprice').val(price[$('#group').val()]*$('#num').val());

	});

	$('#num').change(function(){



		$('#price').val(price[$('#group').val()]*$('#num').val());

		$('#needprice').val(price[$('#group').val()]*$('#num').val());

	});

});

function checkcz(){

	if($('#group').val()==0){

		alert('请选择级别');

		return false;

	}

	return true;

}

</script>

<div class="usercontent">

<ul>

<form action="<?php echo U('Alipay/post');?>" method="post" onsubmit="return checkcz()">

	<li> 

		<b>充值选项: </b>

		<select name="gid" style="margin-left:10px;" id="group">

		<option value="0" selected>请选择</option>

			<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($group["id"]); ?>"<?php if($_SESSION['gid'] == $group['id']): endif; ?>><?php echo ($group["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

		</select>

		<select name="num" style="margin-left:10px;" id="num">

			<option value="1">1个月</option>

			<option value="2">2个月</option>

			<option value="3">3个月</option>

			<option value="4">4个月</option>

			<option value="5">5个月</option>

			<option value="6">6个月</option>

			<option value="7">7个月</option>

			<option value="8">8个月</option>

			<option value="9">9个月</option>

			<option value="10">10个月</option>

			<option value="11">11个月</option>

			<option value="12">12个月</option>		

		</select>

    </li>

	<li style="display:none"> <b>充值用户名: </b><input type="text" name="uname" value="<?php echo (session('uname')); ?>" size="60" > <b>充值帐号,默认即可请勿修改</b></li>

	<li> <b>账户余额: </b><input type="text" style="border:none;width:30px;" name="moneybalance" value="<?php echo ($thisUser["moneybalance"]); ?>" id="needmoneybalanceprice" size="10" disabled> 元<b></b></li>

	<li> <b>需要花费: </b><input type="text" style="border:none;width:30px;" name="needprice" value="<?php echo ($user["price"]); ?>" id="needprice" size="10" disabled> 元<b></b></li>

	<li> <b>充值金额: </b><input type="text" name="price" style="width:50px;" value="<?php echo ($user["price"]); ?>" id="price" size="10"> 元 <b>先择对应的充值选项,价格自动生成</b></li>



	<li><span class="bottonbox"><button class="new-btn-login" type="submit" style="text-align:center;">确 认</button></span></li>

</ul>

        <div class="clr"></div>

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

  <!--底部-->

  	</div>







<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
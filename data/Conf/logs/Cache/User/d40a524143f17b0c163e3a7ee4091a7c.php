<?php if(!defined('THINK_PATH')) exit();?><!doctype html>

<html>
<head>
<meta charset="utf-8">
<title><?php echo($info["acttitle"]); ?>微信墙 -微享- 微信营销运营专家</title>
<script type="text/javascript" src="tpl/User/default/common/js/m.js"></script>
<style>
div, body, h2, li, p {
    margin: 0;
    padding: 0;
}
body { font: 13px '微软雅黑', Arial, Helvetica;
    background: <?php if($info['background'] == ''): ?>url(/tpl/User/default/common/img/wewallbg.jpg) no-repeat center top<?php else: ?>url("<?php echo ($info["background"]); ?>") no-repeat center top <?php endif; ?>;
}
.page {
    width: 900px;
    margin: 0 auto;
}
.box {
    list-style: none;
    padding: 30px;
    margin: 0;
    margin-top: 20px;
    display: block;
    background: rgba(200, 200, 200, .6);
}
#contents {
    margin: 20px 40px;
}
#lottery {
    display: none;
    width: 100%;
    margin: 0 auto;
    border: 1px #999 solid;
    padding-top: 10px;
    background: #FFF;
    margin-top: 20px
}
h2 {
    text-align: center;
    font-size: 20px;
}
#box .boxs {
    background: rgba(10, 166, 216, .8);
    padding: 15px;
    margin: 0;
    margin-bottom: 20px;
    max-height: 205px;
    overflow: hidden;
    font-size: 36px;
    text-indent: 1.2em;
    line-height: 1.2em;
    color: white;
}
.lbox {
    width: 100%;
    height: 100px;
    text-align: center;
}
.lbox input {
    display: inline-block;
    width: 25%;
    height: 80px;
    margin-top: 10px;
}
#codebox {
    width: 100%;
    height: 200px;
    font-size: 160px;
    line-height: 190px;
    color: #000;
    text-align: center;
    cursor: pointer
}
#showbonu {
    width: 75%;
    clear: both;
    margin: 20px auto;
}
#showbonu .leftb {
    width: 40%;
    float: left;
    margin-left: 20px;
    font-size: 40px;
    text-align: center
}
#showbonu .rightb {
    width: 50%;
    float: left;
    font-size: 40px;
    text-align: center
}
.clearb {
    clear: both;
    width: 100%;
    float: none
}
.logo {
    width: 100%;
    clear: both;
    margin-top: 20px;
}
.logo img {
    display: block;
    float: left;
}
.logo h2 {
    text-align: center;
    font-size: 60px;
    padding-top: 10px;
    color: #fff;
    font-family: '微软雅黑'
}
.btmbox {
    text-align: center;
}
.btmbox a {
    display: inline-block;
    width: 50px;
    height: 50px;
    color: #000;
    border: 1px solid #999;
    background: #fff;
    text-align: center;
    line-height: 50px;
    font-size: 12px;
    font-family: '微软雅黑';
    text-decoration: none;
    margin: auto 10px
}
.btmbox #sa {
    float: left;
    display: block
}
<!--
头
部
-->
.head {
    background: rgba(255, 255, 255, .9);
    margin: 10px;
}
h1 {
    display: block;
    font-size: 2em;
    -webkit-margin-before: 0.67em;
    -webkit-margin-after: 0.67em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
}
.head_right > h1, .head_right > h2, .head_right > h3 {
    display: inline-block;
    padding: 20px 0;
    margin: 0 6px;
    line-height: 1.2em;
    color: #444;
}
.head_info {
    display: inline-block;
    float: left;
    background: rgba(215, 41, 80, .8);
    color: white;
}
.head h1 {
    padding: 20px;
    margin: 0;
}
.head_flag {
    float: left;
    margin: 0;
    width: 0;
    height: 0;
    padding: 0;
    border: 0;
    border-top: 20px rgba(215, 41, 80, .8) solid;
    border-right: 20px rgba(215, 41, 80, 0) solid;
    border-left: 0;
}
.head_right > h1, .head_right > h2, .head_right > h3 {
    display: inline-block;
    padding: 20px 0;
    margin: 0 6px;
    line-height: 1.2em;
    color: #444;
}
.head_right > h3 > span {
    font-size: 1.3em;
    margin: 0 6px;
    color: black;
}
.clear {
    clear: both;
}
<!--
end-- >
#items {
    list-style: none;
    padding: 30px;
    margin: 0;
    display: block;
    background: rgba(200, 200, 200, .6);
}
.contents ul { list-style: none }
.flag {
    width: 0;
    height: 0;
    padding: 0;
    border-left: 30px rgba(128, 128, 128, 0) solid;
    float: left;
    margin: 0;
}
#items > li > .item, .luck_item {
    background: rgba(255, 255, 255, .8);
    padding: 15px;
    margin: 0;
    margin-bottom: 20px;
    max-height: 205px;
    overflow: hidden;
    font-size: 36px;
    text-indent: 1.2em;
    line-height: 1.2em;
    color: white;
}
#items { }


</style>
<script type="text/javascript" src="<?php echo RES; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES; ?>/js/jquery.easing.min.js"></script>
<script>
    var color = '#' + ('00000' + (Math.random() * 0x1000000 << 0).toString(16)).slice(-6);
    $("#items").css({"background": color});

</script>


<script>

var yuni, hoko;//计时器

var showtime =
<?php echo ($info["showtime"]); ?>*
1000;//抓取数据间隔

var word = Array();//留言堆栈

var sncodeArr = Array();//抽奖码堆栈

var bonuOne =<?php echo ($info["bonu1"]); ?>;//一等奖数量

var bonuTwo =<?php echo ($info["bonu2"]); ?>;//二等奖数量

var bonuThree =<?php echo ($info["bonu3"]); ?>; //三等奖数量

var lflag = true; // hoko计时器判定

function getRamCo() {

    return ('00000' + (Math.random() * 0x1000000 << 0).toString(16)).substr(-6);

}

function addWord() {

    //console.log(word+"-----"+word.length+"------"+a);

    if(word.length > 0) {

        height = $(".box ul:last").get(0).offsetHeight + 10;

        if(len(word[word.length - 1]) > 26) {

            fontSize = "font-size:50px; line-height:80px;";

        }

        else {

            fontSize = "";

        }

        $("#items").prepend("<li  style='display: list-item;'><div id='div_bottom' class='flag' style='border-top:30px rgba(93,181,11,.8) solid;'></div><div class='item' style='background:rgba(93,181,11,.8)' id='li_bottom'>" + fontSize + "" + word.pop() + "</div></li>");


    }

    setTimeout(addWord, 3000);

}

function len(s) {

    var l = 0;

    var a = s.split("");

    for(var i = 0; i < a.length; i++) {

        if(a[i].charCodeAt(0) < 299) {

            l++;

        } else {

            l += 2;

        }

    }

    return l;

}

function getMessage() {

    $.ajax({

        type: "post",

        url: "<?php echo U('Wewall/sentMessage');?>",

        dataType: 'json',

        data: 'token=<?php echo ($info["token"]); ?>&uid=<?php echo ($info["id"]); ?>',

        success: function(json) {

            if(json != null) {

                for(i = 0; i < json.length; i++) {

                    word.push(json[0]['content'])

                }

            }

        }

    });

    yuni = setTimeout(getMessage, showtime);

}

function parseGame() {

    clearTimeout(yuni);

    $.ajax({

        type: "post",

        url: "<?php echo U('Wewall/contralGame');?>",

        dataType: 'json',

        data: 'token=<?php echo ($info["token"]); ?>&id=<?php echo ($info["id"]); ?>&act=parse',

        success: function(json) {

            if(json != null) {

                for(i = 0; i < json.length; i++) {

                    sncodeArr.push(json[i]['sncode']);

                }

            }

        }

    });

}

function continueGame() {

    $.ajax({type: "post", url: "<?php echo U('Wewall/contralGame');?>", data: 'token=<?php echo ($info["token"]); ?>&id=<?php echo ($info["id"]); ?>&act=go'});

    sncodeArr = Array();

    getMessage();

    $("#box").show();

    $("#lottery").hide();

}

function lottery() {

    if(sncodeArr.length == 0) {
        alert("未发现抽奖数据，可能游戏未暂停或无人参与");
        return false;
    }

    $("#box").hide();

    $("#lottery").show();

}

function randNum(min, max) {

    return Math.floor(min + Math.random() * (max - min));

}

function goLottery(num) {

    if(num == 1) {

        if(bonuOne == 0) {
            alert("一等奖名额已抽取完毕");
            return false;
        }

        bonuOne -= 1;

    }

    else if(num == 2) {

        if(bonuTwo == 0) {
            alert("二等奖名额已抽取完毕");
            return false;
        }

        bonuTwo -= 1;

    }

    else if(num == 3) {

        if(bonuThree == 0) {
            alert("三等奖名额已抽取完毕");
            return false;
        }

        bonuThree -= 1;

    }

    var lo = function() {

        ko = randNum(0, sncodeArr.length);

        $("#codebox").html(sncodeArr[ko]);

        hoko = setTimeout(lo, 50);

    }

    if(lflag == true) {

        $("#codebox").attr("rank", num)

        lo();

        lflag = false;

    }

}

function sentMark() {

    coli = $("#codebox").attr("rank");

    coll = $("#codebox").html();

    $.ajax({type: "post", url: "<?php echo U('Wewall/savemark');?>", data: 'token=<?php echo ($info["token"]); ?>&id=<?php echo ($info["id"]); ?>&num=' + coli + '&sncode=' + coll + ''});

    for(i = 0; i < sncodeArr.length; i++) {

        if(sncodeArr[i] == coll) {

            sncodeArr.splice(i, 1)

        }

    }

    $("#showbonu").prepend('<div class="leftb">' + coli + '等奖</div><div class="rightb">' + coll + '</div><Div class="clearb"></Div>')

}


$(function() {

    addWord();

    getMessage();

    $('#codebox').click(function() {

        if(lflag == false) {

            clearTimeout(hoko);

            lflag = true;

            sentMark();

        }

    })

});
<!--变色-->


<!--end-->
</script>
<!--变色-->

<!--end-->
</head>

<body>
<div class="page">
    <div class="head" style="background:white; margin-top:20px">
        <div class="head_left">
            <div class="head_info">
                <h1>微信大屏幕</h1>
            </div>
            <div class="head_flag"></div>
        </div>
        <div class="head_right"><img alt="bababa" src="/tpl/User/default/common/img/bullhorn.png">

            <h2>微信添加</h2>

            <h1><?php echo($info["acttitle"]); ?></h1>

            <h3>发送<span>##&nbsp;+ 你想说的话</span>即可上墙</h3>
        </div>
        <div class="clear"></div>
    </div>

    <!--<div class="logo"><h2><?php echo($info["acttitle"]); ?></h2></div>-->

    <div class="box">
        <!-- 内容区 -->
        <div class="contents">
            <ul id="items">
                <li style='display: list-item;'>
                    <div id='div_bottom' class='flag' style='border-top:30px rgba(93,181,11,.8) solid;'></div>
                    <div class='item' style='background:rgba(93,181,11,.8)' id='li_bottom'>微信发送##加你想说的话，即可上墙</div>
                </li>
            </ul>
        </div>
        <Div id="lottery">
            <h2>现场抽奖</h2>

            <div class="lbox">
                <input type="button" onClick="goLottery(1)" value="抽取一等奖">
                <input type="button" onClick="goLottery(2)" value="抽取二等奖">
                <input type="button" onClick="goLottery(3)" value="抽取三等奖">
            </div>
            <div id="codebox" rank="">XXXXXXXX</div>
            <div id="showbonu"></div>
        </Div>
    </div>
    <div class="btmbox" style=" margin-top:10px; width:100%;"><a href="javascript:parseGame()">暂停</a> <a
            href="javascript:continueGame()">继续</a> <a href="javascript:lottery()">抽奖</a></div>
</div>
<!-- wtoken.com Baidu tongji analytics -->
<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F866a46b8a4d233aa883b072a2158aaa2' type='text/javascript'%3E%3C/script%3E"));

</script>
</body>
</html>
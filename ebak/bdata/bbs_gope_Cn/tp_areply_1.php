<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_areply`;");
E_C("CREATE TABLE `tp_areply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `updatetime` varchar(13) NOT NULL,
  `token` char(30) NOT NULL,
  `home` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_areply` values('1','首页',' ','1','','1397144602','1397199643','pvosmg1397034660','1');");
E_D("replace into `tp_areply` values('2','你好',' ','3','','1399781901','1400304634','avljgc1397041839','1');");
E_D("replace into `tp_areply` values('3','','1.附近周边信息查询lbs\r\n2.音乐查询　音乐＋音乐名 例：音乐爱你一万年\r\n3.天气查询　城市名＋天气　例上海天气\r\n4.手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912\r\n5.身份证查询　身份证＋号码　　例：身份证342423198803015568\r\n6.公交查询　公交＋城市＋公交编号　例：上海公交774\r\n7.火车查询　火车＋城市＋目的地　例火车上海南京\r\n8.翻译 支持 及时翻译，语音翻译　翻译＋关键词 例：翻译你好\r\n9.彩票查询　彩票＋彩票名 例如:彩票双色球\r\n10.周公解梦　梦见+关键词　例如:梦见父母\r\n11.陪聊　直接输入聊天关键词即可\r\n12.聊天　直接输入聊天关键词即可\r\n13.藏头诗 藏头诗+关键词　例：藏头诗我爱你　\r\n14.笑话　直接发送笑话\r\n15.糗事　直接发送糗事\r\n16.快递 快递＋快递名＋快递号　例：快递顺丰117215889174\r\n17.健康指数查询　健康＋高，＋重　例：健康170,65\r\n18.朗读 朗读＋关键词　例：朗读微最强™多用户营销系统\r\n19.计算器 计算器使用方法　例：计算50-50　，计算100*100\r\n20.输入价格了解微最强™平台系统的价格\r\n21.输入服务了解微最强™平台系统的售后服务\r\n23.输入抽奖，即可玩幸运大抽奖\r\n2４.输入会员即可填写会员资料\r\n25.更多功能请回复帮助，或者help','12','','1400560037','','omcmpf1400514094','0');");
E_D("replace into `tp_areply` values('4','首页','','12','','1400590069','1400590080','ozugxw1400589873','1');");
E_D("replace into `tp_areply` values('5','首页','首页','12','','1401366393','','ivrnef1401365899','0');");

require("../../inc/footer.php");
?>
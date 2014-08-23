<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_function`;");
E_C("CREATE TABLE `tp_function` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` tinyint(3) NOT NULL,
  `usenum` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `funname` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `isserve` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `tp_function` values('1','1','0','天气查询','tianqi','天气查询服务:例  城市名+天气','1','1');");
E_D("replace into `tp_function` values('2','1','0','糗事','qiushi','糗事　直接发送糗事','1','1');");
E_D("replace into `tp_function` values('3','1','0','计算器','jishuan','计算器使用方法　例：计算50-50　，计算100*100','1','1');");
E_D("replace into `tp_function` values('4','4','0','朗读','langdu','朗读＋关键词　例：朗读pigcms多用户营销系统','1','1');");
E_D("replace into `tp_function` values('5','3','0','健康指数查询','jiankang','健康指数查询　健康＋高，＋重　例：健康170,65','1','1');");
E_D("replace into `tp_function` values('6','1','0','快递查询','kuaidi','快递＋快递名＋快递号　例：快递顺丰117215889174','1','1');");
E_D("replace into `tp_function` values('7','1','0','笑话','xiaohua','笑话　直接发送笑话','1','1');");
E_D("replace into `tp_function` values('8','2','0','藏头诗','changtoushi',' 藏头诗+关键词　例：藏头诗我爱你','1','1');");
E_D("replace into `tp_function` values('9','1','0','陪聊','peiliao','聊天　直接输入聊天关键词即可','1','1');");
E_D("replace into `tp_function` values('10','1','0','聊天','liaotian','聊天　直接输入聊天关键词即可','1','1');");
E_D("replace into `tp_function` values('11','3','0','周公解梦','mengjian','周公解梦　梦见+关键词　例如:梦见父母','1','1');");
E_D("replace into `tp_function` values('12','2','0','语音翻译','yuyinfanyi','翻译＋关键词 例：翻译你好','1','1');");
E_D("replace into `tp_function` values('13','2','0','火车查询','huoche','火车查询　火车＋城市＋目的地　例火车上海南京','1','1');");
E_D("replace into `tp_function` values('14','2','0','公交查询','gongjiao','公交＋城市＋公交编号　例：上海公交774','1','1');");
E_D("replace into `tp_function` values('15','2','0','身份证查询','shenfenzheng','身份证＋号码　　例：身份证342423198803015568','1','1');");
E_D("replace into `tp_function` values('16','1','0','手机归属地查询','shouji','手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912','1','1');");
E_D("replace into `tp_function` values('17','3','0','音乐查询','yinle','音乐＋音乐名  例：音乐爱你一万年','1','1');");
E_D("replace into `tp_function` values('18','1','0','附近周边信息查询','fujin','附近周边信息查询(ＬＢＳ） 回复:附近+关键词  例:附近酒店','1','1');");
E_D("replace into `tp_function` values('20','3','0','淘宝店铺','taobao','输入淘宝＋关键词　即可访问淘宝3g手机店铺','2','1');");
E_D("replace into `tp_function` values('21','4','0','会员资料管理','userinfo','会员资料管理　输入会员　即可参与','2','1');");
E_D("replace into `tp_function` values('22','1','0','翻译','fanyi','翻译＋关键词 例：翻译你好','1','1');");
E_D("replace into `tp_function` values('23','4','0','第三方接口','api','第三方接口整合模块，请在管理平台下载接口文件并配置接口信息，','1','1');");
E_D("replace into `tp_function` values('24','1','0','姓名算命','suanming','姓名算命 算命＋关键词　例：算命李白','1','1');");
E_D("replace into `tp_function` values('25','3','0','百度百科','baike','百度百科　使用方法：百科＋关键词　例：百科北京','2','1');");
E_D("replace into `tp_function` values('26','2','0','彩票查询','caipiao','回复内容:彩票+彩种即可查询彩票中奖信息,例：彩票双色球','1','1');");
E_D("replace into `tp_function` values('29','1','0','3G首页','shouye','输入首页,访问微3g 网站','1','1');");
E_D("replace into `tp_function` values('30','1','0','DIY宣传页','adma','DIY宣传页,用于创建二维码宣传页权限开启','1','1');");
E_D("replace into `tp_function` values('31','4','0','会员卡','huiyuanka','尊贵享受vip会员卡,回复会员卡即可领取会员卡','1','1');");
E_D("replace into `tp_function` values('36','4','0','通用预订系统','host_kev','通用预订系统 可用于酒店预订，ktv订房，旅游预订等。','2','1');");
E_D("replace into `tp_function` values('34','1','0','歌词查询','geci','歌词查询 回复歌词＋歌名即可查询一首歌曲的歌词,例：歌词醉清风','1','1');");
E_D("replace into `tp_function` values('35','2','0','域名whois查询','','域名whois查询　回复域名＋域名 可查询网站备案信息,域名whois注册时间等等\r\n 例：域名pigcms.com','1','1');");
E_D("replace into `tp_function` values('37','4','0','自定义表单','diyform','自定义表单(用于报名，预约,留言)等','1','1');");
E_D("replace into `tp_function` values('38','2','0','无线网络订餐','dx','无线网络订餐','1','1');");
E_D("replace into `tp_function` values('39','2','0','在线商城','shop','在线商城,购买系统','1','1');");
E_D("replace into `tp_function` values('40','2','0','在线团购系统','etuan','在线团购系统','1','1');");
E_D("replace into `tp_function` values('41','4','0','自定义菜单','diymen_set','自定义菜单,一键生成轻app','1','1');");
E_D("replace into `tp_function` values('42','4','0','微贺卡','Heka','微贺卡','2','1');");
E_D("replace into `tp_function` values('43','4','0','幸运大转盘','choujiang','输入抽奖　即可参加幸运大转盘抽奖活动','2','1');");
E_D("replace into `tp_function` values('44','4','0','抽奖','lottery','抽奖,输入抽奖即可参加幸运大转盘','1','1');");
E_D("replace into `tp_function` values('45','4','0','刮刮卡','gua2','刮刮卡抽奖活动','1','1');");
E_D("replace into `tp_function` values('46','4','0','全景','panorama','','1','1');");
E_D("replace into `tp_function` values('47','4','0','婚庆喜帖','wedding','','2','1');");
E_D("replace into `tp_function` values('48','4','0','投票','vote','','2','1');");
E_D("replace into `tp_function` values('49','4','0','房产','estate','','2','1');");
E_D("replace into `tp_function` values('50','4','0','3G相册','album','','1','1');");
E_D("replace into `tp_function` values('51','4','0','砸金蛋','GoldenEgg','','2','1');");
E_D("replace into `tp_function` values('52','4','0','水果机','LuckyFruit','','2','1');");
E_D("replace into `tp_function` values('53','4','0','留言板','message','','2','1');");
E_D("replace into `tp_function` values('54','4','0','微汽车','car','','2','1');");
E_D("replace into `tp_function` values('57','4','0','微调研','Diaoyan','微调研','2','1');");
E_D("replace into `tp_function` values('63','4','0','Yuyue','新版微预约','新版微预约','2','1');");
E_D("replace into `tp_function` values('59','4','0','微酒店','Yuyue','微酒店','2','1');");
E_D("replace into `tp_function` values('60','4','0','微医疗','Yiliao','微医疗提供挂号预约服务','2','1');");
E_D("replace into `tp_function` values('62','4','0','摇一摇','Shake','手机输入YYY+手机号。例如：yyy18267720633. 即可进入游戏','2','1');");
E_D("replace into `tp_function` values('64','4','0','微点餐','Dining','微信点餐系统，多功能点餐','2','1');");
E_D("replace into `tp_function` values('65','4','0','微信墙','Wxq','微信上墙','2','1');");
E_D("replace into `tp_function` values('66','4','0','一站到底','Yzdd','一站到底，答题游戏','2','1');");
E_D("replace into `tp_function` values('67','4','0','微订餐','dining','微订餐','2','1');");
E_D("replace into `tp_function` values('68','4','0','在线客服','Kefu','微网站在线客服','2','1');");
E_D("replace into `tp_function` values('69','4','0','照片墙','Zhaopianwall','照片墙','2','1');");
E_D("replace into `tp_function` values('70','4','0','分享管理','share','分享管理','2','1');");
E_D("replace into `tp_function` values('71','4','0','微论坛','forum','微论坛','2','1');");
E_D("replace into `tp_function` values('72','4','0','微教育','school','微教育','1','1');");
E_D("replace into `tp_function` values('73','4','0','微医疗','medical','微医疗','1','1');");
E_D("replace into `tp_function` values('74','4','0','微酒店、宾馆','hotel','微酒店、宾馆','1','1');");
E_D("replace into `tp_function` values('75','4','0','微路由','wifi','微路由','2','1');");

require("../../inc/footer.php");
?>
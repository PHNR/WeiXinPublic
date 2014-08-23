<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_set`;");
E_C("CREATE TABLE `tp_member_card_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `cardname` varchar(60) NOT NULL,
  `miniscore` int(10) NOT NULL DEFAULT '0',
  `logo` varchar(200) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `diybg` varchar(200) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `numbercolor` varchar(10) NOT NULL,
  `vipnamecolor` varchar(10) NOT NULL,
  `Lastmsg` varchar(100) NOT NULL,
  `vip` varchar(100) NOT NULL,
  `qiandao` varchar(100) NOT NULL,
  `shopping` varchar(100) NOT NULL,
  `memberinfo` varchar(100) NOT NULL,
  `membermsg` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `create_time` int(11) NOT NULL,
  `sm` text NOT NULL,
  `cj` char(255) NOT NULL,
  `tl` char(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `miniscore` (`miniscore`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_set` values('1','eewoyx1396338504','小猪企业版会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1396338744','','','');");
E_D("replace into `tp_member_card_set` values('2','tqbcao1396752365','乐信企业版会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1396759761','','','');");
E_D("replace into `tp_member_card_set` values('3','eewoyx1396338504','小猪企业版会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1396760840','','','');");
E_D("replace into `tp_member_card_set` values('4','nunloc1396884852','小猪企业版会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1396885313','','','');");
E_D("replace into `tp_member_card_set` values('5','pvosmg1397034660','康视眼镜会员卡','0','http://zgweixiang.com/uploads/p/pvosmg1397034660/3/d/4/2/thumb_5346892df4035.jpg','./tpl/User/default/common/images/card/card_bg15.png','http://zgweixiang.com/uploads/p/pvosmg1397034660/a/7/b/e/thumb_53467397b2e1a.png','康视眼镜会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1397126068','','','');");
E_D("replace into `tp_member_card_set` values('7','qtjnws1397994896','微最强会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1397999323','','','');");
E_D("replace into `tp_member_card_set` values('8','qtjnws1397994896','微最强会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1397999332','','','');");
E_D("replace into `tp_member_card_set` values('15','avljgc1397041839','江门万达广场开业签到有礼','0','http://wzweixiang.com/uploads/a/avljgc1397041839/b/0/6/d/thumb_5381fecdbd907.jpg','./tpl/User/default/common/images/card/card_bg06.png','','江门万达会员卡，尊贵的像征','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1400666336','会员卡特权及说明区&lt;/br&gt;\r\n1、签到积分累计，累积88分可参与开业及礼品抽奖以及兑换&lt;/br&gt;\r\n2、签到积分累计，累积88分可参与开业及礼品抽奖以及兑换&lt;/br&gt;\r\n3、签到积分累计，累积88分可参与开业及礼品抽奖以及兑换&lt;/br&gt;\r\n       ','index.php?g=Wap&amp;m=Lottery&amp;a=index&amp;token=avljgc1397041839&amp;wecha_id={wechat_id}&amp;id=3','index.php?g=Wap&amp;m=Forum&amp;a=index&amp;token=avljgc1397041839&amp;wecha_id={wechat_id}');");
E_D("replace into `tp_member_card_set` values('16','wsupsl1400754187','微最强™会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1400754508','','','');");
E_D("replace into `tp_member_card_set` values('10','isouej1399863564','微最强™会员卡','0','http://wzweixiang.com/tpl/static/attachment/icon/colorful/2.png','./tpl/User/default/common/images/card/card_bg09.png','','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1399993294','','','');");
E_D("replace into `tp_member_card_set` values('11','rirjgb1400124807','微最强™会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1400172230','','','');");
E_D("replace into `tp_member_card_set` values('12','orbhyn1400224508','微最强™会员卡','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/donut.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1400315918','','','');");
E_D("replace into `tp_member_card_set` values('13','nepvyy1400393099','微最强™会员卡','0','','./tpl/User/default/common/images/card/card_bg04.png','','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1400398314','','','');");
E_D("replace into `tp_member_card_set` values('14','tzqawo1400308953','会员卡','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/clock.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1400491799','54666666666666666666666666666666666666666','{siteUrl}/index.php?g=Wap&amp;m=Store&amp;a=cats&amp;token=tzqawo1400308953&amp;wecha_id={wechat_id}','{siteUrl}/index.php?g=Wap&amp;m=Store&amp;a=cats&amp;token=tzqawo1400308953&amp;wecha_id={wechat_id}');");
E_D("replace into `tp_member_card_set` values('17','xkuxqy1400560689','微最强™会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1401266244','','','');");
E_D("replace into `tp_member_card_set` values('18','rirgpp1401289818','微最强™会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1401292274','','','');");
E_D("replace into `tp_member_card_set` values('19','ivrnef1401365899','微最强™会员卡','0','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1401368129','2211','','');");

require("../../inc/footer.php");
?>
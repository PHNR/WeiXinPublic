<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_notice`;");
E_C("CREATE TABLE `tp_member_card_notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `endtime` int(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_notice` values('1','5','温州康视眼镜电子会员卡正式上线！','欢迎到本店使用电子会员卡','1398009599','1397126420');");
E_D("replace into `tp_member_card_notice` values('2','13','发礼品了哦','发礼品了哦','1401551999','1400636809');");
E_D("replace into `tp_member_card_notice` values('3','16','通知','通知','1401638399','1400754584');");
E_D("replace into `tp_member_card_notice` values('4','15','江门万达广场&quot;江门中轴步行街&quot;新品上市','&lt;span style=&quot;font-family:Simsun;line-height:30px;background-color:#FFFFFF;&quot;&gt;万达所至，繁华所指。继&lt;/span&gt;&lt;a href=&quot;http://newhouse.jm.soufun.com/2013-09-09/10974108.htm&quot;&gt;&lt;strong&gt;江门万达广场&lt;/strong&gt;&lt;/a&gt;&lt;span style=&quot;font-family:Simsun;line-height:30px;background-color:#FFFFFF;&quot;&gt;一、二期商铺与SOHO公寓火爆热销后，众多投资者在翘首期待中，终于再次迎来了绝佳创富新机。9月8日上午10点，&lt;/span&gt;&lt;a href=&quot;http://newhouse.jm.soufun.com/2013-09-09/10974108.htm&quot;&gt;&lt;strong&gt;江门万达广场&lt;/strong&gt;&lt;/a&gt;&lt;span style=&quot;font-family:Simsun;line-height:30px;background-color:#FFFFFF;&quot;&gt;&quot;江门中轴步行街&quot;新品暨金秋魅力群星大型演唱会发布会在逸豪酒店盛势举行，&lt;/span&gt;&lt;strong&gt;&lt;a href=&quot;http://newhouse.jm.soufun.com/2013-09-09/10974108.htm&quot;&gt;江门万达广场&lt;/a&gt;&lt;/strong&gt;&lt;span style=&quot;font-family:Simsun;line-height:30px;background-color:#FFFFFF;&quot;&gt;投资有限公司领导巢东海先生现场讲解产品特性，发布会还邀请了歌星李筱玥、黎冰冰到现场献唱，万众瞩目&lt;/span&gt;','1401897599','1401028761');");
E_D("replace into `tp_member_card_notice` values('5','14','上的','上的上的辅导费','1402329599','1401420683');");

require("../../inc/footer.php");
?>
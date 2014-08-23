<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wxwall_message`;");
E_C("CREATE TABLE `tp_wxwall_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wxq_id` int(10) unsigned NOT NULL COMMENT '规则ID',
  `from_user` varchar(50) NOT NULL COMMENT '用户的唯一ID',
  `content` varchar(1000) NOT NULL DEFAULT '' COMMENT '用户发表的内容',
  `type` varchar(10) NOT NULL COMMENT '发表内容类型',
  `isshow` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否显示',
  `createtime` int(10) unsigned NOT NULL,
  `isshowed` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示过了 1 是 0否',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wxwall_message` values('5','10','ob2qxjgbC8wTmFfmJdS14O-So_jg','时光','text','1','1399785055','1');");
E_D("replace into `tp_wxwall_message` values('4','10','ob2qxjgbC8wTmFfmJdS14O-So_jg','哈哈','text','0','1399784989','0');");
E_D("replace into `tp_wxwall_message` values('6','10','ob2qxjgbC8wTmFfmJdS14O-So_jg','两节课','text','1','1399785064','1');");
E_D("replace into `tp_wxwall_message` values('7','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','哈哈哈','text','1','1400514841','1');");
E_D("replace into `tp_wxwall_message` values('8','18','oqh-ptxUIa11XsgZtPoMudmCZV7s',' 巴巴爸爸','text','1','1400514869','1');");
E_D("replace into `tp_wxwall_message` values('9','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','上墙不不不不不','text','1','1400514883','1');");
E_D("replace into `tp_wxwall_message` values('10','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','上墙，个个个个个个','text','1','1400514897','1');");
E_D("replace into `tp_wxwall_message` values('11','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','我i呢吗的了解放弃妇产业','text','1','1400514957','1');");
E_D("replace into `tp_wxwall_message` values('12','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','vggh是的','text','1','1400514984','1');");
E_D("replace into `tp_wxwall_message` values('13','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','几句话vvvw是的了解放弃妇','text','1','1400514999','1');");
E_D("replace into `tp_wxwall_message` values('14','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','发发的的的个个个个个个个个个个个个个个个个个个个个个','text','1','1400515010','1');");
E_D("replace into `tp_wxwall_message` values('15','18','oqh-ptxUIa11XsgZtPoMudmCZV7s',' yyy13283632651','text','1','1400559683','0');");
E_D("replace into `tp_wxwall_message` values('16','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400559710','0');");
E_D("replace into `tp_wxwall_message` values('17','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400559827','0');");
E_D("replace into `tp_wxwall_message` values('18','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400559900','0');");
E_D("replace into `tp_wxwall_message` values('19','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400560000','0');");
E_D("replace into `tp_wxwall_message` values('20','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400560344','0');");
E_D("replace into `tp_wxwall_message` values('21','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400560458','0');");
E_D("replace into `tp_wxwall_message` values('22','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400560469','0');");
E_D("replace into `tp_wxwall_message` values('23','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','首页','text','1','1400560516','0');");
E_D("replace into `tp_wxwall_message` values('24','18','oqh-ptxUIa11XsgZtPoMudmCZV7s','2048','text','1','1400560658','0');");
E_D("replace into `tp_wxwall_message` values('25','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','  个个个个个个','text','1','1400561391','1');");
E_D("replace into `tp_wxwall_message` values('26','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','个个个个好好好好就','text','1','1400561411','1');");
E_D("replace into `tp_wxwall_message` values('27','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','个个个vvvvvv呢啊饿','text','1','1400561422','1');");
E_D("replace into `tp_wxwall_message` values('28','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','个好好好vgvvvg呢吗我们都在家','text','1','1400561427','1');");
E_D("replace into `tp_wxwall_message` values('29','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','给vvdf是的了','text','1','1400561440','1');");
E_D("replace into `tp_wxwall_message` values('30','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','vhhhhhhj呢啊啊','text','1','1400561447','1');");

require("../../inc/footer.php");
?>
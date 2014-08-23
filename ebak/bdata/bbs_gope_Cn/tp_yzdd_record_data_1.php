<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yzdd_record_data`;");
E_C("CREATE TABLE `tp_yzdd_record_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(80) NOT NULL COMMENT '微信号标识',
  `wecha_id` varchar(100) NOT NULL COMMENT '用户标识',
  `yid` int(11) NOT NULL COMMENT '一站到底活动号',
  `zd` varchar(2) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `tmid` int(11) NOT NULL COMMENT '题目编号',
  `uuid` varchar(60) NOT NULL COMMENT '用户答题唯一标识',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `htime` int(11) DEFAULT NULL COMMENT '答题时间',
  PRIMARY KEY (`id`),
  KEY `uuid` (`uuid`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yzdd_record_data` values('1','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','2','2030565348536e5e7ee22b31.65799994','1399742078','1399742081');");
E_D("replace into `tp_yzdd_record_data` values('2','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','3','1237278238536e5e82c1f4c2.02901004','1399742082','1399742084');");
E_D("replace into `tp_yzdd_record_data` values('3','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','2','890291993536e5e86018cc2.21520368','1399742086','1399742087');");
E_D("replace into `tp_yzdd_record_data` values('4','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d3','2','4','451104529536e5e88efd346.62187959','1399742088','1399742090');");
E_D("replace into `tp_yzdd_record_data` values('5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','2','117860889536e5e8bae9934.23603587','1399742091','1399742093');");
E_D("replace into `tp_yzdd_record_data` values('6','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','3','135698251536e5e8e7ded17.80835732','1399742094','1399742096');");
E_D("replace into `tp_yzdd_record_data` values('7','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','3','1414218616536e5e9139eaf3.87349546','1399742097','1399742098');");
E_D("replace into `tp_yzdd_record_data` values('8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','2','722493927536e5e93d0f910.89800234','1399742099','1399742101');");
E_D("replace into `tp_yzdd_record_data` values('9','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','3','70799586536e5e968ba967.51994904','1399742102','1399742124');");
E_D("replace into `tp_yzdd_record_data` values('10','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','1','165681731536e5f21dd3f75.94529950','1399742241','1399742243');");
E_D("replace into `tp_yzdd_record_data` values('11','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2','d1','2','2','890207735536e5f252595e4.84550480','1399742245','1399742247');");
E_D("replace into `tp_yzdd_record_data` values('12','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','1','99200687536e60b36bdd62.16105700','1399742643','1399742645');");
E_D("replace into `tp_yzdd_record_data` values('13','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','2','1004464753536e60b70ff382.73152107','1399742647','1399742648');");
E_D("replace into `tp_yzdd_record_data` values('14','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','1','998176749536e60b9ddb715.41049734','1399742649','1399742651');");
E_D("replace into `tp_yzdd_record_data` values('15','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','1','1366237102536e60bce4bd04.64669466','1399742652','1399742654');");
E_D("replace into `tp_yzdd_record_data` values('16','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','2','2092527775536e60bf9d1fe5.76922173','1399742655','1399742657');");
E_D("replace into `tp_yzdd_record_data` values('17','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','2','538851919536e60c22f70f3.48609284','1399742658','1399742659');");
E_D("replace into `tp_yzdd_record_data` values('18','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','1','1101034312536e60c4a8d124.83481849','1399742660','1399742661');");
E_D("replace into `tp_yzdd_record_data` values('19','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','2','954341484536e60c722d891.40122468','1399742663','1399742664');");
E_D("replace into `tp_yzdd_record_data` values('20','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','2','145812092536e60c98bb9b2.70022453','1399742665','1399742666');");
E_D("replace into `tp_yzdd_record_data` values('21','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','2','1763305915536e60cc02d687.04762636','1399742668','1399742669');");
E_D("replace into `tp_yzdd_record_data` values('22','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','4','d1','3','1','1083144849536e60ce7c2040.38124760','1399742670','1399742671');");
E_D("replace into `tp_yzdd_record_data` values('23','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','5','d1','4','1','1224609690536e652c7d3970.09200073','1399743788','1399743790');");
E_D("replace into `tp_yzdd_record_data` values('24','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','5','d1','4','1','190870643536e652fb23ac8.20300169','1399743791','1399743793');");
E_D("replace into `tp_yzdd_record_data` values('25','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','8','d1','5','2','7419704365378acff2ea8d6.89955038','1400417535','1400417545');");
E_D("replace into `tp_yzdd_record_data` values('26','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','8','d1','5','3','19764566905378ad0a54e831.84413666','1400417546','1400417548');");
E_D("replace into `tp_yzdd_record_data` values('27','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','8','d3','5','4','7331103945378ad0e0036c8.61165077','1400417550','1400417553');");
E_D("replace into `tp_yzdd_record_data` values('28','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','9','d1','6','2','1865940685378b6237d3531.91261873','1400419875','1400419878');");
E_D("replace into `tp_yzdd_record_data` values('29','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','9','d1','6','3','8426326585378b627945b40.22964010','1400419879','1400419885');");
E_D("replace into `tp_yzdd_record_data` values('30','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','10','d1','7','1','21211172505378b6d23be477.60443934','1400420050','1400420055');");
E_D("replace into `tp_yzdd_record_data` values('31','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','10','d1','7','5','11652451075378b6d84bab31.30476742','1400420056','1400420057');");
E_D("replace into `tp_yzdd_record_data` values('32','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','11','d3','8','4','7243971525378b79c58f837.11764842','1400420252','1400420253');");
E_D("replace into `tp_yzdd_record_data` values('33','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','11','d1','8','2','9238900765378b79ee50212.15557141','1400420254','1400420255');");
E_D("replace into `tp_yzdd_record_data` values('34','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','12','d3','9','4','7229697355378b993ca4785.55936872','1400420755','1400420759');");
E_D("replace into `tp_yzdd_record_data` values('35','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','12','d1','9','1','17519520965378b99910d083.93201402','1400420761','1400420762');");
E_D("replace into `tp_yzdd_record_data` values('36','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','13','d1','10','5','13921419295378b9f24fa1f7.57647306','1400420850','0');");
E_D("replace into `tp_yzdd_record_data` values('37','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','14','d1','11','2','3902583505378ba6b715fc8.27305488','1400420971','1400420972');");
E_D("replace into `tp_yzdd_record_data` values('38','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','14','d1','11','3','2263932485378ba6e1758f6.31805806','1400420974','1400420975');");
E_D("replace into `tp_yzdd_record_data` values('39','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','15','d1','12','3','20698324445378baa34b31e1.26209682','1400421027','1400421028');");
E_D("replace into `tp_yzdd_record_data` values('40','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','15','d1','12','2','7974585055378baa5aecb01.64284252','1400421029','1400421030');");
E_D("replace into `tp_yzdd_record_data` values('41','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','16','d3','13','4','15489132985378bb6d9df6f6.99046103','1400421229','1400421230');");
E_D("replace into `tp_yzdd_record_data` values('42','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','16','d1','13','2','20756856075378bb6ff30fa5.12518115','1400421231','1400421232');");
E_D("replace into `tp_yzdd_record_data` values('43','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','18','d1','14','2','985805434537ac500bc2432.12106532','1400554752','1400554757');");
E_D("replace into `tp_yzdd_record_data` values('44','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','18','d1','14','5','1993305084537ac5069df017.47610518','1400554758','1400554761');");
E_D("replace into `tp_yzdd_record_data` values('45','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','18','d3','14','4','731902989537ac50a88a8f3.07143832','1400554762','1400554765');");
E_D("replace into `tp_yzdd_record_data` values('46','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','18','d3','14','4','1589143056537ac50eef1a88.93011588','1400554766','1400554770');");
E_D("replace into `tp_yzdd_record_data` values('47','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','18','d3','14','4','95220935537ac51327df29.88110568','1400554771','1400554772');");
E_D("replace into `tp_yzdd_record_data` values('48','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','2','167756192537ac562ad6690.14835183','1400554850','1400554853');");
E_D("replace into `tp_yzdd_record_data` values('49','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','2','1906052226537ac5671715a6.28159298','1400554855','1400554857');");
E_D("replace into `tp_yzdd_record_data` values('50','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','5','1724314373537ac56aa4c216.02519235','1400554858','1400554860');");
E_D("replace into `tp_yzdd_record_data` values('51','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','3','1537053462537ac56e124ec5.02986285','1400554862','1400554864');");
E_D("replace into `tp_yzdd_record_data` values('52','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','2','1251728907537ac5712d3fb2.42121247','1400554865','1400554866');");
E_D("replace into `tp_yzdd_record_data` values('53','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','1','658525111537ac573ed2936.74946483','1400554867','1400554869');");
E_D("replace into `tp_yzdd_record_data` values('54','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d3','15','4','1379229026537ac576e4b301.62164717','1400554870','1400554872');");
E_D("replace into `tp_yzdd_record_data` values('55','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','1','1253053224537ac57a0ab692.71798714','1400554874','1400554875');");
E_D("replace into `tp_yzdd_record_data` values('56','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','5','1923808512537ac57cc5e0e6.03654887','1400554876','1400554878');");
E_D("replace into `tp_yzdd_record_data` values('57','hziflr1400551929','okWk2uBQ0ut2oIyXlBPZ5K3IICkw','19','d1','15','1','1405479775537ac57f908724.95610343','1400554879','1400554880');");
E_D("replace into `tp_yzdd_record_data` values('58','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','2','95944849537ac5d0d41fa0.49043857','1400554960','1400554963');");
E_D("replace into `tp_yzdd_record_data` values('59','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d3','16','4','15025017537ac5d4d01d38.25915859','1400554964','1400554967');");
E_D("replace into `tp_yzdd_record_data` values('60','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','3','1223084515537ac5d8936977.83089654','1400554968','1400554970');");
E_D("replace into `tp_yzdd_record_data` values('61','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','1','921205732537ac5dc1c7967.91133562','1400554972','1400554984');");
E_D("replace into `tp_yzdd_record_data` values('62','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','3','1765119224537ac5ea0fac52.55622624','1400554986','1400554987');");
E_D("replace into `tp_yzdd_record_data` values('63','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','3','659317932537ac5ed0b36c6.91260121','1400554989','1400554991');");
E_D("replace into `tp_yzdd_record_data` values('64','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','5','139446097537ac5f06e90e9.00453301','1400554992','1400554994');");
E_D("replace into `tp_yzdd_record_data` values('65','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','5','897564064537ac5f4268052.38112506','1400554996','1400554998');");
E_D("replace into `tp_yzdd_record_data` values('66','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','2','1374018465537ac5f7ac0c77.95035677','1400554999','1400555002');");
E_D("replace into `tp_yzdd_record_data` values('67','hziflr1400551929','okWk2uGlD0N7qVOro9tM7WjqkdRA','19','d1','16','5','1469274103537ac5fb340104.81416792','1400555003','1400555004');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_requestdata`;");
E_C("CREATE TABLE `tp_requestdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `time` int(11) NOT NULL,
  `textnum` int(5) NOT NULL,
  `imgnum` int(5) NOT NULL,
  `videonum` int(5) NOT NULL,
  `other` int(5) NOT NULL,
  `follownum` int(5) NOT NULL,
  `unfollownum` int(5) NOT NULL,
  `3g` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8");
E_D("replace into `tp_requestdata` values('1','nnivod1396346235','2014','4','1','1396347351','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('2','eewoyx1396338504','2014','4','2','1396398978','39','0','0','7','0','0','0');");
E_D("replace into `tp_requestdata` values('3','nnivod1396346235','2014','4','2','1396418639','1','0','0','0','3','0','0');");
E_D("replace into `tp_requestdata` values('4','eewoyx1396338504','2014','4','3','1396483247','0','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('5','chuedn1396583110','2014','4','4','1396584541','0','0','0','0','1','1','0');");
E_D("replace into `tp_requestdata` values('6','eewoyx1396338504','2014','4','4','1396606459','24','2','0','16','0','0','0');");
E_D("replace into `tp_requestdata` values('7','eewoyx1396338504','2014','4','5','1396658313','26','1','0','8','1','1','0');");
E_D("replace into `tp_requestdata` values('8','eewoyx1396338504','2014','4','6','1396714328','59','9','1','41','1','1','0');");
E_D("replace into `tp_requestdata` values('9','lxxnfn1396718703','2014','4','6','1396718860','21','0','0','0','1','1','0');");
E_D("replace into `tp_requestdata` values('10','tqbcao1396752365','2014','4','6','1396753108','273','6','0','61','40','11','0');");
E_D("replace into `tp_requestdata` values('11','tqbcao1396752365','2014','4','7','1396800060','25','1','0','7','11','1','0');");
E_D("replace into `tp_requestdata` values('12','eewoyx1396338504','2014','4','7','1396838190','16','4','0','5','0','0','0');");
E_D("replace into `tp_requestdata` values('13','pozfmk1396884791','2014','4','7','1396886132','0','0','0','2','0','0','0');");
E_D("replace into `tp_requestdata` values('14','pozfmk1396884791','2014','4','8','1396886547','0','0','0','3','0','0','0');");
E_D("replace into `tp_requestdata` values('15','eewoyx1396338504','2014','4','8','1396886695','2','0','39','9','3','2','0');");
E_D("replace into `tp_requestdata` values('16','eewoyx1396338504','2014','4','9','1397010172','0','0','0','4','0','0','0');");
E_D("replace into `tp_requestdata` values('17','kecjmg1397032997','2014','4','9','1397033183','1','4','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('18','pvosmg1397034660','2014','4','9','1397036607','3','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('19','avljgc1397041839','2014','4','9','1397042782','8','0','0','5','0','0','0');");
E_D("replace into `tp_requestdata` values('20','avljgc1397041839','2014','4','10','1397089495','4','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('21','pvosmg1397034660','2014','4','10','1397128160','2','36','1','1','4','4','0');");
E_D("replace into `tp_requestdata` values('22','pvosmg1397034660','2014','4','11','1397145665','5','18','0','0','7','4','0');");
E_D("replace into `tp_requestdata` values('23','avljgc1397041839','2014','4','11','1397203639','0','0','0','2','2','2','0');");
E_D("replace into `tp_requestdata` values('24','avljgc1397041839','2014','4','12','1397259383','0','0','0','4','1','1','0');");
E_D("replace into `tp_requestdata` values('25','avljgc1397041839','2014','4','13','1397370874','2','1','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('26','avljgc1397041839','2014','4','14','1397471557','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('27','avljgc1397041839','2014','4','15','1397551135','1','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('28','avljgc1397041839','2014','4','16','1397577830','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('29','avljgc1397041839','2014','4','17','1397738968','0','0','0','1','0','1','0');");
E_D("replace into `tp_requestdata` values('30','qbtshr1397819806','2014','4','18','1397820058','0','0','0','2','0','0','0');");
E_D("replace into `tp_requestdata` values('31','avljgc1397041839','2014','4','18','1397828065','1','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('32','avljgc1397041839','2014','4','19','1397876972','0','0','0','2','0','0','0');");
E_D("replace into `tp_requestdata` values('33','qbtshr1397819806','2014','4','20','1397925827','3','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('34','avljgc1397041839','2014','4','21','1398012654','21','0','0','2','1','1','0');");
E_D("replace into `tp_requestdata` values('35','avljgc1397041839','2014','4','22','1398128967','1','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('36','avljgc1397041839','2014','4','23','1398221353','3','1','4','0','0','0','0');");
E_D("replace into `tp_requestdata` values('37','avljgc1397041839','2014','4','24','1398338128','1','3','0','3','1','0','0');");
E_D("replace into `tp_requestdata` values('38','avljgc1397041839','2014','4','25','1398419562','0','0','5','6','0','0','0');");
E_D("replace into `tp_requestdata` values('39','avljgc1397041839','2014','4','26','1398442472','4','0','0','11','1','0','0');");
E_D("replace into `tp_requestdata` values('40','avljgc1397041839','2014','4','27','1398529407','3','0','0','21','1','1','0');");
E_D("replace into `tp_requestdata` values('41','avljgc1397041839','2014','4','28','1398615199','2','0','0','8','0','1','0');");
E_D("replace into `tp_requestdata` values('42','qtjnws1397994896','2014','4','28','1398693924','0','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('43','avljgc1397041839','2014','5','4','1399188262','1','4','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('44','avljgc1397041839','2014','5','5','1399298118','1','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('45','avljgc1397041839','2014','5','6','1399352969','3','0','0','3','1','0','0');");
E_D("replace into `tp_requestdata` values('46','avljgc1397041839','2014','5','8','1399553362','5','0','0','0','2','0','0');");
E_D("replace into `tp_requestdata` values('47','avljgc1397041839','2014','5','9','1399617643','2','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('48','avljgc1397041839','2014','5','10','1399698500','1','0','6','4','1','2','0');");
E_D("replace into `tp_requestdata` values('49','avljgc1397041839','2014','5','11','1399738880','0','0','0','15','0','0','0');");
E_D("replace into `tp_requestdata` values('50','isouej1399863564','2014','5','12','1399867965','0','0','0','4','3','0','0');");
E_D("replace into `tp_requestdata` values('51','avljgc1397041839','2014','5','12','1399870660','0','0','0','1','3','0','0');");
E_D("replace into `tp_requestdata` values('52','avljgc1397041839','2014','5','13','1399972129','0','1','0','4','1','1','0');");
E_D("replace into `tp_requestdata` values('53','isouej1399863564','2014','5','13','1399989022','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('54','isouej1399863564','2014','5','14','1399998637','1','0','0','2','1','1','0');");
E_D("replace into `tp_requestdata` values('55','wglagr1400037084','2014','5','14','1400040243','0','0','0','11','0','0','0');");
E_D("replace into `tp_requestdata` values('56','avljgc1397041839','2014','5','14','1400052284','0','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('57','wglagr1400037084','2014','5','15','1400125702','0','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('58','avljgc1397041839','2014','5','16','1400169681','0','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('59','vhnpth1399864000','2014','5','16','1400221806','0','0','0','2','0','0','0');");
E_D("replace into `tp_requestdata` values('60','imywfr1400223186','2014','5','16','1400223418','0','0','0','6','1','1','0');");
E_D("replace into `tp_requestdata` values('61','avljgc1397041839','2014','5','17','1400302312','0','5','1','12','1','1','0');");
E_D("replace into `tp_requestdata` values('62','tzqawo1400308953','2014','5','17','1400309410','0','0','0','2','0','0','0');");
E_D("replace into `tp_requestdata` values('63','fbcsqj1400322782','2014','5','17','1400324703','0','3','0','2','1','1','0');");
E_D("replace into `tp_requestdata` values('64','avljgc1397041839','2014','5','18','1400346984','0','0','0','16','4','0','0');");
E_D("replace into `tp_requestdata` values('65','nepvyy1400393099','2014','5','18','1400394201','0','0','0','25','0','0','0');");
E_D("replace into `tp_requestdata` values('66','nepvyy1400393099','2014','5','19','1400473343','6','0','0','4','2','0','0');");
E_D("replace into `tp_requestdata` values('67','avljgc1397041839','2014','5','19','1400479069','16','0','6','2','1','0','0');");
E_D("replace into `tp_requestdata` values('68','omcmpf1400514094','2014','5','19','1400514617','3','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('69','avljgc1397041839','2014','5','20','1400547487','26','0','2','4','0','0','0');");
E_D("replace into `tp_requestdata` values('70','nepvyy1400393099','2014','5','20','1400550871','11','0','3','9','0','0','0');");
E_D("replace into `tp_requestdata` values('71','hziflr1400551929','2014','5','20','1400554735','1','0','0','3','0','0','0');");
E_D("replace into `tp_requestdata` values('72','xkuxqy1400560689','2014','5','20','1400561341','2','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('73','ggupyl1400598740','2014','5','20','1400598838','2','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('74','nepvyy1400393099','2014','5','21','1400631221','5','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('75','avljgc1397041839','2014','5','21','1400631378','53','0','0','1','3','1','0');");
E_D("replace into `tp_requestdata` values('76','hziflr1400551929','2014','5','21','1400634130','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('77','wglagr1400037084','2014','5','21','1400642970','1','0','0','0','0','1','0');");
E_D("replace into `tp_requestdata` values('78','xkuxqy1400560689','2014','5','21','1400647894','1','0','0','0','2','0','0');");
E_D("replace into `tp_requestdata` values('79','ozugxw1400589873','2014','5','21','1400666185','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('80','orbhyn1400224508','2014','5','21','1400686078','1','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('81','avljgc1397041839','2014','5','22','1400710767','38','0','0','23','5','1','0');");
E_D("replace into `tp_requestdata` values('82','nepvyy1400393099','2014','5','22','1400719018','47','0','4','31','1','0','0');");
E_D("replace into `tp_requestdata` values('83','wsupsl1400754187','2014','5','22','1400754680','1','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('84','ggupyl1400598740','2014','5','22','1400758046','3','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('85','utxcrr1400760392','2014','5','22','1400761818','5','0','0','6','9','2','0');");
E_D("replace into `tp_requestdata` values('86','brogbh1400764930','2014','5','22','1400765207','0','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('87','utxcrr1400760392','2014','5','23','1400775868','5','0','0','0','11','3','0');");
E_D("replace into `tp_requestdata` values('88','avljgc1397041839','2014','5','23','1400807653','13','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('89','nepvyy1400393099','2014','5','23','1400817135','0','0','1','0','0','0','0');");
E_D("replace into `tp_requestdata` values('90','utxcrr1400760392','2014','5','25','1400982266','3','0','0','0','16','1','0');");
E_D("replace into `tp_requestdata` values('91','xkuxqy1400560689','2014','5','25','1400986006','1','1','0','0','5','1','0');");
E_D("replace into `tp_requestdata` values('92','nepvyy1400393099','2014','5','25','1400987853','1','1','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('93','avljgc1397041839','2014','5','25','1401023709','6','0','0','0','2','0','0');");
E_D("replace into `tp_requestdata` values('94','xkuxqy1400560689','2014','5','26','1401043212','5','0','0','0','5','0','0');");
E_D("replace into `tp_requestdata` values('95','utxcrr1400760392','2014','5','26','1401047911','0','0','0','0','24','4','0');");
E_D("replace into `tp_requestdata` values('96','avljgc1397041839','2014','5','26','1401069421','6','0','0','7','0','0','0');");
E_D("replace into `tp_requestdata` values('97','flpwvp1401090523','2014','5','26','1401091153','2','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('98','qpyzzq1401101914','2014','5','26','1401102250','0','0','2','0','0','0','0');");
E_D("replace into `tp_requestdata` values('99','utxcrr1400760392','2014','5','27','1401131105','0','0','0','0','16','2','0');");
E_D("replace into `tp_requestdata` values('100','avljgc1397041839','2014','5','27','1401134336','11','0','2','5','7','0','0');");
E_D("replace into `tp_requestdata` values('101','xkuxqy1400560689','2014','5','27','1401150470','0','1','0','0','2','1','0');");
E_D("replace into `tp_requestdata` values('102','qpyzzq1401101914','2014','5','27','1401152213','2','0','0','1','0','0','0');");
E_D("replace into `tp_requestdata` values('103','nepvyy1400393099','2014','5','27','1401156710','0','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('104','avljgc1397041839','2014','5','28','1401240872','9','0','0','9','1','0','0');");
E_D("replace into `tp_requestdata` values('105','xkuxqy1400560689','2014','5','28','1401241868','0','0','0','0','2','0','0');");
E_D("replace into `tp_requestdata` values('106','qpyzzq1401101914','2014','5','28','1401243176','1','0','2','1','1','0','0');");
E_D("replace into `tp_requestdata` values('107','nepvyy1400393099','2014','5','28','1401244372','1','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('108','wglagr1400037084','2014','5','28','1401251276','1','0','0','0','1','1','0');");
E_D("replace into `tp_requestdata` values('109','chsyqp1401254915','2014','5','28','1401257131','0','0','0','2','0','1','0');");
E_D("replace into `tp_requestdata` values('110','orbhyn1400224508','2014','5','28','1401270027','0','0','0','5','1','2','0');");
E_D("replace into `tp_requestdata` values('111','pgdxmk1401284729','2014','5','28','1401284936','0','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('112','rirgpp1401289818','2014','5','28','1401290985','1','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('113','rtzvcz1401302172','2014','5','29','1401302492','0','0','0','3','0','0','0');");
E_D("replace into `tp_requestdata` values('114','avljgc1397041839','2014','5','29','1401326923','39','0','0','3','3','1','0');");
E_D("replace into `tp_requestdata` values('115','xkuxqy1400560689','2014','5','29','1401341790','1','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('116','nepvyy1400393099','2014','5','29','1401353704','0','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('117','rirgpp1401289818','2014','5','29','1401355138','1','0','0','0','1','0','0');");
E_D("replace into `tp_requestdata` values('118','tzqawo1400308953','2014','5','29','1401365239','7','0','0','3','0','0','0');");
E_D("replace into `tp_requestdata` values('119','ivrnef1401365899','2014','5','29','1401369640','10','0','0','5','0','0','0');");
E_D("replace into `tp_requestdata` values('120','tzqawo1400308953','2014','5','30','1401379896','32','0','1','23','2','0','0');");
E_D("replace into `tp_requestdata` values('121','xkuxqy1400560689','2014','5','30','1401412269','0','1','0','0','1','1','0');");
E_D("replace into `tp_requestdata` values('122','avljgc1397041839','2014','5','30','1401427429','21','0','0','23','0','1','0');");
E_D("replace into `tp_requestdata` values('123','ivrnef1401365899','2014','5','30','1401432290','0','0','0','1','1','0','0');");
E_D("replace into `tp_requestdata` values('124','lfethi1401449403','2014','5','30','1401449559','1','0','0','0','0','0','0');");
E_D("replace into `tp_requestdata` values('125','mbmkor1403070884','2014','6','18','1403071103','27','0','0','0','1','0','0');");

require("../../inc/footer.php");
?>
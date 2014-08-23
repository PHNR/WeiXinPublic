<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_cart_list`;");
E_C("CREATE TABLE `tp_product_cart_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cartid` int(10) NOT NULL DEFAULT '0',
  `productid` int(10) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `total` mediumint(4) NOT NULL DEFAULT '0',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cartid` (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product_cart_list` values('1','3','3','111','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400582966');");
E_D("replace into `tp_product_cart_list` values('2','4','3','222','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400583061');");
E_D("replace into `tp_product_cart_list` values('3','5','6','200','2','oiKAjuDvbT1TMuXEE8KHWmwqS63w','ozugxw1400589873','1400591424');");
E_D("replace into `tp_product_cart_list` values('4','6','6','200','2','oiKAjuDvbT1TMuXEE8KHWmwqS63w','ozugxw1400589873','1400594446');");
E_D("replace into `tp_product_cart_list` values('5','7','5','0','0','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400594872');");
E_D("replace into `tp_product_cart_list` values('6','7','4','222','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400594872');");
E_D("replace into `tp_product_cart_list` values('7','8','4','444','4','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400594935');");
E_D("replace into `tp_product_cart_list` values('8','9','4','222','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400594974');");
E_D("replace into `tp_product_cart_list` values('9','10','4','222','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1400595262');");
E_D("replace into `tp_product_cart_list` values('10','11','7','56','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','1400631101');");
E_D("replace into `tp_product_cart_list` values('11','16','7','130','5','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','1400728333');");
E_D("replace into `tp_product_cart_list` values('12','23','7','1000','1','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','nepvyy1400393099','1400728704');");
E_D("replace into `tp_product_cart_list` values('13','26','11','888','1','o5C4_t4kIg89qqtlcqcis7xbgMds','rgccej1400813594','1400814833');");
E_D("replace into `tp_product_cart_list` values('14','27','11','888','1','o5C4_t4kIg89qqtlcqcis7xbgMds','rgccej1400813594','1400816105');");
E_D("replace into `tp_product_cart_list` values('15','28','11','888','1','o5C4_t4kIg89qqtlcqcis7xbgMds','rgccej1400813594','1400816163');");
E_D("replace into `tp_product_cart_list` values('16','29','13','20','1','o5Ik0uOieZHM7K2N5NqUjeG1Pb6E','flpwvp1401090523','1401091509');");
E_D("replace into `tp_product_cart_list` values('17','30','13','20','1','o5Ik0uOieZHM7K2N5NqUjeG1Pb6E','flpwvp1401090523','1401091697');");
E_D("replace into `tp_product_cart_list` values('18','31','13','20','1','o5Ik0uOieZHM7K2N5NqUjeG1Pb6E','flpwvp1401090523','1401091873');");
E_D("replace into `tp_product_cart_list` values('19','32','13','20','1','o5Ik0uOieZHM7K2N5NqUjeG1Pb6E','flpwvp1401090523','1401092100');");
E_D("replace into `tp_product_cart_list` values('20','33','14','22725','5','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401157532');");
E_D("replace into `tp_product_cart_list` values('21','34','14','18180','4','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401157622');");
E_D("replace into `tp_product_cart_list` values('22','37','14','13635','3','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401160637');");
E_D("replace into `tp_product_cart_list` values('23','39','14','27270','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401160899');");
E_D("replace into `tp_product_cart_list` values('24','40','14','9090','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401161752');");
E_D("replace into `tp_product_cart_list` values('30','46','4','11','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401326709');");
E_D("replace into `tp_product_cart_list` values('26','42','14','4545','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401168305');");
E_D("replace into `tp_product_cart_list` values('27','43','14','4545','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401168476');");
E_D("replace into `tp_product_cart_list` values('28','44','15','4888','1','o4ISnjmEAlTMFRPbYOa0EbsvF3t4','chsyqp1401254915','1401258788');");
E_D("replace into `tp_product_cart_list` values('29','45','14','0','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401326165');");
E_D("replace into `tp_product_cart_list` values('33','50','16','28.1','1','o1R8MtzBEWnrRp4ruF8BiIK89pxA','tzqawo1400308953','1401366203');");
E_D("replace into `tp_product_cart_list` values('34','51','16','128','1','o1R8Mt7OITX5MYlbL3ruujCii554','tzqawo1400308953','1401368416');");
E_D("replace into `tp_product_cart_list` values('36','53','16','28.1','1','o1R8MtzBEWnrRp4ruF8BiIK89pxA','tzqawo1400308953','1401373158');");
E_D("replace into `tp_product_cart_list` values('37','54','17','11','1','oS1K7tycKPvUKXGGID3mvSkcDa_w','ivrnef1401365899','1401378093');");
E_D("replace into `tp_product_cart_list` values('38','55','14','0','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401378250');");
E_D("replace into `tp_product_cart_list` values('39','56','14','0','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401378433');");
E_D("replace into `tp_product_cart_list` values('40','57','14','0','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401378745');");
E_D("replace into `tp_product_cart_list` values('41','58','14','0','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401380578');");
E_D("replace into `tp_product_cart_list` values('42','59','14','0','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401380757');");
E_D("replace into `tp_product_cart_list` values('43','60','14','0','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401380854');");
E_D("replace into `tp_product_cart_list` values('44','61','16','128','1','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1401412427');");
E_D("replace into `tp_product_cart_list` values('45','63','14','0','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1401457432');");

require("../../inc/footer.php");
?>
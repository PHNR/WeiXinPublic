<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_setinfo`;");
E_C("CREATE TABLE `tp_setinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `value` varchar(200) DEFAULT NULL,
  `kind` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=265 DEFAULT CHARSET=utf8");
E_D("replace into `tp_setinfo` values('1','2','avljgc1397041839','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('2','2','avljgc1397041839','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('3','2','avljgc1397041839','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('4','2','avljgc1397041839','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('5','2','avljgc1397041839','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('33','2','avljgc1397041839','预定人数','请输入具体人数','3','Yuyue');");
E_D("replace into `tp_setinfo` values('34','2','avljgc1397041839','急吼吼','','3','Yuyue');");
E_D("replace into `tp_setinfo` values('35','2','avljgc1397041839','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Yuyue');");
E_D("replace into `tp_setinfo` values('36','3','avljgc1397041839','person','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('37','3','avljgc1397041839','phone','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('38','3','avljgc1397041839','date','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('39','3','avljgc1397041839','time','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('40','3','avljgc1397041839','留言',NULL,'5','Jiudian');");
E_D("replace into `tp_setinfo` values('41','3','avljgc1397041839','预定人数','请输入住房人数','3','Jiudian');");
E_D("replace into `tp_setinfo` values('42','3','avljgc1397041839','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Jiudian');");
E_D("replace into `tp_setinfo` values('43','3','avljgc1397041839','达','速度','4','Jiudian');");
E_D("replace into `tp_setinfo` values('44','1','avljgc1397041839','person','1','1','Yiliao');");
E_D("replace into `tp_setinfo` values('45','1','avljgc1397041839','phone','1','1','Yiliao');");
E_D("replace into `tp_setinfo` values('46','1','avljgc1397041839','date','1','2','Yiliao');");
E_D("replace into `tp_setinfo` values('47','1','avljgc1397041839','time','1','2','Yiliao');");
E_D("replace into `tp_setinfo` values('48','1','avljgc1397041839','留言',NULL,'5','Yiliao');");
E_D("replace into `tp_setinfo` values('49','4','qbtshr1397819806','person','1','1','Yiliao');");
E_D("replace into `tp_setinfo` values('50','4','qbtshr1397819806','phone','1','1','Yiliao');");
E_D("replace into `tp_setinfo` values('51','4','qbtshr1397819806','date',NULL,'2','Yiliao');");
E_D("replace into `tp_setinfo` values('52','4','qbtshr1397819806','time',NULL,'2','Yiliao');");
E_D("replace into `tp_setinfo` values('53','4','qbtshr1397819806','留言',NULL,'5','Yiliao');");
E_D("replace into `tp_setinfo` values('54','4','qbtshr1397819806','您要预约的医师','请输入您要预约的医师名字','3','Yiliao');");
E_D("replace into `tp_setinfo` values('55','4','qbtshr1397819806','医疗科目','门诊|急诊|口腔科|神经科','4','Yiliao');");
E_D("replace into `tp_setinfo` values('56','5','avljgc1397041839','person','1','1','Jiuba');");
E_D("replace into `tp_setinfo` values('57','5','avljgc1397041839','phone','1','1','Jiuba');");
E_D("replace into `tp_setinfo` values('58','5','avljgc1397041839','date','1','2','Jiuba');");
E_D("replace into `tp_setinfo` values('59','5','avljgc1397041839','time','1','2','Jiuba');");
E_D("replace into `tp_setinfo` values('60','5','avljgc1397041839','留言',NULL,'5','Jiuba');");
E_D("replace into `tp_setinfo` values('61','7','avljgc1397041839','person','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('62','7','avljgc1397041839','phone','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('63','7','avljgc1397041839','date','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('64','7','avljgc1397041839','time','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('65','7','avljgc1397041839','留言',NULL,'5','Huisuo');");
E_D("replace into `tp_setinfo` values('66','8','avljgc1397041839','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('67','8','avljgc1397041839','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('68','8','avljgc1397041839','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('69','8','avljgc1397041839','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('70','8','avljgc1397041839','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('71','9','avljgc1397041839','person','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('72','9','avljgc1397041839','phone','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('73','9','avljgc1397041839','date','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('74','9','avljgc1397041839','time','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('75','9','avljgc1397041839','留言',NULL,'5','Huisuo');");
E_D("replace into `tp_setinfo` values('76','9','avljgc1397041839','预定人数','请输入预定人数','3','Huisuo');");
E_D("replace into `tp_setinfo` values('77','9','avljgc1397041839','选择会所包销','包销201|包销202|包销203|包销205|包销206|包销207|包销208','4','Huisuo');");
E_D("replace into `tp_setinfo` values('78','6','qtjnws1397994896','person','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('79','6','qtjnws1397994896','phone','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('80','6','qtjnws1397994896','date','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('81','6','qtjnws1397994896','time','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('82','6','qtjnws1397994896','留言',NULL,'5','Jiudian');");
E_D("replace into `tp_setinfo` values('83','10','qtjnws1397994896','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('84','10','qtjnws1397994896','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('85','10','qtjnws1397994896','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('86','10','qtjnws1397994896','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('87','10','qtjnws1397994896','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('88','11','qtjnws1397994896','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('89','11','qtjnws1397994896','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('90','11','qtjnws1397994896','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('91','11','qtjnws1397994896','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('92','11','qtjnws1397994896','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('93','12','isouej1399863564','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('94','12','isouej1399863564','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('95','12','isouej1399863564','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('96','12','isouej1399863564','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('97','12','isouej1399863564','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('98','15','rirjgb1400124807','person','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('99','15','rirjgb1400124807','phone','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('100','15','rirjgb1400124807','date','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('101','15','rirjgb1400124807','time','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('102','15','rirjgb1400124807','留言',NULL,'5','Jiudian');");
E_D("replace into `tp_setinfo` values('103','16','vhnpth1399864000','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('104','16','vhnpth1399864000','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('105','16','vhnpth1399864000','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('106','16','vhnpth1399864000','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('107','16','vhnpth1399864000','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('108','16','vhnpth1399864000','预定人数','请输入预定人数','3','Ktv');");
E_D("replace into `tp_setinfo` values('109','16','vhnpth1399864000','选择欢唱套餐','满200免包销|100包段欢乐唱|满300送酒水|买2小时送两小时','4','Ktv');");
E_D("replace into `tp_setinfo` values('110','17','orbhyn1400224508','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('111','17','orbhyn1400224508','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('112','17','orbhyn1400224508','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('113','17','orbhyn1400224508','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('114','17','orbhyn1400224508','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('115','2','fbcsqj1400322782','person','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('116','2','fbcsqj1400322782','phone','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('117','2','fbcsqj1400322782','date','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('118','2','fbcsqj1400322782','time','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('119','2','fbcsqj1400322782','留言',NULL,'5','Jiudian');");
E_D("replace into `tp_setinfo` values('120','3','nepvyy1400393099','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('121','3','nepvyy1400393099','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('122','3','nepvyy1400393099','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('123','3','nepvyy1400393099','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('124','3','nepvyy1400393099','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('125','5','nepvyy1400393099','person','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('126','5','nepvyy1400393099','phone','1','1','Jiudian');");
E_D("replace into `tp_setinfo` values('127','5','nepvyy1400393099','date','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('128','5','nepvyy1400393099','time','1','2','Jiudian');");
E_D("replace into `tp_setinfo` values('129','5','nepvyy1400393099','留言',NULL,'5','Jiudian');");
E_D("replace into `tp_setinfo` values('130','7','nepvyy1400393099','person','1','1','Yiliao');");
E_D("replace into `tp_setinfo` values('131','7','nepvyy1400393099','phone','1','1','Yiliao');");
E_D("replace into `tp_setinfo` values('132','7','nepvyy1400393099','date','1','2','Yiliao');");
E_D("replace into `tp_setinfo` values('133','7','nepvyy1400393099','time','1','2','Yiliao');");
E_D("replace into `tp_setinfo` values('134','7','nepvyy1400393099','留言',NULL,'5','Yiliao');");
E_D("replace into `tp_setinfo` values('135','8','nepvyy1400393099','person','1','1','Jiuba');");
E_D("replace into `tp_setinfo` values('136','8','nepvyy1400393099','phone','1','1','Jiuba');");
E_D("replace into `tp_setinfo` values('137','8','nepvyy1400393099','date','1','2','Jiuba');");
E_D("replace into `tp_setinfo` values('138','8','nepvyy1400393099','time','1','2','Jiuba');");
E_D("replace into `tp_setinfo` values('139','8','nepvyy1400393099','留言',NULL,'5','Jiuba');");
E_D("replace into `tp_setinfo` values('140','9','nepvyy1400393099','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('141','9','nepvyy1400393099','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('142','9','nepvyy1400393099','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('143','9','nepvyy1400393099','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('144','9','nepvyy1400393099','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('159','11','orbhyn1400224508','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('158','11','orbhyn1400224508','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('157','11','orbhyn1400224508','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('156','4','nepvyy1400393099','留言',NULL,'5','Huisuo');");
E_D("replace into `tp_setinfo` values('155','4','nepvyy1400393099','time','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('154','4','nepvyy1400393099','date','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('152','4','nepvyy1400393099','person','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('153','4','nepvyy1400393099','phone','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('160','11','orbhyn1400224508','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('161','11','orbhyn1400224508','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('162','12','avljgc1397041839','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('163','12','avljgc1397041839','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('164','12','avljgc1397041839','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('165','12','avljgc1397041839','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('166','12','avljgc1397041839','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('167','12','avljgc1397041839','预定人数','请输入具体人数','3','Yuyue');");
E_D("replace into `tp_setinfo` values('168','12','avljgc1397041839','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Yuyue');");
E_D("replace into `tp_setinfo` values('169','5','orbhyn1400224508','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('170','5','orbhyn1400224508','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('171','5','orbhyn1400224508','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('172','5','orbhyn1400224508','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('173','5','orbhyn1400224508','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('174','6','brogbh1400764930','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('175','6','brogbh1400764930','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('176','6','brogbh1400764930','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('177','6','brogbh1400764930','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('178','6','brogbh1400764930','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('179','6','brogbh1400764930','预定人数','请输入预定人数','3','Ktv');");
E_D("replace into `tp_setinfo` values('180','6','brogbh1400764930','选择欢唱套餐','满200免包销|100包段欢乐唱|满300送酒水|买2小时送两小时','4','Ktv');");
E_D("replace into `tp_setinfo` values('181','9','chsyqp1401254915','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('182','9','chsyqp1401254915','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('183','9','chsyqp1401254915','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('184','9','chsyqp1401254915','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('185','9','chsyqp1401254915','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('186','9','chsyqp1401254915','预定人数','请输入预定人数','3','Ktv');");
E_D("replace into `tp_setinfo` values('187','9','chsyqp1401254915','选择欢唱套餐','满200免包销|100包段欢乐唱|满300送酒水|买2小时送两小时','4','Ktv');");
E_D("replace into `tp_setinfo` values('188','1','avljgc1397041839','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('189','1','avljgc1397041839','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('190','1','avljgc1397041839','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('191','1','avljgc1397041839','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('192','1','avljgc1397041839','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('193','1','avljgc1397041839','预定人数','请输入预定人数','3','Ktv');");
E_D("replace into `tp_setinfo` values('194','1','avljgc1397041839','选择欢唱套餐','满200免包销|100包段欢乐唱|满300送酒水|买2小时送两小时','4','Ktv');");
E_D("replace into `tp_setinfo` values('195','1','avljgc1397041839','11','11','4','Ktv');");
E_D("replace into `tp_setinfo` values('196','5','orbhyn1400224508','预定人数','请输入具体人数','3','Yuyue');");
E_D("replace into `tp_setinfo` values('197','5','orbhyn1400224508','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Yuyue');");
E_D("replace into `tp_setinfo` values('198','10','orbhyn1400224508','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('199','10','orbhyn1400224508','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('200','10','orbhyn1400224508','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('201','10','orbhyn1400224508','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('202','10','orbhyn1400224508','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('203','10','orbhyn1400224508','预定人数','请输入具体人数','3','Yuyue');");
E_D("replace into `tp_setinfo` values('204','10','orbhyn1400224508','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Yuyue');");
E_D("replace into `tp_setinfo` values('205','11','gcpvcb1401284265','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('206','11','gcpvcb1401284265','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('207','11','gcpvcb1401284265','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('208','11','gcpvcb1401284265','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('209','11','gcpvcb1401284265','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('210','11','gcpvcb1401284265','预定人数','请输入具体人数','3','Yuyue');");
E_D("replace into `tp_setinfo` values('211','11','gcpvcb1401284265','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Yuyue');");
E_D("replace into `tp_setinfo` values('212','13','rtzvcz1401302172','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('213','13','rtzvcz1401302172','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('214','13','rtzvcz1401302172','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('215','13','rtzvcz1401302172','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('216','13','rtzvcz1401302172','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('217','13','rtzvcz1401302172','预定人数','请输入预定人数','3','Ktv');");
E_D("replace into `tp_setinfo` values('218','13','rtzvcz1401302172','选择欢唱套餐','满200免包销|100包段欢乐唱|满300送酒水|买2小时送两小时','4','Ktv');");
E_D("replace into `tp_setinfo` values('219','14','rtzvcz1401302172','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('220','14','rtzvcz1401302172','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('221','14','rtzvcz1401302172','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('222','14','rtzvcz1401302172','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('223','14','rtzvcz1401302172','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('224','15','ivrnef1401365899','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('225','15','ivrnef1401365899','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('226','15','ivrnef1401365899','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('227','15','ivrnef1401365899','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('228','15','ivrnef1401365899','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('229','15','ivrnef1401365899','预定人数','请输入预定人数','3','Ktv');");
E_D("replace into `tp_setinfo` values('230','15','ivrnef1401365899','选择欢唱套餐','满200免包销|100包段欢乐唱|满300送酒水|买2小时送两小时','4','Ktv');");
E_D("replace into `tp_setinfo` values('231','16','tzqawo1400308953','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('232','16','tzqawo1400308953','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('233','16','tzqawo1400308953','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('234','16','tzqawo1400308953','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('235','16','tzqawo1400308953','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('236','17','tzqawo1400308953','person','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('237','17','tzqawo1400308953','phone','1','1','Huisuo');");
E_D("replace into `tp_setinfo` values('238','17','tzqawo1400308953','date','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('239','17','tzqawo1400308953','time','1','2','Huisuo');");
E_D("replace into `tp_setinfo` values('240','17','tzqawo1400308953','留言',NULL,'5','Huisuo');");
E_D("replace into `tp_setinfo` values('241','18','tzqawo1400308953','person','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('242','18','tzqawo1400308953','phone','1','1','Ktv');");
E_D("replace into `tp_setinfo` values('243','18','tzqawo1400308953','date','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('244','18','tzqawo1400308953','time','1','2','Ktv');");
E_D("replace into `tp_setinfo` values('245','18','tzqawo1400308953','留言',NULL,'5','Ktv');");
E_D("replace into `tp_setinfo` values('246','19','tzqawo1400308953','person','1','1','Jiuba');");
E_D("replace into `tp_setinfo` values('247','19','tzqawo1400308953','phone','1','1','Jiuba');");
E_D("replace into `tp_setinfo` values('248','19','tzqawo1400308953','date','1','2','Jiuba');");
E_D("replace into `tp_setinfo` values('249','19','tzqawo1400308953','time','1','2','Jiuba');");
E_D("replace into `tp_setinfo` values('250','19','tzqawo1400308953','留言',NULL,'5','Jiuba');");
E_D("replace into `tp_setinfo` values('251','19','tzqawo1400308953','预定人数','请输入预定人数','3','Jiuba');");
E_D("replace into `tp_setinfo` values('252','19','tzqawo1400308953','选择服务套餐','眼部巴拿芬能量热石|香薰美白保湿护理|汉方面部推板|激光洗眉|水疗SPA','4','Jiuba');");
E_D("replace into `tp_setinfo` values('253','12','pgdxmk1401284729','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('254','12','pgdxmk1401284729','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('255','12','pgdxmk1401284729','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('256','12','pgdxmk1401284729','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('257','12','pgdxmk1401284729','留言',NULL,'5','Yuyue');");
E_D("replace into `tp_setinfo` values('258','12','pgdxmk1401284729','预定人数','请输入具体人数','3','Yuyue');");
E_D("replace into `tp_setinfo` values('259','12','pgdxmk1401284729','选择房间标准','单人房|双人房|标准房|豪华房|总统房','4','Yuyue');");
E_D("replace into `tp_setinfo` values('260','20','ivrnef1401365899','person','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('261','20','ivrnef1401365899','phone','1','1','Yuyue');");
E_D("replace into `tp_setinfo` values('262','20','ivrnef1401365899','date','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('263','20','ivrnef1401365899','time','1','2','Yuyue');");
E_D("replace into `tp_setinfo` values('264','20','ivrnef1401365899','留言',NULL,'5','Yuyue');");

require("../../inc/footer.php");
?>
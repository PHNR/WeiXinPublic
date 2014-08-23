<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wxuser`;");
E_C("CREATE TABLE `tp_wxuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `routerid` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `wxname` varchar(60) NOT NULL COMMENT '公众号名称',
  `winxintype` smallint(2) NOT NULL DEFAULT '1',
  `appid` varchar(50) NOT NULL DEFAULT '',
  `appsecret` varchar(50) NOT NULL DEFAULT '',
  `wxid` varchar(20) NOT NULL COMMENT '公众号原始ID',
  `weixin` char(20) NOT NULL COMMENT '微信号',
  `headerpic` char(255) NOT NULL COMMENT '头像地址',
  `token` char(255) NOT NULL,
  `province` varchar(30) NOT NULL COMMENT '省',
  `city` varchar(60) NOT NULL COMMENT '市',
  `qq` char(25) NOT NULL COMMENT '公众号邮箱',
  `wxfans` int(11) NOT NULL COMMENT '微信粉丝',
  `typeid` int(11) NOT NULL COMMENT '分类ID',
  `typename` varchar(90) NOT NULL DEFAULT '0' COMMENT '分类名',
  `tongji` text NOT NULL,
  `allcardnum` int(11) NOT NULL,
  `cardisok` int(11) NOT NULL,
  `yetcardnum` int(11) NOT NULL,
  `totalcardnum` int(11) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `tpltypeid` varchar(255) NOT NULL DEFAULT '1' COMMENT '默认首页模版ID',
  `updatetime` varchar(13) NOT NULL,
  `tpltypename` varchar(20) NOT NULL COMMENT '首页模版名',
  `tpllistid` varchar(2) NOT NULL COMMENT '列表模版ID',
  `tpllistname` varchar(20) NOT NULL COMMENT '列表模版名',
  `tplcontentid` varchar(2) NOT NULL COMMENT '内容模版ID',
  `tplcontentname` varchar(20) NOT NULL COMMENT '内容模版名',
  `transfer_customer_service` tinyint(1) NOT NULL DEFAULT '0',
  `color_id` int(2) NOT NULL,
  `phone` text NOT NULL,
  `smsstatus` text NOT NULL,
  `smsuser` text NOT NULL,
  `smspassword` text NOT NULL,
  `email` text NOT NULL,
  `emailstatus` text NOT NULL,
  `emailuser` text NOT NULL,
  `emailpassword` text NOT NULL,
  `username` text NOT NULL,
  `yuyuestatus` text NOT NULL,
  `toupiaostatus` text NOT NULL,
  `biaodanstatus` text NOT NULL,
  `dingcanstatus` text NOT NULL,
  `carstatus` text NOT NULL,
  `jiudianstatus` text NOT NULL,
  `jiubastatus` text NOT NULL,
  `yiliaostatus` text NOT NULL,
  `wnstatus` text NOT NULL,
  `tystatus` text NOT NULL,
  `ktvstatus` text NOT NULL,
  `huisuostatus` text NOT NULL,
  `yuyuesmsstatus` text NOT NULL,
  `dingcansmsstatus` text NOT NULL,
  `toupiaosmsstatus` text NOT NULL,
  `carsmsstatus` text NOT NULL,
  `jiudiansmsstatus` text NOT NULL,
  `jiubasmsstatus` text NOT NULL,
  `yiliaosmsstatus` text NOT NULL,
  `wnsmsstatus` text NOT NULL,
  `ktvsmsstatus` text NOT NULL,
  `huisuosmsstatus` text NOT NULL,
  `shoptpltypeid` int(11) NOT NULL COMMENT '商城模版id',
  `shoptpltypename` varchar(20) NOT NULL COMMENT '商城模版名称',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COMMENT='微信公共帐号'");
E_D("replace into `tp_wxuser` values('1','','2','微享服务','2','wxd358435df06ac18d','b85062dc4888faf09eae9f05729ac977','gh_4d1aabbfadc9','weixiangfuwu','https://mp.weixin.qq.com/misc/getheadimg?fakeid=3095318825&amp;token=456410230&amp;lang=zh_CN','kecjmg1397032997','p','c','1397032997@yourdomain.com','0','8','服务','','0','0','0','0','1397033046','17','1397033077','117_index_usn3x','1','yl_list','1','yl_content','0','0','','','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','0');");
E_D("replace into `tp_wxuser` values('2','','1','康视眼镜','1','wx77425f1024f303d3','a27b3c740492982751d8b0bf99f5a964','gh_40d19c922d00','ksglasses1987','http://v2.freep.cn/110_3tb_140410193330rgml512293.jpg','pvosmg1397034660','浙江省','温州市','1397034660@yourdomain.com','0','8','服务','','100','0','100','100','1397034738','1','1397129648','ty_index','7','yl_list004','1','yl_content','0','0','','','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','0');");
E_D("replace into `tp_wxuser` values('3','','3','ces','3','wx928bea7ac0f4f622','ea8950a24d98636a8a9c4eb1ba8b1e7f','gh_423dwjkew','都是俺的1','http://wzweixiang.com/uploads/a/avljgc1397041839/a/7/4/f/thumb_536f5c2a9ba20.png','avljgc1397041839','p','c','1397041839@yourdomain.com','0','1','情感','','1000','1','199','199','1397041852','119','1401267582','1119','6','yl_list003','3','ktv_content','0','0','5','0','283','52','2103695452@qq.com','1','18267720632@163.com','lry520520','','1','1','','1','1','1','1','1','1','1','1','1','0','0','0','0','0','0','0','0','0','0','12','112_index');");
E_D("replace into `tp_wxuser` values('34','','32','金鼎国际','2','wx741dc046e6167547','955e73dbc22edb3fa3dfdb2e344ae0fd','gh_46046104fbbc','jingding','./tpl/User/default/common/images/portrait.jpg','fbcsqj1400322782','p','c','1400322782@yourdomain.com','0','8','','','0','0','0','0','1400322813','1','1400327696','ty_index','1','yl_list','1','ktv_content','0','0','','','','','kennyhn@163.com','1','18267720632@163.com','lry520520','','1','1','','1','1','1','1','1','1','1','1','1','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('5','','9','fcg','1','','','gh_423dwjkeww3','fcg','./tpl/User/default/common/images/portrait.jpg','muxwct1397874036','p','c','1397874036@yourdomain.com','0','8','服务','','0','0','0','0','1397874051','1','1397874051','ty_index','1','yl_list','1','ktv_content','0','0','','','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','0');");
E_D("replace into `tp_wxuser` values('62','','68','云南微商汇','1','','','gh_4ffa2368c7e1','ynvsh360','./tpl/User/default/common/images/portrait.jpg','pgdxmk1401284729','p','c','1401284729@yourdomain.com','0','8','服务','','0','0','0','0','1401284746','121','1401284746','1121','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('33','','12','生活无处不欢乐','1','','','gh_19be7190b884','shwcbhl','http://wzweixiang.com/uploads/t/tzqawo1400308953/a/4/8/2/thumb_538717fb6ba86.jpg','tzqawo1400308953','p','c','1400308953@yourdomain.com','0','8','服务','','1000','1','99','99','1400309066','104','1401428932','1104','1','yl_list','1','ktv_content','0','1','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','8','108_index');");
E_D("replace into `tp_wxuser` values('9','','6','fdsd','1','','','sfsd','sfs','./tpl/User/default/common/images/portrait.jpg','lufpbx1399424858','p','c','1399424858@yourdomain.com','0','8','服务','','100','1','0','0','1399424868','1','1399424868','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('27','','42','新海传媒','2','wx5513f34d2cde35d5','a8d408d89a3a222b40ca55db83db1101','gh_504fe5f6ff85','sinoseamedia','./tpl/User/default/common/images/portrait.jpg','wglagr1400037084','p','c','1400037084@yourdomain.com','0','8','','','100','1','0','0','1400037204','19','1400126093','119_index_jsg2','4','ktv_list','1','yl_content','0','0','18687755565','1','sinosea','sinosea','115387@qq.com','1','sinoseashow@163.com','yangsong','','1','1','','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','101_index_wis2a');");
E_D("replace into `tp_wxuser` values('35','','12','滴答快抢','3','','','gh_423dwjkeww3','gh_423dwjkeww3','./tpl/User/default/common/images/portrait.jpg','nepvyy1400393099','p','c','1400393099@yourdomain.com','0','8','','','1000','1','9','9','1400393116','120','1400495733','1120','1','yl_list','1','yl_content','0','0','','','','','2860652032@qq.com','1','migg2008@163.com','luohami85680671@','','1','1','','1','1','1','1','1','1','1','1','1','','','','','','','','','','','9','109_index');");
E_D("replace into `tp_wxuser` values('31','','3','wlj','2','wx41472369f94a31ec','ae7525756867d85f43e2443a5847c25e','gh_bb814978f650','weilengjiang','./tpl/User/default/common/images/portrait.jpg','imywfr1400223186','p','c','1400223186@yourdomain.com','0','8','','','100','0','0','0','1400223243','1','1400224419','ty_index','1','yl_list','1','ktv_content','0','0','','','','','859033082@qq.com','1','kennyhn@163.com','Lzh0426','','1','1','','1','1','1','1','1','1','1','1','1','','','','','','','','','','','2','102_index_wis4a');");
E_D("replace into `tp_wxuser` values('36','','12','邢台100','1','','','gh_bcfe42f0e92c','qq81325818','./tpl/User/default/common/images/portrait.jpg','reiesr1400475948','p','c','1400475948@yourdomain.com','0','8','服务','','1000','1','0','0','1400476007','120','1400476007','1120','1','yl_list','1','ktv_content','1','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2','102_index_wis4a');");
E_D("replace into `tp_wxuser` values('37','','35','第三方的身份','1','','','当时发生地方','当时发生的','./tpl/User/default/common/images/portrait.jpg','cytadf1400496099','p','c','1400496099@yourdomain.com','0','8','服务','','1000','0','0','0','1400496104','1','1400496104','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('42','','12','盂县旧广场德克士','1','','','gh_0904a42e9977','yxdicos','http://wzweixiang.com/uploads/q/qrjasb1400560397/f/6/2/e/thumb_537adcbad6455.jpg','xkuxqy1400560689','山西','c','1400560689@yourdomain.com','1000','8','服务','','1000','1','0','0','1400560802','1','1401251979','101_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('41','','12','盂县生活','1','','','gh_cd21adc0ca4a','yuxian360shenghuo','http://wzweixiang.com/uploads/q/qrjasb1400560397/f/6/2/e/thumb_537adcbad6455.jpg','qrjasb1400560397','山西','阳泉','1400560397@yourdomain.com','1000','8','服务','','1000','1','0','0','1400560421','62','1400560841','index162','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('40','','12','海阔天空','1','','','gh_dc1df132d6e2','wyh-92','./tpl/User/default/common/images/portrait.jpg','hziflr1400551929','p','c','1400551929@yourdomain.com','0','8','服务','','100','1','0','0','1400552056','1','1400552056','101_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','4','104_index');");
E_D("replace into `tp_wxuser` values('43','','12','暨阳微美食','1','','','gh_ab0255465d7a','jywms103','./tpl/User/default/common/images/portrait.jpg','ozugxw1400589873','p','c','1400589873@yourdomain.com','0','8','服务','','1000','1','0','0','1400589881','34','1400589881','134_index_viw3a','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','1','101_index_wis2a');");
E_D("replace into `tp_wxuser` values('44','','12','阳光维修服务','1','','','gh_6ccc55ded70c','dingchenwx','./tpl/User/default/common/images/portrait.jpg','ggupyl1400598740','p','c','1400598740@yourdomain.com','0','8','服务','','100','1','0','0','1400598774','1','1400598774','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('45','','3','44','1','','','44','44','./tpl/User/default/common/images/portrait.jpg','xgtfui1400681463','p','c','1400681463@yourdomain.com','0','8','服务','','0','0','0','0','1400681466','1','1400681466','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('46','','12','金点原子锁','1','','','gh_a82d8ecbf13e','jdyz008','./tpl/User/default/common/images/portrait.jpg','wsupsl1400754187','p','c','1400754187@yourdomain.com','0','8','服务','','1000','1','9','9','1400754209','1','1400754209','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('47','','3','乐善公益协会','3','wx563a826f2cb1526a','cbec87fc14b37a15ae45f3fa2b1a67c0','gh_fc54c854e5fc','wwwoocidcom','http://wzweixiang.com/uploads/a/admin/7/4/b/1/thumb_537de8896d331.jpg','utxcrr1400760392','广东','茂名','boss@oocid.com','0','8','服务','','100','1','0','0','1400760429','1','1400760479','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('48','','12','微冷江','2','wx41472369f94a31ec','ae7525756867d85f43e2443a5847c25e','gh_bb814978f650','weilengjiang','./tpl/User/default/common/images/portrait.jpg','brogbh1400764930','p','c','1400764930@yourdomain.com','0','8','','','100','1','0','0','1400765000','1','1400765120','ty_index','1','yl_list','1','ktv_content','0','0','','','','','859033082@qq.com','1','kennyhn@163.com','Lzh0426','','1','1','','1','1','1','1','1','1','1','1','1','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('49','','12','微小宝点餐演示账号 ','1','','','gh_da8fbf1246d9','sycqdc','/tpl/User/default/common/images/portrait.jpg','rgccej1400813594','p','c','1400813594@yourdomain.com','0','8','','','1000','1','0','0','1400813749','120','1401092618','1120','1','yl_list','1','ktv_content','0','0','','','','','tfrguhrty','0','ghjffg','jgfhjf','','0','0','','0','0','0','0','0','0','0','0','0','','','','','','','','','','','1','101_index_wis2a');");
E_D("replace into `tp_wxuser` values('51','','12','执笔写青春','1','','','gh_f42b3c10c863','sjz-xfyx','./tpl/User/default/common/images/portrait.jpg','qpyzzq1401101914','p','c','1401101914@yourdomain.com','0','8','服务','','1000','0','0','0','1401102052','1','1401102052','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('52','','12','1234567','1','','','1234567','1234567','./tpl/User/default/common/images/portrait.jpg','yvwtyq1401163253','p','c','1401163253@yourdomain.com','0','8','服务','','0','0','0','0','1401163268','1','1401163268','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('53','','12','554','1','','','554','554','./tpl/User/default/common/images/portrait.jpg','bnuvwn1401163296','p','c','1401163296@yourdomain.com','0','8','服务','','0','0','0','0','1401163309','1','1401163309','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('54','','12','test','1','','','test','test','./tpl/User/default/common/images/portrait.jpg','fpiuyp1401163488','p','c','1401163488@yourdomain.com','0','8','服务','','0','0','0','0','1401163494','1','1401163494','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('55','','12','testtest','1','','','testtest','testtest','./tpl/User/default/common/images/portrait.jpg','ugyteu1401163507','p','c','1401163507@yourdomain.com','0','8','服务','','1000','1','0','0','1401163514','1','1401163514','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('56','','12','正能网络-茂名在线','3','','','gh_18c2b0f9471d','gdmmcom520','./tpl/User/default/common/images/portrait.jpg','psdbsb1401164166','p','c','1401164166@yourdomain.com','0','8','服务','','0','0','0','0','1401164265','1','1401164265','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('59','','12','iphone','1','','','gh_d66034d9f1a9','ldpgxw','./tpl/User/default/common/images/portrait.jpg','chsyqp1401254915','p','c','1401254915@yourdomain.com','0','8','服务','','1000','1','0','0','1401255006','1','1401255006','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','1','101_index_wis2a');");
E_D("replace into `tp_wxuser` values('60','','65','八大景','1','','','gh_7bc445d5ca74','badajing','./tpl/User/default/common/images/portrait.jpg','sdqbre1401259557','p','c','1401259557@yourdomain.com','0','8','服务','','0','0','0','0','1401259600','1','1401259600','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('61','','12','云南微商汇','1','','','gh_4ffa2368c7e1','ynvsh360','./tpl/User/default/common/images/portrait.jpg','gcpvcb1401284265','p','c','1401284265@yourdomain.com','0','8','服务','','0','0','0','0','1401284349','1','1401284349','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('63','','12','勇哥','1','','','gh_132b186b77cc','pq416503055','./tpl/User/default/common/images/portrait.jpg','rirgpp1401289818','p','c','1401289818@yourdomain.com','0','8','服务','','1000','1','0','0','1401290770','1','1401290770','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2','102_index_wis4a');");
E_D("replace into `tp_wxuser` values('64','','12','黔西南KTV策划','1','','','gh_3f48606801fc','quanhai99','./tpl/User/default/common/images/portrait.jpg','rtzvcz1401302172','p','c','767421930@qq.com','0','8','服务','','1000','1','0','0','1401302180','1','1401302672','ty_index','1','yl_list','1','ktv_content','0','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0','');");
E_D("replace into `tp_wxuser` values('65','','12','一路顺风','1','','','gh_d76cc8d68804','qsq08','./tpl/User/default/common/images/portrait.jpg','ivrnef1401365899','p','c','1401365899@yourdomain.com','0','8','服务','','1000','1','10','10','1401366239','39','1401366239','139_index_ktv','1','yl_list','1','ktv_content','1','0','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','4','104_index');");

require("../../inc/footer.php");
?>
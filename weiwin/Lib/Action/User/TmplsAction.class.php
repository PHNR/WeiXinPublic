<?php

/**
 * 通用模板管理
 * */
class TmplsAction extends UserAction {
    public function index() {
        $db = D('Wxuser');
        $where['token'] = session('token');
        $where['uid'] = session('uid');
        $info = $db->where($where)->find();
        $this->assign('info', $info);
        //模板提示信息
        $desinfo[1] = "";
        $desinfo[2] = "列表式图片模版，缩略图建议使用150*150或近似尺寸比例的图片。";
        $desinfo[3] = "列表式图片模版，缩略图建议使用150*150或近似尺寸比例的图片。";
        $desinfo[4] = "列表式图片模版，缩略图建议使用150*150或近似尺寸比例的图片。";
        $desinfo[5] = "文字标签式模版，顶部幻灯片尺寸为640*320或近似等比例图片。";
        $desinfo[6] = "";
        $desinfo[7] = "";
        $desinfo[8] = "";
        $desinfo[9] = "";
        $desinfo[10] = "";
        $desinfo[11] = "左右图文式模版，顶部幻灯片建议使用尺寸为640*320或近似等比例图片；分类图片建议使用450*300或近似等比例图片，请不要使用高度大于或接近于宽度的图片。";
        $desinfo[12] = "";
        $desinfo[13] = "";
        $desinfo[14] = "";
        $desinfo[15] = "";
        $desinfo[16] = "图片式模板，顶部幻灯片建议尺寸为宽640*高320或近似等比例的图片，文字为分类名称及分类描述，名称建议4个字符，描述限制10个字符以内；图片为分类封面，建议尺寸为宽165*高100或近似等比例图片";
        $desinfo[17] = "图标式模板";
        $desinfo[18] = "图标式模板，顶部幻灯片建议尺寸为宽640*高320或近似等比例的图片。";
        $desinfo[19] = "图标式模板，顶部幻灯片建议尺寸为宽640*高320或近似等比例的图片。";
        $desinfo[20] = "支持二级分类，顶部幻灯片建议尺寸为宽640*高320或近似等比例的图片，幻灯下4个图标为分类管理的前4个分类，图标下第一块内容为第五个分类的分类封面、分类名称及子分类名称，建议尺寸300*300或1:1图片，下面依次类推。";
        $desinfo[21] = "图标式模板，顶部幻灯片建议尺寸为宽640*高320或近似等比例的图片，分类前8个为图标及文字展示，后面分类为图片展示，建议尺寸为宽150*高90或等比例图片。";
        $desinfo[22] = "图标式模板，按分类顺序依次展现，有图片显示的分类，图片尺寸建议为宽150*85高或的等比例图片。";
        $desinfo[23] = "汽车行业专属模板，顶部幻灯片建议尺寸为宽640*高320或近似等比例的图片，幻灯下4个图标为分类管理的前4个分类，后面分类依次展示，图片建议尺寸为宽310*高130或等比例图片，logo图标为官网logo，需等比尺寸的png格式图片。";
        $desinfo[24] = "此模板适合做简单版纯展示的会员卡，头部图片就是首页封面图，宽720高随便，如果用幻灯片记住一定要相同的尺寸。小图标尺寸是正方形300x300,一个分类一页显示8个二级分类。";
        $desinfo[25] = "左右双栏模版，顶部幻灯片尺寸为640*320或近似等比例图片，如使用正方形图片会使得页面不美观；分类图片建议使用300*200或近似等比例图片，使用宽度小于高度的(如200*300)尺寸图片将使页面惨不忍睹。";
        $desinfo[26] = "图标式模版，顶部幻灯片建议使用尺寸为640*320或近似等比例图片；分类图片请使用正方形尺寸的图片。";
        $desinfo[27] = "";
        $desinfo[28] = "图标式模版，顶部幻灯片建议使用尺寸为640*320或近似等比例图片；分类图片请使用正方形尺寸的图片。";
        $desinfo[29] = "图标式模版，顶部幻灯片建议使用尺寸为640*320或近似等比例图片；分类图片请使用正方形尺寸的图片。";
        $desinfo[30] = "图标式模版，顶部幻灯片建议使用尺寸为640*320或近似等比例图片；分类图片请使用正方形尺寸的图片。";
        $desinfo[31] = "此模板适合做简单版纯展示的会员卡，头部图片就是首页封面图，宽720高随便，如果用幻灯片记住一定要相同的尺寸。小图标尺寸是正方形300x300,一个分类一页显示8个二级分类。";
        $desinfo[32] = "此模板适合做简单版纯展示的会员卡，头部图片就是首页封面图，宽720高随便，如果用幻灯片记住一定要相同的尺寸。小图标尺寸是正方形300x300,一个分类一页显示6个二级分类。";
        $desinfo[33] = "此模板支持二级分类，适合分类比较多的地方公众号，小图标为正方形300x300px。";
        $desinfo[34] = "此模板支持二级分类，适合分类比较多的地方公众号，小图标为正方形300x300px。";
        $desinfo[35] = "此模板支持二级分类，适合分类比较多的地方公众号，前4个一级分类可以突出显示，小图标";
        $desinfo[36] = "";
        $this->assign('desinfo', $desinfo);
        $this->display();
    }

    public function add() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch($gets) {
            case 1:
                $data['tpltypeid'] = 1;
                $data['tpltypename'] = '101_index';
                break;
            case 2:
                $data['tpltypeid'] = 2;
                $data['tpltypename'] = '102_index';
                break;
            case 3:
                $data['tpltypeid'] = 3;
                $data['tpltypename'] = '103_index';
                break;
            case 4:
                $data['tpltypeid'] = 4;
                $data['tpltypename'] = '104_index';
                break;
            case 5:
                $data['tpltypeid'] = 5;
                $data['tpltypename'] = '105_index';
                break;
            case 6:
                $data['tpltypeid'] = 6;
                $data['tpltypename'] = '106_index_ydkds';
                break;
            case 7:
                $data['tpltypeid'] = 7;
                $data['tpltypename'] = '107_index_2d8si';
                break;
            case 8:
                $data['tpltypeid'] = 8;
                $data['tpltypename'] = '108_index_giw93x';
                break;
            case 9:
                $data['tpltypeid'] = 9;
                $data['tpltypename'] = '109_index_0fdis';
                break;
            case 10:
                $data['tpltypeid'] = 10;
                $data['tpltypename'] = '110_index_2skz7';
                break;
            case 11:
                $data['tpltypeid'] = 11;
                $data['tpltypename'] = '111_index_78yus';
                break;
            case 12:
                $data['tpltypeid'] = 12;
                $data['tpltypename'] = '112_index_kj7y5';
                break;
            case 13:
                $data['tpltypeid'] = 13;
                $data['tpltypename'] = '113_index_jks6z';
                break;
            case 14:
                $data['tpltypeid'] = 14;
                $data['tpltypename'] = '114_index_mnsz6';
                break;
            case 15:
                $data['tpltypeid'] = 15;
                $data['tpltypename'] = '115_index_ms76x';
                break;
            case 16:
                $data['tpltypeid'] = 16;
                $data['tpltypename'] = '116_index_ms76x';
                break;
            case 17:
                $data['tpltypeid'] = 17;
                $data['tpltypename'] = '117_index_usn3x';
                break;
            case 18:
                $data['tpltypeid'] = 18;
                $data['tpltypename'] = '118_index_jge3';
                break;
            case 19:
                $data['tpltypeid'] = 19;
                $data['tpltypename'] = '119_index_jsg2';
                break;
            case 20:
                $data['tpltypeid'] = 20;
                $data['tpltypename'] = '120_index_pfs9';
                break;
            case 21:
                $data['tpltypeid'] = 21;
                $data['tpltypename'] = '121_index_eor5w';
                break;
            case 22:
                $data['tpltypeid'] = 22;
                $data['tpltypename'] = '122_index_pgj9d';
                break;
            case 23:
                $data['tpltypeid'] = 23;
                $data['tpltypename'] = '123_index_jge4s';
                break;
            case 24:
                $data['tpltypeid'] = 24;
                $data['tpltypename'] = '124_index_031664';
                break;
            case 25:
                $data['tpltypeid'] = 25;
                $data['tpltypename'] = '125_index_gjnh4';
                break;
            case 26:
                $data['tpltypeid'] = 26;
                $data['tpltypename'] = '126_index_gjj0f';
                break;
            case 27:
                $data['tpltypeid'] = 27;
                $data['tpltypename'] = '127_index_jpr4g';
                break;
            case 28:
                $data['tpltypeid'] = 28;
                $data['tpltypename'] = '128_index_pgj3f';
                break;
            case 29:
                $data['tpltypeid'] = 29;
                $data['tpltypename'] = '129_index_fds3f';
                break;
            case 30:
                $data['tpltypeid'] = 30;
                $data['tpltypename'] = '130_index_ves7g';
                break;
            case 31:
                $data['tpltypeid'] = 31;
                $data['tpltypename'] = '131_index_win6a';
                break;
            case 32:
                $data['tpltypeid'] = 32;
                $data['tpltypename'] = '132_index_wio1a';
                break;
            case 33:
                $data['tpltypeid'] = 33;
                $data['tpltypename'] = '133_index_wis2a';
                break;
            case 34:
                $data['tpltypeid'] = 34;
                $data['tpltypename'] = '134_index_viw3a';
                break;
            case 35:
                $data['tpltypeid'] = 35;
                $data['tpltypename'] = '135_index_you4a';
                break;
            case 36:
                $data['tpltypeid'] = 36;
                $data['tpltypename'] = '136_index_esfsd344';
                break;
            case 37:
                $data['tpltypeid'] = 37;
                $data['tpltypename'] = '137_index_esfsd7';
                break;
            case 38:
                $data['tpltypeid'] = 38;
                $data['tpltypename'] = '138_index_esfsd8';
                break;
            case 39:
                $data['tpltypeid'] = 39;
                $data['tpltypename'] = '139_index_esfsb9';
                break;
            case 40:
                $data['tpltypeid'] = 40;
                $data['tpltypename'] = '140_index_esfs40';
                break;
            case 41:
                $data['tpltypeid'] = 41;
                $data['tpltypename'] = '141_index_esfs41';
                break;
            case 42:
                $data['tpltypeid'] = 42;
                $data['tpltypename'] = '142_index_gfdhf42';
                break;
            case 43:
                $data['tpltypeid'] = 43;
                $data['tpltypename'] = '143_index_ybt43';
                break;
            case 44:
                $data['tpltypeid'] = 44;
                $data['tpltypename'] = '144_index_ybt44';
                break;
            case 45:
                $data['tpltypeid'] = 45;
                $data['tpltypename'] = '145_index_ybt450';
                break;
            case 46:
                $data['tpltypeid'] = 46;
                $data['tpltypename'] = '146_index_ybt46';
                break;
            case 47:
                $data['tpltypeid'] = 47;
                $data['tpltypename'] = '147_index_lxmb47';
                break;
            case 48:
                $data['tpltypeid'] = 48;
                $data['tpltypename'] = '148_index_lxmb48';
                break;
            case 49:
                $data['tpltypeid'] = 49;
                $data['tpltypename'] = '149_index_lxmbb49';
                break;
            case 50:
                $data['tpltypeid'] = 50;
                $data['tpltypename'] = '150_index_lxmb50';
                break;
            case 51:
                $data['tpltypeid'] = 51;
                $data['tpltypename'] = '151_index_lxmb51';
                break;
            case 52:
                $data['tpltypeid'] = 52;
                $data['tpltypename'] = '152_index_lxmbx52';
                break;
            case 53:
                $data['tpltypeid'] = 53;
                $data['tpltypename'] = '153_index_lxmb353';
                break;
            case 54:
                $data['tpltypeid'] = 54;
                $data['tpltypename'] = '154_index_lxmb354';
                break;
            case 55:
                $data['tpltypeid'] = 55;
                $data['tpltypename'] = '155_index_lxmb355';
                break;
            case 56:
                $data['tpltypeid'] = 56;
                $data['tpltypename'] = '156_index_lxmb2356';
                break;
            case 57:
                $data['tpltypeid'] = 57;
                $data['tpltypename'] = '157_index_lxmb257';
                break;
            case 58:
                $data['tpltypeid'] = 58;
                $data['tpltypename'] = '158_index_lxmb58';
                break;
            case 59:
                $data['tpltypeid'] = 59;
                $data['tpltypename'] = '159_index_lxmb59';
                break;
            case 60:
                $data['tpltypeid'] = 60;
                $data['tpltypename'] = '160_index_lxmb60';
                break;
            case 61:
                $data['tpltypeid'] = 61;
                $data['tpltypename'] = '161_index_lxmb61';
                break;
            case 62:
                $data['tpltypeid'] = 62;
                $data['tpltypename'] = '162_index_lxmb62';
                break;
            case 63:
                $data['tpltypeid'] = 63;
                $data['tpltypename'] = '163_index_lxmb63';
                break;
            case 64:
                $data['tpltypeid'] = 64;
                $data['tpltypename'] = '164_index_lxmb64';
                break;
            case 65:
                $data['tpltypeid'] = 65;
                $data['tpltypename'] = '165_index_lxmb65';
                break;
            case 66:
                $data['tpltypeid'] = 66;
                $data['tpltypename'] = '166_index_lxmb66';
                break;
            case 67:
                $data['tpltypeid'] = 67;
                $data['tpltypename'] = '167_index_lxmb67';
                break;
            case 68:
                $data['tpltypeid'] = 68;
                $data['tpltypename'] = '168_index_lxmb68';
                break;
            case 69:
                $data['tpltypeid'] = 69;
                $data['tpltypename'] = '169_index_lxmb69';
                break;
            case 70:
                $data['tpltypeid'] = 70;
                $data['tpltypename'] = '170_index_lxmb70';
                break;
            case 71:
                $data['tpltypeid'] = 71;
                $data['tpltypename'] = '171_index';
                break;
            case 72:
                $data['tpltypeid'] = 72;
                $data['tpltypename'] = '172_index';
                break;
            case 73:
                $data['tpltypeid'] = 73;
                $data['tpltypename'] = '173_index';
                break;
            case 74:
                $data['tpltypeid'] = 74;
                $data['tpltypename'] = '174_index';
                break;
            case 75:
                $data['tpltypeid'] = 75;
                $data['tpltypename'] = '175_index';
                break;
            case 76:
                $data['tpltypeid'] = 76;
                $data['tpltypename'] = '176_index';
                break;
            case 77:
                $data['tpltypeid'] = 77;
                $data['tpltypename'] = '177_index';
                break;
            case 78:
                $data['tpltypeid'] = 78;
                $data['tpltypename'] = '178_index';
                break;
            case 79:
                $data['tpltypeid'] = 79;
                $data['tpltypename'] = '179_index';
                break;
            case 80:
                $data['tpltypeid'] = 80;
                $data['tpltypename'] = '180_index';
                break;
            case 81:
                $data['tpltypeid'] = 81;
                $data['tpltypename'] = '181_index';
                break;
            case 82:
                $data['tpltypeid'] = 82;
                $data['tpltypename'] = '182_index';
                break;
            case 83:
                $data['tpltypeid'] = 83;
                $data['tpltypename'] = '183_index';
                break;
            case 84:
                $data['tpltypeid'] = 84;
                $data['tpltypename'] = '184_index';
                break;
            case 85:
                $data['tpltypeid'] = 85;
                $data['tpltypename'] = '185_index';
                break;
            case 86:
                $data['tpltypeid'] = 86;
                $data['tpltypename'] = '186_index';
                break;
            case 87:
                $data['tpltypeid'] = 87;
                $data['tpltypename'] = '187_index';
                break;
            case 88:
                $data['tpltypeid'] = 88;
                $data['tpltypename'] = '188_index';
                break;
            case 89:
                $data['tpltypeid'] = 89;
                $data['tpltypename'] = '189_index';
                break;
            case 90:
                $data['tpltypeid'] = 90;
                $data['tpltypename'] = '190_index';
                break;
            case 91:
                $data['tpltypeid'] = 91;
                $data['tpltypename'] = '191_index';
                break;
            case 92:
                $data['tpltypeid'] = 92;
                $data['tpltypename'] = '192_index';
                break;
            case 93:
                $data['tpltypeid'] = 93;
                $data['tpltypename'] = '193_index';
                break;
            case 94:
                $data['tpltypeid'] = 94;
                $data['tpltypename'] = '194_index';
                break;
            case 95:
                $data['tpltypeid'] = 95;
                $data['tpltypename'] = '195_index';
                break;
            case 96:
                $data['tpltypeid'] = 96;
                $data['tpltypename'] = '196_index';
                break;
            case 97:
                $data['tpltypeid'] = 97;
                $data['tpltypename'] = '197_index';
                break;
            case 98:
                $data['tpltypeid'] = 98;
                $data['tpltypename'] = '198_index';
                break;
            case 99:
                $data['tpltypeid'] = 99;
                $data['tpltypename'] = '199_index';
                break;
            case 100:
                $data['tpltypeid'] = 100;
                $data['tpltypename'] = '76_index';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
        //
        M('Home')->where(array('token' => session('token')))->save(array('advancetpl' => 0));
        if(isset($_GET['noajax'])) {
            $this->success('设置成功', 'index.php?g=User&m=Tmpls&a=index&token=' . $this->token);
        }
    }

    public function lists() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch($gets) {
            case 4:
                $data['tpllistid'] = 4;
                $data['tpllistname'] = 'ktv_list';
                break;
            case 1:
                $data['tpllistid'] = 1;
                $data['tpllistname'] = 'yl_list';
                break;
            case 5:
                $data['tpllistid'] = 5;
                $data['tpllistname'] = 'yl_list002';
                break;
            case 6:
                $data['tpllistid'] = 6;
                $data['tpllistname'] = 'yl_list003';
                break;
            case 7:
                $data['tpllistid'] = 7;
                $data['tpllistname'] = 'yl_list004';
                break;
            case 8:
                $data['tpllistid'] = 8;
                $data['tpllistname'] = 'yl_list005';
                break;
            case 9:
                $data['tpllistid'] = 9;
                $data['tpllistname'] = '138wo_list0';
                break;
            case 10:
                $data['tpllistid'] = 10;
                $data['tpllistname'] = '138wo_list1';
                break;
            case 11:
                $data['tpllistid'] = 11;
                $data['tpllistname'] = '138wo_list2';
                break;
            case 12:
                $data['tpllistid'] = 12;
                $data['tpllistname'] = '138wo_list3';
                break;
            case 13:
                $data['tpllistid'] = 13;
                $data['tpllistname'] = '138wo_list4';
                break;
            case 14:
                $data['tpllistid'] = 14;
                $data['tpllistname'] = '138wo_list5';
                break;
            case 15:
                $data['tpllistid'] = 15;
                $data['tpllistname'] = '138wo_list6';
                break;
            case 16:
                $data['tpllistid'] = 16;
                $data['tpllistname'] = '138wo_list7';
                break;
            case 17:
                $data['tpllistid'] = 17;
                $data['tpllistname'] = '138wo_list8';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function content() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch($gets) {
            case 1:
                $data['tplcontentid'] = 1;
                $data['tplcontentname'] = 'yl_content';
                break;
            case 3:
                $data['tplcontentid'] = 3;
                $data['tplcontentname'] = 'ktv_content';
                break;
            case 11:
                $data['tplcontentid'] = 11;
                $data['tplcontentname'] = '138wo_content0';
                break;
            case 12:
                $data['tplcontentid'] = 12;
                $data['tplcontentname'] = '138wo_content1';
                break;
            case 13:
                $data['tplcontentid'] = 13;
                $data['tplcontentname'] = '138wo_content2';
                break;
            case 14:
                $data['tplcontentid'] = 14;
                $data['tplcontentname'] = '138wo_content3';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function background() {
        $data['color_id'] = $this->_get('style');
        $db = M('Wxuser');
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function insert() {
    }

    public function upsave() {
    }
}

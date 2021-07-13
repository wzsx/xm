<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>
            
            修改订单
        
            - 企业
        </title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"
        />
        <link href="/Public/statics/aceadmin/css/bootstrap.min.css" rel="stylesheet"
        />
        <link rel="stylesheet" href="/Public/statics/aceadmin/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="/Public/statics/font-awesome-4.4.0/css/font-awesome.min.css"
        />
        <script src="/Public/statics/date/WdatePicker.js"></script>
        <!-- 弹窗 -->
        <script src="/Public/statics/js/jquery-2.0.0.min.js"></script>
        
        <script src="/Public/statics/bootbox/bootbox.all.min.js"></script>
        <script src="/Public/statics/bootbox/bootbox.locales.min.js"></script>
        <script src="/Public/statics/bootbox/bootbox.min.js"></script>
        <script src="/Public/statics/bootbox/bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".light-blue").click(function(){
                    $(".user-menu").toggle();
                });
            });
        </script>
        <!--[if IE 7]>
            <link rel="stylesheet" href="/Public/statics/aceadmin/css/font-awesome-ie7.min.css"
            />
        <![endif]-->
        <link rel="stylesheet" href="/Public/statics/aceadmin/css/ace.min.css" />
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="/Public/statics/aceadmin/css/ace-ie.min.css" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="/Public/statics/aceadmin/js/html5shiv.js">
            </script>
            <script src="/Public/statics/aceadmin/js/respond.min.js">
            </script>
        <![endif]-->
        <link rel="stylesheet" href="/tpl/Public/css/base.css" />
        <style type="text/css">
            #sidebar .nav-list{ overflow-y: auto; } .b-nav-li{ padding: 5px 0; }
        </style>
        
                <link rel="stylesheet" href="/Public/statics/iCheck-1.0.2/skins/all.css">
        
    </head>
    
    <body>
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try {
                    ace.settings.check('navbar', 'fixed')
                } catch(e) {}
            </script>
            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="icon-leaf">
                            </i>
                            企业管理后台
                        </small>
                    </a>
                </div>
                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="/Public/statics/aceadmin/avatars/user.jpg"
                                alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>
                                        欢迎光临,
                                    </small>
                                    <?php echo ($_SESSION['user']['username']); ?>
                                </span>
                                <i class="icon-caret-down">
                                </i>
                            </a>
                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Rule/edit_user_pwd/');?>">
                                        <i class="icon-off">
                                        </i>
                                        修改密码
                                    </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Index/logout');?>">
                                        <i class="icon-off">
                                        </i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch(e) {}
            </script>
            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text">
                    </span>
                </a>
                <div class="sidebar" id="sidebar">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch(e) {}
                    </script>
                    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                            <button class="btn btn-success">
                                <i class="icon-signal">
                                </i>
                            </button>
                            <button class="btn btn-info">
                                <i class="icon-pencil">
                                </i>
                            </button>
                            <button class="btn btn-warning">
                                <i class="icon-group">
                                </i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="icon-cogs">
                                </i>
                            </button>
                        </div>
                        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                            <span class="btn btn-success">
                            </span>
                            <span class="btn btn-info">
                            </span>
                            <span class="btn btn-warning">
                            </span>
                            <span class="btn btn-danger">
                            </span>
                        </div>
                    </div>
                    <!-- #sidebar-shortcuts -->
                    <ul class="nav nav-list">
                        <?php if(is_array($nav_data)): foreach($nav_data as $key=>$v): if(empty($v['_data'])): ?><li class="b-nav-li">
                                    <a href="<?php echo U($v['mca']);?>">
                                        <i class="fa fa-<?php echo ($v['ico']); ?> icon-test">
                                        </i>
                                        <span class="menu-text">
                                            <?php echo ($v['name']); ?>
                                        </span>
                                    </a>
                                </li>
                                <?php else: ?>
                                <li class="b-has-child">
                                    <a href="#" class="dropdown-toggle b-nav-parent">
                                        <i class="fa fa-<?php echo ($v['ico']); ?> icon-test">
                                        </i>
                                        <span class="menu-text">
                                            <?php echo ($v['name']); ?>
                                        </span>
                                        <b class="arrow icon-angle-down">
                                        </b>
                                    </a>
                                    <ul class="submenu">
                                        <?php if(is_array($v['_data'])): foreach($v['_data'] as $key=>$n): ?><li class="b-nav-li <?php if( (MODULE_NAME. '/'.CONTROLLER_NAME. '/'.ACTION_NAME) == $n[ 'mca'] ): ?>active<?php endif; ?>">
                                                <a href="<?php echo U($n['mca']);?>">
                                                    <i class="icon-double-angle-right">
                                                    </i>
                                                    <?php echo ($n['name']); ?>
                                                </a>
                                            </li><?php endforeach; endif; ?>
                                    </ul>
                                </li><?php endif; endforeach; endif; ?>
                    </ul>
                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                        data-icon2="icon-double-angle-right">
                        </i>
                    </div>
                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'collapsed')
                        } catch(e) {}
                    </script>
                </div>
                <div class="main-content">
                    <div class="page-content">
                        
            <div class="page-header">
                <h1>
                    <i class="fa fa-home">
                    </i>
                    首页 &gt; 订单管理 &gt; 修改订单
                </h1>
            </div>
            <div class="col-xs-12">
                <div class="tabbable">
                    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab">
                        <li>
                            <a href="<?php echo U('Admin/Jzx/index');?>">
                                订单列表
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo U('Admin/Jzx/add_case');?>">
                                添加订单
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <form class="form-inline" method="post" action="<?php echo U('Admin/Jzx/edit_case');?>">
                            <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"></input>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <tbody>
                                    <tr>
                                        <th class="center">
                                            基本信息
                                        </th>
                                        <td>
                                            收货姓名&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="name" value="<?php echo ($data["name"]); ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            收货电话&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="phone" value="<?php echo ($data["phone"]); ?>" />&nbsp;&nbsp;
                                             <span class="inputword">
                                                男
                                            </span>
                                            <input class="xb-icheck" type="radio" name="sex" value="1" <?php if(($data['sex']) == "1"): ?>checked="checked"<?php endif; ?> >
                                            <span class="inputword">
                                                女
                                            </span>
                                            <input class="xb-icheck" type="radio" name="sex" value="2" <?php if(($data['sex']) == "2"): ?>checked="checked"<?php endif; ?> ><br/><br/>

                                            订单总额&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="all_money" value="<?php echo ($data["all_money"]); ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            预付定金&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="prepaid_money" value="<?php echo ($data["prepaid_money"]); ?>" />
                                            &nbsp;&nbsp;快递代收金额&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="collection_money" value="<?php echo ($data["collection_money"]); ?>" />&nbsp;&nbsp;<br/><br/>
                                            付款方式&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">
                                                微信
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="1" <?php if(($data['pay_order']) == "1"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">
                                                支付宝
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="2" <?php if(($data['pay_order']) == "2"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">
                                                来聚财
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="3" <?php if(($data['pay_order']) == "3"): ?>checked="checked"<?php endif; ?> />
                                            <span class="inputword">
                                                现金
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="4" <?php if(($data['pay_order']) == "4"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                        </td>
                                    </tr>


                                    <tr>
                                        <th class="center">
                                            订单信息
                                        </th>
                                        <td>
                                            <div id="for_a">
                                                <input type="hidden" name="ord_id" value="<?php echo ($data["id"]); ?>">
                                            <?php if(is_array($pro_info)): $i = 0; $__LIST__ = $pro_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div>
                                                    <input type="hidden" name="proinfo[<?php echo ($val["id"]); ?>][id]" value="<?php echo ($val["id"]); ?>">
                                                    产品信息&nbsp;&nbsp;&nbsp;
                                                    <input class="input-medium" type="text" name="proinfo[<?php echo ($val["id"]); ?>][pro_info]" placeholder="" style="width:320px;" value="<?php echo ($val["pro_info"]); ?>" />&nbsp;&nbsp;&nbsp;
													
													
                                                &nbsp;&nbsp;&nbsp;
													数量&nbsp;&nbsp;&nbsp;
													 <input class="input-medium" type="text" name="proinfo[<?php echo ($val["id"]); ?>][num]" value="<?php echo ($val["num"]); ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
													
                                                   <!--  <select name="proinfo[<?php echo ($val["id"]); ?>][num]">
                                                      <option value="1" <?php if(($val["num"]) == "1"): ?>selected="selected"<?php endif; ?>>1</option>
                                                      <option value="2" <?php if(($val["num"]) == "2"): ?>selected="selected"<?php endif; ?>>2</option>
                                                      <option value="3" <?php if(($val["num"]) == "3"): ?>selected="selected"<?php endif; ?>>3</option>
                                                      <option value="4" <?php if(($val["num"]) == "4"): ?>selected="selected"<?php endif; ?>>4</option>
                                                      <option value="5" <?php if(($val["num"]) == "5"): ?>selected="selected"<?php endif; ?>>5</option>
                                                      <option value="6" <?php if(($val["num"]) == "6"): ?>selected="selected"<?php endif; ?>>6</option>
                                                      <option value="7" <?php if(($val["num"]) == "7"): ?>selected="selected"<?php endif; ?>>7</option>
                                                      <option value="8" <?php if(($val["num"]) == "8"): ?>selected="selected"<?php endif; ?>>8</option>
                                                      <option value="9" <?php if(($val["num"]) == "9"): ?>selected="selected"<?php endif; ?>>9</option>
                                                      <option value="10" <?php if(($val["num"]) == "10"): ?>selected="selected"<?php endif; ?>>10</option>
													  <option value="11" <?php if(($val["num"]) == "11"): ?>selected="selected"<?php endif; ?>>11</option>
                                                      <option value="12" <?php if(($val["num"]) == "12"): ?>selected="selected"<?php endif; ?>>12</option>
                                                      <option value="13" <?php if(($val["num"]) == "13"): ?>selected="selected"<?php endif; ?>>13</option>
                                                      <option value="14" <?php if(($val["num"]) == "14"): ?>selected="selected"<?php endif; ?>>14</option>
                                                      <option value="15" <?php if(($val["num"]) == "15"): ?>selected="selected"<?php endif; ?>>15</option>
                                                      <option value="16" <?php if(($val["num"]) == "16"): ?>selected="selected"<?php endif; ?>>16</option>
                                                      <option value="17" <?php if(($val["num"]) == "17"): ?>selected="selected"<?php endif; ?>>17</option>
                                                      <option value="18" <?php if(($val["num"]) == "18"): ?>selected="selected"<?php endif; ?>>18</option>
                                                      <option value="19" <?php if(($val["num"]) == "19"): ?>selected="selected"<?php endif; ?>>19</option>
                                                      <option value="20" <?php if(($val["num"]) == "20"): ?>selected="selected"<?php endif; ?>>20</option>
													  <option value="21" <?php if(($val["num"]) == "21"): ?>selected="selected"<?php endif; ?>>21</option>
                                                      <option value="22" <?php if(($val["num"]) == "22"): ?>selected="selected"<?php endif; ?>>22</option>
                                                      <option value="23" <?php if(($val["num"]) == "23"): ?>selected="selected"<?php endif; ?>>23</option>
                                                      <option value="24" <?php if(($val["num"]) == "24"): ?>selected="selected"<?php endif; ?>>24</option>
                                                      <option value="25" <?php if(($val["num"]) == "25"): ?>selected="selected"<?php endif; ?>>25</option>
                                                      <option value="26" <?php if(($val["num"]) == "26"): ?>selected="selected"<?php endif; ?>>26</option>
                                                      <option value="27" <?php if(($val["num"]) == "27"): ?>selected="selected"<?php endif; ?>>27</option>
                                                      <option value="28" <?php if(($val["num"]) == "28"): ?>selected="selected"<?php endif; ?>>28</option>
                                                      <option value="29" <?php if(($val["num"]) == "29"): ?>selected="selected"<?php endif; ?>>29</option>
                                                      <option value="30" <?php if(($val["num"]) == "30"): ?>selected="selected"<?php endif; ?>>30</option>
													  <option value="31" <?php if(($val["num"]) == "31"): ?>selected="selected"<?php endif; ?>>31</option>
													  
													  
                                                      <option value="-1" <?php if(($val["num"]) == "-1"): ?>selected="selected"<?php endif; ?>>-1</option>
                                                      <option value="-2" <?php if(($val["num"]) == "-2"): ?>selected="selected"<?php endif; ?>>-2</option>
                                                      <option value="-3" <?php if(($val["num"]) == "-3"): ?>selected="selected"<?php endif; ?>>-3</option>
                                                      <option value="-4" <?php if(($val["num"]) == "-4"): ?>selected="selected"<?php endif; ?>>-4</option>
                                                      <option value="-5" <?php if(($val["num"]) == "-5"): ?>selected="selected"<?php endif; ?>>-5</option>
                                                      <option value="-6" <?php if(($val["num"]) == "-6"): ?>selected="selected"<?php endif; ?>>-6</option>
                                                      <option value="-7" <?php if(($val["num"]) == "-7"): ?>selected="selected"<?php endif; ?>>-7</option>
                                                      <option value="-8" <?php if(($val["num"]) == "-8"): ?>selected="selected"<?php endif; ?>>-8</option>
                                                      <option value="-9" <?php if(($val["num"]) == "-9"): ?>selected="selected"<?php endif; ?>>-9</option>
                                                      <option value="-10" <?php if(($val["num"]) == "-10"): ?>selected="selected"<?php endif; ?>>-10</option>
													  <option value="-11" <?php if(($val["num"]) == "-11"): ?>selected="selected"<?php endif; ?>>-11</option>
                                                      <option value="-12" <?php if(($val["num"]) == "-12"): ?>selected="selected"<?php endif; ?>>-12</option>
                                                      <option value="-13" <?php if(($val["num"]) == "-13"): ?>selected="selected"<?php endif; ?>>-13</option>
                                                      <option value="-14" <?php if(($val["num"]) == "-14"): ?>selected="selected"<?php endif; ?>>-14</option>
                                                      <option value="-15" <?php if(($val["num"]) == "-15"): ?>selected="selected"<?php endif; ?>>-15</option>
                                                      <option value="-16" <?php if(($val["num"]) == "-16"): ?>selected="selected"<?php endif; ?>>-16</option>
                                                      <option value="-17" <?php if(($val["num"]) == "-17"): ?>selected="selected"<?php endif; ?>>-17</option>
                                                      <option value="-18" <?php if(($val["num"]) == "-18"): ?>selected="selected"<?php endif; ?>>-18</option>
                                                      <option value="-19" <?php if(($val["num"]) == "-19"): ?>selected="selected"<?php endif; ?>>-19</option>
                                                      <option value="-20" <?php if(($val["num"]) == "-20"): ?>selected="selected"<?php endif; ?>>-20</option>
													  <option value="-21" <?php if(($val["num"]) == "-21"): ?>selected="selected"<?php endif; ?>>-21</option>
                                                      <option value="-22" <?php if(($val["num"]) == "-22"): ?>selected="selected"<?php endif; ?>>-22</option>
                                                      <option value="-23" <?php if(($val["num"]) == "-23"): ?>selected="selected"<?php endif; ?>>-23</option>
                                                      <option value="-24" <?php if(($val["num"]) == "-24"): ?>selected="selected"<?php endif; ?>>-24</option>
                                                      <option value="-25" <?php if(($val["num"]) == "-25"): ?>selected="selected"<?php endif; ?>>-25</option>
                                                      <option value="-26" <?php if(($val["num"]) == "-26"): ?>selected="selected"<?php endif; ?>>-26</option>
                                                      <option value="-27" <?php if(($val["num"]) == "-27"): ?>selected="selected"<?php endif; ?>>-27</option>
                                                      <option value="-28" <?php if(($val["num"]) == "-28"): ?>selected="selected"<?php endif; ?>>-28</option>
                                                      <option value="-29" <?php if(($val["num"]) == "-29"): ?>selected="selected"<?php endif; ?>>-29</option>
                                                      <option value="-30" <?php if(($val["num"]) == "-30"): ?>selected="selected"<?php endif; ?>>-30</option>
													  <option value="-31" <?php if(($val["num"]) == "-31"): ?>selected="selected"<?php endif; ?>>-31</option>
                                                    </select> -->

                                                    &nbsp;&nbsp;&nbsp;规格&nbsp;&nbsp;&nbsp;
                                                    <select name="proinfo[<?php echo ($val["id"]); ?>][guige]">
                                                      <option value="盒" <?php if(($val["guige"]) == "盒"): ?>selected="selected"<?php endif; ?>>盒</option>
                                                      <option value="瓶" <?php if(($val["guige"]) == "瓶"): ?>selected="selected"<?php endif; ?>>瓶</option>
                                                      <option value="包" <?php if(($val["guige"]) == "包"): ?>selected="selected"<?php endif; ?>>包</option>
                                                      <option value="个" <?php if(($val["guige"]) == "个"): ?>selected="selected"<?php endif; ?>>个</option>
                                                      <option value="副" <?php if(($val["guige"]) == "副"): ?>selected="selected"<?php endif; ?>>副</option>
                                                      <option value="袋" <?php if(($val["guige"]) == "袋"): ?>selected="selected"<?php endif; ?>>袋</option>
													  <option value="天" <?php if(($val["guige"]) == "天"): ?>selected="selected"<?php endif; ?>>天</option>
                                                      <option value="月" <?php if(($val["guige"]) == "月"): ?>selected="selected"<?php endif; ?>>月</option>
													  
                                                    </select>

                                                    <a href="#" class="add_a" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">+</a>
                                                    <a href="#" class="del_a" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">-</a>
                                                     <br/><br/>
                                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>

                                            <div id="for_a_zp">
                                                <input type="hidden" name="ord_id" value="<?php echo ($data["id"]); ?>">
                                            <?php if(is_array($zp_info)): $i = 0; $__LIST__ = $zp_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div>
                                                    <input type="hidden" name="zpinfo[<?php echo ($val["id"]); ?>][id]" value="<?php echo ($val["id"]); ?>">
                                                    赠品信息&nbsp;&nbsp;&nbsp;
                                                    <input class="input-medium" type="text" name="zpinfo[<?php echo ($val["id"]); ?>][zp_info]" placeholder="" style="width:320px;" value="<?php echo ($val["zp_info"]); ?>" />
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数量&nbsp;&nbsp;&nbsp;
													
													<input class="input-medium" type="text" name="zpinfo[<?php echo ($val["id"]); ?>][num]" value="<?php echo ($val["num"]); ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
													
                                                   <!--  <select name="zpinfo[<?php echo ($val["id"]); ?>][num]">
                                                      <option value=""></option>
                                                       <option value="1" <?php if(($val["num"]) == "1"): ?>selected="selected"<?php endif; ?>>1</option>
                                                      <option value="2" <?php if(($val["num"]) == "2"): ?>selected="selected"<?php endif; ?>>2</option>
                                                      <option value="3" <?php if(($val["num"]) == "3"): ?>selected="selected"<?php endif; ?>>3</option>
                                                      <option value="4" <?php if(($val["num"]) == "4"): ?>selected="selected"<?php endif; ?>>4</option>
                                                      <option value="5" <?php if(($val["num"]) == "5"): ?>selected="selected"<?php endif; ?>>5</option>
                                                      <option value="6" <?php if(($val["num"]) == "6"): ?>selected="selected"<?php endif; ?>>6</option>
                                                      <option value="7" <?php if(($val["num"]) == "7"): ?>selected="selected"<?php endif; ?>>7</option>
                                                      <option value="8" <?php if(($val["num"]) == "8"): ?>selected="selected"<?php endif; ?>>8</option>
                                                      <option value="9" <?php if(($val["num"]) == "9"): ?>selected="selected"<?php endif; ?>>9</option>
                                                      <option value="10" <?php if(($val["num"]) == "10"): ?>selected="selected"<?php endif; ?>>10</option>
													  <option value="11" <?php if(($val["num"]) == "11"): ?>selected="selected"<?php endif; ?>>11</option>
                                                      <option value="12" <?php if(($val["num"]) == "12"): ?>selected="selected"<?php endif; ?>>12</option>
                                                      <option value="13" <?php if(($val["num"]) == "13"): ?>selected="selected"<?php endif; ?>>13</option>
                                                      <option value="14" <?php if(($val["num"]) == "14"): ?>selected="selected"<?php endif; ?>>14</option>
                                                      <option value="15" <?php if(($val["num"]) == "15"): ?>selected="selected"<?php endif; ?>>15</option>
                                                      <option value="16" <?php if(($val["num"]) == "16"): ?>selected="selected"<?php endif; ?>>16</option>
                                                      <option value="17" <?php if(($val["num"]) == "17"): ?>selected="selected"<?php endif; ?>>17</option>
                                                      <option value="18" <?php if(($val["num"]) == "18"): ?>selected="selected"<?php endif; ?>>18</option>
                                                      <option value="19" <?php if(($val["num"]) == "19"): ?>selected="selected"<?php endif; ?>>19</option>
                                                      <option value="20" <?php if(($val["num"]) == "20"): ?>selected="selected"<?php endif; ?>>20</option>
													  <option value="21" <?php if(($val["num"]) == "21"): ?>selected="selected"<?php endif; ?>>21</option>
                                                      <option value="22" <?php if(($val["num"]) == "22"): ?>selected="selected"<?php endif; ?>>22</option>
                                                      <option value="23" <?php if(($val["num"]) == "23"): ?>selected="selected"<?php endif; ?>>23</option>
                                                      <option value="24" <?php if(($val["num"]) == "24"): ?>selected="selected"<?php endif; ?>>24</option>
                                                      <option value="25" <?php if(($val["num"]) == "25"): ?>selected="selected"<?php endif; ?>>25</option>
                                                      <option value="26" <?php if(($val["num"]) == "26"): ?>selected="selected"<?php endif; ?>>26</option>
                                                      <option value="27" <?php if(($val["num"]) == "27"): ?>selected="selected"<?php endif; ?>>27</option>
                                                      <option value="28" <?php if(($val["num"]) == "28"): ?>selected="selected"<?php endif; ?>>28</option>
                                                      <option value="29" <?php if(($val["num"]) == "29"): ?>selected="selected"<?php endif; ?>>29</option>
                                                      <option value="30" <?php if(($val["num"]) == "30"): ?>selected="selected"<?php endif; ?>>30</option>
													  <option value="31" <?php if(($val["num"]) == "31"): ?>selected="selected"<?php endif; ?>>31</option>
                                                      <option value="-1" <?php if(($val["num"]) == "-1"): ?>selected="selected"<?php endif; ?>>-1</option>
                                                      <option value="-2" <?php if(($val["num"]) == "-2"): ?>selected="selected"<?php endif; ?>>-2</option>
                                                      <option value="-3" <?php if(($val["num"]) == "-3"): ?>selected="selected"<?php endif; ?>>-3</option>
                                                      <option value="-4" <?php if(($val["num"]) == "-4"): ?>selected="selected"<?php endif; ?>>-4</option>
                                                      <option value="-5" <?php if(($val["num"]) == "-5"): ?>selected="selected"<?php endif; ?>>-5</option>
                                                      <option value="-6" <?php if(($val["num"]) == "-6"): ?>selected="selected"<?php endif; ?>>-6</option>
                                                      <option value="-7" <?php if(($val["num"]) == "-7"): ?>selected="selected"<?php endif; ?>>-7</option>
                                                      <option value="-8" <?php if(($val["num"]) == "-8"): ?>selected="selected"<?php endif; ?>>-8</option>
                                                      <option value="-9" <?php if(($val["num"]) == "-9"): ?>selected="selected"<?php endif; ?>>-9</option>
                                                      <option value="-10" <?php if(($val["num"]) == "-10"): ?>selected="selected"<?php endif; ?>>-10</option>
													  <option value="-11" <?php if(($val["num"]) == "-11"): ?>selected="selected"<?php endif; ?>>-11</option>
                                                      <option value="-12" <?php if(($val["num"]) == "-12"): ?>selected="selected"<?php endif; ?>>-12</option>
                                                      <option value="-13" <?php if(($val["num"]) == "-13"): ?>selected="selected"<?php endif; ?>>-13</option>
                                                      <option value="-14" <?php if(($val["num"]) == "-14"): ?>selected="selected"<?php endif; ?>>-14</option>
                                                      <option value="-15" <?php if(($val["num"]) == "-15"): ?>selected="selected"<?php endif; ?>>-15</option>
                                                      <option value="-16" <?php if(($val["num"]) == "-16"): ?>selected="selected"<?php endif; ?>>-16</option>
                                                      <option value="-17" <?php if(($val["num"]) == "-17"): ?>selected="selected"<?php endif; ?>>-17</option>
                                                      <option value="-18" <?php if(($val["num"]) == "-18"): ?>selected="selected"<?php endif; ?>>-18</option>
                                                      <option value="-19" <?php if(($val["num"]) == "-19"): ?>selected="selected"<?php endif; ?>>-19</option>
                                                      <option value="-20" <?php if(($val["num"]) == "-20"): ?>selected="selected"<?php endif; ?>>-20</option>
													  <option value="-21" <?php if(($val["num"]) == "-21"): ?>selected="selected"<?php endif; ?>>-21</option>
                                                      <option value="-22" <?php if(($val["num"]) == "-22"): ?>selected="selected"<?php endif; ?>>-22</option>
                                                      <option value="-23" <?php if(($val["num"]) == "-23"): ?>selected="selected"<?php endif; ?>>-23</option>
                                                      <option value="-24" <?php if(($val["num"]) == "-24"): ?>selected="selected"<?php endif; ?>>-24</option>
                                                      <option value="-25" <?php if(($val["num"]) == "-25"): ?>selected="selected"<?php endif; ?>>-25</option>
                                                      <option value="-26" <?php if(($val["num"]) == "-26"): ?>selected="selected"<?php endif; ?>>-26</option>
                                                      <option value="-27" <?php if(($val["num"]) == "-27"): ?>selected="selected"<?php endif; ?>>-27</option>
                                                      <option value="-28" <?php if(($val["num"]) == "-28"): ?>selected="selected"<?php endif; ?>>-28</option>
                                                      <option value="-29" <?php if(($val["num"]) == "-29"): ?>selected="selected"<?php endif; ?>>-29</option>
                                                      <option value="-30" <?php if(($val["num"]) == "-30"): ?>selected="selected"<?php endif; ?>>-30</option>
													  <option value="-31" <?php if(($val["num"]) == "-31"): ?>selected="selected"<?php endif; ?>>-31</option> -->
													  
													  
                                                    </select>

                                                    &nbsp;&nbsp;&nbsp;规格&nbsp;&nbsp;&nbsp;
                                                    <select name="zpinfo[<?php echo ($val["id"]); ?>][guige]">
                                                      <option value="盒" <?php if(($val["guige"]) == "盒"): ?>selected="selected"<?php endif; ?>>盒</option>
                                                      <option value="瓶" <?php if(($val["guige"]) == "瓶"): ?>selected="selected"<?php endif; ?>>瓶</option>
                                                      <option value="包" <?php if(($val["guige"]) == "包"): ?>selected="selected"<?php endif; ?>>包</option>
                                                      <option value="个" <?php if(($val["guige"]) == "个"): ?>selected="selected"<?php endif; ?>>个</option>
                                                      <option value="副" <?php if(($val["guige"]) == "副"): ?>selected="selected"<?php endif; ?>>副</option>
                                                      <option value="袋" <?php if(($val["guige"]) == "袋"): ?>selected="selected"<?php endif; ?>>袋</option>
													  <option value="天" <?php if(($val["guige"]) == "天"): ?>selected="selected"<?php endif; ?>>天</option>
                                                      <option value="月" <?php if(($val["guige"]) == "月"): ?>selected="selected"<?php endif; ?>>月</option>
													  
                                                    </select>

                                                    <a href="#" class="add_a_zp" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">+</a>
                                                    <a href="#" class="del_a_zp" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">-</a>
                                                     <br/><br/>
                                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
											
											 （产品名称&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">1、甲状腺中药 &nbsp;&nbsp;&nbsp;2、消肿散结贴 &nbsp;&nbsp;&nbsp;3、足浴包&nbsp;&nbsp;&nbsp;4、中药散剂 &nbsp;&nbsp;&nbsp;5、疱康液 &nbsp;&nbsp;&nbsp;6、祛毒清解汤 &nbsp;&nbsp;&nbsp;7、清咽散 &nbsp;&nbsp;&nbsp;8、乙癸膏 &nbsp;&nbsp;&nbsp;8、舒咽贴&nbsp;&nbsp;&nbsp;9、足浴包&nbsp;&nbsp;&nbsp;10、八珍粉&nbsp;&nbsp;&nbsp;11、坐垫&nbsp;&nbsp;&nbsp;12、秋梨膏&nbsp;&nbsp;&nbsp;13、哮喘茶包</span>；&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赠品名称&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">1、足浴包 &nbsp;&nbsp;&nbsp;2、艾烛贴&nbsp;&nbsp;&nbsp;3、防过敏膏&nbsp;&nbsp;&nbsp;4、八珍粉&nbsp;&nbsp;&nbsp;5、坐垫&nbsp;&nbsp;&nbsp;4、养生壶&nbsp;&nbsp;&nbsp;5、秋梨膏&nbsp;&nbsp;&nbsp;6、艾炷贴</span>）
											
											
											
											<br><br>
                                            

                                            订单类型&nbsp;&nbsp;&nbsp;
											<select name="order_type">
                                                  <option value="1">首单</option>
                                                  <option value="2">复购一</option>
                                                  <option value="3">复购二</option>
                                                  <option value="4">复购三</option>
                                                  <option value="5">复购四</option>
                                                  <option value="6">复购五</option>
												  <option value="9">复购六</option>
                                                  <option value="10">复购七</option>
                                                  <option value="11">复购八</option>
                                                  <option value="12">复购九</option>
                                                  <option value="13">复购十</option>
                                                  <option value="14">复购十一</option>
												  <option value="15">复购十二</option>
                                                  <option value="7">退货</option>
                                                  <option value="8">转介绍</option>
                                            </select>								<br>
											
											
                                           <!--  <span class="inputword">
                                                首单
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="1" <?php if(($data['order_type']) == "1"): ?>checked="checked"<?php endif; ?>  /> &nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购一
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="2" <?php if(($data['order_type']) == "2"): ?>checked="checked"<?php endif; ?> />  &nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购二
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="3" <?php if(($data['order_type']) == "3"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购三
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="4" <?php if(($data['order_type']) == "4"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购四
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="5" <?php if(($data['order_type']) == "5"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购五
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="6" <?php if(($data['order_type']) == "6"): ?>checked="checked"<?php endif; ?> /> &nbsp;&nbsp;&nbsp;
											
											<span class="inputword">
                                                复购六
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="9" <?php if(($data['order_type']) == "9"): ?>checked="checked"<?php endif; ?> />  &nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购七
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="10" <?php if(($data['order_type']) == "10"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购八
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="11" <?php if(($data['order_type']) == "11"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购九
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="12" <?php if(($data['order_type']) == "12"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;
                                            
                                            <span class="inputword">
                                                复购十
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="13" <?php if(($data['order_type']) == "13"): ?>checked="checked"<?php endif; ?> /> &nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                退货
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="7" <?php if(($data['order_type']) == "7"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                转介绍
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="8" <?php if(($data['order_type']) == "8"): ?>checked="checked"<?php endif; ?> />&nbsp;&nbsp;&nbsp; -->

                                            <br/><br/>

                                            收货地址&nbsp;&nbsp;&nbsp;
                                            
                                            <select name="province" id="province" onchange="loadRegion('province',2,'city','<?php echo U('Jzx/getRegion');?>');">
                                                <option value="0" selected><?php echo ($data["province"]); ?></option>
                                                <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                            
                                            <select name="city" id="city"  onchange="loadRegion('city',3,'town','<?php echo U('Jzx/getRegion');?>');">
                                              <option value="<?php echo ($data["city"]); ?>"><?php echo ($data["city"]); ?></option>
                                            </select>
                                            
                                            <select name="town" id="town">
                                              <option value="<?php echo ($data["town"]); ?>"><?php echo ($data["town"]); ?></option>
                                            </select><br/><br/>
                                            
                                            详细地址&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="address" value="<?php echo ($data["address"]); ?>" style="width:620px;" /><br/><br/>
                                            备注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <textarea cols="150" rows="10" wrap="hard" name="content"><?php echo ($data["content"]); ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                    <th class="center">
                                            其他&nbsp;&nbsp;&nbsp;
                                        </th>
                                        <td>
                                            记录人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="write_name" value="<?php echo ($data["write_name"]); ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            微信号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="write_wx" value="<?php echo ($data["write_wx"]); ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        </th>
                                        <td>
                                            <input class="btn btn-success" type="submit" value="添加" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        
                    </div>
                </div>
            </div>
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110">
                </i>
            </a>
        </div>
        <!--[if !IE]> -->
            <script src="/Public/statics/js/jquery-1.10.2.min.js">
            </script>
            <!-- <![endif]-->
            <!--[if IE]>
                <script src="/Public/statics/js/jquery-1.10.2.min.js">
                </script>
            <![endif]-->
            <!--[if !IE]> -->
                <script type="text/javascript">
                    window.jQuery || document.write("<script src='/Public/statics/aceadmin/js/jquery-2.0.3.min.js'>" + "<" + "script>");
                </script>
                <!-- <![endif]-->
                <!--[if IE]>
                    <script type="text/javascript">
                        window.jQuery || document.write("<script src='/Public/statics/aceadmin/js/jquery-1.10.2.min.js'>" + "<" + "script>");
                    </script>
                <![endif]-->
                <script type="text/javascript">
                    if ("ontouchend" in document) document.write("<script src='/Public/statics/aceadmin/js/jquery.mobile.custom.min.js'>" + "<" + "script>");
                </script>
                <script src="/Public/statics/aceadmin/js/typeahead-bs2.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/bootstrap.min.js">
                </script>
                <!--[if lte IE 8]>
                    <script src="/Public/statics/aceadmin/js/excanvas.min.js">
                    </script>
                <![endif]-->
                <script src="/Public/statics/aceadmin/js/jquery-ui-1.10.3.custom.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/jquery.ui.touch-punch.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/jquery.slimscroll.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/jquery.easy-pie-chart.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/jquery.sparkline.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/flot/jquery.flot.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/flot/jquery.flot.pie.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/flot/jquery.flot.resize.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/ace-elements.min.js">
                </script>
                <script src="/Public/statics/aceadmin/js/ace.min.js">
                </script>
                <script src="/tpl/Public/js/base.js">
                </script>
                
<script>

function loadRegion(sel,type_id,selName,url){
    jQuery("#"+selName+" option").each(function(){
        jQuery(this).remove();
    });
    jQuery("<option value=0>请选择</option>").appendTo(jQuery("#"+selName));
    if(jQuery("#"+sel).val()==0){
        return;
    }
    jQuery.getJSON(url,{pid:jQuery("#"+sel).val(),type:type_id},
        function(data){
            if(data){
                jQuery.each(data,function(idx,item){
                    jQuery("<option value="+item.id+">"+item.name+"</option>").appendTo(jQuery("#"+selName));
                });
            }else{
                jQuery("<option value='0'>请选择</option>").appendTo(jQuery("#"+selName));
            }
        }
    );
}

</script>

<script type="text/javascript">
 var n =0;
$(document).on("click",".add_a",function (e) {
  n++;
    e.preventDefault();
    $("#for_a").append(`
                        <div>产品信息&nbsp;&nbsp;&nbsp;
                            <!-- <input class="input-medium" type="text" name="proinfo[${n}][pro_info]" placeholder="" style="width:320px;" /> -->
							
							<select name="proinfo[${n}][pro_info]">
									<option value="请选择产品">请选择产品</option>
									<option value="甲状腺中药">甲状腺中药</option>
                                                  <option value="消肿散结贴">消肿散结贴</option>
                                                  <option value="中药散剂">中药散剂</option>
												  <option value="足浴包">足浴包</option>
												  <option value="中药">中药</option>
												  <option value="疱康液">疱康液</option>
												  <option value="祛毒清解汤">祛毒清解汤</option>
												  <option value="清咽散">清咽散</option>
												  <option value="舒咽贴">舒咽贴</option>
												   <option value="乙癸膏">乙癸膏</option>
												   <option value="定喘膏">定喘膏</option>
												   <option value="哮喘茶包">哮喘茶包</option>
												   <option value="足浴包">足浴包</option>
												   <option value="坐垫">坐垫</option>
												   <option value="养生壶">养生壶</option>
												   <option value="八珍粉">八珍粉</option>
												   <option value="秋梨膏">秋梨膏</option>
						</select>

                            &nbsp;&nbsp;&nbsp;数量&nbsp;&nbsp;&nbsp;
							
							<input class="input-medium" type="text" name="proinfo[${n}][num]" placeholder="" style="width:320px;" />
							
                          <!--   <select name="proinfo[${n}][num]">
                             <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9</option>
												  <option value="10">10</option>
												  
                                                  <option value="-1">-1</option>
                                                  <option value="-2">-2</option>
                                                  <option value="-3">-3</option>
                                                  <option value="-4">-4</option>
                                                  <option value="-5">-5</option>
                                                  <option value="-6">-6</option>
                                                  <option value="-7">-7</option>
                                                  <option value="-8">-8</option>
                                                  <option value="-9">-9</option>
                                                  <option value="-10">-10</option>
												 
                            </select> -->

                            &nbsp;&nbsp;&nbsp;规格&nbsp;&nbsp;&nbsp;
                            <select name="proinfo[${n}][guige]">
                              <option value="盒">盒</option>
                              <option value="瓶">瓶</option>
                              <option value="包">包</option>
                              <option value="个">个</option>
                              <option value="副">副</option>
                              <option value="袋">袋</option>
							  <option value="天">天</option>
                              <option value="月">月</option>
                            </select>
                            <a href="#" class="add_a" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">+</a>
                            <a href="#" class="del_a" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">-</a>
                             <br/><br/></div>
    `);
});
$(document).on("click",".del_a",function (e) {
    e.preventDefault();
    // $(this).parent().parent().prev().remove();
    $(this).parent().remove();
})
</script>




<script type="text/javascript">
 var n =0;
$(document).on("click",".add_a_zp",function (e) {
  n++;
    e.preventDefault();
    $("#for_a_zp").append(`
                        <div>赠品信息&nbsp;&nbsp;&nbsp;
                            <!-- <input class="input-medium" type="text" name="zpinfo[${n}][zp_info]" placeholder="" style="width:320px;" /> -->
							
							<select name="zpinfo[${n}][zp_info]">
												<option value=""></option>											
                                                <option value="足浴包">足浴包</option>
												 <option value="艾烛贴">艾烛贴</option>
												  <option value="防过敏膏">防过敏膏</option>
												  
												   <option value="坐垫">坐垫</option>
												   <option value="养生壶">养生壶</option>
												   <option value="八珍粉">八珍粉</option>
												    <option value="秋梨膏">秋梨膏</option>
					       </select>

                            &nbsp;&nbsp;&nbsp;数量&nbsp;&nbsp;&nbsp;
							<input class="input-medium" type="text" name="zpinfo[${n}][num]" placeholder="" style="width:320px;" /> 
							
                           <!--  <select name="zpinfo[${n}][num]">
                            <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9</option>
												  <option value="10">10</option>
												  <option value="11">11</option>
												  <option value="12">12</option>
												  <option value="13">13</option>
												  <option value="14">14</option>
												  <option value="15">15</option>
                                                  <option value="16">16</option>
                                                  <option value="17">17</option>
                                                  <option value="18">18</option>
                                                  <option value="19">19</option>
                                                  <option value="20">20</option>
                                                  <option value="21">21</option>
                                                  <option value="22">22</option>
                                                  <option value="23">23</option>
                                                  <option value="24">24</option>
												  <option value="25">25</option>
												  <option value="26">26</option>
												  <option value="27">27</option>
												  <option value="28">28</option>
												  <option value="29">29</option>
												  <option value="30">30</option>
												   <option value="31">31</option>
												   
                                                  <option value="-1">-1</option>
                                                  <option value="-2">-2</option>
                                                  <option value="-3">-3</option>
                                                  <option value="-4">-4</option>
                                                  <option value="-5">-5</option>
                                                  <option value="-6">-6</option>
                                                  <option value="-7">-7</option>
                                                  <option value="-8">-8</option>
                                                  <option value="-9">-9</option>
                                                  <option value="-10">-10</option>
												  <option value="-11">-11</option>
												  <option value="-12">-12</option>
												  <option value="-13">-13</option>
												  <option value="-14">-14</option>
												  <option value="-15">-15</option>
                                                  <option value="-16">-16</option>
                                                  <option value="-17">-17</option>
                                                  <option value="-18">-18</option>
                                                  <option value="-19">-19</option>
                                                  <option value="-20">-20</option>
                                                  <option value="-21">-21</option>
                                                  <option value="-22">-22</option>
                                                  <option value="-23">-23</option>
                                                  <option value="-24">-24</option>
												  <option value="-25">-25</option>
												  <option value="-26">-26</option>
												  <option value="-27">-27</option>
												  <option value="-28">-28</option>
												  <option value="-29">-29</option>
												  <option value="-30">-30</option>
												  <option value="-31">-31</option>
												  

                            </select> -->

                            &nbsp;&nbsp;&nbsp;规格&nbsp;&nbsp;&nbsp;
                            <select name="zpinfo[${n}][guige]">
                              <option value="盒">盒</option>
                              <option value="瓶">瓶</option>
                              <option value="包">包</option>
                              <option value="个">个</option>
                              <option value="副">副</option>
                              <option value="袋">袋</option>
							  <option value="天">天</option>
                              <option value="月">月</option>
                            </select>
                            <a href="#" class="add_a_zp" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">+</a>
                            <a href="#" class="del_a_zp" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">-</a>
                             <br/><br/></div>
    `);
});
$(document).on("click",".del_a_zp",function (e) {
    e.preventDefault();
    // $(this).parent().parent().prev().remove();
    $(this).parent().remove();
})
</script>


                <script>
                    $(function() {
                        $('.b-has-child .active').parents('.b-has-child').eq(0).find('.b-nav-parent').click();
                    })
                </script>
    </body>

</html>
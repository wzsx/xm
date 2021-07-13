<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>
            
            添加订单
        
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
                    首页 &gt; 订单管理 &gt; 添加订单
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
                        <form class="form-inline" method="post">
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <tbody>
                                    <tr>
                                        <th class="center">
                                            基本信息
                                        </th>
                                        <td>
                                            收货姓名&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="name" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            收货电话&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="phone" value="" />&nbsp;&nbsp;
                                            <span class="inputword">
                                                男
                                            </span>
                                            <input class="xb-icheck" type="radio" name="sex" value="1" checked="checked" />
                                            <span class="inputword">
                                                女
                                            </span>
                                            <input class="xb-icheck" type="radio" name="sex" value="2" /><br/><br/>


                                            订单总额&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="all_money" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            预付定金&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="prepaid_money" value="" />
                                            &nbsp;&nbsp;快递代收金额&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="collection_money" value="" />&nbsp;&nbsp;<br/><br/>
                                            
                                            付款方式&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">
                                                微信
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="1" checked="checked" />
                                            
                                            <span class="inputword">
                                                支付宝
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="2" />
                                            
                                            <span class="inputword">
                                                来聚财
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="3" />
                                            
                                            <span class="inputword">
                                                现金
                                            </span>
                                            <input class="xb-icheck" type="radio" name="pay_order" value="4" />
                                            
                                        </td>
                                    </tr>





                                    <tr>
                                        <th class="center">
                                            订单信息
                                        </th>
                                        <td>
                                            <div id="for_a">
                                                产品信息&nbsp;&nbsp;&nbsp;
                                                
												<select name="proinfo[0][pro_info]">
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
                                                &nbsp;&nbsp;&nbsp;
												数量&nbsp;&nbsp;&nbsp;
												
												<input class="input-medium" type="text" name="proinfo[0][num]" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                                               <!--  <select name="proinfo[0][num]">
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
                                                <select name="proinfo[0][guige]">
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
                                                <!-- <a href="#" class="del_a" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">-</a> -->
                                                 <br/><br/>
                                             </div>




                                            <div id="for_a_zp">
                                                赠品信息&nbsp;&nbsp;&nbsp;
                                                
												<select name="zpinfo[0][zp_info]">
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
												
												<input class="input-medium" type="text" name="zpinfo[0][num]" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                                                <!-- <select name="zpinfo[0][num]">
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
                                                <select name="zpinfo[0][guige]">
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
                                                <!-- <a href="#" class="del_a" style="padding: 5px 15px ;text-decoration:none;color: red ;border: 1px solid red;display: inline-block">-</a> -->
                                                 <br/><br/>
                                             </div>

                                           <!--  订单类型&nbsp;&nbsp;&nbsp;
                                            <span class="inputword">
                                                首单
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="1" checked="checked" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                复购一
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="2" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                复购二
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="3" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                复购三
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="4" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                复购四
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="5" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                复购五
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="6" />&nbsp;&nbsp;&nbsp;
											
											<span class="inputword">
                                                复购六
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="9" />&nbsp;&nbsp;&nbsp;
											
											<span class="inputword">
                                                复购七
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="10" />&nbsp;&nbsp;&nbsp;
											
											<span class="inputword">
                                                复购八
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="11" />&nbsp;&nbsp;&nbsp;
											
											<span class="inputword">
                                                复购九
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="12" />&nbsp;&nbsp;&nbsp;
											
											<span class="inputword">
                                                复购十
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="13" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                                退货
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="7" />&nbsp;&nbsp;&nbsp;

                                            <span class="inputword">
                                            转介绍
                                            </span>
                                            <input class="xb-icheck" type="radio" name="order_type" value="8" />&nbsp;&nbsp;&nbsp;
                                            <br/><br/> -->
											
											
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
                                            </select>											
											<br/><br/>


                                           <!--   收货地址&nbsp;&nbsp;&nbsp;
                                            <select name="province" id="province" onchange="loadRegion('province',2,'city','<?php echo U('Jzx/getRegion');?>');">
                                               <option value="0" selected>省份/直辖市</option>
                                               <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                            <select name="city" id="city"  onchange="loadRegion('city',3,'town','<?php echo U('Jzx/getRegion');?>');">
                                              <option value="0">市</option>
                                            </select>
                                            <select name="town" id="town">
                                              <option value="0">区/县</option>
                                            </select><br/><br/> -->
                                            详细地址&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="address" placeholder="" style="width:620px;" /><br/><br/>
                                            备注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <textarea cols="150" rows="10" wrap="hard" name="content"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                    <th class="center">
                                            其他&nbsp;&nbsp;&nbsp;
                                        </th>
                                        <td>
                                            记录人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="write_name" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                                            微信号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="input-medium" type="text" name="write_wx" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
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
                       <!--  <select name="proinfo[${n}][num]">
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
                    <!-- <select name="zpinfo[${n}][num]">
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
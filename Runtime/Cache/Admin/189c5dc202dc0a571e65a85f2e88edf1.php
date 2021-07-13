<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>
            
    订单列表

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
            首页 &gt; 订单管理 &gt; 订单列表
        </h1>
    </div>
    <div class="col-xs-12">
        <div class="tabbable">

            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab">
                <li class="active">
                    <a href="<?php echo U('Admin/Jzx/index');?>">
                        订单列表
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Admin/Jzx/add_case');?>">
                        添加订单
                    </a>
                </li>
                <li>
                    <form action="<?php echo U('xls');?>" method="get">
                        <input type="hidden" name="keyword" value="<?php echo I('keyword');?>">
                        <input type="hidden" name="xiadan" value="<?php echo I('xiadan');?>">
                        <input type="hidden" name="sid" value="<?php echo I('sid');?>">
                        <input type="hidden" name="date_start" value="<?php echo I('date_start');?>">
                        <input type="hidden" name="date_end" value="<?php echo I('date_end');?>">
                        <button type="submit" class="btn btn-purple btn-sm execl">
                        导出订单
                        </button>
                    </form>
 
                </li>
                <li>
                    <form class="form-inline" action="" method="get">
                        <label class="inline">&nbsp;&nbsp;收件人</label>
                        <input type="text" name="keyword" value="<?php echo I('keyword');?>" class="form-control">
                        <label class="inline">&nbsp;&nbsp;下单人</label>
                        <input type="text" name="xiadan" value="<?php echo I('xiadan');?>" class="form-control">
                        <label class="inline">组别</label>
                        <select name="sid" class="form-control">
                            <option value="0">--组别--</option>
                            <?php echo ($category); ?>
                        </select>
                        <label class="inline">&nbsp;&nbsp;日期</label>
                        <input class="form-control" type="text" name="date_start" onclick="WdatePicker({minDate:'2019-08-13',maxDate:'2029-11-16'})" placeholder="开始日期">
                        <input class="form-control" type="text" name="date_end" onclick="WdatePicker({minDate:'2019-08-13',maxDate:'2029-11-16'})" placeholder="结束日期">
                        <button type="submit" class="btn btn-purple btn-sm">
                            <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                            搜索
                        </button>
                    </form>
                </li>
            </ul>
            <div class="tab-content">
                <form id="form" method="post" action="<?php echo U('Admin/Jzx/delete_case');?>">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <tr>
                            <td width="%" class="center">
                                <input class="check-all" type="checkbox" value="">
                            </td>
                            <th width="1%">
                                序号
                            </th>
                            <th width="2%">
                                姓名
                            </th>
                         <!--    <th width="1%">
                                电话
                            </th> -->
                            <th width="16%">
                                产品信息
                            </th>
                            <th width="12%">
                                赠品信息
                            </th>
                            <th width="18%">
                                备注
                            </th>
							<th width="3%">
                                总额
                            </th>
                            <th width="3%">
                                代收
                            </th>
                            <th width="3%">
                                订单类型
                            </th>
                      <!--    <th width="2%">
                                省份
                            </th>
                            <th width="2%">
                                市区
                            </th>
                            <th width="2%">
                                县镇
                            </th> -->
                            <th width="18%">
                                收件人地址
                            </th>
                            <th width="2%">
                                快递公司
                            </th>
                            <th width="2%">
                                快递单号
                            </th>
                            <th width="2%">
                                快递状态
                            </th>
                            <th width="5%">
                                录单时间
                            </th>
                            <th width="1%">
                                组别
                            </th>
                            <th width="1%">
                                下单人
                            </th>
                            <th width="12%">
                                操作
                            </th>
                        </tr>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                <td class="center">
                                    <input class="ids" type="checkbox" name="ids[]" value="<?php echo ($v['id']); ?>">
                                </td>
                                <td>
                                    <?php echo ($v['id']); ?>
                                </td>
                                <td>
                                    <?php echo ($v['name']); ?>
                                </td>
                               <!--  <td>
                                    <?php echo ($v['phone']); ?>
                                </td>  -->
                                <td>
                                    <?php if(is_array($v['pro_info'])): $i = 0; $__LIST__ = $v['pro_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; echo ($vol["pro_info"]); ?>-<?php echo ($vol["num"]); ?>-<?php echo ($vol["guige"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
                                </td>
                                <td>
                                    <?php if(is_array($v['zp_info'])): $i = 0; $__LIST__ = $v['zp_info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(empty($vol['zp_info'])): else: ?>
                                        <?php echo ($vol["zp_info"]); ?>-<?php echo ($vol["num"]); ?>-<?php echo ($vol["guige"]); ?><br><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </td>
                                <td>
                                    <?php echo ($v['content']); ?>
                                </td>
								 <td>
                                    <?php echo ($v['all_money']); ?>
                                </td>
                                <td>
                                    <?php echo ($v['collection_money']); ?>
                                </td>
                                <td>
                                    <?php if($v["order_type"] == 1): ?>首单<?php endif; ?>
                                    <?php if($v["order_type"] == 2): ?>复购1<?php endif; ?>
                                    <?php if($v["order_type"] == 3): ?>复购2<?php endif; ?>
                                    <?php if($v["order_type"] == 4): ?>复购3<?php endif; ?>
                                    <?php if($v["order_type"] == 5): ?>复购4<?php endif; ?>
                                    <?php if($v["order_type"] == 6): ?>复购5<?php endif; ?>
									<?php if($v["order_type"] == 9): ?>复购6<?php endif; ?>
                                    <?php if($v["order_type"] == 10): ?>复购7<?php endif; ?>
                                    <?php if($v["order_type"] == 11): ?>复购8<?php endif; ?>
                                    <?php if($v["order_type"] == 12): ?>复购9<?php endif; ?>
									<?php if($v["order_type"] == 13): ?>复购10<?php endif; ?>
									<?php if($v["order_type"] == 14): ?>复购11<?php endif; ?>
									<?php if($v["order_type"] == 15): ?>复购12<?php endif; ?>
									
									
                                    
                                    <?php if($v["order_type"] == 7): ?><b style="color: red;">退货</b><?php endif; ?>
                                    <?php if($v["order_type"] == 8): ?>转介绍<?php endif; ?>
                                </td>

         <!--                        <td>
                                    <?php echo ($v['province']); ?>
                                </td>
                                <td>
                                    <?php echo ($v['city']); ?>
                                </td>
                                <td>
                                    <?php echo ($v['town']); ?>
                                </td> -->
                                <td>
                                    <!-- <?php echo ($v['province']); echo ($v['city']); ?>市<?php echo ($v['town']); ?>( --><?php echo ($v['address']); ?>
                                </td>
                                <td>
                                    <?php echo ($v['kd_gs']); ?>
                                </td>
                                <td>
                                    <?php echo ($v['kd_num']); ?>
                                </td>
                                <td>
                                    <?php if($v["order_status"] == 1): ?>已发货<?php endif; ?>
                                    <?php if($v["order_status"] == 2): ?>已签收<?php endif; ?>
                                    <?php if($v["order_status"] == 3): ?>退货<?php endif; ?>
                                </td>
                                <td>
                                    <?php echo (date("Y-m-d H:i:s",$v['time'])); ?>
                                </td>
                                <td>
                                    <?php if($v["pid"] == 9): ?>甲状腺<?php endif; ?>
                                    <?php if($v["pid"] == 10): ?>皮肤组<?php endif; ?>
                                    <?php if($v["pid"] == 11): ?>咽炎组<?php endif; ?>
                                    <?php if($v["pid"] == 13): ?>生发组<?php endif; ?>
                                    <?php if($v["pid"] == 14): ?>哮喘组<?php endif; ?>
                                    
                                </td>
                                <td>
                                   <?php echo ($v['write_name']); ?>
                                </td>
                                <td><a href="<?php echo U('Admin/Jzx/edit_case',array('id'=>$v['id']));?>">修改订单</a>&nbsp;||
                                 <a href="<?php echo U('Admin/Jzx/add_kd',array('id'=>$v['id']));?>" title="添加快递信息">添加快递信息</a>||
                                 <a href="<?php echo U('Admin/Jzx/edit_kd',array('id'=>$v['id']));?>" title="修改快递状态">修改快递状态</a>
                                   <!-- <?php if($v['id'] != 88): ?><a class="del" href="javascript:;" val="<?php echo U('Admin/Rule/del_admin',array('id'=>$v['id']));?>" title="删除">删除</a><?php endif; ?> -->
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </form>
                <div class="cf">
                    <input id="submit" class="btn btn-info" type="button" value="删除">
                </div>
                <?php echo ($page); ?>
            </div>
        </div>
    </div>




<script type="text/javascript">
    $(function () {
        $(".group").click(function () {
            $(this).addClass('hide');
            $(this).parent().find(".groupselect").removeClass('hide');
        })
        $(".groupselect").on("change", function () {
            var ob = $(this);
            var gid = ob.val();
            var uid = ob.parent().find('.group').attr('val');
            $.get("<?php echo U('update');?>?ajax=yes&uid=" + uid + "&gid=" + gid, function (data) {
                var text = ob.find("option:selected").text();
                ob.parent().find(".group").removeClass('hide').html(text);
                ob.addClass('hide');
            });
        })

        $(".check-all").click(function () {
            $(".ids").prop("checked", this.checked);
        });
        $(".ids").click(function () {
            var option = $(".ids");
            option.each(function (i) {
                if (!this.checked) {
                    $(".check-all").prop("checked", false);
                    return false;
                } else {
                    $(".check-all").prop("checked", true);
                }
            });
        });
        $("#submit").click(function () {
            bootbox.confirm({
                title: "系统提示",
                message: "是否要删除所选订单？",
                callback: function (result) {
                    if (result) {
                        $("#form").submit();
                    }
                },
                buttons: {
                    "cancel": {"label": "取消"},
                    "confirm": {
                        "label": "确定",
                        "className": "btn-danger"
                    }
                }
            });
        });
        $(".del").click(function () {
            var url = $(this).attr('val');
            bootbox.confirm({
                title: "系统提示",
                message: "是否要删除该订单?",
                callback: function (result) {
                    if (result) {
                        window.location.href = url;
                    }
                },
                buttons: {
                    "cancel": {"label": "取消"},
                    "confirm": {
                        "label": "确定",
                        "className": "btn-danger"
                    }
                }
            });
        });
    })
</script>


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
                    $(function() {
                        $('.b-has-child .active').parents('.b-has-child').eq(0).find('.b-nav-parent').click();
                    })
                </script>
    </body>

</html>
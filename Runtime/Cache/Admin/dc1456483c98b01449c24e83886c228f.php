<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>
            
    用户组添加用户

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
            首页 &gt; 后台管理 &gt; 管理员列表
        </h1>
    </div>
    <div class="col-xs-12">
        <div class="tabbable">
            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab">
                <li class="active">
                    <a href="<?php echo U('Admin/Rule/admin_user_list');?>">
                        管理员列表
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Admin/Rule/add_admin');?>">
                        添加管理员
                    </a>
                </li>
            </ul>
            <div class="tab-content">
            	<form id="form" method="post" action="<?php echo U('Admin/Rule/del_admin');?>">
                	<table class="table table-striped table-bordered table-hover table-condensed">
	                    <tr>
	                        <td class="center">
	                            <input class="check-all" type="checkbox" value="">
	                        </td>
	                        <th width="5%">
	                            用户名
	                        </th>
	                        <th>
	                            用户组
	                        </th>
	                        <th width="5%" class="center">
	                            是否组长
	                        </th>
                            <th width="5%" class="center">
                                账号状态
                            </th>
	                        <th>
	                            操作
	                        </th>
	                    </tr>
	                    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
	                            <td class="center">
	                                <?php if($v['isleader'] != 1): ?><input class="ids" type="checkbox" name="ids[]" value="<?php echo ($v['id']); ?>"><?php else: ?>
                                    <span title="系统管理员，禁止删除">--</span><?php endif; ?>
	                            </td>
	                            <td>
	                                <?php echo ($v['username']); ?>
	                            </td>
	                            <td>
	                                <?php echo ($v['title']); ?>
	                            </td>
	                            <td class="center">
	                                <?php if($v['isleader'] == 2 ): ?>否
	                                <?php else: ?> 是<?php endif; ?>
	                            </td>
                                <td class="center">
                                    <?php if($v['status'] == 1 ): ?>正常
                                    <?php else: ?> 禁止<?php endif; ?>
                                </td>
	                            <td><a href="<?php echo U('Admin/Rule/edit_admin',array('id'=>$v['id']));?>">修改权限或密码</a>&nbsp;
	                              <!--  <?php if($v['id'] != 88): ?><a class="del" href="javascript:;" val="<?php echo U('Admin/Rule/del_admin',array('id'=>$v['id']));?>" title="删除">删除</a><?php endif; ?> -->
	                            </td>
	                        </tr><?php endforeach; endif; ?>
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
                message: "是否要删除所选用户？",
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
                message: "是否要删除该用户?",
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>
            
    后台首页

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
            首页
        </h1>
    </div>
    <div class="col-xs-12">
        <div class="tabbable">
            后台首页
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
                    $(function() {
                        $('.b-has-child .active').parents('.b-has-child').eq(0).find('.b-nav-parent').click();
                    })
                </script>
    </body>

</html>
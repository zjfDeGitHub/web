<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/admin\view\subject\edit.htm";i:1542447415;s:70:"C:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\common\head.htm";i:1541677570;s:70:"C:\phpStudy\PHPTutorial\WWW\tp5\application\admin\view\common\left.htm";i:1542510307;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost/tp5/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/tp5/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
   
        <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://localhost/tp5/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://localhost/tp5/public/static/admin/images/yyy.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('user'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/lst'); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">学生管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('User/lst'); ?>">
                                    <span class="menu-text">
                                     学生列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
        <a href="#" class="menu-dropdown">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text">栏目管理</span>
            <i class="menu-expand"></i>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                     栏目列表                                    </span>
                    <i class="menu-expand"></i>
                </a>
            </li>
        </ul>
    </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">栏目内容</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Subject/lst'); ?>">
                                    <span class="menu-text">
                                     栏目内容列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
    <!-- /Sidebar Menu -->
</div>
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url("index"); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url("lst"); ?>">内容管理</a>
                    </li>
                                        <li class="active">修改内容</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改内容</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url("subject/edit"); ?>" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">内容标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" value="<?php echo $subjectData['title']; ?>" name="title" type="text" >
                            </div>
                            <input type="hidden" name="id" value="<?php echo $subjectData['id']; ?>">
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                            <div class="col-sm-6">
                             <select name="cid">
                                <?php if(is_array($cateName) || $cateName instanceof \think\Collection || $cateName instanceof \think\Paginator): $i = 0; $__LIST__ = $cateName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"  ><?php echo $vo['catename']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                             </select>
                            </div>
                             <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">URL</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="password" value="<?php echo $subjectData['url']; ?>" name="url" type="text">
                            </div>
                             <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">题目分值</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="password" value="<?php echo $subjectData['score']; ?>" name="score" type="text">
                            </div>
                             <p class="help-block col-sm-4 red">* 必填</p>
                        </div> 
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">难度</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="password" value="<?php echo $subjectData['level']; ?>" name="level" type="text">
                            </div>
                             <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                    <div class="form-group">
                        <label for="group_id" class="col-sm-2 control-label no-padding-right"> 描述</label>
                        <div class="col-sm-6">
                            <input class="form-control" id="password" value="<?php echo $subjectData['desc']; ?>" name="desc" type="text">
                        </div>
                        <p class="help-block col-sm-4 red">* 必填</p>
                    </div>
                    <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">FLAG</label>
                            <div class="col-sm-6">
                              <input class="form-control" id="password" value="<?php echo $subjectData['flag']; ?>" name="flag" type="text">
                            </div>
                             <p class="help-block col-sm-4 red">* 必填</p>
                        </div>     
                         
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="http://localhost/tp5/public/static/admin/style/jquery_002.js"></script>
    <script src="http://localhost/tp5/public/static/admin/style/bootstrap.js"></script>
    <script src="http://localhost/tp5/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost/tp5/public/static/admin/style/beyond.js"></script>
    


</body></html>
<?php /*a:4:{s:62:"/lamp/apache2/htdocs/www/application/admin/view/admin/edit.htm";i:1561000652;s:63:"/lamp/apache2/htdocs/www/application/admin/view/common/base.htm";i:1560908401;s:62:"/lamp/apache2/htdocs/www/application/admin/view/common/top.htm";i:1560908401;s:63:"/lamp/apache2/htdocs/www/application/admin/view/common/left.htm";i:1560912787;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
<title>编辑管理员</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/static/admin/images/logo.png" alt="">
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
                                <?php if(session('head_pic') != ''): ?>
                                <div class="avatar" title="<?php echo htmlentities(app('request')->session('username')); ?>">
                                    <img src="/uploads/<?php echo htmlentities(app('request')->session('head_pic')); ?>">
                                </div>
                                <?php endif; ?>
                                <section>
                                    <h2><span class="profile"><span><?php echo htmlentities(app('request')->session('username')); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>session('id'))); ?>">
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
                            <span class="menu-text">管理员管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            
                            <li>
                                <a href="<?php echo url('home/lst'); ?>">
                                    <span class="menu-text">
                                        轮播图配置                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            
<!-- Page Content -->
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li><a href="<?php echo url('index/index'); ?>">系统</a></li>
            <li><a href="<?php echo url('lst'); ?>">管理员列表</a></li>
            <li class="active">编辑管理员</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">
        
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">编辑管理员</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data" id="uploadForm">
                                <input type="hidden" name="id" value="<?php echo htmlentities($admin['id']); ?>">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label no-padding-right">管理员头像</label>
                                    <div class="col-sm-6">
                                        <input class="col-sm-6" placeholder="请选择图片" name="file" type="file">
                                        <button class="col-sm-1 btn btn-info btn-xs" id="upload">上传</button>
                                        <input type="hidden" name="pic" value="<?php echo htmlentities($admin['pic']); ?>">
                                        <?php if($admin['pic'] != ''): ?><div class='col-lg-12'><img src='<?php echo htmlentities($admin['pic']); ?>' style='width:20%;' class='head_pic'/></div><?php endif; ?>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 此图片将显示在右上角管理员头像处</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label no-padding-right">管理员名称</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="" name="username" required="" type="text" value="<?php echo htmlentities($admin['username']); ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label no-padding-right">管理员密码</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" placeholder="" name="password" type="text">
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
    <script src="/static/admin/style/jquery_002.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>
    
<script type="text/javascript">
    $(function () {
        $("#upload").click(function () {
            var formData = new FormData($('#uploadForm')[0]);
            $.ajax({
                type: 'post',
                url: "<?php echo url('article/ajUpload'); ?>",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
            }).success(function (data) {
                $('.head_pic').remove();
                $('input[name="pic"]').val(data);
                $('input[name="pic"]').after("<div class='col-lg-12'><img src="+data+" style='width:20%;' class='head_pic'/></div>");
            }).error(function () {
                alert("上传失败");
            });
            return false;
        });
    });
</script>



</body></html>
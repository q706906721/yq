<?php /*a:4:{s:64:"/lamp/apache2/htdocs/www/application/admin/view/article/edit.htm";i:1560999688;s:63:"/lamp/apache2/htdocs/www/application/admin/view/common/base.htm";i:1560908401;s:62:"/lamp/apache2/htdocs/www/application/admin/view/common/top.htm";i:1561002901;s:63:"/lamp/apache2/htdocs/www/application/admin/view/common/left.htm";i:1560912787;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
<title>编辑文章</title>

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
                                    <img src="<?php echo htmlentities(app('request')->session('head_pic')); ?>">
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
                <li><a href="<?php echo url('lst'); ?>">文章列表</a></li>
                <li class="active">编辑文章</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->       
        <div class="page-body">        
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-blue">
                            <span class="widget-caption">编辑文章</span>
                        </div>
                        <div class="widget-body">
                            <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data" id="uploadForm">
                                    <input type="hidden" name="id" value="<?php echo htmlentities($article['id']); ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">文章标题</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" placeholder="请输入文章标题" name="title" required="" type="text" value="<?php echo htmlentities($article['title']); ?>">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">关键字</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" placeholder="请输入关键字" name="keywords" type="text" value="<?php echo htmlentities($article['keywords']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">文章描述</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" placeholder="请输入文章描述" name="desc" style="height:100px;resize: none;"><?php echo htmlentities($article['desc']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">作者</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" placeholder="请输入作者" name="author" type="text" value="<?php echo htmlentities($article['author']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">发布时间</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" name="time" type="text" value="<?php echo htmlentities(date("Y-m-d",!is_numeric($article['time'])? strtotime($article['time']) : $article['time'])); ?>">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 日期格式为“1970-01-01”</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">文章缩略图</label>
                                        <div class="col-sm-6">
                                            <input class="col-sm-6" placeholder="请选择图片" name="file" type="file">
                                            <button class="col-sm-1 btn btn-info btn-xs" id="upload">上传</button>
                                            <input type="hidden" name="thumb" value="<?php echo htmlentities($article['thumb']); ?>">
                                            <img src="<?php echo htmlentities($article['thumb']); ?>" style='width:60%;' class='thumb'/>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 此图片将显示在文章列表</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="pid" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                        <div class="col-sm-6">
                                            <select name="type" style="width: 100%;">
                                                <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $k = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tp): $mod = ($k % 2 );++$k;?>
                                                <option value="<?php echo htmlentities($k); ?>" <?php if($article['type'] == $k): ?>selected="selected"<?php endif; ?>><?php echo htmlentities($tp); ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right">是否推荐</label>
                                        <div class="col-sm-6">
                                            <div class="control-group">
                                                <div class="radio" style="float: left; margin-right: 10px;">
                                                    <label>
                                                        <input class="inverted" <?php if($article['is_recommend'] == 0): ?>checked="checked"<?php endif; ?> name="is_recommend" type="radio" value="0"><span class="text">不推荐</span>
                                                    </label>
                                                </div>
                                                <div class="radio" style="float: left;">
                                                    <label>
                                                        <input <?php if($article['is_recommend'] == 1): ?>checked="checked"<?php endif; ?> class="inverted" name="is_recommend" type="radio" value="1"><span class="text">推荐</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pid" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                        <div class="col-sm-6">
                                            <textarea id="content" name="content"><?php echo htmlentities($article['content']); ?></textarea>
                                        </div>
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
        <script src="/static/admin/ueditor/ueditor.config.js"></script>
        <script src="/static/admin/ueditor/ueditor.all.min.js"></script>
        <script src="/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
        <script>
            var ue = UE.getEditor('content',{
                initialFrameWidth:600,
                initialFrameHeight:400,
                allowDivTransToP: false
            });
        </script>
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
                dataType:'json',
                cache: false,
                processData: false,
                contentType: false,
            }).success(function (data) {
                $('.thumb').remove();
                $('input[name="thumb"]').val(data);
                $('input[name="thumb"]').after("<img src="+data+" style='width:60%;' class='thumb'/>");
            }).error(function () {
                alert("上传失败");
            });
            return false;
        });
    });
</script>



</body></html>
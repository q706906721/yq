<?php /*a:1:{s:57:"D:\XAMPP\htdocs\yq\application\admin\view\login\index.htm";i:1568168898;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>安晟科技--后台登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    <style type="text/css">
        .loginbox-textbox img{
            width: 100%;
        }
    </style>
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white" style="padding-top:20px;border-radius: 10px;">
                <div class="loginbox-title" style="margin-bottom: 30px;">小程序管理后台</div>
                <div class="loginbox-textbox">
                    <input value="" class="form-control" placeholder="请输入用户名" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="请输入密码" name="password" type="password">
                </div>
                <div class="loginbox-textbox"><img src="<?php echo captcha_src(); ?>" alt="captcha"  style="cursor: pointer;" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();"class="btn btn-block"/></div>
                <div class="loginbox-textbox">
                    <input value="" class="form-control" placeholder="请输入验证码" name="code" type="text" autocomplete="off">
                </div>                
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="登录" type="submit">
                </div>
            </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/static/admin/style/jquery.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>
    <script type="text/javascript" src="/static/admin/layer/layer.js"></script>
    <script type="text/javascript">
        $('input[type="submit"]').click(function(){
            $.ajax({
                url:'<?php echo url('index'); ?>',
                type:'POST',
                data:{username:$('input[name="username"]').val(),password:$('input[name="password"]').val(),code:$('input[name="code"]').val()},
                success:function(res){
                    if (res.code === 1) {
                        layer.msg(res.message, {
                            icon: 1,
                            time: 2000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            location.href = "<?php echo url('index/index'); ?>"
                        }); 
                    }else{
                        layer.msg(res.message, {
                            icon: 2,
                            time: 2000
                        });
                    }
                }
            })
            return false;
        })
    </script>



</body><!--Body Ends--></html>
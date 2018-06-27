<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <!-- Custom Theme files -->
    <link href="<?php echo (HOME_CSS_URL); ?>style1.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <!--Google Fonts-->
    <link href='http://fonts.useso.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <!--Google Fonts-->
</head>
<body>
<div class="login">
    <h2>风行天下</h2>
    <div class="login-top">
        <h1>注册</h1>
        <form method="post" action="/zws/index.php/Home/Login/do_register">
            用户名：<input type="text" id="user" name="user" class="required" placeholder="用户名不得小于两位"/>
            密&nbsp;&nbsp;&nbsp;码：<input type="password" id="password" class="required" name="password" placeholder="密码不得小于六位"/>
            密码确认<input type="password" id="repassword" name="repassword" class="required"/>
            邮&nbsp;&nbsp;&nbsp;箱：<input type="text" id="email" name="email" class="required"/>
            手机号：<input type="text" id="phone" name="phone" class="required"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked"><span  style="font-size:13px;">我已阅读并接受<span style="color:orange;">版权申明</span>和<span style="color:orange;">隐私保护</span>条款</span>
            <div id="result"></div>
            <div class="forgot">
                <input type="submit" id="submit" name="register" value="注册" onclick="submit()" />
            </div>
        </form>
    </div>
    <div class="login-bottom">
        <h3>New User &nbsp;<a href="/zws/index.php/Home/Login/register">Register</a>&nbsp Here</h3>
    </div>
</div>

<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

    $('#submit').on('click',function(){
        //获取用户名
        var username = $('#user').val();
        //获取密码
        var password =$('#password').val();
        var repassword=$('#repassword').val();
        //获取手机号
        var email = $('#email').val();
        //获取手机号
        var phone = $('#phone').val();
        //判断用户名
        if(username==''){
            alert("请输入用户名!");
            return false;
        }else{
            if(username.length<2||username.length>12){
                alert("用户名只能在2到12位");
                return false;
            }else{
                var res=new RegExp("[\u4e00-\u9fa5a-zA-Z0-9\-]{4,12}");
                if(!res.test(username)){
                    alert("您输入的用户名不符合规范!");

                    return false;
                }
            }
        }
        //判断密码
        if(password!=''){
            var re=new RegExp("^[a-z|A-Z|0-9]{6,20}");
            if(!re.test(password)){
                alert("您输入的密码不符合规范!");
                return false;
            }
        }else{
            alert("请输入密码!");
            return false;
        }
        //确认密码
        if(password!==repassword){
            alert('密码与密码确认不相等！');
            return false;
        }



        //判断邮箱
        if(email !=''){
            var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (filter.test(email)) return true;
            else {
                alert('您的邮箱格式不正确');
                return false;
            }
        }else{
            alert('请输入邮箱！');
            return false;
        }

        //判断手机号
        if(phone != ''){
            var rePhone = /^1\d{10}$/;
            if (rePhone.test(phone)) return true;
            else {
                alert('您的手机号格式不正确');
                return false;
            }
        }else{
            alert('请输入手机号');
            return false;
        }


    });

</script>
</body>
</html>
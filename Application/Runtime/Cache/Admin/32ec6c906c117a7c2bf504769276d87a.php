<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>风行天下管理系统--登录</title>
    <link href="<?php echo (ADMIN_CSS_URL); ?>style.css" rel="stylesheet" />
</head>
<body>
<div>


    <div class="wrap">
        <div class="banner-show" id="js_ban_content">
            <div class="cell bns-01">
                <div class="con">
                </div>
            </div>
            <div class="cell bns-02" style="display:none;">
                <div class="con">
                    <a href="#" target="_blank" class="banner-link">
                        <i>风行天下</i></a> </div>
            </div>
        </div>
        <div class="banner-control" id="js_ban_button_box">
            <a href="javascript:;" class="left">左</a>
            <a href="javascript:;" class="right">右</a>
        </div>



  <form name="loginInfo" method="post" action="<?php echo U('Admin/login/do_login');?>">
        <div class="container">
            <div class="register-box">
                <div class="reg-slogan">
                    登录</div>
                <div class="reg-form" id="js-form-mobile">
                    <br>
                    <br>
                    <div class="cell">

                        <input type="text" name="username" id="js-mobile_ipt" placeholder="请输入用户名..." class="text" maxlength="20" />
                    </div>
                    <div class="cell">

                        <input type="password" name="password" id="js-mobile_pwd_ipt" placeholder="请输入密码..." class="text" />
                    </div>
                    <div class="cell vcode">
                        <input type="text" name="verifyCode" id="js-mobile_vcode_ipt" placeholder="请输入验证码..." class="text" maxlength="6" />
                        <img id="code" src="<?php echo U('Admin/login/verify');?>"/>
                        </div>
                    <div class="bottom">
                        <input type="submit" id="js-mobile_btn" style="width:330px;" class="button btn-green" value="立即登录"/></div>
                </div>


            </div>
        </div>
    </form>




    </div>

</div>
</body>
<script type="text/javascript" charset="utf-8">
    var code = document.getElementById("code");
    code.onclick = function(){
        this.src = this.src+'?'+Math.random();
    }
</script>
</html>

<script src="<?php echo (ADMIN_JS_URL); ?>jquery-1.7.2.js"></script>


<script type="text/javascript">
    (function(){

        var defaultInd = 0;
        var list = $('#js_ban_content').children();
        var count = 0;
        var change = function(newInd, callback){
            if(count) return;
            count = 2;
            $(list[defaultInd]).fadeOut(400, function(){
                count--;
                if(count <= 0){
                    if(start.timer) window.clearTimeout(start.timer);
                    callback && callback();
                }
            });
            $(list[newInd]).fadeIn(400, function(){
                defaultInd = newInd;
                count--;
                if(count <= 0){
                    if(start.timer) window.clearTimeout(start.timer);
                    callback && callback();
                }
            });
        }

        var next = function(callback){
            var newInd = defaultInd + 1;
            if(newInd >= list.length){
                newInd = 0;
            }
            change(newInd, callback);
        }

        var start = function(){
            if(start.timer) window.clearTimeout(start.timer);
            start.timer = window.setTimeout(function(){
                next(function(){
                    start();
                });
            }, 6000);
        }

        start();

        $('#js_ban_button_box').on('click', 'a', function(){
            var btn = $(this);
            if(btn.hasClass('right')){
                //next
                next(function(){
                    start();
                });
            }
            else{
                //prev
                var newInd = defaultInd - 1;
                if(newInd < 0){
                    newInd = list.length - 1;
                }
                change(newInd, function(){
                    start();
                });
            }
            return false;
        });

    })();
</script>
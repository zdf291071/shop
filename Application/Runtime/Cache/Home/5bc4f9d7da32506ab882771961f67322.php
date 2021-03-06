<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>风行天下--餐饮超市</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="GetTemplates.co" />



    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>magnific-popup.css">

    <!-- Bootstrap DateTimePicker -->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>bootstrap-datetimepicker.min.css">



    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo (HOME_JS_URL); ?>modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo (HOME_JS_URL); ?>respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">

            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="#">风行天下 <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="/zws/index.php/Home/Goods/index">餐饮超市</a></li>
                        <li class="has-dropdown">
                            <a href="/zws/index.php/Home/Mycar/index">我的购物车</a>

                        </li>
                        <li><a href="/zws/index.php/Home/List/search">订单查询</a></li>
                        <?php if($_SESSION['user']== null): ?><li class="btn-cta" id="login"><a href="/zws/index.php/Home/Login/index"><span>登录</span></a></li>
                            <?php else: ?>
                            <?php if($_SESSION['user']!= null): ?><li class="btn-cta" id="login"><span style="font-size:16px;font-family: 'kaiti';color:orange;">hello,<?php echo (session('user')); ?></span></a></li><?php endif; endif; ?>
                    </ul>
                </div>
            </div>

        </div>


    </nav>

    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">

                    <div class="row row-mt-15em">
                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small">Welcome to <a href="http://gettemplates.co" target="_blank">风行天下.</a></span>
                            <h1 class="cursive-font">All in good taste!</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>


    <div class="gtco-section">
        <div class="gtco-container">
            <div style="color:red;font-family:'kaiti';font-size:23px;margin-left:500px;"><?php echo ($name); ?></div>
            <div style="width:1580px;height:auto;margin-left:-190px;margin-top:50px;">
                <form action="<?php echo U('Home/Goods/mycar');?>" method="post">
                    <?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="table_content" style="width:260px;float:left;margin-left:30px;margin-bottom:150px;">
                            <div >
                                <a href="<?php echo U('Home/Goods/show_goods',array('id'=>$v['id']));?>">
                                    <img style="width:230px;height:230px;" src="<?php echo ($v["image"]); ?>">
                                </a>
                            </div>
                            <div style="margin-top:10px;margin-bottom: 10px;">
                                <span>名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</span><strong style="color:orange;"><?php echo ($v["name"]); ?></strong><br/>
                                <span>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</span><strong style="color:orange;"><?php echo ($v["price"]); ?>￥</strong><br/>

                            </div>

                        </div><?php endforeach; endif; ?>

                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="pagelist" style="margin:0 0 30px 420px;"><?php echo ($pagelist); ?></div>


    <footer id="gtco-footer" role="contentinfo" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-pb-md">




                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>

                </div>

            </div>



        </div>
    </footer>
    <!-- </div> -->

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="<?php echo (HOME_JS_URL); ?>jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo (HOME_JS_URL); ?>jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo (HOME_JS_URL); ?>jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="<?php echo (HOME_JS_URL); ?>owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?php echo (HOME_JS_URL); ?>jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="<?php echo (HOME_JS_URL); ?>jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="<?php echo (HOME_JS_URL); ?>jquery.magnific-popup.min.js"></script>
<script src="<?php echo (HOME_JS_URL); ?>magnific-popup-options.js"></script>

<script src="<?php echo (HOME_JS_URL); ?>moment.min.js"></script>
<script src="<?php echo (HOME_JS_URL); ?>bootstrap-datetimepicker.min.js"></script>


<!-- Main -->
<script src="<?php echo (HOME_JS_URL); ?>main.js"></script>

</body>
</html>
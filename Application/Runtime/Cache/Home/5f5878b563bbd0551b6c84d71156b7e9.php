<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>zws &mdash; 网上订餐系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
                    <div id="gtco-logo"><a href="#">首页 <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="menu.html">Menu</a></li>
                        <li class="has-dropdown">
                            <a href="services.html">Services</a>
                            <ul class="dropdown">
                                <li><a href="#">Food Catering</a></li>
                                <li><a href="#">Wedding Celebration</a></li>
                                <li><a href="#">Birthday's Celebration</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="btn-cta"><a href="#"><span>Reservation</span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(./Public/Home/img/bj.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">


                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small">Welcome to <a href="http://gettemplates.co" target="_blank">foods.co</a></span>
                            <h1 class="cursive-font">All in good taste!</h1>
                        </div>
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">

                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <h3 class="cursive-font">订餐</h3>
                                            <form action="#">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="activities">Persons</label>
                                                        <select name="#" id="activities" class="form-control">
                                                            <option value="">Persons</option>
                                                            <option value="">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                            <option value="">5+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="date-start">Date</label>
                                                        <input type="text" id="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="date-start">Time</label>
                                                        <input type="text" id="time" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="马上订餐">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>



    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2 class="cursive-font primary-color">Popular Dishes</h2>
                    <p> 紫驼之峰出翠釜，水精之盘行素鳞;犀箸餍饫久未下，鸾刀缕切空纷纶;黄门飞鞚不动尘，御厨络绎送八珍。</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo (HOME_IMG_URL); ?>0.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo (HOME_IMG_URL); ?>0.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>快餐烧肉饭</h2>
                            <p>色泽酱红，麻辣鲜香、油亮，不腻不膻，外酥里嫩，肉质鲜美，别具风味..</p>
                            <p><span class="price cursive-font">$19.15</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo (HOME_IMG_URL); ?>2.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo (HOME_IMG_URL); ?>8.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>咖喱鸡肉饭</h2>
                            <p>肉质细嫩却略有嚼头，甜汁入味，越吃越有味，越吃越想吃，就连骨头里都香飘四溢..</p>
                            <p><span class="price cursive-font">$20.99</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo (HOME_IMG_URL); ?>3.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo (HOME_IMG_URL); ?>3.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>广式腊味煲仔饭</h2>
                            <p>广式腊肉肉质肥美，红烧后口味醇厚、鲜甜..</p>
                            <p><span class="price cursive-font">$28.99</span></p>

                        </div>
                    </a>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo (HOME_IMG_URL); ?>4.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo (HOME_IMG_URL); ?>4.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>肥牛饭</h2>
                            <p>品味美食，而不是品味菜单，烧一锅好菜，而不是烧钱..</p>
                            <p><span class="price cursive-font">$12.99</span></p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo (HOME_IMG_URL); ?>10.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo (HOME_IMG_URL); ?>10.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>盐水鸭煲仔饭</h2>
                            <p>盐水鸭皮白肉嫩、肥而不腻、香鲜味美，具有香、酥、嫩的特点..</p>
                            <p><span class="price cursive-font">$23.10</span></p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="<?php echo (HOME_IMG_URL); ?>7.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="<?php echo (HOME_IMG_URL); ?>a.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>鸡块木桶饭</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            <p><span class="price cursive-font">$5.59</span></p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font">Our Services</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
                        <h3>Happy People</h3>
                        <p> 不怕您开口，就怕你笑口。</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
                        <h3>Creative Culinary</h3>
                        <p>多元化餐饮服务专家，好味道让您回味无穷。</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
                        <h3>Food Delivery</h3>
                        <p>为您提供最好的服务。</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>


    <div class="gtco-cover gtco-cover-sm" id="content" style="background-image: url(./Public/Home/img/bj.jpg)"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container text-center">
            <div class="display-t">
                <div class="display-tc">
                    <h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
                    <p>&mdash; John Doe, CEO of XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font primary-color">Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">订单列表</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">美食种类</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Chef Cook</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-center">
                        <span class="counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Year Started</span>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2 class="cursive-font">Subscribe</h2>
                    <p>Be the first to know about the new templates.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-inline">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="gtco-footer" role="contentinfo" style="background-image: url(./Public/Home/img/bj.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-pb-md">




                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>快来订购美食吧~</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Get Social</h3>
                        <ul class="gtco-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
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
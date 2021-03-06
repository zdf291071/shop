<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>单个商品展示页面</title>
    <meta charset="utf-8">
    <title>风行天下--后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=9" />
    <meta name="author" content="SuggeElson" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="application-name" content="sprFlat admin template" />
    <link rel='stylesheet' type='text/css'/>
    <link href="<?php echo (ADMIN_CSS_URL); ?>icons.css" rel="stylesheet" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>sprflat-theme/jquery.ui.all.css" rel="stylesheet" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>bootstrap.css" rel="stylesheet" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>plugins.css" rel="stylesheet" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>main.css" rel="stylesheet" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>show.css"/>
    <meta name="msapplication-TileColor" content="#3399cc" />
</head>
<style>

    .table_content{
        width:290px;
        height:290px;
        text-align: center;
    }
    .table_content span{
        margin:20px;
        font-size: 18px;
    }

    .table_content .submit{
        width:160px;
        background: linear-gradient(#fff,#aaa);
        font-size: 21px;


    }
</style>
<body>

<div id="content" style="width:1200px;margin-left:19px;">
    <!-- Start .content-wrapper -->
    <div class="content-wrapper" style="width:1200px;">
        <div class="row">
            <!-- Start .row -->
            <!-- Start .page-header -->
            <div class="col-lg-12 heading">
                <h1 class="page-header"><i class="im-screen"></i> 风行天下餐饮超市</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
                    风行天下餐饮超市>>><?php echo ($name); ?>列表
                </ul>
                <!-- End .breadcrumb -->
                <!-- Start .option-buttons -->
                <div class="option-buttons">
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group">
                            <a id="clear-localstorage" class="btn tip" title="Reset panels position">
                                <i class="ec-refresh color-red s24"></i>
                            </a>
                        </div>
                        <div class="btn-group dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1"><i class="br-grid s24"></i></a>
                        </div>
                        <div class="btn-group dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2"><i class="ec-pencil s24"></i></a>
                        </div>
                        <div class="btn-group">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3"><i class="ec-help s24"></i></a>

                        </div>
                    </div>
                </div>
                <!-- End .option-buttons -->
            </div>
            <!-- End .page-header -->
        </div>
        <!-- End .row -->
        <div class="outlet">
<form method="post" action="<?php echo U('Home/Goods/show_goods_zx');?>">
        <input type="hidden" name="name" value="<?php echo ($data["name"]); ?>">
        <input type="hidden" name="price" value="<?php echo ($data["price"]); ?>">
        <input type="hidden" name="image" value="<?php echo ($data["image"]); ?>">
            <div style="float:left;margin-left:60px;width:500px;height:500px;border:1px solid #ccc;">
                <img style="width:600px;height:500px;" src="<?php echo ($data["image"]); ?>"/>
            </div>


            <div style="float:left; margin-left:150px;width:430px;height:500px;">
                <div style="height:230px;">
                    <div style="height:100px">
                        <hr>
                        <p style="font-family: 'kaiti';font-size:23px;">赠品：饮料一瓶，外加餐具。</p>
                        <hr>
                    </div>
                    <div class="shop_right">
                        <h1>地区选择</h1>
                        <div class="styled-select"><select name="s1" id="s1"> </select></div>
                        <div class="styled-select"><select name="s2" id="s2"> </select></div>
                        <div class="styled-select"><select name="s3" id="s3"> </select></div>
                     </div>
                </div>

                <p style="font-family: 'kaiti';font-size:23px;"><span>商品名称：</span><strong style="color:orange;"><?php echo ($data["name"]); ?></strong></p><br/>
                <p style="font-family: 'kaiti';font-size:23px;"><span>商品价格：</span><strong style="color:orange;"><?php echo ($data["price"]); ?>￥</strong></p><br/>


                <p style="font-family: 'kaiti';font-size:23px;">
                    <span>商品数量：</span>

                    <input type="text" style="width:60px;" class="num" name="number" value="1"/>
                   
                </p>
                <br/><br/>

                <input type="submit" style="width:290px;height:39px;background: linear-gradient(#fff,#aaa);font-size: 21px;" value="加入购物车"/>

            </div>

</form>


        </div>

    </div>


</div>
<script src="<?php echo (HOME_JS_URL); ?>citys.js" type="text/javascript" charset="utf-8"></script>
<script>
    /*城市选择的三级联动
     */
    var s1 = document.getElementById("s1");
    var s2 = document.getElementById("s2");
    var s3 = document.getElementById("s3");

    // 省
    var l=citys.length;
    for( var i in citys ){
        s1.options.add( new Option(citys[i].name) );
    }
    s1.onchange = sheng;
    sheng();
    function sheng(){
        var str = s1.value;	// 省
        s2.length = 0;
        for(var i=0;i<l;i++){
            if(str==citys[i].name){
                var citys1=citys[i].city;
                for(var j=0;j<citys1.length;j++){
                    s2.options.add( new Option(citys1[j].name) );
                }
            }
        }
        shi();	// 把该市所对应的区，显示在s3中
    }

    s2.onchange = shi;
    function shi(){
        var str1 = s1.value;	// 省
        var str2 = s2.value;	// 市
        s3.length = 0;
        for(var i=0;i<l;i++){
            if(str1==citys[i].name){
                var citys1=citys[i].city;
                for(var j=0;j<citys1.length;j++){
                    if(str2==citys1[j].name){
                        for(var m=0;m<citys1[j].area.length;m++){
                            s3.options.add( new Option(citys1[j].area[m]) );
                        }
                    }
                }
            }
        }
    }
</script>
</body>
</html>
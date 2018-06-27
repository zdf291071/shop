<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
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
    <meta name="msapplication-TileColor" content="#3399cc" />
</head>

<body>

<div id="header">
    <div class="container-fluid">
        <div class="navbar">
            <nav class="top-nav" role="navigation">
                <ul class="nav navbar-nav pull-left" style="margin-left:190px;">
                    <li id="toggle-sidebar-li">
                        <a href="#" onClick="javascript:history.back(-1);"><i class="en-arrow-left2"></i>
                        </a>
                    </li>

                </ul>


                <ul class="nav navbar-nav pull-right">
                    <li style="margin-top:15px;">hello,<span style="color:red;"><?php echo (session('user')); ?></span></li>
                    <li><a href="<?php echo U('Admin/Login/loginout');?>">退出</a></li>
                    <li id="toggle-right-sidebar-li"><a href="#" id="toggle-right-sidebar"><i class="ec-users"></i><?php echo ($user); ?> <span class="notification"><?php echo ($user_num); ?></span></a>
                    </li>
                </ul>
            </nav>
        </div>


    </div>
</div>


<div id="sidebar">
    <div class="sidebar-inner">
    <!-- Start #sideNav -->
    <ul id="sideNav" class="nav nav-pills nav-stacked">
        <li class="top-search">
            <form>
                <input type="text" name="search" placeholder="Search ...">
                <button type="submit"><i class="ec-search s20"></i>
                </button>
            </form>
        </li>

        <?php if($_SESSION['role'] == 1): ?><li>
            <a href="#">权限管理 <i class="im-screen"></i></a>
            <ul class="nav sub">
                <li><a href="<?php echo U('admin/admin/index');?>"><i class="en-arrow-right7"></i>管理员列表</a></li>
                <li> <a href="<?php echo U('admin/admin/add_admin');?>"><i class="en-arrow-right7"></i>管理员添加</a></li>
            </ul>
        </li><?php endif; ?>

        <li>
            <a href="#"> 商品管理 <i class="im-paragraph-justify"></i></a>
            <ul class="nav sub">
                <li> <a href="<?php echo U('admin/product/product_type');?>"><i class="en-arrow-right7"></i>类别管理</a></li>
                <li> <a href="<?php echo U('admin/product/show_product');?>"><i class="en-arrow-right7"></i>商品管理</a></li>
                <li> <a href="<?php echo U('admin/product/show_add_product');?>"><i class="en-arrow-right7"></i>商品添加</a></li>
            </ul>
        </li>

        <li>
            <a href="#"> 用户管理 <i class="im-table2"></i></a>
            <ul class="nav sub">
                <li><a href="<?php echo U('admin/user/show_user');?>"><i class="en-arrow-right7"></i>用户列表</a>
                </li>
                <li><a href="<?php echo U('admin/user/show_add_user');?>"><i class="en-arrow-right7"></i> 添加用户</a>
                </li>
            </ul>
        </li>



        <li><a href="#"> 订单管理 <i class="ec-mail"></i></a>
            <ul class="nav sub">
                <li>
                    <a href="<?php echo U('admin/list/index');?>"><i class="en-arrow-right7"></i>订单列表</a>
                </li>
            </ul>
        </li>


    </ul>
    <!-- End #sideNav -->
    <!-- Start .sidebar-panel -->

    <!-- End .sidebar-panel -->
</div>

</div>

<div id="content">
    <!-- Start .content-wrapper -->
    <div class="content-wrapper">
        <div class="row">
            <!-- Start .row -->
            <!-- Start .page-header -->
            <div class="col-lg-12 heading">
                <h1 class="page-header"><i class="im-screen"></i> 风行天下餐饮超市</h1>
                <!-- Start .bredcrumb -->
                <ul id="crumb" class="breadcrumb">
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

            </div>

        </div>
        <style>
            table th{
                text-align: center;
                padding: .65em;
            }
            table tr,th,td{
                border:1px solid #E0E0E0;
            }
        </style>
        <!-- End .row -->
        <div class="outlet">
            <form name="theForm" id="demo" enctype="multipart/form-data" action="<?php echo U('admin/product/edit_product_zx');?>" method="post">
                <table style="border:1px solid #E0E0E0;" width="100%" bgcolor="White">
                    <input type="hidden" name="id" value="<?php echo ($product["id"]); ?>">
                    <tr>
                        <th align="right">商品名</td>
                        <td><input type="text" name="name" class="input_text" value="<?php echo ($product["name"]); ?>" /><span class="require-field">*</span></td>
                    </tr>

                    <tr>
                        <th align="right">商品单价</td>
                        <td><input type="text" class="input_text" size="34" maxlength="18" name="price" value="<?php echo ($product["price"]); ?>"><span class="require-field">*</span></td>
                    </tr>

                    <tr>
                        <th align="right">商品图片</td>
                        <td><input type="file" name="image" class="input_text" size="34"  /></td>
                    </tr>

                    <?php if($product['type_id'] == 1): ?><tr>
                        <th align="right">商品所属</td>
                        <td>
                            <input type="text" class="input_text" size="34" name="type" value="外卖"/><span class="require-field">*</span></td>
                    </tr><?php endif; ?>

                    <?php if($product['type_id'] == 2): ?><tr>
                            <th align="right">商品所属</td>
                            <td>
                                <input type="text" class="input_text" size="34" name="type" value="零食"/><span class="require-field">*</span></td>
                        </tr><?php endif; ?>

                    <?php if($product['type_id'] == 3): ?><tr>
                            <th align="right">商品所属</td>
                            <td>
                                <input type="text" class="input_text" size="34" name="type" value="饮品"/><span class="require-field">*</span></td>
                        </tr><?php endif; ?>

                    <tr>
                        <td align="right">&nbsp;</td>
                        <td>
                            <input type="submit" class="button" value="提交">&nbsp;&nbsp;&nbsp;
                            <input type="reset" class="button" value=" 重置 ">
                        </td>
                    </tr>
                </table>
            </form>
        </div>






    </div>


</div>

<script>

    var aLi=document.querySelectorAll('#sideNav>li');
    var aUl=document.querySelectorAll('#sideNav>li>ul');
    for(var i=1;i<aLi.length;i++){
        aLi[i].index=i;
        aLi[i].onclick=function(){
            for(var j=0;j<aUl.length;j++){
                aUl[j].style.display='none';
            }
            if(aLi[this.index].children[1]){
                aLi[this.index].children[1].style.display='block';
            }
        }
    }
</script>


<script type="text/javascript" src="assets/js/libs/excanvas.min.js"></script>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="assets/js/libs/respond.min.js"></script>



</body>
</html>
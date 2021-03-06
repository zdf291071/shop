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

<style>
    table {
        border-collapse: collapse;
        width:100%;
        font-family:'kaiti';
        border: 1px solid #F0F0F0;
        text-align: center;
    }

    th,td {
        padding: .65em;
        border: 1px solid #F0F0F0;
    }
    th {
        text-align: center;
        background:	#D8D8D8;
        font-size:16px;
    }
    td{
        font-size:15px;
    }
    tbody tr:hover {

        background: linear-gradient(#fff,#aaa);

        font-size: 17px;

    }
</style>

<body>

<!-- Start #header -->
<div id="header">
    <div class="container-fluid">
        <div class="navbar">
            <nav class="top-nav" role="navigation">
                <ul class="nav navbar-nav pull-left" style="margin-left:190px;">
                    <li id="toggle-sidebar-li">
                        <a href="#" onClick="javascript:history.back(-1);"><i class="en-arrow-left2"></i>
                        </a>
                    </li>
                    <!--
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown"><i class="ec-cog"></i><span class="notification">10</span></a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown"><i class="ec-mail"></i><span class="notification">4</span></a>
                                            <ul class="dropdown-menu email" role="menu">
                                                <li class="mail-head">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <a href="email-inbox.html"><i class="ec-archive"></i></a>
                                                        </div>
                                                        <span>Inbox</span>

                                                    </div>
                                                </li>
                                            </ul>

                                        </li>
                                        -->
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
                <!-- End .option-buttons -->
            </div>
            <!-- End .page-header -->
        </div>
        <!-- End .row -->
        <div class="outlet">

            <table border="1">
                <thead>
                <tr>
                    <th>全选<input type="checkbox" id="all" onclick="change()"/></th>
                    <th>ID</th>
                    <th>名称</th>
                    <th>价格</th>
                    <th>图片</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($productModelArr)): foreach($productModelArr as $key=>$v): ?><tr>
                        <td><input type="checkbox" name="c1"/></td>
                        <td><?php echo ($v["id"]); ?></td>
                        <td><?php echo ($v["name"]); ?></td>
                        <td><?php echo ($v["price"]); ?></td>
                        <td><img style="width:30px;height:30px;" src="<?php echo ($v["image"]); ?>"></td>
                        <td>
                            <a href="/zws/index.php/admin/product/edit_product?id=<?php echo ($v["id"]); ?>">
                                <img style="width:16px;height:16px;" src="<?php echo (ADMIN_IMG_URL); ?>edit.png"/></a>|
                            <a href="/zws/index.php/admin/product/delete_product?id=<?php echo ($v["id"]); ?>">
                                <img style="width:16px;height:16px;" src="<?php echo (ADMIN_IMG_URL); ?>del.png"/></a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>

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
<script type="text/javascript">
    //获取checkbox按钮组
    var allpro = document.getElementsByName("c1");
    //全选方法
    function change() {
        //获取全选按钮
        var all = document.getElementById("all");
        //全选按钮被选中时，遍历所有按钮
        if (all.checked) {
            for (var i = 0; i < allpro.length; i++) {
                if (allpro[i].type=="checkbox") {
                    allpro[i].checked=true;

                }
            }
            //全选按钮未被选中时
        }else{
            for (var i = 0; i < allpro.length; i++) {
                if (allpro[i].type=="checkbox") {
                    allpro[i].checked=false;
                }
            }
        }
    }


</script>

<script type="text/javascript" src="assets/js/libs/excanvas.min.js"></script>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="assets/js/libs/respond.min.js"></script>



</body>
</html>
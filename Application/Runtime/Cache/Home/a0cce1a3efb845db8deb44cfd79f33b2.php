<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>风行天下--购物车</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">-->
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>base2.css">
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>checkout.css">
    <link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>modal.css">

    <style>
        .quentity input{
            width: 40px;
            padding: 5px 10px;
            text-align: center;
        }
    </style>

    <script src="<?php echo (HOME_JS_URL); ?>jquery-3.3.1.min.js"></script>
</head>
<body class="checkout">
<div id="app">

    <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-add" viewBox="0 0 32 32">
                <title>add2</title>
                <path class="path1" d="M15 17h-13.664c-0.554 0-1.002-0.446-1.002-1 0-0.552 0.452-1 1.002-1h13.664v-13.664c0-0.554 0.446-1.002 1-1.002 0.552 0 1 0.452 1 1.002v13.664h13.664c0.554 0 1.002 0.446 1.002 1 0 0.552-0.452 1-1.002 1h-13.664v13.664c0 0.554-0.446 1.002-1 1.002-0.552 0-1-0.452-1-1.002v-13.664z"></path>
            </symbol>
            <symbol id="icon-ok" viewBox="0 0 39 32">
                <title>ok</title>
                <path class="path1" d="M14.084 20.656l-7.845-9.282c-1.288-1.482-3.534-1.639-5.016-0.351s-1.639 3.534-0.351 5.016l10.697 12.306c1.451 1.669 4.057 1.623 5.448-0.096l18.168-22.456c1.235-1.527 0.999-3.765-0.528-5.001s-3.765-0.999-5.001 0.528l-15.573 19.337z"></path>
            </symbol>
            <symbol id="icon-edit" viewBox="0 0 32 32">
                <title>edit</title>
                <path class="path1" d="M25.599 11.292l-4.892-4.892 3.825-3.825 4.892 4.892-3.825 3.825zM4.732 23.308l3.959 3.959-5.939 1.98 1.98-5.939zM10.666 26.225l-4.892-4.892 13.425-13.425 4.892 4.892-13.425 13.425zM31.687 6.713l-6.4-6.4c-0.417-0.417-1.091-0.417-1.508 0l-20.267 20.267c-0.114 0.115-0.191 0.25-0.242 0.393-0.003 0.009-0.012 0.015-0.015 0.025l-3.2 9.6c-0.128 0.383-0.029 0.806 0.257 1.091 0.203 0.204 0.476 0.313 0.754 0.313 0.112 0 0.227-0.017 0.337-0.054l9.6-3.2c0.011-0.003 0.017-0.013 0.027-0.016 0.142-0.052 0.276-0.128 0.39-0.242l20.267-20.267c0.417-0.416 0.417-1.091 0-1.508v0z"></path>
            </symbol>
            <symbol id="icon-del" viewBox="0 0 26 32">
                <title>delete</title>
                <path class="path1" d="M17.723 28c0.543 0 0.984-0.448 0.984-1v-12c0-0.552-0.441-1-0.984-1s-0.985 0.448-0.985 1v12c0 0.552 0.441 1 0.985 1v0zM7.877 28c0.543 0 0.984-0.448 0.984-1v-12c0-0.552-0.441-1-0.984-1s-0.985 0.448-0.985 1v12c0 0.552 0.441 1 0.985 1v0zM12.8 28c0.543 0 0.985-0.448 0.985-1v-12c0-0.552-0.441-1-0.985-1s-0.984 0.448-0.984 1v12c0 0.552 0.441 1 0.984 1v0zM23.631 4h-5.908v-2c0-1.104-0.882-2-1.969-2h-5.908c-1.087 0-1.969 0.896-1.969 2v2h-5.908c-1.087 0-1.969 0.896-1.969 2v2c0 1.104 0.882 2 1.969 2v18c0 2.208 1.765 4 3.939 4h13.784c2.174 0 3.938-1.792 3.938-4v-18c1.087 0 1.969-0.896 1.969-2v-2c0-1.104-0.882-2-1.969-2v0zM9.846 3c0-0.552 0.441-1 0.984-1h3.938c0.544 0 0.985 0.448 0.985 1v1h-5.908v-1zM21.662 28c0 1.104-0.882 2-1.969 2h-13.784c-1.087 0-1.97-0.896-1.97-2v-18h17.723v18zM22.646 8h-19.692c-0.543 0-0.985-0.448-0.985-1s0.441-1 0.985-1h19.692c0.543 0 0.984 0.448 0.984 1s-0.441 1-0.984 1v0z"></path>
            </symbol>
            <symbol id="icon-clock" viewBox="0 0 32 32">
                <title>clock</title>
                <path class="path1" d="M29.333 16c0-7.364-5.97-13.333-13.333-13.333s-13.333 5.97-13.333 13.333c0 7.364 5.97 13.333 13.333 13.333s13.333-5.97 13.333-13.333v0 0 0 0 0 0zM0 16c0-8.837 7.163-16 16-16s16 7.163 16 16c0 8.837-7.163 16-16 16s-16-7.163-16-16zM14.667 14.667v1.333h2.667v-10.667h-2.667v9.333zM24 18.667h1.333v-2.667h-10.667v2.667h9.333z"></path>
            </symbol>
        </defs>
    </svg>


    <div class="container">
        <div class="cart">

            <!--商品信息-->
            <div class="item-list-wrap">
                <div class="cart-item">
                    <div class="cart-item-head">
                        <ul>
                            <!--<li><input type="checkbox"></li>-->
                            <li>商品ID</li>
                            <li>商品名称</li>
                            <li>商品图片</li>
                            <li>商品金额</li>
                            <li>商品数量</li>
                            <li>总金额</li>
                            <li>编辑</li>
                        </ul>
                    </div>

                    <?php if(is_array($data)): foreach($data as $key=>$v): ?><ul class="cart-item-list">
                            <li>
                                <!--<div><input type="checkbox" style="margin-top:34px;"></div>-->
                                <div class="cart-tab-1"><?php echo ($v["id"]); ?></div>
                                <div class="cart-tab-1"><?php echo ($v["name"]); ?></div>
                                <div class="cart-tab-1"><img src="<?php echo ($v["image"]); ?>" style="width:130px;height:130px;"/></div>
                                <!--第二列-->
                                <div class="cart-tab-2"><?php echo ($v["price"]); ?></div>
                                <!--第三列-->
                                <div class="cart-tab-3">
                                    <button id='"sub_"+<?php echo ($v["id"]); ?>' onclick='sub("<?php echo ($v["id"]); ?>");'>-</button>
                                   <!-- <input type="text" style="width:60px;" value="<?php echo ($v["number"]); ?>">-->
                                    <em id="num_<?php echo ($v["id"]); ?>"><?php echo ($v["number"]); ?></em>
                                    <button onclick='add("<?php echo ($v["id"]); ?>");'>+</button>
                                </div>
                                <!--第四列-->
                                <div class="cart-tab-4"><?php echo ($v['price'] * $v['number']); ?></div>
                                <!--第五列-->
                                <div class="cart-tab-5" onclick="delete_goods()">删除</div>

                            </li>
                        </ul><?php endforeach; endif; ?>


                </div>
            </div>

            <!--footer-->
            <div class="cart-foot-wrap">
                <!--footer 左边的-->
                <div class="cart-foot-l">
                    <div class="item-all-check">
                        <a href="javascript:;">
                            <!--v-bind:class 的简写  :class-->
                            <span class="item-check-btn" :class="{'check': checkAllFlag}" @click="checkAll(true)">
                                <svg class="icon icon-ok"><use xlink:href="#icon-ok"></use></svg>
                            </span>
                            <span @click="checkAll(true)">  </span>
                        </a>
                    </div>
                    <div class="item-all-del">
                        <a href="javascript:;" @click="checkAll(false)"> </a>
                    </div>
                </div>
                <!--footer 右边的-->
                <div class="cart-foot-r">
                    <div class="item-total">
                        总价：<span class="total-price"></span>
                             <span id="price"></span>
                    </div>
                    <div  class="next-btn-wrap">
                        <form method="post" action="<?php echo U('Home/List/index');?>">
                            <input type="hidden" name="total" id="total" value=""/>
                            <input type="submit" class="btn btn--red"/>
                         </form>

                        <!--<a href="<?php echo U('Home/List/index');?>" onclick="order();" class="btn btn--red" > 结账 </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--模态框-->
    <div class="md-modal modal-msg md-modal-transtion " id="showModal" :class="{'md-show': delFlag}">
        <div class="md-modal-inner">
            <div class="md-top">
                <button class="md-close" @click="delFlag= false"> 关闭 </button>
            </div>
            <div class="md-content">
                <div class="confirm-tips">
                    <p id="cusLanInfo" lan="Cart.Del.Confirm">你确认删除此订单信息吗?</p>
                </div>
                <div class="btn-wrap col-2">
                    <button class="btn btn--m" id="btnModalConfirm" @click=" delProduct()"> YES</button>
                    <button class="btn btn--m  btn--red" id="btnModalCancel" @click=" delFlag = false" > NO</button>
                </div>
            </div>
        </div>
    </div>
    <!--遮罩层-->
    <div class="md-overlay" id="showOverLay" v-if=" delFlag"></div>
</div>
</body>

 <script>
     function add(id){
         var d='#num_'+id;
         var res=$(d).text();
         $(d).text(++res);
     }

     function sub(id){
         var d='#num_'+id;
         var res=$(d).text();
         if(--res<1){
             res=1;
         }
         $(d).text(res);
     }
 </script>

</html>
<script type="application/javascript">
    function delete_goods(){
        if(confirm('真的要移出购物车么？')){
            window.location.href="/zws/index.php/home/mycar/delete_mycar_goods?id=<?php echo ($v["id"]); ?>";
        }else{

            return false;

        }
    }

    var aPrice=document.querySelectorAll('.cart-tab-4');
    var num=0;
    var oPrice=document.getElementById('price');
    var oTotal=document.getElementById('total');



        for(var i=0;i<aPrice.length;i++){
            num+=parseFloat(aPrice[i].innerHTML);

        }
    oPrice.innerHTML=num;
    oTotal.value=num;










</script>

    <script src="<?php echo (HOME_JS_URL); ?>vue2.min.js"></script>
<script src="<?php echo (HOME_JS_URL); ?>vue-resource.min.js"></script>
<script src="<?php echo (HOME_JS_URL); ?>cart.js"></script>
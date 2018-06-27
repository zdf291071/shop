<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<style>


    .search #search {

        height: 35px;

        padding: 0 10px;
        right: 51px;

        transition: all 0.2s ease 0s;
        width: 273px;
        z-index: 1;
        color:#000;
        font-size: 18px;
        background-color:rgba(220,220,220,0.1);
        border:1px solid #585858;
    }
    .search #search-btn {
        background-color:rgba(255,255,255,0.1);
        border:none;

        color:#fff;
        right: 0;


    }
</style>
<body>
    <div style="margin-left:20px;width:1200px;height:40px;font-size: 21px;font-family:'kaiti';background: #F0F0F0;padding-left:60px;padding-top:9px;">
        <span>风行天下>>>订单详情</span>
    </div>

<?php if($result != null): ?><div style="margin:20px 0 0 30px;">
            订单信息：
            <hr style="width:60%;margin-left:-10px;">
            <div>
                <p><span>订单号：</span><?php echo ($result["listid"]); ?></p>
                <p><span>地址：</span><?php echo ($result["address"]); ?></p>
                <p><span>生成时间：</span><?php echo ($result["createtime"]); ?></p>
                <?php if($result["state"] == 0): ?><p><span>状态：</span>未发货</p>
                    <?php else: ?>
                    <if condition="$result.state eq 1">
                        <p><span>状态：</span>已发货</p><?php endif; endif; ?>
            </div>
        </div>
  </if>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    show_add_product_type
    <hr/>
    <form method="post" action="<?php echo U('admin/product/add_product_type');?>">
        类别：<input type="text" name="name"/><br/>
        <input type="submit" value="提交"/>
    </form>
</body>
</html>
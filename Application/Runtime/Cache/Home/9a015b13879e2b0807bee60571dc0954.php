<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery弹出层</title>
<link rel="stylesheet" href="/Public/css/lrtkfy.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/Public/css/popstyle.css"/>
<script src="/Public/js/jquery-1.8.3.min.js"></script>
<style>
	body{padding: 0;margin: 0}
</style>
<script>
$(function(){
	$('.popbut').on('click',function(){
		$.get("<?php echo U('Choose/addId');?>",{id:$('.poptit span').eq(0).find('a').html()},function(data){
 			if(data.status ==1){
 				parent.R_alert(data.data)
 			}else{
 				alert('错误！')
 			}
		},'json') 
		
	})


	$(".popcon p img").attr("align","")
})
</script>
</head>
<body>
<div class="clear"></div>

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="poptit">
<span style="width:70px;margin:0">编号：<a><?php echo ($vo["id"]); ?></a></span>
<span style="width:470px">知识点：<?php echo (getzsid($vo["zsid"])); ?></span>
<span style="width:100px">题型：<?php echo ($vo["questions"]); ?></span>
<span title="a"style="width:50px;">难度：a</span>
<span style="float:right;max-width:100px">来源：<?php echo ($vo["source"]); ?></span>
</div> 
<div class="popcon"><?php echo ($vo["test"]); ?>
<input name="" type="button" class="popbut" value="添加试题" />
</div>
<p class="popgreen">正确答案：<?php echo ($vo["answer"]); ?></p>
<div class="popconnti">详细解析</div>
</div>
<div class="content_xq">
			<?php echo (htmlspecialchars_decode($vo["analytical"])); ?>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>

<!-- <div id="mask1"></div>
<div id="tishi_bt1" class="popu_box1">
	<div class="img_icon img_ti"></div>
	<div class="popu_right">
		<p class='popu_text'>答案不能为空!</p>
		<div class="popu_btn"><a href="javascript:void(0);" class="popu_black">返回</a></div>
	</div>
</div> -->

</body>
</html>
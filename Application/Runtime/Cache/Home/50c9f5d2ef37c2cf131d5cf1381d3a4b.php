<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>指南树</title>
<link href="/uteach/Public/css/base.css" rel="stylesheet" type="text/css" />
<link href="/uteach/Public/css/common.css" rel="stylesheet" type="text/css" />
<link href="/uteach/Public/css/index.css" rel="stylesheet" type="text/css" />
<script src="/uteach/Public/js/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="/uteach/Public/js/jquery.validate.min.js" type="text/javascript"></script> 

<link rel="stylesheet" href="/uteach/Public/css/logo.css" type="text/css"> 
<script type="text/javascript" src="/uteach/Public/js/logo.js"></script>
<script type="text/javascript" src="/uteach/Public/js/velocity.min.js"></script>
<script type="text/javascript" src="/uteach/Public/js/velocity.ui.min.js"></script>


</head>
<body>
<div>
	<!--<img src="<?php echo ($school_infos["background"]); ?>" alt="" id="bg_pic">-->
    <img src="/uteach/Public/images/background.png" alt="" id="bg_pic">
	<div class="logo_center">
		<p><img src="/uteach/Public/images/logo_text.png" alt=""></p>
		<form action="login" method="post" id="from">
			<p>
				<input type="text" value="" class="input" name="username" id="name" placeholder="账号"><a href="###"><img src="<?php echo ($school_infos["sch_logo"]); ?>" alt="" class="logo" style="width:60px;height:60px;"></a>
			<input type="password" value="" class="input"  name="password" id="password" placeholder="密码">
			<span class="ts locat">*请输入您的帐号</span>
			<span class="ts locat1">*请输入您的密码</span>
			</p>
			<div>
				<input type="submit" value="ENTER" class="input_btn">
			</div>
			<img src="/uteach/Public/images/lod.gif" alt="" class="logo_load" />
			<p class="rember_mima"><input type="checkbox" id="rem_m"/><label for="rem_m">记住密码</label></p>
		</form>
		
	</div>
	</div>
	<div id="footer">
		Copyright&nbsp;&copy;&nbsp;2014&nbsp;Guidtree&nbsp;Inc.保留所有权利。
	</div>
</body>
<script>
	$(function(){

	$.Velocity.RegisterEffect('lixin.moveinput',{
		defaultDuration:1000,
		calls:[
				[{opacity:[0,1],translateX:[-60,0]}]
		]
	})

	$.Velocity.RegisterEffect('lixin.moveinput1',{
		defaultDuration:1000,
		calls:[
				[{opacity:[0,1],translateX:[60,0]}]
		]
	})
	$.Velocity.RegisterEffect('lixin.buttn',{
		defaultDuration:1000,
		calls:[
				[{opacity:[0,1],translateY:[-10,0]}]
		]
	})

	$.Velocity.RegisterEffect('lixin.IMG',{
		defaultDuration:1000,
		calls:[
				[{translateY:[-15,0]}]
		]
	})

	$.Velocity.RegisterEffect('lixin.logo_car',{
		defaultDuration:1000,
		calls:[
				[{opacity:[1,0]}]
		]
	})



		var seq=[
		{
			elements:$("#password"),
			properties:'lixin.moveinput',
			options:{duration:1000}     //delay
		},{
			elements:$("#name"),
			properties:'lixin.moveinput1',
			options:{duration:1000,
					sequenceQueue:false}     //delay
		},
			{
					elements:$(".input_btn"),
					properties:'lixin.buttn',
					options:{duration:1000,
							sequenceQueue:false}     //delay
				},
				{
					elements:$(".rember_mima"),
					properties:'lixin.buttn',
					options:{duration:1000,
							sequenceQueue:false}     //delay
				},
				{
						elements:$("img.logo"),
						properties:'lixin.IMG',
						options:{duration:1000,
							delay:1000,
							sequenceQueue:false}     //delay
				},

				{
						elements:$("img.logo_load"),
						properties:'lixin.logo_car',
						options:{duration:1000,
							sequenceQueue:false}     //delay
				}
		]

			
	$("#from").submit(function(){
				
				if($("#name").val()==""){
					$("#from span.locat").show()
					return false
				}else{
					$("#from span.locat").hide()
				}

				if($("#password").val()==""){
					$("#from span.locat1").show()
					return false
				}else{
					$("#from span.locat1").hide()
				}

				if($("#name").val()!="" && $("#password").val()!=""){
					$.Velocity.RunSequence(seq)
					 anim()
				}
				return false;
	})

	function anim(){
			var timer=setTimeout(function(){
					clearTimeout(timer)
					document.getElementById("from").submit()
			},2300)
	}

	})
</script>
</html>
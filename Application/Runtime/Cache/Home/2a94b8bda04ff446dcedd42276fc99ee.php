<?php if (!defined('THINK_PATH')) exit(); $ip = gethostbyname($_SERVER['SERVER_NAME']); require_once("http://".$ip.":8080/JavaBridge/java/Java.inc"); $pageOfficeLink = new JavaClass("com.zhuozhengsoft.pageoffice.PageOfficeLink"); $url = "http://".$ip."/uteach/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>指南树</title>
	<link href="/uteach/Public/css/base.css" rel="stylesheet" type="text/css" /> 
	<link href="/uteach/Public/css/shou.css" rel="stylesheet" type="text/css" />
	<script src="/uteach/Public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="/uteach/Public/js/shou.js" type="text/javascript"></script>
	<script type="text/javascript" src="/uteach/Public/js/velocity.min.js"></script>
	<script type="text/javascript" src="/uteach/Public/js/velocity.ui.min.js"></script>
	<script>
		$(function(){
			var btn_off=true
			$(".name_text").on("click",function(event){
				event.stopPropagation(); 
				if(btn_off)
				{
					$(".set").slideDown()
					btn_off=false
					$(this).css({"background":"url(/uteach/Public/images/shou/shou_down.png) no-repeat right center"})
				}else{
					$(".set").slideUp()
					btn_off=true
					$(this).css({"background":"url(/uteach/Public/images/shou/shou_up.png) no-repeat right center"})
				}
			})

		$(document).on("click",function(){
			$(".set").slideUp()
			btn_off=true
			$(".name_text").css({"background":"url(/uteach/Public/images/shou/shou_up.png) no-repeat right center"})
		})

			$.Velocity.RegisterEffect('lian.div0',{
	   			defaultDuration:0,
	   			calls:[
	   					[{scaleX:[1,5],scaleY:[1,5],translateX:[0,-60],opacity:[1,0]}]
	   			]
   			})
   						$.Velocity.RegisterEffect('lian.div1',{
   				   			defaultDuration:1,
   				   			calls:[
   				   				[{scaleX:[1,5],scaleY:[1,5],opacity:[1,0]}]	
   				   			]
   			   			})

   			   						$.Velocity.RegisterEffect('lian.div2',{
   			   				   			defaultDuration:1000,
   			   				   			calls:[
   			   				   				[{scaleX:[1,5],scaleY:[1,5],translateX:[0,60],opacity:[1,0]}]	
   			   				   			]
   			   			   			})





   			var seq=[
   			{
   				elements:$(".content_list li a.pic_one"),
   				properties:'lian.div0',
   				options:{duration:500}    
   			},
   			{
   				elements:$(".content_list li a.pic_two"),
   				properties:'lian.div1',
   				options:{duration:500,sequenceQueue:false}    
   			},
   			{
   				elements:$(".content_list li a.pic_three"),
   				properties:'lian.div2',
   				options:{duration:500,sequenceQueue:false,complete:function(){$("#mask").hide()}}    
   			}


   			]
   		$.Velocity.RunSequence(seq)

   				// 运动方式
   				//收
   			$.Velocity.RegisterEffect('lixin.icon',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{scaleX:[0,1],scaleY:[0,1]}]
   				   			]
   			   			})

   			//放
   			$.Velocity.RegisterEffect('lixin.icon1',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{scaleX:[1,0],scaleY:[1,0]}]
   				   			]
   			   			})
   			// 往下移动50
   			$.Velocity.RegisterEffect('lixin.icon2',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{opacity:[1,0],translateY:[50,0]}]
   				   			]
   			   			})
   			

   			// 往右移动50
   			$.Velocity.RegisterEffect('lixin.icon3',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{opacity:[1,0],translateX:[50,0]}]
   				   			]
   			   			})

   			// 往左移动50
   			$.Velocity.RegisterEffect('lixin.icon4',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{opacity:[1,0],translateX:[-50,0]}]
   				   			]
   			   			})


   			$.Velocity.RegisterEffect('lixin.icon5',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{opacity:[1,0],translateX:[-57,0],translateY:[39,0]}]
   				   			]
   			   			})
//往上移动-50
   			
   			$.Velocity.RegisterEffect('lixin.icon6',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{opacity:[1,0],translateY:[-50,0]}]
   				   			]
   			   			})
   			$.Velocity.RegisterEffect('lixin.icon7',{
   				   			defaultDuration:1000,
   				   			calls:[
   				   					[{opacity:[0,1]}]
   				   			]
   			   			})
   			var seq1=[
			   			{
			   				elements:$(".content_list li a.pic_one img.icon_bg"),
			   				properties:'lixin.icon',
			   				options:{duration:300}
			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_one"),
			   				properties:'lixin.icon2',
			   				options:{duration:500}    
			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_two"),
			   				properties:'lixin.icon3',
			   				options:{duration:500,sequenceQueue:false}    
			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_three"),
			   				properties:'lixin.icon4',
			   				options:{duration:500,sequenceQueue:false}    
			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_fix"),
			   				properties:'lixin.icon6',
			   				options:{duration:500,sequenceQueue:false}    
			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_four"),
			   				properties:'lixin.icon5',
			   				options:{duration:500}    
			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_bg"),
			   				properties:'lixin.icon1',
			   				options:{duration:500,delay:300}

			   			},{
			   				elements:$(".content_list li a.pic_one img.icon_one,.content_list li a.pic_one img.icon_two,.content_list li a.pic_one img.icon_three,.content_list li a.pic_one img.icon_four,.content_list li a.pic_one img.icon_fix"),
			   				properties:'lixin.icon7',
			   				options:{duration:500,sequenceQueue:false,complete:function(){$("#content ul li a.pic_one").attr("sh_fn",true)}}
			   			}

   			]


   			var seq2=[
		   			{
		   				elements:$(".content_list li a.pic_two img.icon_bg"),
		   				properties:'lixin.icon',
		   				options:{duration:300}
		   			},{
		   				elements:$(".content_list li a.pic_two img.icon1_one"),
		   				properties:'lixin.icon2',
		   				options:{duration:500}    
		   			},{
		   				elements:$(".content_list li a.pic_two img.icon1_two"),
		   				properties:'lixin.icon3',
		   				options:{duration:500,sequenceQueue:false}    
		   			},{
		   				elements:$(".content_list li a.pic_two img.icon1_three"),
		   				properties:'lixin.icon4',
		   				options:{duration:500,sequenceQueue:false}    
		   			},{
		   				elements:$(".content_list li a.pic_two img.icon1_four"),
		   				properties:'lixin.icon6',
		   				options:{duration:500,sequenceQueue:false}    
		   			},{
		   				elements:$(".content_list li a.pic_two img.icon_bg"),
		   				properties:'lixin.icon1',
		   				options:{duration:500,delay:300}

		   			},{
		   				elements:$(".content_list li a.pic_two img.icon1_one,.content_list li a.pic_two img.icon1_two,.content_list li a.pic_two img.icon1_three,.content_list li a.pic_two img.icon1_four"),
		   				properties:'lixin.icon7',
		   				options:{duration:500,sequenceQueue:false,complete:function(){$("#content ul li a.pic_two").attr("sh_fn",true)}}
		   			}

   			]

   			   			var seq3=[
   					   			{
   					   				elements:$(".content_list li a.pic_three img.icon_bg"),
   					   				properties:'lixin.icon',
   					   				options:{duration:300}
   					   			},{
   					   				elements:$(".content_list li a.pic_three img.icon2_one"),
   					   				properties:'lixin.icon2',
   					   				options:{duration:500}    
   					   			},{
   					   				elements:$(".content_list li a.pic_three img.icon2_two"),
   					   				properties:'lixin.icon3',
   					   				options:{duration:500}    
   					   			},{
   					   				elements:$(".content_list li a.pic_three img.icon2_three"),
   					   				properties:'lixin.icon4',
   					   				options:{duration:500,sequenceQueue:false}    
   					   			},{
   					   				elements:$(".content_list li a.pic_three img.icon2_four"),
   					   				properties:'lixin.icon6',
   					   				options:{duration:500,sequenceQueue:false}    
   					   			},{
   					   				elements:$(".content_list li a.pic_three img.icon_bg"),
   					   				properties:'lixin.icon1',
   					   				options:{duration:500,delay:300}

   					   			},{
   					   				elements:$(".content_list li a.pic_three img.icon2_one,.content_list li a.pic_three img.icon2_two,.content_list li a.pic_three img.icon2_three,.content_list li a.pic_three img.icon2_four"),
   					   				properties:'lixin.icon7',
   					   				options:{duration:500,sequenceQueue:false,complete:function(){$("#content ul li a.pic_three").attr("sh_fn",true)}}
   					   			}

   			   			]




$("#content ul li a ").on("mouseenter",function(){
	// alert($(this).index())
	if($(this).attr("data_a")=="one"&&$(this).attr("sh_fn")=='true')
	{
		$(this).attr("sh_fn",false)
		$.Velocity.RunSequence(seq1)
	}else if($(this).attr("data_a")=="two"&&$(this).attr("sh_fn")=='true')
	{
		$(this).attr("sh_fn",false)
		$.Velocity.RunSequence(seq2)
		// alert(434343)
	}else if($(this).attr("data_a")=="three"&&$(this).attr("sh_fn")=='true'){
		$(this).attr("sh_fn",false)
		$.Velocity.RunSequence(seq3)
	}

})

		})
	</script>
</head>
<body style="overflow:hidden">
	<img src="/uteach/Public/images/shou/shou_bg.jpg"  alt="" id="bg">
	<div id="header">
		<h1></h1>
		<div class="name">
           <img src="/uteach/Public/images/shou/logo.png" width="35" height="35" />
           		<span class="name_text "><?php echo (session('username')); ?></span> 
           		<!-- <span class="name_icon"></span>  -->
				   <ul class="set">
						<li><a href="<?php echo U('User/index');?>">设置</a></li>
						<li><a href="<?php echo U('Login/logout');?>" style="border:none">注销</a></li>
					</ul>
		</div>
	</div>
	<div id="content" >
   <div id="mask"></div>
			<ul class="content_list">

				<li>

                    <a href="<?php echo U('Write/index');?>" sh_fn="true" data_a="one" class="pic_one">
						<div class="icon">
							<img src="/uteach/Public/images/shou/icon1.png" alt="" class="icon_bg">
							<img src="/uteach/Public/images/shou.icon3.png" alt="" class="icon_one">
							<img src="/uteach/Public/images/shou.icon4.png" alt="" class="icon_two">
							<img src="/uteach/Public/images/shou.icon5.png" alt="" class="icon_three">
							<img src="/uteach/Public/images/shou.icon6.png" alt="" class="icon_four">
							<img src="/uteach/Public/images/shou.icon7.png" alt="" class="icon_fix">
						</div>
						<span>编题</span>
					</a>
				</li>

				<li>
					<a href="<?php echo U('Volume/index');?>" sh_fn="true" data_a="two" class="pic_two">
						<div class="icon">
							<img src="/uteach/Public/images/shou/icon5.png" alt="" class="icon_bg">
							<img src="/uteach/Public/images/shou.icon1.1.png" alt="" class="icon1_one">
							<img src="/uteach/Public/images/shou.icon1.2.png" alt="" class="icon1_two">
							<img src="/uteach/Public/images/shou.icon1.3.png" alt="" class="icon1_three">
							<img src="/uteach/Public/images/shou.icon1.4.png" alt="" class="icon1_four">
						</div>
						<span>会考</span>
					</a>
				</li>


				<li class="clearP">
					<a href="<?php echo U('User/index');?>" sh_fn="true" data_a="three" class="pic_three">
						<div class="icon">
							<img src="/uteach/Public/images/shou/icon8.png" alt="" class="icon_bg">
							<img src="/uteach/Public/images/shou.icon2.1.png" alt="" class="icon2_one">
							<img src="/uteach/Public/images/shou.icon2.2.png" alt="" class="icon2_two">
							<img src="/uteach/Public/images/shou.icon2.3.png" alt="" class="icon2_three">
							<img src="/uteach/Public/images/shou.icon2.4.png" alt="" class="icon2_four">
						</div>
						<span>设置</span>
					</a>
				</li>


			</ul>
	</div>
</body>
</html>
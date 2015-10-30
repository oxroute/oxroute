<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心</title>
<link href="/Public/css/base3.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/style3.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/Public/css/jquery.Jcrop.min.css" media="all">
<link rel="stylesheet" type="text/css" href="/Public/js/uploadify-v3.1/uploadify.css" media="all">
<link rel="stylesheet" type="text/css" href="/Public/js/ThinkBox/css/ThinkBox.css" media="all">

<style>

.black_overlay{ display: none; position: absolute; top: 0%; left: 0%; width: 100%;height:100%; background-color: black; z-index:1001; -moz-opacity: 0.7; opacity:.70; filter: alpha(opacity=70); } 
.white_content { display: none; position: absolute; top: 40%; left:40%; width:375px;height:205px; background-color: white; z-index:1002; overflow: auto;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}
.ok{ padding:45px 0; color:#000; text-align:center; font-size:24px;} 
.white_content .btn{ margin:40px auto 0; width:125px; height:44px; line-height:44px; background:#319dff; color:#fff; border:none;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px; font-size:18px;}
.inputxt{height: 30px;line-height: 30px;border: 1px solid #B5B5B5;border-radius: 5px;width: 160px;text-indent: 10px;margin-right: 30px;}
.td{font-size:14px;color:#6d6d6d;text-align: right;}
.table{margin: 0 auto;padding-top: 10px;}
.table td{position: relative;}
.sbt{background: #384363;height: 34px;line-height: 30px;padding: 0px 26px;border-radius: 5px;color: #fff;border: none;
font-size: 14px;margin-top: 30px;}
.user_pic{border:6px solid #ffffff;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;}
.pic_header{display: inline-block;}
#oldpassword-error,
#password_id-error,
#repassword-error
{position: absolute;top:-30px;right:40px;color:#ff0000;font-weight: bold;}

.main{margin: 0 auto;padding: 15px;width: 450px;font-family: "microsoft yahei";background-color: #F5F5F5;position: absolute;top:80px;left: 30%;margin-left: -225px;display: none}
.cf:before,.cf:after {display: table;content: "";line-height: 0;}
.cf:after {clear: both;}
.cf {*zoom: 1;}
.upload-area {position: relative;float: left;margin-right: 30px;width: 200px;height: 200px;background-color: #F5F5F5;border: 2px solid #E1E1E1;}
.upload-area .file-tips {
    position: absolute;top: 90px;left: 0;padding: 0 15px;width: 170px;line-height: 1.4;font-size: 12px;color: #A8A8A3;text-align: center;
}
.userup-icon {
    display: inline-block;margin-right: 3px;width: 16px;height: 16px;vertical-align: -2px;
    background: url("/Public/images/userup_icon.png") no-repeat;
}
.uploadify-button {
    line-height: 120px!important;text-align: center;
}
.preview-area {float: left;}
.tcrop {clear: right;font-size: 14px;font-weight: bold;}
.update-pic .crop {
    background: url("/Public/images/mystery.png") no-repeat scroll center center #EEEEEE;
    float: left;margin-bottom: 20px;margin-top: 10px;overflow: hidden;
}
.crop100 {height: 100px;width: 100px;}
.crop60 {height: 60px;margin-left: 20px;width: 60px;}
.update-pic .save-pic {clear: left;margin-right: 20px;}
.update-pic .uppic-btn {
    background-color: #348FD4;color: #FFFFFF;display: block;
    float: left;font-size: 16px;height: 30px;line-height: 30px;text-align: center;vertical-align: middle;width: 89px;
}
.preview {
    position: absolute;top: 0;left: 0;z-index: 11;width: 200px;height: 200px;overflow: hidden;background:#fff;display: none;
}


</style>
</head>

<body>  
<div class="user_top">
        <h1 class="bt_h1"><span id="bt">设置</span>
        </h1>
        <div id="show1" >
          <div class="show2">
            <i><img src="/Public/images/index/dot1.png" width="24" height="13" /></i>
              <ul class="clear">
                <li><a href="<?php echo U('Write/index');?>"><img src="/Public/images/index/icon1_small.png" width="52" height="52" /><span>编题</span></a></li>
                <li><a href="<?php echo U('Volume/index');?>"><img src="/Public/images/index/icon2_small.png" width="52" height="52" /><span>会考</span></a></li>
                <li><a href="<?php echo U('User/index');?>"><img src="/Public/images/index/icon3_small.png" width="52" height="52" /><span>设置</span></a></li>
                <li><a href="<?php echo U('Index/index');?>"  class="back_index"><img src="/Public/images/index/icon4_small.png" width="52" height="52" /><span>首页</span></a></li>
              </ul>
          </div>
        </div>

        <div class="name"  style="margin-top:16px">
            <img src="/Public/images/index/logo.png" width="35" height="35" />
            <span class="name_icon"><?php echo (session('username')); ?></span> 
           <ul class="set">
                    <li><a href="<?php echo U('User/index');?>">设置</a></li>
                    <li><a href="<?php echo U('Login/logout');?>" style="border:none">注销</a></li>
            </ul>
         </div> 
</div>

<div class="user_con">
	<div class="user_con1">
        <div class="pic_header">
        
   
    	 <img class="user_pic" width="150px" height="150px" src="<?php if( $info["img"] == ''): ?>/Public/images/noheader.jpg"/><?php else: ?>/Uploads/Avatar/<?php echo ($info["img"]); ?>.jpg"/><?php endif; ?><br/>
         <a href="###" class="xg">修改</a>
         </div>
		<p><?php if($info["img"] == ''): ?>您还未上传头像<?php endif; ?></p>
         
        
         <h2><?php echo ($info["name"]); ?><br />
         	 <span><?php echo ($sname); ?></span>
         </h2>
        
    </div>
    <div class="user_con2">
    	<h3>基本信息</h3>
        <ul>
        	<li><span>科目</span><?php echo ($info["subject"]); ?></li>
            <li><span>年级</span><?php echo ($class["name"]); ?></li>
            <li><span>班级</span><?php echo ($info["subject"]); ?></li>
        </ul>
    </div>

    <div class="user_con3">
    	<h3>修改密码</h3>
        <form action="<?php echo U('User/mypwd');?>" method="post" class="registerform" id='reg'>
            <table cellspacing="10" class="table">
            	<tr>
                	<td class="td">当前密码：</td>
                    <td>
                     <input type="password" value="" name="oldpassword" class="inputxt" placeholder="请填写密码！"/>
                    </td>

                    <td class="td">新密码：</td>
                    <td>
                        <input type="password" value="" name="password" class="inputxt"   placeholder="请填写密码！" id="password_id"/>
                    </td>
                     <td class="td">确认密码：</td>
                    <td>
                    <input type="password" class="inputxt" name="repassword" placeholder="请填写确认密码！" />
                    </td>

                </tr>
                <tr>
                	<td colspan="6" >
					 <input type="submit" value="确定" class="sbt" /> <input type="hidden" name="id" value="<?php echo (session('uid')); ?>" />
					 <!-- <a href="<?php echo U('User/photo');?>"><input type="button" value="我要更换头像" class="sbt"/></a> -->
                     </td>
                </tr>
             </table>
		</form>
        
    </div>
</div>

<div class="main">
<!-- 修改头像 -->
<form action="<?php echo U('cropImg');?>" method="post" id="pic" class="update-pic cf">
    <div class="upload-area">
        <input type="file" id="user-pic">
        <div class="file-tips">支持JPG,PNG,GIF，图片小于1MB，尺寸不小于100*100,真实高清头像更受欢迎！</div>
        <div class="preview hidden" id="preview-hidden"></div>
    </div>
    <div class="preview-area">
        <input type="hidden" id="x" name="x" />
        <input type="hidden" id="y" name="y" />
        <input type="hidden" id="w" name="w" />
        <input type="hidden" id="h" name="h" />
        <input type="hidden" id='img_src' name='src'/>
        <div class="tcrop">头像预览</div>
        <div class="crop crop100"><img id="crop-preview-100" src="" alt=""></div>
        <div class="crop crop60"><img id="crop-preview-60" src="" alt=""></div>
        <a class="uppic-btn save-pic" href="javascript:;">保存</a>
        <a class="uppic-btn reupload-img" href="javascript:$('#user-pic').uploadify('cancel','*');">重新上传</a>
    </div>
</form>
<!-- /修改头像 -->

</div>
<script src="/Public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/Public/js/jquery.easing.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="/Public/js/jquery.validate.min.js"></script>

<script type="text/javascript" src="/Public/js/uploadify-v3.1/jquery.uploadify-3.1.min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="/Public/js/ThinkBox/jquery.ThinkBox.js"></script>


<script type="text/javascript">
    var imgPath = '/Public/';
</script>
<script src="/Public/js/per_set.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
               $("#reg").validate({  
                   rules:{  
                           oldpassword:{
                                 required:true,
                                  min:6
                                    },
                                 password:{
                                        required:true,
                                        min:6
                                 },
                                 repassword:{
                                    required:true,
                                    equalTo:"#password_id"
                                 }

                        },
                   messages:{  
                            oldpassword:{
                                required:"*请填写",
                                min:"请输入6位以上的字符"
                            }, 
                        password:{
                                    required:"*请填写密码",
                                     min:"请输入6位以上的字符"
                                 },
                         repassword:{
                            required:"*请填写确认密码",
                            equalTo:"两次密码输入不一样"
                         }

                    }
                });

$(".pic_header").hover(function(){
    $(".pic_header .xg").slideDown(300)
    // console.log(43434)
},function(){
    $(".pic_header .xg").slideUp(300)
})


var show_pic=true
$(".user_con .xg").on("click",function(event){
    event.stopPropagation();
    if(show_pic)
    {
      $(".main").show(200)  
      show_pic=false
  }else{
    $(".main").hide(200)  
    show_pic=true
  }
   
})
    //上传头像(uploadify插件)
    $("#user-pic").uploadify({
        'queueSizeLimit' : 1,
        'removeTimeout' : 0.5,
        'preventCaching' : true,
        'multi'    : false,
        'swf'           : '/Public/js/uploadify-v3.1/uploadify.swf',
        'uploader'      : '<?php echo U("uploadImg");?>',
        'buttonText'    : '<i class="userup-icon"></i>上传头像',
        'width'         : '200',
        'height'        : '200',
        'fileTypeExts'  : '*.jpg; *.png; *.gif;',
        /* 处理firefox无法通过flash传递session,导致登陆限制302重定向问题 */
        'formData' : { 
            '<?php echo session_name();?>' : '<?php echo session_id();?>'
        },
        'onUploadSuccess' : function(file, data, response){
            //调试语句
            // console.log(data);

            var data = $.parseJSON(data);
            if(data['status'] == 0){
                $.ThinkBox.error(data['info'],{'delayClose':3000});
                return;
            }
            var preview = $('.upload-area').children('#preview-hidden');
            preview.show().removeClass('hidden');
            //两个预览窗口赋值
            $('.crop').children('img').attr('src',data['path']+'?random='+Math.random());
            //隐藏表单赋值
            $('#img_src').val(data['path']);
            //绑定需要裁剪的图片
            var img = $('<img />');
            preview.append(img);
            preview.children('img').attr('src',data['path']+'?random='+Math.random());
            var crop_img = preview.children('img');
            crop_img.attr('id',"cropbox").show();
            var img = new Image();
            img.src = data['path']+'?random='+Math.random();
            //根据图片大小在画布里居中
            img.onload = function(){
                var img_height = 0;
                var img_width = 0;
                var real_height = img.height;
                var real_width = img.width;
                if(real_height > real_width && real_height > 200){
                    var persent = real_height / 200;
                    real_height = 200;
                    real_width = real_width / persent;
                }else if(real_width > real_height && real_width > 200){
                    var persent = real_width / 200;
                    real_width = 200;
                    real_height = real_height / persent;
                }
                if(real_height < 200){
                    img_height = (200 - real_height)/2;
                }
                if(real_width < 200){
                    img_width = (200 - real_width)/2;
                }
                preview.css({width:(200-img_width)+'px',height:(200-img_height)+'px'});
                preview.css({paddingTop:img_height+'px',paddingLeft:img_width+'px'});
            }
            //裁剪插件
            $('#cropbox').Jcrop({
                bgColor:'#333',   //选区背景色
                bgFade:true,      //选区背景渐显
                fadeTime:1000,    //背景渐显时间
                allowSelect:false, //是否可以选区，
                allowResize:true, //是否可以调整选区大小
                aspectRatio: 1,     //约束比例
                minSize : [100,100],//可选最小大小
                boxWidth : 200,     //画布宽度
                boxHeight : 200,    //画布高度
                onChange: showPreview,//改变时重置预览图
                onSelect: showPreview,//选择时重置预览图
                setSelect:[0,0,200,200],//初始化时位置
                onSelect: function (c){ //选择时动态赋值，该值是最终传给程序的参数！
                    $('#x').val(c.x);//需裁剪的左上角X轴坐标
                    $('#y').val(c.y);//需裁剪的左上角Y轴坐标
                    $('#w').val(c.w);//需裁剪的宽度
                    $('#h').val(c.h);//需裁剪的高度
              }
            });
            //提交裁剪好的图片
            $('.save-pic').click(function(){
                if($('#preview-hidden').html() == ''){
                    $.ThinkBox.error('请先上传图片！');
                }else{
                    //由于GD库裁剪gif图片很慢，所以长时间显示弹出框
                    $.ThinkBox.success('图片处理中，请稍候……',{'delayClose':30000});
                    $('#pic').submit();
                }
            });
            //重新上传,清空裁剪参数
            var i = 0;
            $('.reupload-img').click(function(){
                $('#preview-hidden').find('*').remove();
                $('#preview-hidden').hide().addClass('hidden').css({'padding-top':0,'padding-left':0});
            });
         }
    });
    //预览图
    function showPreview(coords){
        var img_width = $('#cropbox').width();
        var img_height = $('#cropbox').height();
          //根据包裹的容器宽高,设置被除数
          var rx = 100 / coords.w;
          var ry = 100 / coords.h;
          $('#crop-preview-100').css({
            width: Math.round(rx * img_width) + 'px',
            height: Math.round(ry * img_height) + 'px',
            marginLeft: '-' + Math.round(rx * coords.x) + 'px',
            marginTop: '-' + Math.round(ry * coords.y) + 'px'
          });
          rx = 60 / coords.w;
          ry = 60 / coords.h;
          $('#crop-preview-60').css({
            width: Math.round(rx * img_width) + 'px',
            height: Math.round(ry * img_height) + 'px',
            marginLeft: '-' + Math.round(rx * coords.x) + 'px',
            marginTop: '-' + Math.round(ry * coords.y) + 'px'
          });
    }


})
</script>
</body>
</html>
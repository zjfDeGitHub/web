<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/index\view\user\login.html";i:1542536019;}*/ ?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>江西外语外贸职业学院答题系统</title>
<link rel="stylesheet" type="text/css" href="/tp5/public/static/index/css/style2.0.css">
<style type="text/css">
	ul li{font-size: 30px;color:#2ec0f6;}
	.tyg-div{z-index:-1000;float:left;position:absolute;left:5%;top:20%;}
	.tyg-p{
		font-size: 14px;
	    font-family: 'microsoft yahei';
	    position: absolute;
	    top: 135px;
	    left: 60px;
	}
	.tyg-div-denglv{
		z-index:1000;float:right;position:absolute;right:3%;top:10%;
	}
	.tyg-div-form{
		background-color: #23305a;
		width:300px;
		height:auto;
		margin:120px auto 0 auto;
		color:#2ec0f6;
	}
	.tyg-div-form form {padding:10px;}
	.tyg-div-form form input[type="text"]{
		width: 270px;
	    height: 30px;
	    margin: 25px 10px 0px 0px;
	}
    .tyg-div-form form input[type="password"]{
        width: 270px;
        height: 30px;
        margin: 25px 10px 0px 0px;
    }
	.tyg-div-form form button {
	    cursor: pointer;
	    width: 270px;
	    height: 44px;
	    margin-top: 25px;
	    padding: 0;
	    background: #2ec0f6;
	    -moz-border-radius: 6px;
	    -webkit-border-radius: 6px;
	    border-radius: 6px;
	    border: 1px solid #2ec0f6;
	    -moz-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    -webkit-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
	    font-size: 14px;
	    font-weight: 700;
	    color: #fff;
	    text-shadow: 0 1px 2px rgba(0,0,0,.1);
	    -o-transition: all .2s;
	    -moz-transition: all .2s;
	    -webkit-transition: all .2s;
	    -ms-transition: all .2s;
}
</style>
<body>
<div class="tyg-div">
	<ul>
    	<li>让</li>
    	<li><div style="margin-left:20px;">知</div></li>
    	<li><div style="margin-left:40px;">识</div></li>
    	<li><div style="margin-left:60px;">改</div></li>
    	<li><div style="margin-left:80px;">变</div></li>
    	<li><div style="margin-left:100px;">生</div></li>
    	<li><div style="margin-left:120px;">活</div></li>
    </ul>
</div> 
<div id="contPar" class="contPar">
	<div id="page1"  style="z-index:1;">
		<div class="title0">江西外语外贸职业学院实验答题平台</div>
		<div class="title1">CTF、答题、信息安全、大数据</div>
		<div class="imgGroug">
			<ul>
				<img alt="" class="img0 png" src="/tp5/public/static/index/images/page1_0.png">
				<img alt="" class="img1 png" src="/tp5/public/static/index/images/page1_1.png">
				<img alt="" class="img2 png" src="/tp5/public/static/index/images/page1_2.png">
			</ul>
		</div>
		<img alt="" class="img3 png" src="/tp5/public/static/index/images/page1_3.jpg">
	</div>
</div>
<div class="tyg-div-denglv">
	<div class="tyg-div-form">
		<form action="<?php echo url('User/index'); ?>" method="post">
			<h2>登录</h2><p class="tyg-p">欢迎访问  实验答题系统</p>
			<div style="margin:5px 0px;">
				<input required="required" type="text" name="username" placeholder="请输入账号..."/>
			</div>
			<div style="margin:5px 0px;">
				<input required="required" type="password" name="password" placeholder="请输入密码..."/>
			</div>
			<div style="margin:5px 0px;">
				<input required="required" name="code"  type="text" style="float:left;width:120px;" placeholder="请输入验证码..."/>
				<img style="vertical-align:bottom;float:left;margin-top: 27px" width="120px" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"/>
			</div>
			<div style="margin:5px 0px;">
				<a style="text-align: right;float: right;color: white;margin-top: 10px" href="<?php echo url('User/register'); ?>">没有账号？现在去注册</a>
			</div>

			<button type="submit" >登<span style="width:20px;"></span>录</button>
		</form>
	</div>
</div>

<script type="text/javascript" src="/tp5/public/static/index/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/tp5/public/static/index/js/com.js"></script>
<!--[if IE 6]>
<script language="javascript" type="text/javascript" src="/tp5/public/static/index/script/ie6_png.js"></script>
<script language="javascript" type="text/javascript">
DD_belatedPNG.fix(".png");
</script>
<![endif]-->


</body>
</html>
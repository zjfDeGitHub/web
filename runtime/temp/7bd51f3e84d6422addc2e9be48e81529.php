<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/index\view\user\registers.html";i:1542272325;}*/ ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.passwordaa{
			-webkit-flex-basis: 90%;
			flex-basis:90%;
			color:#fff;
			padding: 11px 12px;
			border:1px solid #fff;
			box-sizing: border-box;
			outline: none;
			letter-spacing: 1px;
			font-size:14px;
			font-weight:700;
			background:rgba(23, 16, 16, 0.61);
			font-family: 'Source Sans Pro', sans-serif;
		}
	</style>
	<title>用户注册</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="/tp5/public/static/index/css/style1.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- font-awesome icons-agile -->
	<link rel="stylesheet" href="/tp5/public/static/index/css/font-awesome.min.css" />

	<!-- //font-awesome icons-agile -->
	<!-- <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
</head>

<body>

	<h1 class="header-w3ls">
		实验答题系统</h1>
	<div class="appointment-w3">
		<form action="#" method="post">
				<h2>欢迎注册</h2>
                  <div class="line-w3ls"> </div>
                  <form action="<?php echo url('User/register'); ?>" method="post">
				<div class="login-w3ls">
					<div class="icons-agile">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" name="username" placeholder="用户名" required="">

						<div class="clear"></div>
					</div>

					<div class="icons-agile">
						<span class="fa fa-unlock-alt" aria-hidden="true"></span>
						<input type="password" class="passwordaa" id="password" name="password" placeholder="密码" required="">

						<div class="clear"></div>
					</div>

					<div class="icons-agile">
						<span class="fa fa-unlock-alt" aria-hidden="true"></span>
						<input type="password" id="confirmPassword"  class="passwordaa" placeholder="确认密码" required="" style="">
						
						<div class="clear"></div>
					</div>

					<div id="confirm" style="display:none;margin-top:-30px">
						
					
						
						
					</div>
				
				<div  class="icons-agile" >
						<span class="fa fa-comments-o" aria-hidden="true"></span>
						<input type="text" name="class" placeholder="请输入班级" required="">

						<div class="clear"></div>
					</div>

					<div class="icons-agile" style="margin-top:30px;">
						<span class="fa fa-male" aria-hidden="true"></span>
						<select class="form-control buttom" name="sex">
													<option value="男">男</option>
													<option value="女">女</option>
													
									
												</select>

					</div>
					<div class="clear"></div>

					
					
					<div class="btnn">
						<input type="submit" value="Submit">
					</div>
				</div>
		</form>
	</div>
		</form>
	<div class="copy">
		
	</div>
	<script type='text/javascript' src='/tp5/public/static/index/js/jquery-2.2.3.min.js'></script>
	
</body>

</html>

<script>
    $("#confirmPassword").blur(function(){

        var password =$("#password").val();
        var confirmPassword=$("#confirmPassword").val();
        if(password != confirmPassword)
        {
            $("#confirm").html("两次输入密码不一致!").css("color","red").css("display","block");
        }

         $("#password").focus(function(){


            $("#confirm").html("").removeAttr("style");


    })
    })

   

</script>
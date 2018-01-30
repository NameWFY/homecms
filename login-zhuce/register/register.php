<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<base href="/home/">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	{include file='common/header'}
<!--//header-->
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>注册</h3>
		<div class="login-top">
			
				<div class="form-info">
					<form action="{:url('register/register_do')}" method='post'>
						<input type="text"  name="lan_name" placeholder="Name" required="" >

						<input type="Password" name="lan_pwd" placeholder="Password " required="required">
						<input type="phone"  name='lan_phone'  placeholder="phone " required="required"><br/>
						<input type="Email"  name="lan_email" placeholder="Email Adress" required="required" ><br/>
						
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="提交">
				           </label>
					</form>
					<p>Already have a Real Home account? <a href="{:url('login/login')}">登录</a></p>
				</div>
			
	</div>
</div>
</div>
<!--//contact-->
<!--footer-->
{include file='common/footer'}
<!--//footer-->
</body>
</html>



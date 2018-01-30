<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
		
		<h3>登录</h3>
	
		<div class="login-top">
				
				<div class="form-info">
					<form>
						<input type="text" class='lan_name' class="text" placeholder="username" required="">
						<input type="password" class="lan_pwd" placeholder="Password" required="">
						 <label class="hvr-sweep-to-right">
				           	<input type="button" value="登录" id="sub">
				           </label>
					</form>
				</div>
			<div class="create">
				<h4>New To Real Home?</h4>
				<a class="hvr-sweep-to-right" href="{:url('register/register')}">注册</a>
				<div class="clearfix"> </div>
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
<script>
  	$(document).on("click",'#sub',function(){
   		var name=$('.lan_name').val();
   		var pwd=$('.lan_pwd').val();
   		$.ajax({
   			url:"{:url('Login/login_do')}",
   			data:{name:name,pwd:pwd},
   			dataType:'json',
   			type:"post",
   			success:function(res){
   				//alert($res);
   				if(res.msg=='0'){
		            alert('登录成功');location.href="{:url('index/index')}";
		        }else if(res.msg=='1'){
		            alert('登录失败');return;
		        }
   			}
   		})
 	})
</script>
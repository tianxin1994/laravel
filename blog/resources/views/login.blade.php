<html>
	<head>
		<title>login</title>
	</head>
	<body>
		<div style="display: <?php if(isset($su)){echo "block";}else{echo "none";} ?>;">注册成功</div>
		<form action="indexx" method="post">
			<h3>用户登录</h3>
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			用户名称：<input type="text" name="name" /><br />
			用户密码：<input type="password" name="pwd" /><br />
			<input type="submit" value="登录" />
		</form>
		<label><?php if(isset($er)){echo "密码输入错误！";} ?></label>
	</body>
</html>
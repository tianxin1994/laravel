<html>
	<head>
		<title>storeSecret</title>
	</head>
	<body>
	  
		<form action="{{url('secret')}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			用户名称：<input type="text" name="name" /><br />
			用户密码：<input type="password" name="pwd" /><br />
			<input type="submit" value="登录" />
		</form>
	</body>
</html>
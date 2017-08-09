<html>
	<head>
		<title>@yield('title')</title>
	</head>
	<body>
		<form action="inserting" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			姓名：<input type="text" name="name" /><br />
			性别：男<input type="radio" value="男" checked="checked" name="sex" />
				 女<input type="radio" value="女" name="sex" /><br />
			年龄：<input type="text" name="age" /><br />
			密码：<input type="text" name="pwd" /><br />
			<input type="submit" value="提交" />
		</form>
	</body>
</html>
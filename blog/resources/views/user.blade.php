<html>
	<head>
		<title>user</title>
	</head>
	<body>
		<h2>用户详细信息</h2>
		<b>姓名：</b><label>{{$data->name}}</label><br />
		<img src="../{{$data->picture}}" /><br />
		<b>电话：</b><label>{{$data->phonenum}}</label><br />
		<b>密码：</b><label>{{$data->pwd}}</label><br />
	</body>
</html>